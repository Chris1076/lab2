<?php
if (isset($_FILES['video_file'])) {
$upload_directory = getcwd() . '/uploads/';
$relative_path = '/uploads/';

// Handle Text File
$file_name = $_FILES['video_file']['name'];
$uploaded_video_file = $upload_directory . basename($file_name);
$temporary_file = $_FILES['video_file']['tmp_name'];
$server_path = $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"] . $relative_path . basename($file_name);
}?>

<html>
  <head>
    <title>IPT Lab Activity 3b</title>
  </head>
  <body>
    <h1>Video File</h1>
<?php
if (move_uploaded_file($temporary_file, $uploaded_video_file)) {
    $correct_directory = str_replace('\\', '/', $server_path);
    // $text_file_content = file_get_contents($uploaded_video_file, 'r');
    ?>
    <video width="320" height="240" controls>
        <source src="<?php echo "http://$correct_directory";?>" type="video/mp4">
    Your browser does not support the video tag.
    </video>
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