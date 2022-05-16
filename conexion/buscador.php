<?php

require_once('../conexion/conexion.php');

                    $id = $_GET['url']; //Pasamos el valor ingresado a una nueva var Id
                    $sql = "SELECT * FROM imagenes WHERE id='$id';"; //comparamos el valor ingresado con el id de la dbs
                    $rs = mysqli_connect ($sql) or die (mysqli_connect_errno());
                    if (mysqli_num_rows ($rs) > 0){
                        echo "Se han encontrado " . mysqli_num_rows ($rs) . " registros:<br />";
                        while ($row = mysqli_fetch_array ($rs)){
                        echo $row["id"] . "<br />";
                        }
                    }
                    mysqli_free_result($rs);

echo $sql;
                    header("Location: http://localhost/Ayudantia/inicio/");
                
?>