@extends('layouts.sidebar')

@section('content')
<div class="container">
    <h1 class="text-center mb-5">Data Petugas</h1>
    <table class="table table-primary table-hover">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Alamat</th>
            <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @php
                $i = 1;
            @endphp
            @foreach ($results as $result)
                <tr>
                    <th scope="row">{{ $i }}</th>
                    <td>{{ $result->username }}</td>
                    <td>{{ $result->email }}</td>
                    <td>{{ $result->namaLengkap }}</td>
                    <td>{{ $result->alamat }}</td>
                    <td>
                        <button class="btn btn-primary">Ubah</button>
                        <button class="btn btn-danger">Hapus</button>
                    </td>
                </tr>
            @php
                $i++
            @endphp
            @endforeach
        </tbody>
    </table>
</div>
@endsection