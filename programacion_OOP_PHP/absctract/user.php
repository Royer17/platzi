<?php 

require_once("Base.php");
Class User extends Base 
{
    public function __construct($name)
    {
        $this->name = $name;
    }

}