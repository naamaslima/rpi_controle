<?php
    if($_POST) {
        //define o pino como saída
       	system("gpio -g mode 17 out");
       	//define o pino no estado 0
        system("gpio -g write 17 0");
        
        $mensagem = "Bomba desligada em ". date('d/m/Y')." às ". date('H:i'). "\n";
        
        $file = fopen('log.txt', 'a');
        fwrite($file, $mensagem);
        fclose($file);
        
        echo $mensagem;
        
    } else {
?>
<meta charset="utf-8">
<div class="bg-light">
	<h4>Serviço indisponível</h4>
</div>
<?php } ?>
