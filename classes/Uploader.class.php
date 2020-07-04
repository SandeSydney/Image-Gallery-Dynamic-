<?php

class Uploader
{
    //class properties
    private $filename;
    private $fileData;
    private $destination;

    //constructor method to run once whenever new Uploader object is created
    public function __contruct($key)
    {
        $this->filename = $_FILES[$key]['name'];
        $this->fileData = $_FILES[$key]['tmp_name'];
    }

    //method to set folder to hold the saved file
    public function saveIn($folder)
    {
        $this -> destination = $folder;
    }

    //methid to save the file
    public function save()
    {
        //comfirm if the folder you wanna save can be written to
        $folderIsWriteAble = is_writable($this->destination);
        if ($folderIsWriteAble) {
            $name = "$this->destination/$this->filename";
            $success = move_uploaded_file($this->fileData, $name); 
            //file uploaded and saved if folder is writable
        } else {
            trigger_error("Cannot write to $this->destination");
            $success = false;
        }
        return $success;
    }
}