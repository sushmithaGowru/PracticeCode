<?php
class Index extends Controller
{
    function __construct()
    {
        parent::__construct();

    }
    function index()
    {

        //echo Hash::create('md5','shetty',HASH_PASSWORD_KEY);
        //echo Hash::create('sha256','shetty',HASH_PASSWORD_KEY);
        $this->view->title='Home';
        $this->view->render('header');
        $this->view->render('index/index');
        $this->view->render('footer');
    }
}
?>