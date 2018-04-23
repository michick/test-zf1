<?php

class GuestbookController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
//        die('in the controller');
        $mapper = new Application_Model_GuestbookMapper();
        $this->view->entries = $mapper->fetchAll();
    }


}

