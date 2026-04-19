<?php
$currentPage = "Typography";
include "assets/inc/head.php";
include('../../../dbConn.php');

$user_id = intval($_GET['user_id']);
$quiz_id = intval($_GET['quiz_id']);
$user_q = mysqli_query($mysqli, "SELECT name FROM users WHERE id = $user_id");
$user_data = mysqli_fetch_assoc($user_q);
?>

<body>
    <?php include "assets/inc/nav.php"; ?>
    <main>
        <section class="medium">
            <div class="quiz-container">
                <h2 class="quiz-title"><?php echo $user_data['name']; ?>'s Quiz Review</h2>
                <div class="quiz-inner-container">
                    <?php
                    $q_query = mysqli_query($mysqli, "SELECT * FROM questions WHERE quiz_id = $quiz_id");
                    $q_num = 1;
                    $total_q = mysqli_num_rows($q_query);
                    while($q = mysqli_fetch_assoc($q_query)) {
                        $qid = $q['id'];
                        $user_ans_q = mysqli_query($mysqli, "SELECT answer_id FROM user_answers WHERE user_id = $user_id AND question_id = $qid");
                        $user_ans_data = mysqli_fetch_assoc($user_ans_q);
                        $user_choice = $user_ans_data['answer_id'];
                    ?>
                        <div class="quiz-review" style="margin-bottom: 40px;">
                            <p class="question-count">Question <?php echo $q_num; ?> of <?php echo $total_q; ?>:</p>
                            <p class="question-text" style="font-size: 1.2rem;"><?php echo $q['question_prompt']; ?></p>
                            <div class="answers-list">
                                <?php 
                                $a_query = mysqli_query($mysqli, "SELECT * FROM answers WHERE question_id = $qid");
                                while($opt = mysqli_fetch_assoc($a_query)) {
                                    $rowClass = "answer-row";
                                    $tag = ""; $icon = "";
                                    if($opt['is_correct'] == 1) {
                                        $rowClass .= " correct-row";
                                        $tag = "Correct Answer";
                                        $icon = "&#x2713;";
                                    } 
                                    if($opt['id'] == $user_choice && $opt['is_correct'] == 0) {
                                        $rowClass .= " wrong-row";
                                        $tag = "Your Answer";
                                        $icon = "&#x2717";
                                    }
                                    if($opt['id'] == $user_choice && $opt['is_correct'] == 1) {
                                        $tag = "Your Answer"; 
                                    }
                                ?>
                                    <div class="<?php echo $rowClass; ?>">
                                        <span class="icon"><?php echo $icon; ?></span>
                                        <span class="dot"></span>
                                        <span class="text"><?php echo $opt['answer']; ?></span>
                                        <?php if($tag): ?><span class="status-tag"><?php echo $tag; ?></span><?php endif; ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    <?php $q_num++; } ?>
                    
                    <div style="text-align: center;">
                         <a href="quiz.php?quiz_id=<?php echo $quiz_id; ?>" class="button-action">Try Again</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include "assets/inc/footer.php"; ?>
    <script src="assets/js/menu.js"></script>
    <script src="assets/js/quiz_button.js"></script>
</body>
</html>