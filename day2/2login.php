<?php
session_start();
$_SESSION['authenticate'] = false;
?>
<form method="POST">
    Username : <input type="text" name="username"> <br/>
    Password :<input type="password" name="password"><br/>
<button name="login">Login</button>
</form>

<?php
if (!empty($_POST['username']) && !empty($_POST['password']) && isset($_POST['login']))
{
    $users = file_get_contents('./users.json');
    $result = json_decode($users, true);
        
    foreach ($result as $rows => $row) 
    {
          
        if (($row['username'] == $_POST['username']) && ($row['password'] == $_POST['password']))
        {
            $_SESSION['authenticate'] = true;
            break;
        }
        /*
        else
        {
            $_SESSION['authenticate'] = false;
        }
        */
        
    }

    if ($_SESSION['authenticate'] == true)
    {
        echo "
        <form method=\"POST\">
         <button name=\"logout\">Logout</button>
        </form>";

        if (isset($_POST['logout'])){
            session_destroy();
        }

    }
    else {
        echo "login gagal";
    }

    print_r($_SESSION['authenticate']);
}

?>