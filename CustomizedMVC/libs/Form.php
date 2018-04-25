<?php

/**
 *
 * -Fill out a form
 *  -POST to PHP
 * -Sanitize
 *  -Validate
 * -Return Data
 * -Write to Database
 */
require 'Form/Val.php';
class Form
{
    /** @var array $_currentItem The immediately posted data */
    private $_currentItem=null;
    /** @var array $_postData The Posted data */
    private $_postData = array();
    /** @var object $_val The validator object */
    private $_val=array();
    /** @var array $_error Holds the current form errors*/
    private $_error=array();
    /**
     * __construct = Instantiates the validator class
     */
    public function __construct()
    {
        $this->_val=new Val();
    }

    /**
     * post-This is to run $_POST
     *
     * @param string $field-The HTML fieldname to post
     */
    public function post($field)
    {
       $this->_postData[$field]=$_POST[$field];
       $this->_currentItem=$field;
       return $this;
    }

    /**
     * fetch-Return the posted data
     *
     * @param mixed $fieldName
     *
     * @return mixed String or array
     */
    public function fetch($fieldName=false)
    {
        if($fieldName)
        {
            if(isset($this->_postData[$fieldName]))
            return $this->_postData[$fieldName];
            else
                return false;
        }
        else
        {
            return $this->_postData;
        }
    }
    /**
     * val-This is to validate
     * @param string$typeOfValidatior A method from the Form/Val class
     *@param string $arg A property to validate against
     */
    public function val($typeOfValidatior,$arg=null)
    {
        if($arg==null)
            $error=$this->_val->{$typeOfValidatior}($this->_postData[$this->_currentItem]);
        else
            $error=$this->_val->{$typeOfValidatior}($this->_postData[$this->_currentItem],$arg);

        if($error)
            $this->_error[$this->_currentItem]=$error;

        return $this;
    }

    /**
     * submit-handles the form,and throws an exception upon error
     *
     * @return boolean
     *
     * @throws Exception
     */
    public function submit()
    {
        if(empty($this->_error))
        {
            return true;
        }
        else
        {
            $str='';
            foreach ($this->_error as $key=>$value){
                $str.=$key.'=>'.$value."\n";
            }

            throw new Exception($str);
        }
    }
}
?>