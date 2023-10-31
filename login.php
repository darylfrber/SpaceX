<?php

session_start();

$pagina = "Admin";
include_once('app/header.php');

if (isset($_SESSION['loggedIn'])) {
    header('location: settings');
}

if (isset($_POST['password'])) {
    if ($_POST['password'] == "ronnie") {
        $_SESSION['loggedIn'] = true;
        header('location: settings');
    } else {
        $_SESSION['error_message'] = "Password is incorrect";
    }
}

?>

<body>
    <div id="content" class="achtergrond-plaatje min-height-400 d-flex flex-column justify-content-center align-items-center">
    <?php if (isset($_SESSION['error_message'])) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> <?php echo $_SESSION['error_message']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php }
    unset($_SESSION['error_message']); ?>
        <h1 id="h1">Crew Login</h1>
        <div id="crew">
            <form id="addflight" method="POST" action="">
                <div class="form-group text-white">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" id="password">
                    <br>
                </div>
                <button id="login" type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>


    <?php

    include_once('app/footer.php');
    ?>
</body>

</html>