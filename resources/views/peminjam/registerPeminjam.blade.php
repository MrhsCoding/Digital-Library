@extends('layouts.links')
<h1 class="text-center mb-5">Register</h1>
{{-- @if (session('error'))
    <p class="alert alert-danger mt-5">{{ session('error') }}</p>
@endif --}}
@if($errors->any())
    <div class="text-danger">{{ $errors->first() }}</div>
@endif
{{-- @error(['username','password','email','namaLengkap','alamat'])
@enderror --}}
<form method="POST">
    @csrf
    <div class="mb-3">
      <label for="username" class="form-label">Username :</label>
      <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password :</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email :</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
      <label for="namaLengkap" class="form-label">Nama Lengkap :</label>
      <input type="text" class="form-control" id="namaLengkap" name="namaLengkap">
    </div>
    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat :</label>
      <input type="text" class="form-control" id="alamat" name="alamat">
    </div>
    <center>
        <button type="submit" name="submit" class="btn btn-primary">Tambahkan</button>
    </center>
</form>