<?php
    if(isset($_COOKIE['PHPSESSID'])){
        session_start();                // start a Session -> decide how to use it later on.
    }
    echo "This is Outsourced";
?>