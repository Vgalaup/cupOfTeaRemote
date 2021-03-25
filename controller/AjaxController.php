<?php

require_once 'models/User.php';
require_once 'controller/FormController.php';

class AjaxController {
    
    
    public function changePassword(array $data)
    {
        $form = new FormController(new User());
        $message = $form->formNewPass($data);
        return $message;
    }

    public function formUpInfo(array $data) 
    {
        $form = new FormController(new User());
        $message = $form->formUpInfo($data);
        return $message;
    }
    
}