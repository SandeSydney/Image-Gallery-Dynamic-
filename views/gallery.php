<?php
//Image gallery view page

return showImages();

function showImages()
{
    $out = "<h>Image Gallery</h>";
    $out .= "<ul id='images'>";
    $folder = "img";
    $filesInFolder = new DirectoryIterator($folder);

    //loop through the folder
    while ($filesInFolder->valid()) {
        $file = $filesInFolder->current();
        $filename = $file->getFileName();
        $src = "$folder/$filename";
        $fileInfo = new Finfo(FILEINFO_MIME_TYPE);
        $mimeType = $fileInfo->file($src);

        if ($mimeType === 'image/jpeg') {
            $out .= "<li><img src='$src' /></li>";
        }
        $filesInFolder->next();
    }

    $out .= "</ul>";
    return $out;
}