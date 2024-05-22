<?php

//Shortcod ocultar barra Lateral
function ocutbarra(){ 
        //Retorna o campo da Data referente ao post que o shortcode está sendo solicitado
	    $acfmod = get_field('Ocbarra');

        $output= '';
        if ($acfmod == "1")
        {
         $output = "exibir";
        }
        else {
	      $output = "ocultar";
        }
        return $output;
} 
add_shortcode( 'ocutbarralat', 'ocutbarra' );

//Shortcod mudança do texto de dias referente ao acf modalidade
function acfmodalidade(){ 
        //Retorna o campo da Data referente ao post que o shortcode está sendo solicitado
	    $acfmod = get_field('modalidade_do_curso');
	    $acfdata = get_field('data');
	    $horaacfmeta = get_post_meta(get_the_id(),'hora',true); //Retorna do Valor do ACF Hora em Modelo Metadado
		$dataacfmeta = get_post_meta(get_the_id(),'data',true);

        $output= '';
        if ($acfmod == "Gravado")
        {
         $output = "Início Imediato!";
        }
        else {
	      $output = "Data: " .$acfdata ." às " .$horaacfmeta ;
        }
        return $output;
} 
add_shortcode( 'acfdata', 'acfmodalidade' );

//Shortcod mudança do botão do texto
function botinscrito(){ 
        //Retorna o campo da Data referente ao post que o shortcode está sendo solicitado
	    $acfmod = get_field('o_curso_e:');

        $output= '';
        if ($acfmod == "Curso Gratuito")
        {
         $output = "Inscreva-se!";
        }
        else {
	      $output = "Compre agora";
        }
        return $output;
} 
add_shortcode( 'botinscrito', 'botinscrito' );

function botinscritourl(){ 
        //Retorna o campo da Data referente ao post que o shortcode está sendo solicitado
	    $acfmod = get_field('o_curso_e:');

        $output= '';
        if ($acfmod == "Curso Gratuito")
        {
         $output = "#gratuito";
        }
        else {
	      $output = "#preco";
        }
        return $output;
} 
add_shortcode( 'botinscritourl', 'botinscritourl' );

//Shortcod ocultar contador
function ocutcontador(){ 
        //Retorna o campo da Data referente ao post que o shortcode está sendo solicitado
        $acfmod = get_field('Occontador');
        $acfmod2 = get_field('modalidade_do_curso');
    
    
        $output= '';
        if ($acfmod == 1)
        {
          if ($acfmod2 == 'Ao vivo')
          {
            $output = "exibir";
          }
          else {
          $output = "ocultar";
          }
        }
        else {
          $output = "ocultar";
        }
        return $output;
    } 
    add_shortcode( 'ocutcontinf', 'ocutcontador' );
    
    
    // Shortcord data completa
    function timeZone_funch( $atts ) 
    {
        extract(shortcode_atts(array('timezone'    => 'America/Sao_Paulo'), $atts)); 
    /* America/Sao_Paulo is default Timezone */
        $output             = '';
        if (in_array($timezone, DateTimeZone::listIdentifiers()))
        {
            date_default_timezone_set($timezone);
            $currentTime = date( 'd-m-Y h:i:s A');
            $output = $currentTime;
        }
        else {
            $output = "Invalid Timezone";
        }
    
        return $output;
    }
    add_shortcode( 'current_time', 'timeZone_funch' );
    
    //Shortcood data
    
    function displaydate(){ 
      extract(shortcode_atts(array('timezone'    => 'America/Sao_Paulo'), $atts)); 
    /* America/Sao_Paulo is default Timezone */
        $output             = '';
        if (in_array($timezone, DateTimeZone::listIdentifiers()))
        {
            date_default_timezone_set($timezone);
            $currentTime = date( 'd/m/Y ');
            $output = $currentTime;
        }
        else {
            $output = "Invalid Timezone";
        }
    
        return $output;
    } 
    add_shortcode( 'date', 'displaydate' );
    
    
    //Shortcood hora
    
    function displayhora(){ 
    extract(shortcode_atts(array('timezone'    => 'America/Sao_Paulo'), $atts)); 
    /* America/Sao_Paulo is default Timezone */
        $horasistema = '';
        if (in_array($timezone, DateTimeZone::listIdentifiers()))
        {
            date_default_timezone_set($timezone);
            $horasistema = date( 'H:i:s');
        }
        else {
            $horasistema = "Invalid Timezone";
        }
    
        return $horasistema;
    } 
    add_shortcode( 'hora', 'displayhora' );
    
    
    //Shortcod mostrar se for pago
    function ocbpreco(){ 
        //Retorna o campo da Data referente ao post que o shortcode está sendo solicitado
        $acfmod = get_field('o_curso_e:');
        $acfpreco = get_field('guia_de_preco');
    
    
        $output= '';
        if ($acfmod == "Curso Pago")
        {
            
          if ($acfpreco == "0")
          {	
             $output = "ocultar";
          }
          else {
           $output = "exibir";
          }	
            
        }
        else {
          $output = "ocultar";
        }
        return $output;
    } 
    add_shortcode( 'ocbpreco', 'ocbpreco' );
    
    //Shortcod mostrar se for gratuito
    function ocbgratuito(){ 
        //Retorna o campo da Data referente ao post que o shortcode está sendo solicitado
        $acfmod = get_field('o_curso_e:');
    
        $output= '';
        if ($acfmod == "Curso Gratuito")
        {
         $output = "exibir";
        }
        else {
          $output = "ocultar";
        }
        return $output;
    } 
    add_shortcode( 'ocbgratuito', 'ocbgratuito' );
    
    //Shortcod oculta a guia certificado se for ebook
    function ocbcertificado(){ 
        //Retorna o campo modalidade do curso
        $acfmod = get_field('modalidade_do_curso');
    
        $output= '';
        if ($acfmod == "E-Book")
        {
         $output = "ocultar";
        }
        else {
          $output = "exibir";
        }
        return $output;
    } 
    add_shortcode( 'ocbcertificado', 'ocbcertificado' );
    
    
