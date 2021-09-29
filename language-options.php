<?php 
    if(empty($_SESSION["language"])) {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        $_SESSION["language"] = $lang;
    }
    if(isset($_SESSION["language"])) {
        $lang = $_SESSION["language"];
    }
    switch ($lang) {
        case 'es':
            include("language/esp.php");
            break;
        case 'en':
            include("language/eng.php");
            break;
    }
?>