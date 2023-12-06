@extends('layouts.links')

{{-- @section('content') --}}
<div class="container">
    <h1 class="text-center mb-5">Data Peminjam Buku</h1>
    <table class="table table-primary table-hover">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Peminjam</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Tanggal Peminjaman</th>
            <th scope="col">Tanggal Pengembalian</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @php
                $i = 1;
            @endphp
            @foreach ($results as $result)
                <tr>
                    <th scope="row">{{ $i }}</th>
                    <td>{{ $result->namaLengkap }}</td>
                    <td>{{ $result->judul }}</td>
                    <td>{{ $result->tanggalPeminjaman }}</td>
                    <td>{{ $result->tanggalPengembalian }}</td>
                </tr>
                @php
                    $i++;
                @endphp
            @endforeach
        </tbody>
    </table>
</div>
{{-- @endsection --}}