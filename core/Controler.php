<?php
require_once('Application.php');
class Controler extends Application{

    protected $_controler, $_action;
    public $view;


    public function __construct($controler, $action){
        parent::__construct();
        $this->_controler = $controler;
        $this->_action = $action;
        $this->view = new View();
    }

    



}