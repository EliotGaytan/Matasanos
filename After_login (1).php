<!DOCTYPE HTML>
<html>

<head>
    <title>Matasanos</title>
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="estilos2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/fav-icon.png" />

    <!---strat-slider---->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/slider-style.css" />
    <script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
    <!---//strat-slider---->
    <!---start-login-script--->
    <script src="js/login.js"></script>
    <script src="js/targeta.js"></script>
    <!---//End-login-script--->
    <!-----768px-menu----->
    <link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
    <script type="text/javascript" src="js/jquery.mmenu.js"></script>
    <script type="text/javascript">
        //	The menu on the left
        $(function() {
            $('nav#menu-left').mmenu();
        });
    </script>
</head>

<body>


    <div class="header">
        <div class="wrap">
            <div class="header-left">
                <div class="logo">
                    <a href="After_login.html">Matasanos</a>
                </div>
            </div>
            <div class="header-right">
                <div class="top-nav">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Acerca</a></li>
                        <li><a href="dengue2.html">Sintomas</a></li>
                    </ul>
                </div>
                <div class="sign-ligin-btns">
                    <ul>

                        <li>
                            <a href="loginvista.html"><input type="submit" value="Cerrar sesion" class="button2"></a>
                        </li>

                        <div class="clear"> </div>
                    </ul>
                </div>
                <div class="clear"> </div>
            </div>
            <div class="clear"> </div>
        </div>
    </div>

    <div id="container">


        <div class="product-details">

            <h1>SE Matasanos</h1>
  
            <span class="hint-star star">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </span>


            <p class="information">"Si en los ultimo 5 dias haz presentado algun sintoma o malestar que pueda estar catalogado entre los sintomas del dengue da click en el boton de la parte inferior. "</p>



            <div class="control">

                <button class="btn">
                     <span class="price"></span>
                   <span class="shopping-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
				<a href="Formulario (1).php"><span class="buy">Consulta Nueva</span></a>
                 </button>


            </div>

        </div>


        <div class="product-image">

            <img src="images/paciente.jpg" alt="El chug">

            <div class="info">
                <h2>Perfil</h2>
                <ul>
                    <li><strong>Nombre: </strong>Full Sun</li>
                    <li><strong>Apellidos: </strong>Damp</li>
                    <li><strong>Edad: </strong>9 - 11</li>
                    <li><strong>Sexo: </strong>2 - 3 feet</li>
                    <li><strong>Correo: </strong>Mid‑Summer - Mid‑Fall</li>
                    <li><strong>Telefono: </strong>Tolerates heat</li>
                </ul>
            </div>
        </div>
    </div>

    <form  class="formulario" method="post" enctype="multipart/form-data">

        <h1>Expediente(s):</h1>

        <?php        
    	#$id=$_SESSION['id_usuario'];
$id=1;

$dbcon = new mysqli("localhost", "root", "", "matasanos") or die("No se pudo connectar");

$sql =$dbcon->query("SELECT ID,FK_Cons FROM expediente where FK_Usr='$id'");
for($i=0;$f1 = $sql->fetch_object();$i++){
    
    echo"        <input id='submit' name='submit' type='submit' value='Expediente No.$f1->ID' class='button' formaction='#modal$f1->ID'>
    
    ";

    $sql2= $dbcon->query("SELECT Diagnostico_final,Sintomas_det FROM consulta where No_Cons=' $f1->FK_Cons'");
   
    $f2 = $sql2->fetch_object();
     
echo"        <aside id='modal$f1->ID' class='modal'>
<div class='content-modal'>
    <header>

        <a href='#' class='close-modal'></a>
        <h1>Expediente</h1>

    </header>
    <article>

        <h2>Sintomas:$f2->Sintomas_det</h2>
        <td></td>
        <h2>Diagnostico: $f2->Diagnostico_final</h2>
        <td></td>

        <button class='button' formaction='After_login.php'>Cerrar</button>
    </article>
</div>
<a href='#' class='btn-close-modal'></a>
</aside> ";
    
}
?>
        


       
    </form>

    
    <div class="content">
        <div class="wrap">
            <div class="top-grids">
                <div class="top-grid">
                    <div class="product-pic frist-product-pic">
                        <img src="images/consulta (1) (1) (1).png" title="watch" />
                    </div>
                    <span><label>1</label></span>
                    <div class="border"> </div>
                    <a href="#">Ingresa tus sintomas</a>
                </div>
                <div class="top-grid">
                    <div class="product-pic">
                        <img src="images/diag (1).png" title="shoe" />
                    </div>
                    <span><label>2</label></span>
                    <div class="border hide"> </div>
                    <a href="#">Obten tu resultado</a>
                </div>
                <div class="top-grid hide">
                    <div class="product-pic">
                        <img src="images/medico (1).png" title="laptop" />
                    </div>
                    <span><label>3</label></span>
                    <a href="#">Ve al medico de ser necesario</a>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
       <div class="footer-grids">
            <div class="wrap">
                <div class="footer-grid">
                    <h3>Conectando contigo</h3>
                    <ul class="social-icons">
                        <li>
                            <a class="facebook" href="https://www.facebook.com/joserefugio.garcia.3"> </a>
                        </li>
                        <li>
                            <a class="twitter" href="https://twitter.com/CucoGmez?s=20"> </a>
                        </li>
                        <li>
                            <a class="youtube" href="https://www.instagram.com/helvertgalarga/?hl=es-la"> </a>
                        </li>
                    </ul>

                </div>
                <div class="clear"> </div>
            </div>
        </div>
    </div>



</body>




</html>