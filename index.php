<?php
	/* localizacao */
	$url = "https://{$_SERVER['HTTP_HOST']}/rpi_controle/";
	setlocale(LC_ALL, 'pt_BR');
	date_default_timezone_set('America/Recife');
?>
<!DOCTYPE html> 
<html class="thin"> 
	<head> 
		<title>RPI Controle</title>
		<link rel="stylesheet" type="text/css" href="<?=$url?>_assets/bootstrap/dist/css/bootstrap.min.css">
        <link rel="shortcut icon" type="image/png" href="<?=$url?>resources/imgs/icon.png"/>
		<!-- <meta http-equiv="refresh" content="2"> -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head> 
	
	<body class="bg-light">
        <section class="container-fluid text-center m-auto py-4 ">
            <h2><strong>RPi</strong> CONTROLE</h2>
        </section>
        <section class="container-fluid text-center">
           
            <div id="status">
                <div class="pt-3">
                    <p><strong>Última ação:</strong> <?php echo  $ultimaAcao = end( file( 'log.txt' ) ); ?> </p>    
                </div>
                 <?php 
                    $estado = 0; //system("gpio -g read 17"); 
                    if ($estado == "1") { ?>
                        <div>
                            <img src="<?=$url?>_storage/images/bomba-dagua-on.png" class="img-fluid" width="250px"></img>
                        </div>
                        <div>
                            <button class="btn btn-danger btn-lg" id="btn-desligar"><strong>Desligar</strong></button>
                        </div>
                <?php } else { ?>
                        <div>
                            <img src="<?=$url?>_storage/images/bomba-dagua-off.png" class="img-fluid" width="250px"></img>
                        </div>
                        <div>
                            <button class="btn btn-info btn-lg" id="btn-ligar"><strong>Ligar</strong></button>
                        </div>
                <?php } ?>
            </div>
        </section>
   
    </body>
    <script type="text/javascript" src="<?=$url?>_assets/jquery/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="<?=$url?>_assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
    
        //ajax para ligar pino
    	$(document).on('click','#btn-ligar', function () {
            $.ajax({
                type:'POST',
                url: "pinon.php",
                data: {status: 0},
                dataType:'text',
                success:  function(response) {
                      console.log(response);
                    $('#status').load('status.php');
                },
            });       
        });
        
        //ajax para desligar pino
        $(document).on('click','#btn-desligar', function () {
            $.ajax({
                type:'POST',
                url: "pinoff.php",
                data: {status: 1},
                dataType:'text',
                success:  function(response) {
                    $('#status').load('status.php');
                }
            });
        });
        
        //recarrega a página a cada 2 segundos
        $(function() {
          setTime();
          function setTime() {
              setTimeout(setTime, 2000);
              $('#status').load('status.php');
          }
         });
    </script>
</html>