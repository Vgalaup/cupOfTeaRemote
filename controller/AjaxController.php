<?php

namespace CupOftea\controller;

Use CupOftea\models\User;
Use CupOftea\Controller\FormController;


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