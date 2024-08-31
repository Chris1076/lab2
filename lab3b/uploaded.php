<?php
if (isset($_FILES['audio_file'])) {
$upload_directory = getcwd() . '/uploads/';
$relative_path = '/uploads/';

// Handle Text File
$file_name = $_FILES['audio_file']['name'];
$uploaded_text_file = $upload_directory . basename($file_name);
$temporary_file = $_FILES['audio_file']['tmp_name'];
}?>

<html>
  <head>
    <title>PDF Example by Object Tag</title>
  </head>
  <body>
    <h1>PDF Example by Object Tag</h1>
<?php
if (move_uploaded_file($temporary_file, $uploaded_text_file)) {
    $text_file_content = file_get_contents($uploaded_text_file, 'r');
    ?>
    <object data="<?php echo $uploaded_text_file;?>" type="application/pdf" width="100%" height="500px">
    <p>Unable to display PDF file. <a href="<?php echo $uploaded_text_file;?>" target="_blank" download>Download</a> instead.</p>
    <?php
} else {
    echo '<p>Failed to upload file</p>';
}
?>
 </object>
  </body>
</html>
<!-- echo '<pre>';
var_dump($_FILES);
exit; -->