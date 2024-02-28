@extends('template.templateAdmin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h1>HalLo {{ $data['name'] }}, email kamu adalah {{ $data['email'] }}, dan alamat kamu adalah {{ $data['address'] }}</h1>
  </div>
@endsection