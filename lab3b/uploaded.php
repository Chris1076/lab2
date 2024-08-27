<?php
if (isset($_FILES['pdf_file'])) {
$upload_directory = getcwd() . '/uploads/';
$relative_path = '/uploads/';

// Handle Text File
$file_name = $_FILES['jpg_file']['name'];
$uploaded_text_file = $upload_directory . basename($_FILES['pdf_file']['name']);
$temporary_file = $_FILES['pdf_file']['tmp_name'];
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
    <object data="<?php ?>" type="application/pdf" width="100%" height="500px">
    <?php
} else {
    echo 'Failed to upload file';
}
?>
 </object>
  </body>
</html>
<!-- echo '<pre>';
var_dump($_FILES);
exit; -->