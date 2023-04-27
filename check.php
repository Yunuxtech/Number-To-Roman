<?php

session_start();
include("./function.php");

if (isset($_POST["submit"])) {

    $value = intToRoman($_POST["value"]);
    $_SESSION["msg"] = '<div class="alert alert-secondary alert-dismissible fade show" role="alert">
    <strong>' . $value . '</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

    header("location: index.php");
}
