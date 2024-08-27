<?php

require "helpers.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
}

// Supply the missing code
$complete_name = $_POST['complete_name'];
$email = $_POST['email'];
$birth = $_POST['birthdate'];
$time = strtotime($birth);
$birthdate = date('F j, Y', $time);
$contact_number = $_POST['contact_number'];
$agree = $_POST['agree'];
$answer1 = $_POST['answer1'] ?? 'N/A';
$answer2 = $_POST['answer2'] ?? 'N/A';
$answer3 = $_POST['answer3'] ?? 'N/A';
$answer4 = $_POST['answer4'] ?? 'N/A';
$answer5 = $_POST['answer5'] ?? 'N/A';

$question1 = get_question(1);
$question2 = get_question(2);
$question3 = get_question(3);
$question4 = get_question(4);
$question5 = get_question(5);

$correctAnswers = get_answers();
// $answers = $_POST['answers'] ?? null;
// if (!is_null($answer)) {
//     $answers .= $answer;
// }
$answers = [$answer1, $answer2, $answer3, $answer4, $answer5];
// Use the compute_score() function from helpers.php
$score = compute_score($answers);
?>
<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #3A</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/confetti-js@0.0.18/site/site.min.css">
    <script src="https://cdn.jsdelivr.net/npm/confetti-js@0.0.18/dist/index.min.js"></script>
</head>
<body>
<section class="hero <?php if($score >= 3){echo "is-success";}else{echo "is-danger";}?>">
    <div class="hero-body">
        <p class="title">Your Score is <?php echo $score; ?></p>
        <p class="subtitle">This is the IPT10 PHP Quiz Web Application Laboratory Activity.</p>
    </div>
</section>
<section class="section">
    <div class="table-container">
        <table class="table is-bordered is-hoverable is-fullwidth">
            <tbody>
                <tr>
                    <th>Input Field</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>Complete Name</td>
                    <td><?php echo $complete_name; ?></td>
                </tr>
                <tr class="is-selected">
                    <td>Email</td>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
                    <td>Birthdate</td>
                    <td><?php echo $birthdate; ?></td>
                </tr>
                <tr>
                    <td>Contact Number</td>
                    <td><?php echo $contact_number; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <canvas id="confetti-canvas"></canvas>
</section>
<section class="section">
    <div class="table-container">
        <table class="table is-bordered is-hoverable is-fullwidth">
            <tbody>
                <tr>
                    <th>Item no.</th>
                    <th>Question</th>
                    <th>Correct Answer</th>
                    <th>Your Answer</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><?php echo $question1['question']; ?></td>
                    <td><?php echo $correctAnswers[0]; ?></td>
                    <td><?php echo $answer1; ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><?php echo $question2['question']; ?></td>
                    <td><?php echo $correctAnswers[1]; ?></td>
                    <td><?php echo $answer2; ?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><?php echo $question3['question']; ?></td>
                    <td><?php echo $correctAnswers[2]; ?></td>
                    <td><?php echo $answer3; ?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><?php echo $question4['question']; ?></td>
                    <td><?php echo $correctAnswers[3]; ?></td>
                    <td><?php echo $answer4; ?></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><?php echo $question5['question']; ?></td>
                    <td><?php echo $correctAnswers[4]; ?></td>
                    <td><?php echo $answer5; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <canvas id="confetti-canvas"></canvas>
</section>

<script src="scripts.js"></script>
<script>
var confettiSettings = {
    target: 'confetti-canvas'
};
var confetti = new ConfettiGenerator(confettiSettings);


<?php
if($score == 5){
    echo "confetti.render();";
}
?>
</script>
</body>
</html>