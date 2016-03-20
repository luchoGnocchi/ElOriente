<?php
echo 'SDdasda';
 $f = 'Lista_de_Precios_El_Oriente.pdf';
    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=\"$f\"\n");
    $fp=fopen("$f", "r");
    fpassthru($fp);
		$nombre="Luis Alberto";
        $fecha=date("d-m-Y");
        $hora=date("H:i:s");      
        $asunto='Compra en x dominio';
        $desde="www.tupagina.com";
        //Direccion del remitente
        $correo="grijalvaromero@gmail.com";
        /*Debe de indicar los estilos css aqui mismo en la variable  y si quieres incluir imagenes,estas tendran que 
        estar en un servidor yo tome la de google */
       $comentario='
        <div style="
	        border: 1px solid #d6d2d2;
	        border-radius: 5px;
	        box-shadow: 5px 5px 10px rgba(57,29,150,0.5);
	        color:#9378f0;
	        padding:10px;
	        width:800px%;
	        heigth:400px;
        ">
        <center>
        <img src="http://iticetp.edu.uy/cabezal.png" width="400" heigth="250">
        <h1><em>Notificacion de falta docente</em></h1></center>

            <hr width="90%">

        <p>Hola '.$nombre.' muchas gracias por ver este mensaje, a continuación te mostramos los detalles de la falta docente:</p>
          <h2>Desde:hoy</h2>
		  <h2>Hasta:hoy </h2>
          <h2>Profesor: PepeArgento</h2>';


        //para el envío en formato HTML 
         echo $comentario;
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "Content-type: text/html; charset=utf8\r\n"; 

        //dirección del remitente 
        $headers .= "From: Remitente\r\n"; 
        
        //FUNCION PARA ENVIAR EL EMAIL
        mail('lucianognocchi@gmail.com',$asunto,$comentario,$headers);
       header("Location:".$_SERVER['HTTP_REFERER']);
?>