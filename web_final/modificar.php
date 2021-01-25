<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "Fat/3232";
    $dbname = "gimnello";

    //Connexió amb la BD

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //Comprovació de la connexió

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Gym</title>
    <link rel="stylesheet" href="link/font-awesom.min.css">
    <link rel="stylesheet" href="css/estils.css">
    <script src="link/jquery-latest.js"></script>
    <script src="main.js"></script>
</head>

<body>

    <div id="prova">

        <header>
            <a href="index.html">
                <h1>VELMEL GYM</h1>
            </a>
        </header>

        <div class="menu_bar">
            <a href="#" class="bt-menu"><span class="icon-list2"></span>VELMEL GYM</a>
        </div>

        <nav id="nav_mobil">
            <ul>
                <li><a href="index.html">Inici</a></li>
                <li><a href="qui.html">Qui sóm?</a></li>
                <li><a href="contacte.html">Contacte</a></li>
                <li><a href="modificar.php">Modificar</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </nav>

        <script>
            $(document).ready(main);

            var contador = 1;

            function main() {
                $('.menu_bar').click(function() {
                    if (contador == 1) {
                        $('#nav_mobil').animate({
                            left: '0'
                        });
                        contador = 0;
                    } else {
                        contador = 1;
                        $('#nav_mobil').animate({
                            left: '-100%'
                        });
                    }
                });
            }

        </script>

        <nav id="nav_pc">
            <a href="index.html">Inici</a>
            <a href="qui.html">Qui sóm?</a>
            <a href="contacte.html">Contacte</a>
            <a href="modificar.html">Modificar</a>
            <a href="login.html">Login</a>
        </nav>

    </div>

    <div id="all">



<div class="bfiltre">
            <form METHOD=POST ACTION="buscar.php" class="bfiltre">
                <input type="text" name="tipus" placeholder="Ingresa el tipus">
                <input type="submit" name="name" value="Buscar" id="busqueda">
            </form>
            </div>
              <table border="2" >
                <tr>
                    <th>nom</th>
                    <th>correu</th>
                    <th>contrasenya</th>
                    <th>dni</th>
                  
                </tr>
                
            <!--Php del filtratge-->
            
            <?php

                $dni = $_POST['dni'];

                $sql="SELECT * FROM socis WHERE dni = '$dni'";
                $registros=mysqli_query($conn,$sql);

                while ($registro = mysqli_fetch_array($registros)){

            ?>
                <!--Creem la taula que hem cercat-->
                
                <tr>
                    <td><?php echo $registro["nom"]?></td>
                    <td><?php echo $registro["correu"]?></td>
                    <td><?php echo $registro["contrasenya"]?></td>
                    <td><?php echo $registro["dni"]?></td>
                    
                </tr>

            <?php
                }
            ?>
            </table>






        <section id="caixa">
            <h2>Consulta la fitxa</h2>





            <div>
                <article>
                    <table border="5">
                        <div class="bfiltre">
                            <form METHOD=POST ACTION="buscar.php" class="bfiltre">
                                <input type="text" name="tipus" placeholder="Ingresa el tipus">
                                <input type="submit" name="name" value="Buscar" id="busqueda">
                            </form>
                        </div>



                        <tr>
                            <th>Nom</th>
                            <th>Cognom</th>
                            <th>DNI o NIE</th>
                            <th>Correu</th>
                            <th>Mòbil</th>
                            <th>Activitats</th>
                            >
                        </tr>
                        <!--Fa una selecció de la taula socis, i creo els camps de la taula. Mostrant el contingut entrat-->
                        <?php
                        $sql="SELECT * FROM socis ";
                        $result=mysqli_query($conn,$sql);
                        while($mostrar=mysqli_fetch_array($result)){
                    ?>

                        <tr>
                            <td><?php echo $mostrar["Nom"]?></td>
                            <td><?php echo $mostrar["Cognom"]?></td>
                            <td><?php echo $mostrar["DNI"]?></td>
                            <td><?php echo $mostrar["Correu"]?></td>
                            <td><?php echo $mostrar["Mobil"]?></td>
                            <td><?php echo $mostrar["Activitat"]?></td>

                        </tr>

                        <?php
                        }
                    ?>
                    
                        <tr>
                            <td><a href="#"><img src="img/llapis.png" alt="Llapis"></a></td>
                            <td><a href="#"><img src="img/llapis.png" alt="Llapis"></a></td>
                            <td><a href="#"><img src="img/llapis.png" alt="Llapis"></a></td>
                            <td><a href="#"><img src="img/llapis.png" alt="Llapis"></a></td>
                            <td><a href="#"><img src="img/llapis.png" alt="Llapis"></a></td>
                            <td><a href="#"><img src="img/llapis.png" alt="Llapis"></a></td>
                        </tr>

                    </table>


                </article>
            </div>
        </section>

            <div id="botom">
                <input type="submit" value="Guardar">
            </div>

            </div>

    <footer>
        <p>Av. Generalitat 14</p>
        <a href="https://www.instagram.com/" target="_blank"><img src="img/insta.png" alt="Instagram"></a>
        <a href="https://es-es.facebook.com/" target="_blank"><img src="img/Facebook-logo.png" alt="Facebook"></a>
    </footer>

</body>

</html>
