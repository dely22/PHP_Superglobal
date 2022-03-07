<?php
//PHP  Session
// Start the session
    session_start();

//PHP  Cookies 
    $cookie_name = "user";
    $cookie_value = "hadeel";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<!DOCTYPE html>
<html>
<body>
    <!-- for PHP $_REQUEST Ex  &&  PHP $_POST Ex -->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
    </form>
    <br> <br>

    <!-- PHP $_GET -->
    <a href="test_get.php?subject=PHP&web=superglobals">Test $GET</a> 
    

 


<?php 
    //PHP $GLOBALS
    echo "<br><br>";
    $x = 75;
    $y = 25; 
    function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    addition();
    echo $z;
    echo "<br><br>";

    //PHP $_SERVER some Of par.
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    // echo $_SERVER['SERVER_NAME'];
    // echo "<br>";
    // echo $_SERVER['HTTP_HOST'];
    // echo "<br>";
    // echo $_SERVER['HTTP_REFERER'];
    // echo "<br>";
    // echo $_SERVER['HTTP_USER_AGENT'];
    // echo "<br>";
    // echo $_SERVER['SCRIPT_NAME'];

    echo "<br><br>";
    // PHP $_REQUEST   &&  PHP $_POST Ex
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = htmlspecialchars($_REQUEST['fname']);
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }

     // PHP $_SESSION
    // Set session variables
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set.";
  
	echo "<br><br>";

    // PHP $_Cookies
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }

    echo "<br><br>";
    // PHP $_FILES
    $errorIndex = $_FILES["file"]["error"];
    echo "Good";
    if ($errorIndex > 0) {
        die('We have a error. Try Again.');
        echo "Error";
    }

    processFile();

    echo "<br><br>";
    // PHP $_ENV
    echo 'My username is ' .$_ENV["USER"] . '!';
   


?>

</body>
</html>
