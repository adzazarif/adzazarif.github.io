@extends('template.templateAdmin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
         @if (session()->has("success"))
            <div class="alert alert-success alert-dismissible" role="alert">
              {{ session()->get('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        <div class="table-responsive mt-2 text-nowrap">
            <a class="btn btn-info m-3" href="/tambah-biodata" role="button">Tambah</a>
          <table class="table">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Prodi</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($data as $item)
              <tr>
                <td>{{$item['nama_mhs']}}</td>
                <td>{{$item['ttl_mhs']}}</td>
                <td>{{$item['prodi_mhs']}}</td>
                <td>{{$item['alamat_mhs']}}</td>
                <td>{{$item['notelp_mhs']}}</td>
                <td>
                    <a class="btn btn-danger" href="/admin/hapus-paket/" onclick="return confirm('Apakah yakin menghapus')" role="button"><i class='bx bx-trash' ></i></a>
                    <a class="btn btn-warning" href="/admin/edit-paket/" role="button"><i class='bx bxs-edit-alt'></i></a>
                    <a class="btn btn-success" href="/admin/detail-paket/" role="button"><i class='bx bx-message-detail' ></i></a>
                </td>
              </tr>
              @endforeach
             
            </tbody>
          </table>
        </div>
      </div>

  </div>
@endsection