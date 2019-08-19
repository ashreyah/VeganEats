<?php session_start(); ?>
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
    <h1>Edit Profile</h1>
    <form method="post" action="dhedit.php" enctype="multipart/form-data">
        <?php 
        $id = $_SERVER['QUERY_STRING'];
        //echo $id;
        
        $d = file_get_contents("info.json");
        $d = json_decode($d, true);
        //print_r($d[$id]);
        $n = $d[$id]['fn'];
        $e = $d[$id]['em'];
        $p = $d[$id]['psw']
        ?>

        <div class="container c2">
            <h2>Update Info</h2>
            <p>Please fill in this form to update your account.</p>
            <hr>

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <label for="name"><b>First Name</b></label>
            <input type="text" placeholder="Enter Name" name="fn" required value="<?php echo $n;?>">


            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="em" required value="<?php echo $e;?>">

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required value="<?php echo $p;?>">


            <label for="phr"><b>Photo</b></label>
            <input type="file" name="phr" required>


            <button type="submit" class="registerbtn">Update Profile</button>
        </div>
    </form>


    <?php require_once('footer.php'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
