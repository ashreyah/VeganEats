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
        }

        h1 {
            padding: 10px;
            margin-left: 70px;
            margin-top: 3px;
            font-family: sans-serif;
            /*            text-align: center left;*/
        }

        h3 [input] {
            font-family: sans-serif;
        }

        @media (max-width: 720px) {
            .food {
                min-height: 285px;
            }

    </style>
</head>

<body>
    <?php require_once('nav.php'); ?>

    <div id="resturant">
        <h1>Find Resturants Near You</h1>
        <div class="container">
            <form id="formLocations" class="p-2">
                <h3>Locations</h3>
                <input type="text" name="loc" placeholder="City, State" class="finds">
            </form>
            <div class="row"></div>
        </div>
    </div>
    <?php require_once('footer.php'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="ajax.js"></script>
    <script>
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
            "New York, New York",
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
        $(" .finds ").autocomplete({
            source: availableTags,
            select: function(event, ui) {
                console.log(ui.item.value);
                sch(ui.item.value)
            }
        });

        $('.finds').keyup(function() {
            b = $(this).val();
            console.log(b);
            sch(b)
        });

        function sch(x) {
            $('.rest').each(function() {
                c = $(this).html();
                console.log(c.indexOf(x) > -1);
                if (c.indexOf(x) > -1) {
                    $(this).removeClass("d-none");
                } else {
                    $(this).addClass("d-none");
                };
            });
        }

    </script>
</body>

</html>
