<?php	
    if($_POST) {
        //define o pino como saída
       	system("gpio -g mode 9 out");
       	//define o pino no estado 0, ativa o relê
        system("gpio -g write 9 0 && sleep .5 &&  gpio -g write 9 1");
       
       	$mensagem = "Portão acionado em ". date('d/m/Y')." às ". date('H:i'). "\n";
        
        $file = fopen('logportao.txt', 'a');
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