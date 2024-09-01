<?php

$upload_directory = getcwd() . '/uploads/';
$relative_path = '/uploads/';

// Handle Text File
$uploaded_text_file = $upload_directory . basename($_FILES['text_file']['name']);
$temporary_file = $_FILES['text_file']['tmp_name'];
$server_path = $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"] . $relative_path . basename($file_name);
?>

<html>
  <head>
    <title>IPT Lab Activity 3b</title>
  </head>
  <body>
    <h1>Text Filue Uploaded</h1>

<?php
if (move_uploaded_file($temporary_file, $uploaded_text_file)) {
    $correct_directory = str_replace('\\', '/', $server_path);
    $text_file_content = file_get_contents($correct_directory, 'r');
    ?>
    <textarea cols="70" rows="30"><?php echo $text_file_content; ?></textarea>
    <?php
} else {
    echo 'Failed to upload file';
}


echo '<pre>';
var_dump($_FILES);
exit;
?>

</body>
</html>