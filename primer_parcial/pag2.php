<?php
include_once "header.php";
?>
<main>
<h1>Contactame</h1>
<!-- <img  class="centrado" src="img/messi_FCB.jpg" alt="Messi" height="197" width="320" tittle="Messi">
<img  class="centrado" src="img/koeman_FCB.jpeg" alt="koeman" height="169" width="320" tittle="Koeman">

--->

<form action="res.php" method="post" enctype="multipart/form-data">
   <div>
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" title="ingrese su nombre aquí" required placeholder="Mi nombre">
    </div><br>
    
    <div>
       <label for="ape">Apellido:</label>
       <input type="text" id="ape" name="apellido" required placeholder="Mi apellido">
    </div> <br>

      <div>           
        <label for="correo">Email:</label>
        <input type="email" id="correo" name="correo"  required placeholder="ejemplo@hola.com">            
      </div><br>
         
      <div>
         <label for="consulta">Comentarios:</label><br>
          <textarea requiered name="consulta" id="consulta" cols="60" rows="5" maxlength="400" placeholder="Dejame tu comentario o consulta!!" require></textarea>
      </div><br>

      <div>
        <label for="file">Subir archivo</label>
          <input type="file" id="file" name="file">
      </div><br>

      <div>
        <label for="cb">
          <input type="checkbox" id="cb" name="cb">
          Acepto terminos y condiciones</label>
      </div><br>

      <div>
        <input class="cursiva" type="submit" id="sub" value="Enviar" disabled="disabled">
        <input type="reset" value="Borrar">
       </div>

   </form>

<script type="text/javascript">
  var cb = document.getElementById('cb');
  var sub= document.getElementById('sub');
  cb.onclick= function(){
    if (cb.checked) {
      sub.disabled=false;
      
    }else{
      sub.disabled=true;
    }
  }
</script>

</main>
<?php
include_once "footer.php";
?>
