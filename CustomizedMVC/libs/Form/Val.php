<?php
class Val
{
    public function __construct()
    {
    }
    public function minlength($data,$arg)
    {
        if (strlen($data)<$arg)
        {
            return "Your string can only be $arg long";
        }
    }
    public function maxlength($data,$arg)
    {
        if (strlen($data)>$arg)
        {
            return "Your string can only be $arg long";
        }
    }
    public function digit($data)
    {
        if (ctype_digit($data)==false)
        {
            return "Your string must be a digit";
        }

    }
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        throw new Exception("$name does not exists inside of:".__CLASS__);
    }
}