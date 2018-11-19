
<?php
session_start();

if (!empty($_SESSION['login'])) {
    session_destroy();
    return header('location: ../index.php');
}

?>