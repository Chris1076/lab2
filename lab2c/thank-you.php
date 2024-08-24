<?php

require "helpers/helper-functions.php";

session_start();

$email = $_POST['email'];
$pass = $_POST['password'];
$password = hash('sha1', $pass);
$agree = $_POST['agree'];
$year = getdate();

$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
$_SESSION['agree'] = $agree;
$_SESSION['age'] = $year['year'] - $_SESSION['birthyear'];

$form_data = $_SESSION;

$entry = array(array($_SESSION['fullname'], $_SESSION['birthdate'], $_SESSION['age'], $_SESSION['contact_number'],
  $_SESSION['sex'], $_SESSION['program'], $_SESSION['address'], $_SESSION['email']
));
$file = fopen('registration.csv', 'w');

foreach($entry as $fields){
    fputcsv($file, $fields);
}

fclose($file);

dump_session();

session_destroy();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #2</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
    <link rel="stylesheet" href="https://assets.ubuntu.com/v1/vanilla-framework-version-4.15.0.min.css" />   
</head>
<body>

<section class="p-section--hero">
  <div class="row--50-50-on-large">
    <div class="col">
      <div class="p-section--shallow">
        <h1>
          Thank You Page
        </h1>
      </div>
      <div class="p-section--shallow">
      
        <table aria-label="Session Data">
            <thead>
                <tr>
                    <th></th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($form_data as $key => $val):
            ?>
                <tr>
                    <th><?php echo $key; ?></th>
                    <td>
                      <?php echo $val; ?>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
            </tbody>
        </table>
      

      </div>
    </div>
  </div>
</section>

</body>
</html>