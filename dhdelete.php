<?php session_start(); 
$id = $_SERVER['QUERY_STRING'];

$d = file_get_contents('info.json');
$d = json_decode($d, true);
//print_r($d);
//echo '<br>';

unset($d[$id]);
    
//print_r($d);

$d = json_encode($d);
file_put_contents('info.json', $d);


if($_SESSION['id'] == $id){
    session_destroy();
    header('location:signin.php');
} else {
    header('location:profiles.php');
};
?>
