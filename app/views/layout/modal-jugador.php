<!-- Modal -->
<div class="modal fade" id="confirmDelete" tabindex="-1" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content text-center">
      <form method="post" action="../../jugadores/deleteplayer">

        <div class="modal-header">
          <h5 class="modal-title">¿Seguro que quieres borrar este jugador?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h2 id="playerName"></h2>
          <input type="text" name="playerId" id="playerId" readonly style="visibility: hidden;" />
        </div>
        <div class="modal-footer">
          <button type="submit" id="buttonDelete" class="btn btn-primary">Borrar</button>
          <button type="button" class="btn btn-secondary" onclick="closeModal()">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>

  $(document).ready(function() {
      
    $('.btn-danger').on("click", borrar);
  });
  
  function borrar(){

    let id = this.dataset.id;
    let name = this.dataset.name;

    $('#playerName').html(name);
    $('#playerId').val(id);

    $('#confirmDelete').modal('show');
  }

  function closeModal() {
    $('#confirmDelete').modal('hide');
  }

</script>