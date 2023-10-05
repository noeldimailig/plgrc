<?php

class My_Upload extends CI_Upload
{

    public function __construct($config = array())
    {
        parent::__construct($config);
    }

    public function do_multi_upload($field)
    {
        $files = [];
        $errors = [];
        for ($i = 0; $i < count($_FILES[$field]['name']); $i++) {
            $_FILES['userFile']['name'] = $_FILES[$field]['name'][$i];
            $_FILES['userFile']['type'] = $_FILES[$field]['type'][$i];
            $_FILES['userFile']['tmp_name'] = $_FILES[$field]['tmp_name'][$i];
            $_FILES['userFile']['error'] = $_FILES[$field]['error'][$i];
            $_FILES['userFile']['size'] = $_FILES[$field]['size'][$i];

            if (!$this->do_upload('userFile')) {
                // $ret[$_FILES['userFile']['name']]['error'] = $this->display_errors();
                array_push($errors, $this->display_errors());
            } else {
                array_push($files, $this->data()['file_name']);

                // $ret[$_FILES['userFile']['name']]['success'] = $this->data();
            }
        }
        return ['files' => $files, 'errors' => $errors];
    }
}
