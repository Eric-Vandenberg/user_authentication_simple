<?php
    //start a session
    session_start();
    //destroy the session with session_destroy
    unset($_SESSION['user']);
    
    function destroy () {
		session_destroy();
	}
    //done!
?>
