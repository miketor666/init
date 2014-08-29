<?php

class Controller {
    public $registeredActions = array('register', 'home');
    public $action;
    public $data;

    public function __construct($action, $data){
        $this->action = $action;
        $this->data = $data;
    }

    public function goToAction(){
        if(in_array($this->action, $this->registeredActions)){
            $this->loadModel();
        }
    }

    public function loadModel(){
        require_once('/models/'.$this->action.'.php');
        register($this->data);
    }
}