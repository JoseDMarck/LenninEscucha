     



<div class="comentarios">

		 
 

    <div class="contenedor">


	<form id="new_post" name="new_post" method="post" action="<?php echo get_template_directory_uri(); ?>/formulario_insertar.php"> 
    


    <div class="formulario_a">

         <span class="tituloComentarios">Nombre:</span><br>
        <input type="text" name="nombre" id="nombre" size="45" id="input-title"/><br><br>

        <span class="tituloComentarios">Correo electrónico (opcional):</span><br>
        <input type="text" name="correo" id="correo" size="45" id="input-title"/><br><br>

         <span class="tituloComentarios">Teléfono (opcional):</span><br>
        <input type="text" name="telefono" id="telefono" size="45" id="input-title"/><br><br>
        
  
	
	     <span class="tituloComentarios">Provincia:</span><br>
       <!--  <input type="text" name="ciudad" id="ciudad" size="45" id="input-title"/><br> -->

        
        <select name="ciudad" id="ciudad" >
          <option value="Azuay">Azuay</option>
          <option value="Bolívar">Bolívar</option>
          <option value="Cañar">Cañar</option>
          <option value="Carchi">Carchi</option>
          <option value="Chimborazo">Chimborazo</option>
          <option value="Cotopaxi">Cotopaxi</option>
          <option value="El Oro">El Oro</option>
          <option value="Esmeraldas">Esmeraldas</option>
          <option value="Galápagos">Galápagos</option>
          <option value="Guayas">Guayas</option>
          <option value="Imbabura">Imbabura</option>
          <option value="Loja">Loja</option>
          <option value="Los Ríos">Los Ríos</option>
          <option value="Manabí">Manabí</option>
          <option value="Morona Santiago">Morona Santiago</option>
          <option value="Napo">Napo</option>
          <option value="Orellana">Orellana</option>
          <option value="Pastaza">Pastaza</option>
          <option value="Pichincha">Pichincha</option>
          <option value="Santa Elena">Santa Elena</option>
          <option value="Santo Domingo de los Tsáchilas">Santo Domingo de los Tsáchilas</option>
          <option value="Sucumbíos">Sucumbíos</option>
          <option value="Tungurahua">Tungurahua</option>
          <option value="Zamora Chinchipe">Zamora Chinchipe</option>
          <option value="Otro">Otro</option>
        </select>
<br><br><br>




    
 


 
   
    </div> <!--  formulario_a -->


 

    <div class="formulario_b">

 	     <span class="tituloComentarios">Descripción:</span><br>
       
	      <textarea  name="descripcion" id="descripcion" class="Desc" maxlength="250"  rows="4" cols="50" > </textarea>
        <div class="countdown"></div>
        <br>
        <br>
    
        <input type="hidden" name="action" value="new_post">
            <center>
             <input class="subput round enviarComentario" type="submit" name="submit" value="Enviar"/>
            </center>
   
    </div><!--  formulario_b -->


   <div style="clear: both; height: 50px;"></div>
</form>

</div><!--  Contenedor -->
  
 
 <div class="avisoPrivacidad">
   Aviso de privacidad: Los datos personales recabados en este sitio serán protegidos bajo los preceptos constitucionales que garantizan el derecho a la intimidad y a la autodeterminación informática.
 </div>
</div>

