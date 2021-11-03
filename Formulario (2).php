
<?php




if(isset($_POST["submit"]))
{   
    $Sintomas="Presenta los siguientes sintomas:<br>";

    $Puntos_t=$_POST["fiebre"]+$_POST["frente"]+$_POST["articulaciones"]+$_POST["huesos"]+$_POST["culo"]+$_POST["nauseas"]+$_POST["vomito"]+$_POST["piel"]+$_POST["ojos"];
    $Porciento=($Puntos_t/22)*100;
    $k=0;

    if ($_POST["fiebre"]>0)
    {   $k++;
        $Sintomas=$Sintomas.$k.". "."Fiebre<br>";
    }
    if ($_POST["articulaciones"]>0)
    {   $k++;
        $Sintomas=$Sintomas.$k.". "."Dolor en articulaciones<br>";
    }
    if ($_POST["huesos"]>0)
    {   $k++;
        $Sintomas=$Sintomas.$k.". "."Dolor en los huesos<br>";
    }
    if ($_POST["culo"]>0)
    {   $k++;
        $Sintomas=$Sintomas.$k.". "."Dolor muscular<br>";
    }
    if ($_POST["frente"]>0)
    {   $k++;
        $Sintomas=$Sintomas.$k.". "." Dolor de cabeza<br>";
    }
    if ($_POST["ojos"]>0)
    {   $k++;
        $Sintomas=$Sintomas.$k.". "."Dolor ocular<br>";
    }
    if ($_POST["nauseas"]>0)
    {   $k++;
        $Sintomas=$Sintomas.$k.". "."Nauseas<br>";
    }
    if ($_POST["vomito"]>0)
    {   $k++;
        $Sintomas=$Sintomas.$k.". "."Vomito<br>";
    }
    if ($_POST["piel"]>0)
    {   $k++;
        $Sintomas=$Sintomas.$k.". "."Sarpullido<br>";
    }

    
    if($Porciento<1)
    {
        $Diag_F="<br> No tiene ningun sintoma, entonces no corre peligro de tener dengue";    
    }

    
    if ($Porciento<59){
        $Diag_F="<br> Tiene ".$Porciento."% de probabilidad de estar enfermo por dengue, por lo que tendria un riesgo considerable de tener dengue,
         si mas sintomas se presentan acuda a su medico preferido";   

    }

    if ($Porciento>59){
        $Diag_F="Tiene ".$Porciento."% de probabilidad de estar enfermo por dengue, por lo que tendria un riesgo alto de tener dengue,
         debido a ello es recomedable que acuda a su medico preferido";    

    }


    $dbcon = new mysqli("localhost", "root", "", "matasanos") or die("No se pudo connectar");
    $result = $dbcon->query("SELECT * FROM consulta");
    $cont = $result->num_rows;
    $cont+=1;
    

	$sql = "INSERT INTO consulta(No_Cons,Diagnostico_final,Sintomas_det) VALUES
    ('".$cont."','".$Diag_F."','".$Sintomas."')";
    mysqli_query($dbcon,$sql);

}

?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="estilos2.css">


</head>

<body>
    <form class="formulario" method="post" enctype="multipart/form-data" >

        <h1>Contesta el siguiente formulario.</h1>
                    <div class="wrap">
                        <div class="radio" id="fiebre" id="fiebre">
                            <h2>¿En los ultimos dias haz sufrido fiebre alta?</h2>
                            <input type="radio" name="fiebre" id="opc1" value=6>
                            <label for="opc1">Si</label>
                    
                            <input type="radio" name="fiebre" id="opc2" value=0>
                            <label for="opc2">No</label>
                        </div>

                        <div class="radio" id="frente" >
                            <h2>¿En los ultimos dias haz sufrido Dolor de cabeza? Especificamente en la frente.</h2>
                            <input type="radio" name="frente" id="opc3" value=1>
                            <label for="opc3">Si</label>
                    
                            <input type="radio" name="frente" id="opc4" value=0>
                            <label for="opc4">No</label>
                        </div>
                        
                        <div class="radio" id="articulaciones">
                            <h2>¿En los ultimos dias haz sufrido dolor en las articulaciones?</h2>
                            <input type="radio" name="articulaciones" id="opc5" value=1>
                            <label for="opc5">Si</label>
                    
                            <input type="radio" name="articulaciones" id="opc6" value=0>
                            <label for="opc6">No</label>
                        </div>

                        <div class="radio" id="huesos">
                            <h2>¿En los ultimos dias haz sufrido dolor en los huesos?</h2>
                            <input type="radio" name="huesos" id="opc7" value=1>
                            <label for="opc7">Si</label>
                    
                            <input type="radio" name="huesos" id="opc8" value=0>
                            <label for="opc8">No</label>
                        </div>

                        <div class="radio" id="culo">
                            <h2>¿En los ultimos dias haz sufrido dolor de musculos?</h2>
                            <input type="radio" name="culo" id="opc9" value=1>
                            <label for="opc9">Si</label>
                    
                            <input type="radio" name="culo" id="opc10" value=0>
                            <label for="opc10">No</label>
                        </div>

                        <div class="radio" id="nauseas">
                            <h2>¿En los ultimos dias haz sufrido de nauseas?</h2>
                            <input type="radio" name="nauseas" id="opc11" value=3>
                            <label for="opc11">Si</label>
                    
                            <input type="radio" name="nauseas" id="opc12" value=0>
                            <label for="opc12">No</label>
                        </div>

                        <div class="radio" id="vomito">
                            <h2>¿En los ultimos dias haz sufrido vomito?</h2>
                            <input type="radio" name="vomito" id="opc13" value=3>
                            <label for="opc13">Si</label>
                    
                            <input type="radio" name="vomito" id="opc14" value=0>
                            <label for="opc14">No</label>
                        </div>
                        <div class="radio" id="piel">
                            <h2>¿En los ultimos dias haz sufrido de erupciones en la piel?</h2>
                            <input type="radio" name="piel" id="opc15" value=4>
                            <label for="opc15">Si</label>
                    
                            <input type="radio" name="piel" id="opc16" value=0>
                            <label for="opc16">No</label>
                        </div>
                        <div class="radio" id="ojos">
                            <h2>¿En los ultimos dias haz sufrido de dolos o molestias en los ojos? Especificamente en la párte trasera de estos, por ejemplo al moverlos.</h2>
                            <input type="radio" name="ojos" id="opc17" value=2>
                            <label for="opc17">Si</label>
                    
                            <input type="radio" name="ojos" id="opc18" value=0>
                            <label for="opc18">No</label>
                        </div>
                        <input id="submit" name="submit" type="submit" value="Enviar" class="button" formaction="#modal">
          
                    
                    <button class="button" formaction="After_login.html">Inicio</button>
                </div>

        <aside id="modal" class="modal">
            <div class="content-modal">
                <header>
                    
                    <a href="#" class="close-modal">X</a>
                    <h1>Buen Trabajo</h1>

                </header>
                <article>

                <?php

                $sql="SELECT * from t_sintomas";
                $mostrar=mysqli_query($dbcon,$sql);

                

                ?>
              
                    <h2>Sintomas:</h2>
                    <td>
                    <?php 
                        echo $Sintomas; 
                    ?>
                    </td>
                    <h2>Diagnostico:</h2>
                    <td>
                    <?php
                        echo $Diag_F;
                    ?>
                    </td>
             

                    <button class="button" formaction="After_login.html">Cerrar</button>
                </article>
            </div>
            <a href="#" class="btn-close-modal"></a>
        </aside>          
        
    </form>
</body>

</html>