    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Vegan Eats</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signin.php">Sign-in</a>
                </li>
<!--
                <li class="nav-item">
                    <a class="nav-link" href="profiles.php">Pofiles</a>
                </li>
-->
                <li class="nav-item">
                    <a class="nav-link" href="resturant.php">Resturant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="locations.php">Locations</a>
                </li>

                <?php
if( isset( $_SESSION['name'] ) ){
    echo '
        <li class="nav-item p-2">
            Hello, '.$_SESSION['name'].'!
        </li>
        <li class="nav-item">
            <a class="nav-link" href="profiles.php">Pofiles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="addresturant.php">Add Resturant</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="signout.php">Sign-out</a>
        </li>
    ';
}
?>
                
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" id="ser2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
