<?php
    //start a session
    session_start();
    //connect to our mysql database
    include('mysql_connect.php');
    //get username and password values from our login form, and put them in easier-to-use variables
    //$showusername = 
    //$username = ?
    $username = $_POST['username'];
    
    //$password = ?
    $password = sha1($_POST['password']);

    //convert our password into a hashed password, using the function "sha1": $password
    ///////////$encrypted_password = sha1($password);
    //construct an SQL statement, $query, that selects the record with both our username and hashed password, $username and $password. The table is "users" 
    $query = "SELECT * FROM user_auth WHERE username='$username' AND password='$password'";

    //execute $query, and receive the results in $results
    $result = mysqli_query($CONN, $query);
    //if a row was returned, the user is validated.  
    if(mysqli_num_rows($result)!=1)
    
    {
        echo "User Validated";
        //if the user was validated, fetch the user's data into $user_info variable
        $user_info = mysqli_fetch_assoc($result);
        //put the user's data into a key/value pair in the session superglobal.  Use key 'userinfo' in the session superglobal
        $_SESSION['user'] = $user_info; 
    }
    //else the user wasn't validated
    else 
    {
        //inform the user that their username/password was incorrect
        echo "Invalid Login";

    }
    
    //end of file.  output any results here.
?>
