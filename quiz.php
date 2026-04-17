<?php
$currentPage = "Quiz";
include "assets/inc/head.php";
include('../../../dbConn.php');

$quiz_id = $_GET['quiz_id'] ?? 1;
$quiz_title = "SELECT * FROM quiz WHERE id=$quiz_id";
$quiz_results = mysqli_query($mysqli, $quiz_title);
$quiz = mysqli_fetch_assoc($quiz_results);

$questions_fetch = "SELECT * FROM questions WHERE quiz_id = $quiz_id";
$questions_results = mysqli_query($mysqli, $questions_fetch);
?>

<body>
    <?php
    $currentPage = "Quiz";
    include "assets/inc/nav.php";
    ?>
<main>
    <section class="medium" style="background-color: var(--meteor)">
        <div class="quiz-container">
            <h2><?php echo $quiz['quiz_title']; ?></h2>
            <form method="POST" action="results.php" id="quiz-form">
                <div class="users-name">
                    <label>Name: <input type="text" name="user_name" required></label>
                </div>
                <div class="quiz-inner-container">
                    <?php
                    $question_num = 1;
                    $total_questions = mysqli_num_rows($questions_results);
                    while($question = mysqli_fetch_assoc($questions_results)){
                        $display = ($question_num === 1) ? 'block' : 'none';
                    ?>
                        <div class="question-container" id="step-<?php echo $question_num; ?>" style="display: <?php echo $display; ?>;">
                            <p class="question-num">Question <?php echo $question_num; ?> of <?php echo $total_questions;?>:</p>
                            <p class="question-prompt"><?php echo $question['question_prompt']; ?></p>
                            <div class="answers">
                                <?php 
                                    $answers_fetch = "SELECT * FROM answers WHERE question_id = " . $question['id'];
                                    $answers_result = mysqli_query($mysqli, $answers_fetch);
                                    while($answer = mysqli_fetch_assoc($answers_result)){
                                        ?>
                                        <label class="answer-choice">
                                            <input type="radio" name="question_<?php echo $question['id']; ?>" value="<?php echo $answer['id']; ?>" required>
                                            <span class="radio-css"></span>
                                            <?php echo $answer['answer'];?>
                                        </label>
                                <?php } ?>
                            </div>
                        <div class="quiz-buttons">
                            <?php if ($question_num < $total_questions): ?>
                                <button type="button" class="next-button" onclick="nextStep(<?php echo $question_num; ?>)"> Next </button>
                            <?php else: ?>
                                <button type="submit" class="submit-button">Submit Quiz</button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php 
                    $question_num++;}?>
                </div>
                <input type="hidden" name="quiz_id" value="<?php echo $quiz_id; ?>">
                </form>
            </div>
        </section>
</main>
<?php
    include "assets/inc/footer.php";
	mysqli_close($mysqli);
?>
<script src="assets/js/menu.js"></script>
<script src="assets/js/quiz_button.js"></script>
</body>
</html>