
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<script>
  
$(document).ready(function() {
  $("#teamForm").validate({
    rules: {
      nombre: {
        required: true,
      },
      ciudad: {
        required: true,
      },
      deporte: {
        required: true,
      },
      fundacion: {
        required: true,
      }
    },
    messages: {
      nombre: {
        required: 'Introduce el nommbre del equipo',
      },
      ciudad: {
        required: 'Introduce la ciudad',
      },
      deporte: {
        required: 'Elige el deporte',
      },
      fundacion: {
        required: 'Introduce la fecha de fundación',
      }
    }
  });
});
</script>