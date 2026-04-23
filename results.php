<?php
$currentPage = "Typography";
include "assets/inc/head.php";
include('../../../dbConn.php');
$name_Err = "";
function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user_name = trim($_POST['user_name'] ?? '');
    $quiz_id = intval($_POST['quiz_id'] ?? 0);

    $user_name = test_input($user_name);
    if(empty($user_name)){
        $name_Err = "Name is required!";
    }elseif(!preg_match("/^[a-zA-Z-' ]*$/", $user_name)){
            $name_Err = "Only letters and white space allowed";
    }
    if(empty($name_Err)){
        $user_name = mysqli_real_escape_string($mysqli, $user_name);
    }else{
        header("Location: quiz.php?quiz_id=$quiz_id&error=name");
        exit;
    }
}  

mysqli_query($mysqli, "INSERT INTO users(name) VALUES ('$user_name')");
$user_id = mysqli_insert_id($mysqli);
$score = 0;
$total = 0;
foreach($_POST as $key => $value){
    if(strpos($key, 'question_') === 0){
        $question_id = str_replace('question_', '', $key);
        $answer_id = intval($value);
        $total++;
        mysqli_query($mysqli, "INSERT INTO user_answers (user_id, question_id, answer_id) VALUES ($user_id,$question_id, $answer_id)");
        $check_result = mysqli_query($mysqli,"SELECT is_correct FROM answers WHERE id = $answer_id");
        $fetch = mysqli_fetch_assoc($check_result);

        if ($fetch && $fetch['is_correct'] == 1){
            $score++;
        }
    }
}
mysqli_query($mysqli, "INSERT INTO user_results(user_id, quiz_id, score) VALUES ($user_id, $quiz_id, $score)");
$percent = ($total > 0)? round(($score / $total) * 100):0;
$message = ($percent < 50) ? "Well, you have a lot of studying to do!": "Great job!";
?>
<body>
    <?php include "assets/inc/nav.php";?>
    <main>
        <section class="medium container">
            <div class="quiz-container">
                <h2 class="quiz-title">Quiz Results </h2>
                <div class="quiz-inner-container" style="text-align: center; padding:40px;">
                    <h3>Results: </h3>
                    <p style="font-size: 2rem;"><strong><?php echo "Score: $percent%"; ?></strong></p>
                    <p><?php echo "$message"; ?></p>
                    <div class="result-buttons" style="margin-top: 30px; display:flex; justify-content:center;gap:10px;">
                        <a href="check_answers.php?user_id=<?php echo $user_id; ?>&quiz_id=<?php echo $quiz_id; ?>" class="button-action"> Check your answers</a>
                        <a href="quiz.php?quiz_id=<?php echo $quiz_id; ?>" class="button-action">Try Again</a>
                    </div>
                </div>
            </div>
        </section>  
    </main>     
    <?php include "assets/inc/footer.php";?>
    <script src="assets/js/menu.js"></script>
<script src="assets/js/quiz_button.js"></script>
</body>
</html>
