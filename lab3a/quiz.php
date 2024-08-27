<?php

require "helpers.php";

# from the $_SERVER global variable, check if the HTTP method used is POST, if its not POST, redirect to the index.php page
# Reference: https://www.php.net/manual/en/reserved.variables.server.php

// Supply the missing code
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
}

// Supply the missing code
$complete_name = $_POST['complete_name'];
$email = $_POST['email'];
$birthdate = $_POST['birthdate'];
$contact_number = $_POST['contact_number'];
$agree = $_POST['agree'];


$answer = $_POST['answer'] ?? null;
$answers = $_POST['answers'] ?? null;
if (!is_null($answer)) {
    $answers .= $answer;
}

$questions = retrieve_questions();
$question1 = get_question(1);
$question2 = get_question(2);
$question3 = get_question(3);
$question4 = get_question(4);
$question5 = get_question(5);
// $current_question_number = get_current_question_number($answers);

$target = 'result.php';
// if ($current_question_number == MAX_QUESTION_NUMBER) {
//     $target = 'result.php';
// }

$options1 = get_options_for_question_number(1);
$options2 = get_options_for_question_number(2);
$options3 = get_options_for_question_number(3);
$options4 = get_options_for_question_number(4);
$options5 = get_options_for_question_number(5);
?>
<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #3A</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css" />
</head>
<!-- 60 seconds timer here -->
<body onload="timer()">
<section class="section">
    <h1 class="title">Question 1 / <?php echo MAX_QUESTION_NUMBER; ?></h1>
    <h2 class="subtitle">
        <?php echo $question1['question'] ?>
    </h2>

    <!-- Supply the correct HTTP method and target form handler resource -->

    <form method="POST" action="<?php echo $target; ?>">
        <input type="hidden" name="complete_name" value="<?php echo $complete_name; ?>" />
        <input type="hidden" name="email" value="<?php echo $email; ?>" />
        <input type="hidden" name="birthdate" value="<?php echo $birthdate; ?>" />
        <input type="hidden" name="contact_number" value="<?php echo $contact_number; ?>" />
        <input type="hidden" name="agree" value="<?php echo $agree; ?>" />
        <!--
        <input type="hidden" name="answers" />
        -->

        <!-- Display the options -->
        <?php foreach ($options1 as $choices): ?>
        <div class="field">
            <div class="control">
                <label class="radio">
                    <input type="radio"
                        name="answer1"
                        value="<?php echo $choices['key']; ?>" />
                        <?php echo $choices['value']; ?>
                </label>
            </div>
        </div>
        <?php endforeach; ?>
        <!-- Question 2 -->
        <h1 class="title">Question 2 / <?php echo MAX_QUESTION_NUMBER; ?></h1>
    <h2 class="subtitle">
        <?php echo $question2['question'] ?>
    </h2>
        <!-- Display the options -->
        <?php foreach ($options2 as $choices): ?>
        <div class="field">
            <div class="control">
                <label class="radio">
                    <input type="radio"
                        name="answer2"
                        value="<?php echo $choices['key']; ?>" />
                        <?php echo $choices['value']; ?>
                </label>
            </div>
        </div>
        <?php endforeach; ?>
        <!-- Question 3 -->
        <h1 class="title">Question 3 / <?php echo MAX_QUESTION_NUMBER; ?></h1>
    <h2 class="subtitle">
        <?php echo $question3['question'] ?>
    </h2>
        <!-- Display the options -->
        <?php foreach ($options3 as $choices): ?>
        <div class="field">
            <div class="control">
                <label class="radio">
                    <input type="radio"
                        name="answer3"
                        value="<?php echo $choices['key']; ?>" />
                        <?php echo $choices['value']; ?>
                </label>
            </div>
        </div>
        <?php endforeach; ?>
        <!-- Question 4 -->
        <h1 class="title">Question 4 / <?php echo MAX_QUESTION_NUMBER; ?></h1>
    <h2 class="subtitle">
        <?php echo $question4['question']; ?>
    </h2>
        <!-- Display the options -->
        <?php foreach ($options4 as $choices): ?>
        <div class="field">
            <div class="control">
                <label class="radio">
                    <input type="radio"
                        name="answer4"
                        value="<?php echo $choices['key']; ?>" />
                        <?php echo $choices['value']; ?>
                </label>
            </div>
        </div>
        <?php endforeach; ?>
        <!-- Question 5 -->
        <h1 class="title">Question 5 / <?php echo MAX_QUESTION_NUMBER; ?></h1>
    <h2 class="subtitle">
        <?php echo $question5['question']; ?>
    </h2>
        <!-- Display the options -->
        <?php foreach ($options5 as $choices): ?>
        <div class="field">
            <div class="control">
                <label class="radio">
                    <input type="radio"
                        name="answer5"
                        value="<?php echo $choices['key']; ?>" />
                        <?php echo $choices['value']; ?>
                </label>
            </div>
        </div>
        <?php endforeach; ?>
        <!-- Submit Quiz button -->
        <button type="submit" id="submitQuiz" class="button">Submit</button>
    </form>
</section>


</body>
</html>