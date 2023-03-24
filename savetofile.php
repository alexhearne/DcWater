<?php
if (isset($_FILES['myFile'])) {
  
    move_uploaded_file($_FILES['myFile']['tmp_name'], "uploads/" . $_FILES['myFile']['name']);
    echo 'Picture Uploaded Successfully';
}
?>
