
<?php 
require_once("Base.php");
Class Admin extends Base
{
    public function __construct($name)
    {
        $this->name=$name;
    }
}