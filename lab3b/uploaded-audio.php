<?php
if (isset($_FILES['audio_file'])) {
$upload_directory = getcwd() . '/uploads/';
$relative_path = '/uploads/';

// Handle Text File
$file_name = $_FILES['audio_file']['name'];
$uploaded_audio_file = $upload_directory . basename($file_name);
$temporary_file = $_FILES['audio_file']['tmp_name'];
$server_path = $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"] . $relative_path . basename($file_name);
}?>

<html>
  <head>
    <title>IPT Lab Activity 3b</title>
  </head>
  <body>
    <h1>Audio file via audio tag</h1>
<?php
if (move_uploaded_file($temporary_file, $uploaded_audio_file)) {
    $correct_directory = str_replace('\\', '/', $server_path);
    // $text_file_content = file_get_contents($uploaded_text_file, 'r');
    ?>
    <audio controls autoplay name="media">
      <source src="<?php echo "http://$correct_directory";?>" type="audio/mpeg">
      Your browser does not support the audio element.
    </audio>
    <?php
} else {
    echo '<p>Failed to upload file</p>';
}
?>
  </body>
</html>
<!-- echo '<pre>';
var_dump($_FILES);
exit; -->