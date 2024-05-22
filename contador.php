<?php
function contagemregressiva(){ 
       $output = '';
		 if (in_array($timezone, DateTimeZone::listIdentifiers()))
				{
					date_default_timezone_set($timezone);
					$currentTime = date( 'Y-m-d H:i:s');
					$output = $currentTime;
				}
				else {
					$output = "Invalid Timezone";
				}
		#Informamos as datas e horários de início e fim no formato Y-m-d H:i:s e os convertemos para o formato timestamp 
		$horaacfmeta = get_post_meta(get_the_id(),'hora',true); //Retorna do Valor do ACF Hora em Modelo Metadado
		$dataacfmeta = get_post_meta(get_the_id(),'data',true);
	    $junto = $dataacfmeta .$horaacfmeta;
		
		$dia_hora_atual = strtotime(date("Y-m-d H:i:s"));
		$dia_hora_evento = strtotime(date($junto));
		#Achamos a diferença entre as datas...
		$diferenca = $dia_hora_evento - $dia_hora_atual;
		#Fazemos a contagem...
		$dias = intval($diferenca / 86400);
		$marcador = $diferenca % 86400;
		$hora = intval($marcador / 3600);
		$marcador = $marcador % 3600;
		$minuto = intval($marcador / 60);
		$segundos = $marcador % 60;
		#Exibimos o resultado
	
	     if ($minuto <= 0 )
				 {
					 return "Evento Encerrado";
				 }
				 else {
					 //return "$dias dia(s) $hora hora(s) $minuto minuto(s) $segundos segundo(s)";
					 return "$dias dia(s) $hora hora(s) $minuto minuto(s)";
				 }
       
} 
add_shortcode( 'contagemregressiva', 'contagemregressiva' );