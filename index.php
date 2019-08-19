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
        .ui-autocomplete {
            list-style: none;
            border: 1px solid #ccc;
            max-width: 200px;
            z-index: 10;
            padding-left: 0;
        }

        .ui-autocomplete li {
            background-color: #FFF;
            border-bottom: 1px solid #ccc;
        }

        .ui-autocomplete li a {
            display: block;
        }

        .ui-autocomplete li a.ui-state-focus {
            background: #E4F0E8 !important;
            border-radius: 0;
        }

        .selection {
            list-style: none;
            text-decoration:
        }

    </style>
</head>

<body>

    <?php require_once('nav.php'); ?>

    <div class="container-fluid" id="vlabel">
        <div>
            <p>“I can’t think of anything better in the world<br> to be but a vegan.”</p>
        </div>
    </div>
    
    <!--    about-->
    <div class="bg-light"> 
    <div class="container" style="padding:20px;">
        <div class="row align-items-center">
            <div class="col-md">
                <img src="assets/vegan-img/Casa-Terra-vegan.jpg" style="height:400px;" class="img-fluid" alt="Responsive image">
            </div>
            <div class="col-md p-2" style="text-align:center; font-size:20px;">
                <h2>Vegan Eats</h2>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum.</P>
            </div>
        </div>
    </div>
</div>
    
    <!--    search-->
    <div class="container header">
        <form>
            <div class="form-group">
                <h1>Vegan Resturants Near You</h1>
                <div class="form-box">
                    <input type="text" class="search-field location" placeholder="Location..." id="loc2">
                    <button class="search-btn" type="button">Search</button>
                </div>
            </div>
        </form>
    </div>

    <div class="card-group">
        <div class="card">
            <img src="assets/vegan-img/go-zen-kosher-nyu-vegan-1024x681.jpg" class="card-img-top" style="min-height:160px;" alt="...">
            <div class="card-body justify-content-center text-center ">
                <h5 class="card-title">Go Zen</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.This content is a little bit longer.This content is a little bit longer.</p>
                <a href="http://www.gozenfamily.com/" target="_blank" class="btn btn-outline-danger">Visit Website</a>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img src="assets/vegan-img/WGC-Veggie-Quinoa-Burger-2-copy-2.jpg" class="card-img-top" style="min-height:160px;" alt="...">
            <div class="card-body justify-content-center text-center">
                <h5 class="card-title">Slutty Vegan</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content. This content is a little bit longer.This content is a little bit longer.This content is a little bit longer.</p>
                <a href="http://sluttyveganatl.com/" target="_blank" class="btn btn-outline-danger">Visit Website</a>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img src="assets/vegan-img/sushi.jpg" class="card-img-top" style="min-height:160px;" alt="...">
            <div class="card-body justify-content-center text-center">
                <h5 class="card-title">Shojin</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <a href="http://www.theshojin.com/" target="_blank" class="btn btn-outline-danger">Visit Website</a>
            </div>
            <div class="card-footer">
                <small class="text-muted">Lasst updated 3 mins ago</small>
            </div>
        </div>
    </div>

    
<!--
    about
    <div class="bg-light"> 
    <div class="container" style="padding:20px;">
        <div class="row align-items-center">
            <div class="col-md">
                <img src="assets/vegan-img/Casa-Terra-vegan.jpg" style="height:400px;"  alt="Responsive image">
            </div>
            <div class="col-md" style="text-align:center; font-size:20px;">
                <h2>Vegan Eats</h2>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum.</P>
            </div>
        </div>
    </div>
</div>
-->
    <?php require_once('footer.php'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $(function() {
            var availableTags = [
                "Atlanta, Georgia",
                "Baltimore, Maryland",
                "Brooklyn, New York",
                "Chicago, Illinois",
                "Columbia, Maryland",
                "Dallas, Texas",
                "Fort Lauderdale, Florida",
                "Houston, Texas",
                "Los Angeles, California",
                "Manhattan, New York",
                "Miami, Florida",
                "Okland, California",
                "Orlando, Florida",
                "Queens, New York",
                "San Antonio, Texas",
                "San Diego, Caifornia",
                "San Francisco, California",
                "Tampa, Florida",
                "Washington D.C",
            ];
            $(" #loc2 ").autocomplete({
                source: availableTags
            });
        });

    </script>
</body>

</html>
