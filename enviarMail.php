<?php
 
 if (isset($_GET['mail'])){
 		
        $fecha=date("d-m-Y");
        $hora=date("H:i:s");      
        $asunto='Compra en x dominio';
        $desde="www.tupagina.com";
        //Direccion del remitente
        $correo="grijalvaromero@gmail.com";
        /*Debe de indicar los estilos css aqui mismo en la variable  y si quieres incluir imagenes,estas tendran que 
        estar en un servidor yo tome la de google */
       $comentario='Se correo : '.$_GET['mail'].' y con telefono: '.$get['Telefono'].' a descargado el formulario de precios a las '.$hora.' del dia '.$fecha;
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "Content-type: text/html; charset=utf8\r\n"; 

        //dirección del remitente 
        $headers .= "From: El Oriente\r\n"; 
        
        //FUNCION PARA ENVIAR EL EMAIL
        mail('lucianognocchi@gmail.com',$asunto,$comentario,$headers);
        $f = 'Lista_de_Precios_El_Oriente.pdf';
    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=\"$f\"\n");
    $fp=fopen("$f", "r");
    fpassthru($fp);

       }
      // header("Location:".$_SERVER['HTTP_REFERER']);
?>