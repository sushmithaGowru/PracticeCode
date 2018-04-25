<?php
class Error extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $this->view->title='404 Error';
        $this->view->msg="this page does not exist";
        $this->view->render('header');
        $this->view->render('error/index');
        $this->view->render('footer');
    }
}