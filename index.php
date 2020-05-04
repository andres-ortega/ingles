<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica</title>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
</head>
<body>
    

    <div class="row justify-content-center" >
        <div class="col-6 align-items-center">
            <div name="ventana" frameborder="1" width='100%' height='300px'>
                
                <?php
                
                    function accion(){
                        /*registramos la variable*/
                        session_start();
                        
                        $_SESSION["boton1"] = rand(1, 3);

                        if($_SESSION["boton1"] == 1){ $fondo = "atacar.png'"; $_SESSION["name"] = "ATACAR"; $_SESSION["traduccion"] = "attack";}
                        if($_SESSION["boton1"] == 2){ $fondo = "comportar.jpg'"; $_SESSION["name"] = "COMPORTAR"; $_SESSION["traduccion"] = "behave";}
                        if($_SESSION["boton1"] == 3){ $fondo = "creer.jpeg'"; $_SESSION["name"] = "CREER"; $_SESSION["traduccion"] = "believe";}

                        /*se imprime la imagen $fondo */
                        echo "<img src='img/".$fondo."/ border='1' width='100%' height='350px'>";

                        /*se imprime el nombre de la imagen $_SESSION["name"] */
                        echo "<div style='padding:10px; text-shadow: 2px 2px 0 #AAA, 6px 6px 2px #777,12px 12px 8px #444; color:white;'><h1><center>";
                        echo $_SESSION["name"];
                        echo "</h1> </center></div>";
                    }  

                    if(array_key_exists('test',$_POST)){
                        accion();
                    }  

                    accion(); 
                
                ?>
                
                <form  method="POST" >
                    
                    <div class="col text-center">                
                        <button type="submit" name="boton1" class="btn btn-success" id="test" value="RUN">START</button>
                    </div>          
                    
                </form>  
            </div>
                       
            <?php
                /*se imprime el nombre de la imagen $_SESSION["name"] */
                echo "<div style='padding:10px; text-shadow: 2px 2px 0 #AAA, 6px 6px 2px #777,12px 12px 8px #444; color:white;'><h1><center>
                ANSWER:
                </h1> </center></div>";  

                
            ?>
            <!--FORMULARIO-->
            <form  method="POST" >                    
                <div class="input-group mb-3">
                    <input name="valor" type="text" class="form-control" placeholder="Write your answer..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                    
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit">SEND</button>
                    </div>
                </div>        
            </form>                      
        </div>

        <div  class="col-6 ccc ">


            <iframe name="ventana" src="ventana.php" frameborder="1" width='100%' height='350PX'></iframe> 

            <?php
                /*declaramos variables que se tomaran del input o un formulario*/
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    
                    $_SESSION["valor"]=@$_POST['valor'];

                    print "<p>la traduccion es $_SESSION[traduccion]</p>";
                    
                    print "<p>el nombre es $_SESSION[valor]</p>";
                    
                    
                }               
                /*validacion si la respuesta es correcta*/
                if(@$_POST['valor']===$_SESSION["traduccion"]){

                    echo "LA RESPUESTA ES CORRECTA";

                }else{
                    echo "LA ESPUESTA ES INCORRECTA";
                }
                echo"<br>";
                $correcto = "correcto2.jpeg'";

                echo "<center> <img src='img/".$correcto."/ border='1' width='40%' height='150px'> </center>";
                
            ?>
        </div>
    </div>

    <!--VALIDACION DEL INPUT-->
    

    

    
</body>

</html>
