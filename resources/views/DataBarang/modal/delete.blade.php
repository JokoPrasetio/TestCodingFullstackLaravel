<div class="modal" id="DeleteModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Delete Data</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="post" id="DeleteForm">
            @method('delete')
            @csrf
            <div class="modal-body">
                Apakah yakin ingin menghapus data ini <strong id="DeleteConfirm"></strong>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
        </form>

      </div>
    </div>
  </div>
