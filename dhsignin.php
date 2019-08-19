<?php session_start(); 

$d = file_get_contents('info.json');
$d = json_decode($d, true);

$em = $_POST['em'];
$pw = $_POST['psw'];

$x = array_search($em, array_column($d, 'em'));
$y = array_search($pw, array_column($d, 'psw'));


if($x > -1 && $y > -1 && $y === $x){
    $x = array_keys($d)[$x];
    //print_r($x);
    $_SESSION['id'] = $x;
    $_SESSION['name'] = $d[$x]['fn'];
    header('location:profiles.php');
} else {
    header('location:signin.php');
};

?>