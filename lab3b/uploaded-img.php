<?php
if (isset($_FILES['img_file'])) {
$upload_directory = getcwd() . '/uploads/';
$relative_path = '/uploads/';

// Handle Text File
$file_name = $_FILES['img_file']['name'];
$uploaded_image_file = $upload_directory . basename($file_name);
$temporary_file = $_FILES['img_file']['tmp_name'];
$server_path = $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"] . $relative_path . basename($file_name);
}?>

<html>
  <head>
    <title>IPT Lab Activity 3b</title>
  </head>
  <body>
    <h1>Image via img tag</h1>
<?php
if (move_uploaded_file($temporary_file, $uploaded_image_file)) {
    $correct_directory = str_replace('\\', '/', $server_path);
    $text_file_content = file_get_contents($uploaded_image_file, 'r');
    ?>
    <img src="<?php echo "http://$correct_directory";?>" alt="<?php echo "$file_name";?>">
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