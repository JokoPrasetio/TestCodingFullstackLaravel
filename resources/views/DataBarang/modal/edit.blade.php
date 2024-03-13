<div class="modal fade" id="EditModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Create Data</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" id="EditForm">
            @method('put')
            @csrf
        <div class="modal-body">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name_old" name="name" placeholder="###" required>
                <label for="floatingInput">Nama Barang</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" name="stok" id="stok_old" class="form-control" placeholder="##" required>
                <label for="floatingInput">Stok</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" name="jumlah_terjual" id="jumlah_terjual_old" class="form-control" placeholder="##" required>
                <label for="floatingInput">Jumlah Terjual</label>
            </div>
            <div class="mb-3">
                <label for="">Tanggal Tranksaksi</label>
                <input type="date" name="tanggal_tranksaksi" id="tanggal_tranksaksi_old" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="mb-2">Jenis Barang</label>
                <select name="jenis_barang" class="form-select" id="jenis_barang_old" required>
                    <option value="">Select Choose</option>
                    <option value="Pembersih">Pembersih</option>
                    <option value="Konsumsi">Konsumsi</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
    </div>
  </div>
