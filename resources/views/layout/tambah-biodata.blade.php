@extends('template.templateAdmin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
{{-- @dd($data) --}}

<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Tambah Mahasiswa</h5>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('storeBiodata') }}">
          @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">NIM</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="NIM" id="basic-default-name" placeholder="E4122..." />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama" id="basic-default-name" placeholder="John Doe" />
            </div>
          </div>
          <div class="row mb-3">
            <label for="exampleFormControlSelect1" class="col-form-label col-sm-2">Program Studi</label>
            <div class="col-sm-10">
              <select class="form-select" name="prodi" id="exampleFormControlSelect1" aria-label="Default select example">
                <option selected>Pilih Prodi</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Komputer">Teknik Komputer</option>
                <option value="Manajemen Informatika">Manajemen Informatika</option>
              </select>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="html5-date-input" class="col-md-2 col-form-label">Tanggal Lahir</label>
            <div class="col-md-10">
              <input class="form-control" type="date" name="tgl_lahir" id="html5-date-input" />
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="alamat">Alamat</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Kec sumbersari Kab Jember"/>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-phone">No telepon</label>
            <div class="col-sm-10">
              <input type="text" id="basic-default-phone" name="no_telp" class="form-control phone-mask" placeholder="658 799 8941"
              />
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  </div>
@endsection