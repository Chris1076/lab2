<?php

require "helpers.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
}

// Supply the missing code
$complete_name = $_POST['completename'];
$email = $_POST['email'];
$birthdate = $_POST['birthdate'];
$contact_number = $_POST['contact_number'];
$agree = $_POST['agree'];
$answer1 = $_POST['answer1'] ?? 'O';
$answer2 = $_POST['answer2'] ?? 'O';
$answer3 = $_POST['answer3'] ?? 'O';
$answer4 = $_POST['answer4'] ?? 'O';
$answer5 = $_POST['answer5'] ?? 'O';

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