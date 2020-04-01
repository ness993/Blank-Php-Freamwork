<?php

class Tools extends Controler{

    public function __construct($controlser, $action)
    {
        parent::__construct($controlser,$action);
        $this->view->setLayout('default');
    }

    public function indexAction()
    {
        $this->view->render('tools/index');
    }
    public function firstAction()
    {
        $this->view->render('tools/first');
    }
    public function secondAction()
    {
        $this->view->render('tools/second');
    }
    public function thirdAction()
    {
        $this->view->render('tools/third');
    }

}

