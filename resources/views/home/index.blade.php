<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adza Zarif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    

    <div class="container mt-5">

        <h1>Selamat datang user</h1>

        <form action="/logout" method="POST">
            @csrf
            <button class="btn btn-danger" type="submit">Logout</button>
          </form>
       <div class="table-responsive mt-5 text-nowrap">

  
         <table class="table">
           <thead>
             <tr>
               <th>Nama</th>
               <th>Tanggal Lahir</th>
               <th>Prodi</th>
               <th>Alamat</th>
               <th>No Telepon</th>
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

             </tr>
             @endforeach
            
           </tbody>
         </table>
       </div>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>