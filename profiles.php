<?php session_start();
if( !isset($_SESSION['id'] ) ){
 header('location:index.php');
};
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <title>Vegan Eats</title>
    <style>
        h1 {
            padding: 10px;
            margin: 2px;
            font-family: sans-serif;
            text-align: center;
        }

    </style>
</head>

<body>
    <?php require_once('nav.php'); ?>
    <h1>Profiles</h1>
    <div class="container">
        <div class="row">

            <?php
    $d=file_get_contents("info.json");
    $d = json_decode($d, true);
    //print_r($d);
    
    foreach( $d as $k => $v ){
        echo '
<div class="col-md-4 p-2">
    <div class="card">
        <img src="'.$v['phr'].'" class="card-img-top" style="width:100%; height:400px" alt="...">
        <div class="card-body">
            <h5 class="card-title">'.$v['fn'].'</h5>
            <p class="card-text">'.$v['em'].'</p>
            <a href="edit.php?'.$k.'" class="btn btn-warning">Edit</a>
            <a href="dhdelete.php?'.$k.'" class="btn btn-danger">delete</a>
        </div>
    </div>
</div>
        ';
    };
?>
        </div>
    </div>
    <?php require_once('footer.php'); ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
