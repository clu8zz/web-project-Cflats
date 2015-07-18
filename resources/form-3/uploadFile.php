<?php
                
    $targetPath = "/home/ubuntu/workspace/cflats/campus-flats/RentersWeb/uploads/";  //4
    if ($_FILES['upload']['name']) {
    $uploadedUrl = $targetPath . $_FILES['upload']['name'];
    move_uploaded_file($_FILES['upload']['tmp_name'], $uploadedUrl);
}
?>