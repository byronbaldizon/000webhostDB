# 000webhostDB
Set up and php code for 000webhost database testing

## PURPOSE
This is a .php file for a 000Webhostapp hosting.  The code is:

    <?php
          /*
          testDB.php for database testing on 000webhost web hosting service.
          */
          $servername = "localhost";
          $username = "id19051977_root";
          $password = "8612144Neptuno+";
          $database = "id19051977_productos";

          // Create connection
          $conn = mysqli_connect($servername, $username, $password, $database);

          // Check connection
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }

          echo "Connected successfully";

          $nombre="Samuel";
          $apellido="Jackson";
          $celular="1127644532";


          $sql2="INSERT INTO clientes (id,nombre,apellido,celular) VALUES (NULL,'$nombre','$apellido','$celular')";
          mysqli_query($conn,$sql2);
      ?>
      
  ## SETUP DATA
  Data were taken from 000Webhost form:
  <p align="center">
   <img width="700" height="500" src="https://i.postimg.cc/6QzhKnwx/database-Setup-Data.png">
</p>

