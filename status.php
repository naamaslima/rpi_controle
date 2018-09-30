<div class="pt-3">
    <p><strong>Última ação:</strong> <?php echo  $ultimaAcao = end( file( 'log.txt' ) ); ?> </p>    
</div>
<div style="display: none">
 <?php 
    $estado = system("gpio -g read 17"); //ler o estado do pino gpio 17 pelo terminal
 ?>
</div>
<?php  if ($estado == "0") { ?>
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
