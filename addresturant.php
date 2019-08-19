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

    <div class="container">
        <h1>Add A Resturant</h1>
        <form method="post" action="dh.php" enctype="multipart/form-data" id="form4">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName4">Resturant</label>
                    <input type="text" class="form-control" name="rn" id="inputName4" placeholder="Resturant Name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputLink4">Link</label>
                    <input type="text" class="form-control" name="lnk" id="inputPassword4" placeholder="Link to Website" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" name="city" id="inputCity" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">State</label>
                    <input type="text" class="form-control" name="state" id="inputState" required>
                </div>
                <div class="form-group custom-file">
                    <input type="file" class="custom-file-input" name="ph" id="customFile" required>
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="form-group">
                <label for="Textarea">Review</label>
                <textarea class="form-control" name="rvw" id="InputTextarea" placeholder="Required example textarea" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width:100%;">Submit</button>
        </form>
    </div>

    <?php require_once('footer.php'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js">
    </script>
    <script>
        $(document).ready(function() {
            bsCustomFileInput.init()
        })

    </script>
</body>

</html>
