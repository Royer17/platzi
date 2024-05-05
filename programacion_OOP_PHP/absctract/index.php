<?php 

require_once("Base.php");
require_once("admin.php");
require_once("guest.php");
require_once("user.php");


$guest = new Guest();
echo $guest->login();


$user = new User('royer');
echo $user->login();

$admin = new Admin('roeradmin');
echo $admin->login();