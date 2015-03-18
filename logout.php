<?php
    //start a session
    session_start();
    //destroy the session with session_destroy
    unset($_SESSION['user']);
    

	session_destroy();

    //done!
?>
