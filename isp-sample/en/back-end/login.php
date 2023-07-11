<?php

    session_start();
    include 'conexion.php';

    if(isset($_POST['user']) && $_POST['user']!='' && isset($_POST['pass']) && $_POST['pass']!='')      {
        #llegaron los datos
        $sql = "select * from users where user='$_POST[user]'";
        $query = mysqli_query($link,$sql);
        $num = mysqli_num_rows($query);
        if ($num==0)
        {?>
          <script> alert("User does not exist! "); </script><?php
           ?><meta http-equiv="refresh" content="0;URL=../login/"><?php
        }
        else
        {
          # se encontro registro
          $row = mysqli_fetch_array($query); # descargo en el arreglo $row la primera fila
          if ($row['password'] != md5($_POST['pass']))
           {# No coincide contraseña?>
              <script> alert("Incorrect Password! "); </script><?PHP
               ?><meta http-equiv="refresh" content="0;URL=../login/"><?php
           }
          else
          {
            # Autentificacion (Creamos variables de sesión con los datos del usuario)   
            $_SESSION['id'] = $row['id'];
            $_SESSION['user'] = $row['user'];
            ?><meta http-equiv="refresh" content="0;URL=../../"><?php
          }       
        } 
      }
      else
       { 
            ?>
            <script> alert("You must fill all the fields "); </script> 
            <?php
            ?><meta http-equiv="refresh" content="0;URL=../login/"><?php 
       }
?>
