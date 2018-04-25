<?php
class Controller
{
    function __construct()
    {
        //echo 'main controller<br>';
        $this->view=new View();
    }

    /**
     * @param string $name of the model
     * @param string $path location of the models
     */
    public function loadModel($name,$modelPath='models/'){
        $path=$modelPath.$name.'_model.php';
        if(file_exists($path)) {
            require $modelPath.$name.'_model.php';
            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }
    }
}