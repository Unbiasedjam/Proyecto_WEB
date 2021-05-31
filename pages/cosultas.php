<!DOCTYPE html>
<html lang="EN">

<head>
    <title>Shicso</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <script type="text/javascript" src="../layout/scripts/sidebar.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>

<body id="top">
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row0">
        <header id="header" class="hoc clear">
            <img src="../imagenes/gdoIcon.png">
            <h1 class="logoname clear"><a href="../main.php">BACAL</a></h1>
            <p>Grano de Oro</p>
            <li><a href="../index.php">Log out</a></li>
            <!-- ################################################################################################ -->
        </header>
    </div>

    <div class="wrapper row3" style="background-image:url('../imagenes/fondo2.jpg');">


        <main class="hoc container clear">
            <!-- main body -->
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

                <!-- ################################################################################################ -->
                <h6>Navegacion</h6>
                <nav class="sdb_holder">
                    <ul>
                        <li><a href="InfoEmpresa.html">Informacion de la Empresa</a></li>

                        <br>
                        <li><a href="#">Consulta</a></li>

                    </ul>
                </nav>
                <!-- ################################################################################################ -->
            </div>
            <div id="main">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
            </div>

            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
            
            <div class="content three_quarter">
                <div class="wrapper bgded overlay">


                    <form action="mostrarConsulta.php" method="posts">
                        Selecciona una consulta: 
                        <select  name="consulta" style="background-color: blue" > 
                            <option style="background-color: blue" value="valor1">Provedores</option></a>
                            <option style="background-color: blue" value="valor2">Productos</option>
                            <option style="background-color: blue" value="valor3">Inventarios</option>
                            <option style="background-color: blue" value="valor4">Compras</option>
                            <option style="background-color: blue" value="valor5">Detalle de Compras</option>
                        </select>
                        <input type="submit" name="submit" value="Buscar" style="background-color: blue">
                    </form>

                    <div id="pageintro" class="hoc clear">
                        
                        <table width="100%" id="cosa" action="mostrarConsulta.php">
                                


                        </table>
                        <!-- ################################################################################################ -->
                    </div>
                </div>
            </div>
            <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->


    <div class="wrapper row3">
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row3">
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row4">
        <footer id="footer" class="hoc clear">
            <div class="one_quarter">
                <h6 class="heading">Contactanos</h6>
                <ul class="nospace linklist contact">
                    <li><i class="fas fa-map-marker-alt"></i>
                        <address>
                            Blvrd Bernando O'Higgins &amp; 7001, Benton, 22115 Tijuana B.C
                        </address>
                    </li>
                    <li><i class="fas fa-phone"></i> +52 664 686 0666</li>
                    <li><i class="far fa-envelope"></i> atencionaclientes@granodeoro.con.mx</li>
                </ul>
                <ul class="faico clear">
                    <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                </ul>
            </div>
            <!-- ################################################################################################ -->
        </footer>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row5">
        <div id="copyright" class="hoc clear">
            <!-- ################################################################################################ -->
            <p class="fl_left">Copyright &copy; 20201 - All Rights Reserved - <a href="#">BACAL</a></p>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <!-- ################################################################################################ -->
    <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    </script>
    <script src="../layout/scripts/jquery.min.js"></script>
    <script src="../layout/scripts/jquery.backtotop.js"></script>
    <script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>