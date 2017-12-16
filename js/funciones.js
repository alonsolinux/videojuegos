<script type="text/javascript">
  function delete_jueego(id_juego){

    var confirmation = confirm('¿Está seguro de que desea eliminar la actividad con clave '+ id_juego);

    if (confirmation) {
      window.location = "contenido/delete_juego.php?idVideojuego=" + id_juego;
    }
  }
 </script>