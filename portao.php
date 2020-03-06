<?php
	/* localizacao */
	$url = "http://{$_SERVER['HTTP_HOST']}/bombaDaguaWeb/";
	setlocale(LC_ALL, 'pt_BR');
	date_default_timezone_set('America/Recife');
?>
<!DOCTYPE html> 
<html class="thin"> 
	<head> 
		<title>RPI Controle</title>
		<link rel="stylesheet" type="text/css" href="<?=$url?>_assets/bootstrap/dist/css/bootstrap.min.css">
		<!-- <meta http-equiv="refresh" content="2"> -->
		<meta charset="utf-8">
        <meta name="apple-mobile-web-app-title" content="Portão">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="apple-touch-icon-precomposed" href="<?=$url?>_storage/images/favicon_portao.png">
        <link type="image/x-icon" rel="icon" href="<?=$url?>_storage/images/favicon_portao.png">
	</head> 
	
	<body class="bg-light">
        <section class="container-fluid text-center m-auto py-4 ">
            <h2><strong>RPi</strong> CONTROLE</h2>
        </section>
        <section class="container-fluid text-center">
            <div id="status">
                <div class="pt-3">
                    <p><strong>Última ação:</strong> <?php echo  $ultimaAcao = end( file( 'logportao.txt' ) ); ?> </p>    
                </div>
                <div>
                    <img src="<?=$url?>_storage/images/garage.png" class="img-fluid my-5" width="160px" ></img>
                </div>
                <div>
                <button class="btn text-light btn-lg" style="background-image: linear-gradient(to right,green, red );" id="btn-portao"><strong>Abrir / Fechar</strong></button>
                </div>
            </div>
        </section>
   
    </body>
    <script type="text/javascript" src="<?=$url?>_assets/jquery/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="<?=$url?>_assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
    
        //ajax para ligar pino
    	$(document).on('click','#btn-portao', function () {
            $.ajax({
                type:'POST',
                url: "pinportao.php",
                data: {status: 0},
                dataType:'text',
                success:  function(response) {
                      console.log(response);
                },
            });       
        });
        
    </script>
</html>
