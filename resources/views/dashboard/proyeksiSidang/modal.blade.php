@foreach ($datas as $get)

<div class="modal fade" id="edit-{{ $get->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah Tanggal Prediksi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ url('/edit'.$get->id) }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="mb-3 form-group">
                    <label for="formFile" class="form-label">Silahkan ubah tanggalnya</label>
                    <input type="date" id="proyeksi_sidang" name="proyeksi_sidang" value="{{ old('proyeksi_sidang', $data->proyeksi_sidang) }}" class="form-control" placeholder="Tanggal Proyeksi" required="">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Ubah</button>
              {{-- <a href="dashboard/proyeksi/{proyeksi}/edit" class="btn btn-primary">Ubah</i></a> --}}
            </div>
        </form>
      </div>
    </div>
  </div>

@endforeach
