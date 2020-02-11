<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="dura,AL EFECTO DURA,UNA AFEITADA MÁS AL RAS,RASURADOS PODEROSOS, 
        CONSIGUE UNAS PIERNAS">
    <meta name="description" content="Dura es una marca de rasuradoras de origen alemán que llega 
        al mercado Venezolano a brindar una mejor alternativa de productos de afeitado personal, 
        la marca cuenta con una variedad de productos de la más alta calidad para ofrecer a los 
        diversos gustos y necesidades">
    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/styles.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <title>>DURA | CONTACTO</title>
</head>
<body class="bg-black text-white text-shadow">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-black border-bottom border-dark opacity-09 shadow-lg">
        <a href="index.html" class="navbar-brand">
            <img src="img/logo.png" alt="logo">
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="navbar-nav text-uppercase ml-auto font-weight-bold font-f1">
                <li class="nav-item">
                    <a href="index.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="marca.html" class="nav-link">Marca</a>
                </li>
                <li class="nav-item">
                    <a href="productos.html" class="nav-link">Productos</a>
                </li>
                <li class="nav-item">
                    <a href="tips.html" class="nav-link">Tips</a>
                </li>
                <li class="nav-item">
                    <a href="compar.html" class="nav-link">Compar</a>
                </li>
                <li class="nav-item">
                    <a href="contacto.html" class="nav-link">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="container-fluid d-flex py-5">
        <div class="row w-100 mx-auto pt-5">
            <div class="col-10 col-md-8 col-xl-6 mx-auto my-5">
                <div class="font-italic font-f1 text-uppercase text-center text-success pb-3">
                    <h4>Confirmación</h4>
                </div>
                <dl class="text-white">
                    <dt class="text-success font-f1">NOMBRE:</dt>
                    <dd>
                        <?php
                            if(isset($_POST['fnombre'])){
                                echo htmlspecialchars($_POST['fnombre']);
                            }
                        ?>
                    </dd>
                    <dt class="text-success font-f1">CORREO ELECTRÓNICO:</dt>
                    <dd>
                        <?php
                            if(isset($_POST['fcorreo'])){
                                echo htmlspecialchars($_POST['fcorreo']);
                            }
                        ?>
                    </dd>
                    <dt class="text-success font-f1">EMPRESA:</dt>
                    <dd>
                        <?php
                            if(isset($_POST['fempresa'])){
                                echo htmlspecialchars($_POST['fempresa']);
                            }
                        ?>
                    </dd>
                    <dt class="text-success font-f1">DIRECCIÓN DEL TRABAJO:</dt>
                    <dd>
                        <?php
                            if(isset($_POST['ftrabajo'])){
                                echo htmlspecialchars($_POST['ftrabajo']);
                            }
                        ?>
                    </dd>				
                    <dt class="text-success font-f1">CIUDAD:</dt>
                    <dd>
                        <?php
                            if(isset($_POST['fciudad'])){
                                echo htmlspecialchars($_POST['fciudad']);
                            }
                        ?>
                    </dd>				
                    <dt class="text-success font-f1">CÓDIGO POSTAL:</dt>
                    <dd>
                        <?php
                            if(isset($_POST['fpostal'])){
                                echo htmlspecialchars($_POST['fpostal']);
                            }
                        ?>
                    </dd>		
                    <dt class="text-success font-f1">MENSAJE:</dt>
                    <dd>
                        <?php
                            if(isset($_POST['fmensaje'])){
                                echo htmlspecialchars($_POST['fmensaje']);
                            }
                        ?>
                    </dd>
                </dl>
            </div>
        </div>
    </section>
    <footer class="container-fluid p-3 border-top border-secondary">
        <div class="row">
            <ul class="list-inline mx-auto">
                <li class="list-inline-item">
                    <a href="https://www.facebook.com/" target="_blank" class="icon-item" rel="noreferrer"><span class="fa fa-facebook-official"></span></a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.instagram.com/" target="_blank" class="icon-item" rel="noreferrer"><span class="fa fa-instagram"></span></a>
                </li>
                <li class="list-inline-item">
                    <a href="https://www.twitter.com/" target="_blank" class="icon-item" rel="noreferrer"><span class="fa fa-twitter"></span></a>
                </li>
            </ul>
        </div>
        <div class="row text-center">
            <small class="mx-auto pt-2 w-75 border-top border-dark text-secondary my-0">
                Website demo, Copyright &copy; 2019-2020 | 
                <a href="privacy.html" class="text-secondary">Privacy</a>
            </small>
        </div>
    </footer>
    <div class="modal" id="privacyModal">
        <div class="modal-dialog">
            <div class="modal-content bg-black">
                <div class="modal-header text-center">
                    <h4 class="font-header text-secondary">GPDR Declaration</h4>
                </div>
                <div class="modal-body">
                    <p class="initialism">
                        This website is a <span class="text-danger"> demo version </span> of real website,  It doesn't collect and process,
                        in long term meaning (longer than needed for website operation during visitor's
                        presence), any user (visitor) data. All information collected during visitor's 
                        presence on this website is used only for technical purposes, required for 
                        correct operation of website or demonstration purposes related to technical 
                        mechanisms and presentation of its operation... 
                        <a href="privacy.html" class="label label-primary">More about privacy</a>
                    </p>                        
                    <p class="initialism">
                        If you accept privacy policy please click button "accept". If you 
                        refuse it, leave page by closing it in your web browser, please.
                    </p>
                </div>
                <div class="modal-footer">
                    <div class="text-center w-100">
                        <button class="btn btn-success"
                            onclick="acceptPrivacyPolicy()">
                            Accept
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/main.min.js"></script>
</body>
</html>