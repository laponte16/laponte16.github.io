<?php
include "conexion.php";

if (isset($_POST['user']) && $_POST['user']!='' && isset($_POST['pass']) && $_POST['pass']!='')   
    {
        $sql="insert into users(user, password)values('$_POST[user]','".md5($_POST['pass'])."')";
        $result = mysqli_query($link, $sql); 
        if (!mysqli_error($link))
        {
            ?>
            <script>
                alert ("Successful!");
            </script>
            <?php
            ?><meta http-equiv="refresh" content="0;URL=../login/"><?php
        }
        else
        {
            ?>
            <script>
                alert ("Error!");
            </script>
            <?php
            ?><meta http-equiv="refresh" content="0;URL=../login/"><?php
        }
    }
else
    { // no se reciben los datos
        ?><script> alert("You must fill all the fields"); </script><?php
        ?><meta http-equiv="refresh" content="0;URL=../login/"><?php 
    }


?>
<meta http-equiv="refresh" content="0;URL=../login/">