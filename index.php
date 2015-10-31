<?php
/**
 * Created by PhpStorm.
 */
require_once 'Twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    //'cache' => 'compilation_cache',
    'auto_reload'   => true
));

include('class\Auth.php');
include('class\DB.php');
include('class\Users.php');


//$db = new DB();
$users = Users::allUsers();
/*echo "<pre>";
print_r($users);*/
//echo md5('test');
$id = 0;
if(!empty($_POST['login']) && !empty($_POST['password']))
{
    //die(print_r($_POST));
    $authClass = new Auth();
    $auth = $authClass->login($_POST['login'], $_POST['password']);
    $name = $authClass->name;
    $id = $authClass->id;
}
else
{
    /*$authClass = new Auth();
    $auth = $authClass->register();*/
    if(isset($_COOKIE['auth'])) {
        $name = $_COOKIE['name'];
        $id = $_COOKIE['user_id'];
    }
}

if($id == 0)
{
    echo $twig->render('auth.html.twig', array());
}
else {
    echo $twig->render('books.html.twig', array(
        'name' => $name,
        'id' => $id,
        'users' => $users
    ));
}
