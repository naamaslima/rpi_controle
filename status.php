<div class="pt-3">
    <p><strong>Última ação:</strong> <?php echo  $ultimaAcao = end( file( 'log.txt' ) ); ?> </p>    
</div>
<div style="display: none">
 <?php 
    $estado = system("gpio -g read 17"); 
    $nivel_alto = system("gpio -g mode 10 in && gpio -g read 10");
	$nivel_medio = system("gpio -g mode 22 in && gpio -g read 22");	
	$nivel_baixo = system("gpio -g mode 27 in && gpio -g read 27");
 ?>
</div>
<?php if ($estado == "0") { ?>
                        <div style="max-width: 340px; margin: auto;" class="mb-3">
				<?php if($nivel_alto == "0" && $nivel_medio == "0" && $nivel_baixo == "0") { ?>
			    		<img src="<?=$url?>_storage/images/caixa-alto.png" class="img-fluid" width="230px"/>   
		    		<?php } elseif($nivel_alto == "1" && $nivel_medio == "0" && $nivel_baixo == "0") { ?>
		    			<img src="<?=$url?>_storage/images/caixa-medio.png" class="img-fluid" width="230px"/>   
				<?php } elseif($nivel_alto == "1" && $nivel_medio == "1" && $nivel_baixo == "0") { ?>
		    			<img src="<?=$url?>_storage/images/caixa-baixo.png" class="img-fluid" width="230px"/> 
				<?php } else { ?>
					<img src="<?=$url?>_storage/images/caixa-vazia.png" class="img-fluid" width="230px"/> 
				<?php } ?>
                            <img src="<?=$url?>_storage/images/bomba-dagua-on.png" class="img-fluid mb-3" style="vertical-align: bottom;" width="90px"></img>
                        </div>
                        <div>
                            <button class="btn btn-danger btn-lg" id="btn-desligar"><strong>Desligar</strong></button>
                        </div>
                <?php } else { ?>
                         <div style="max-width: 340px; margin: auto;" class="mb-3">
			    <?php if($nivel_alto == "0" && $nivel_medio == "0" && $nivel_baixo == "0") { ?>
			    		<img src="<?=$url?>_storage/images/caixa-alto.png" class="img-fluid" width="230px"/>   
			    <?php } elseif($nivel_alto == "1" && $nivel_medio == "0" && $nivel_baixo == "0") { ?>
		    			<img src="<?=$url?>_storage/images/caixa-medio.png" class="img-fluid" width="230px"/>   
			    <?php } elseif($nivel_alto == "1" && $nivel_medio == "1" && $nivel_baixo == "0") { ?>
		    			<img src="<?=$url?>_storage/images/caixa-baixo.png" class="img-fluid" width="230px"/> 
			    <?php } ?>
                            <img src="<?=$url?>_storage/images/bomba-dagua-off.png" class="img-fluid mb-3" style="vertical-align:bottom;" width="90px"/>
                        </div>
                        <div>
                            <button class="btn btn-info btn-lg" id="btn-ligar"><strong>Ligar</strong></button>
                        </div>
                <?php } ?>
