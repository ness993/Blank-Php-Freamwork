<?php

class Home extends Controler{

    public function __construct($controller, $action){
        parent::__construct($controller, $action);
    }
    public function indexAction(){  
        $db = DB::getInstance();
        $conditions= $db->find('contacts',[
            'conditions' => ['lname' => '?'],
            'bind' => ['Horvat'],
            'order' => "lname , fname",
            'limit' => 5
            ]);      
    
        dnd($conditions);
        $this->view->render('home/index');
    }

} 