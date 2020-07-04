<?php

//Page view for Uploading Images

//confirm submission of new image
$newImageSubmitted = isset($_POST['new-image']);
if ($newImageSubmitted) {
    $output = upload(); //runs if true
}else{
    $output = include_once "views/upload-form.php";
}

return $output;

//function to upload photo
function upload()
{
    //import a class to use
    include_once "classes/Uploader.class.php";

    $uploader = new Uploader("image-data");
    $uploader->saveIn("img");

    //confirm the success of the upload
    $fileUploaded = $uploader->save();
    if ($fileUploaded) {
        $out = "A new file has been uploaded";
    } else {
        $out = "something went terribly wrong";
    }

    return $out;
}