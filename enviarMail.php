<?php

 $f="archivos/Lista_de_Precios_El_Oriente.pdf"   ;
     header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=\"$f\"\n");
    $fp=fopen("$f", "r");
    fpassthru($fp);
    
    if(isset($_POST["correo"]) ){
       $correo=$_POST["correo"];
       $telefono=$_POST["telefono"]; 
    }
		
        $nombre="Admin";
        $fecha=date("d-m-Y");
        $hora=date("H:i:s");      
        $asunto='Descarga de Catalogo';
		$correo=$_POST["correo"];
		$telefono=$_POST["telefono"];         

        /*Debe de indicar los estilos css aqui mismo en la variable  y si quieres incluir imagenes,estas tendran que 
        estar en un servidor yo tome la de google */
       $comentario='Hola '.$nombre.' el usuario con mail:'.$correo.' y telefono: '.$telefono.' a descargado el listado de precios desde ElOriente.uy '; 


        //para el envío en formato HTML 
         echo $comentario;
        $headers = "MIME-Version: 1.0\r\n"; 
            $headers .= "Content-type: text/html; charset=utf8\r\n"; 

        //dirección del remitente 
        $headers .= "From: Remitente\r\n"; 
        //FUNCION PARA ENVIAR EL EMAIL
        mail('mirza.producciones@gmail.com',$asunto,$comentario,$headers);
?>



