<?php session_start(); 
//print_r( $_POST );
//echo '<br>'.$_POST["em"];
//echo '<br>';

//print_r( $_FILES['ph'] );

$d = file_get_contents("data.json");
$d= json_decode($d, true);

//echo '<br>';
//print_r( $d );
//echo '<br>';
$x = count($d);
++$x;
//echo $x;

$t = $_FILES['ph']['tmp_name'];
$i ='resturants/'.$x.'.jpg';

//echo '<br>';
//echo $i;

move_uploaded_file( $t, $i );

//array_unshift($d, $_POST);
$d[$x] = $_POST;
$d[$x]['ph'] = $i;

//echo '<br>';
//print_r($d);

$d = json_encode($d);
file_put_contents('data.json', $d);
//$_SESSION['id']= $x;
//$_SESSION['name']= $_POST['fn'];

header('location:resturant.php');


//$c = $_POST['city'];
//$s = $_POST['state'];
//
//$cnt = mysqli_connect('localhost', 'root', 'root', 'vegan21');
//$qry = "insert into locate(city, state) values ('$c', '$s')";
//
//mysqli_query($cnt, $qry);
//
//mysqli_close($cnt);
//header('location:result.php')

?>