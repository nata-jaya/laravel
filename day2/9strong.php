<form method="POST">
    Username : <input type="text" name="username"> <br/>
<button name="login">Cek</button>
</form>

<?php
if (!empty($_POST['username']))
{
    if (preg_match("/^.*(?=.{4,10})(?=.*[0-9])(?=.*[a-zA-Z])(?=.*[\-\_\.]).*$/", $_POST['username'])){
    echo "username valid";
    } else {
    echo "username tidak valid";
    }
}
?>