
<div class="modal fade" id="upload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Upload File</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="mb-0">
                <label for="formFile" class="form-label">Contoh Data Untuk di upload</label><br>
                <a href="https://drive.google.com/drive/folders/1qg4SEm0TC3VUFVGW8r5fzjdbF7UbHXL9?usp=sharing" class="d-none d-sm-inline-block btn btn-sm btn-light shadow-sm border" target="_blank"><i
                    class="fas fa-download fa-sm text-black-50 mr-2"></i>Contoh Data</a>
              </div>
        </div>

        <form action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data" role="form">
            @csrf
            <div class="modal-body">
                <div class="mb-3 form-group">
                    <label for="formFile" class="form-label">Silahkan Upload Datanya</label>
                    <input class="form-control-file" type="file" id="file" name="file">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </form>

      </div>
    </div>
</div>
