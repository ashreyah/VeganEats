<?php session_start(); 

$x = $_POST['id'];
//echo $x;

$d = file_get_contents('info.json');
$d = json_decode($d, true);

//print_r( $d[$x] );

$d[$x]['fn']= $_POST['fn'];
$d[$x]['em']= $_POST['em'];
$d[$x]['psw']= $_POST['psw'];

//echo '<br>';
//print_r( $d[$x] );

$t = $_FILES['phr']['tmp_name'];
$i = 'users/'.$x.'.jpg';

move_uploaded_file($t, $i);

$d = json_encode($d);
file_put_contents('info.json', $d);

if( $_SESSION['id'] == $x ){
    $_SESSION['name'] = $_POST['fn'];
}

header('location:profiles.php');

?>
