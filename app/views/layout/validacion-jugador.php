
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<script>
  
$(document).ready(function() {
  $("#playerForm").validate({
    rules: {
      nombre: {
        required: true,
      },
      apellidos: {
        required: true,
      },
      numero: {
        required: true,
      },
      equipo: {
        required: true,
      },
      nacimiento: {
        required: true,
      }
    },
    messages: {
      nombre: {
        required: 'Introduce el nommbre del jugador',
      },
      apellidos: {
        required: 'Introduce los apellidos',
      },
      numero: {
        required: 'Elige el numero',
      },
      equipo: {
        required: 'Introduce el equipo',
      },
      nacimiento: {
        required: 'Introduce la fecha de fundación',
      }
    }
  });
});
</script>