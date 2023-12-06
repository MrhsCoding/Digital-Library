@extends('layouts.links')
<h1 class="text-center mb-5">Login</h1>
@if (session('error'))
    <p class="alert alert-danger mt-5">{{ session('error') }}</p>
@endif
<form method="POST">
    @csrf
    <div class="mb-3">
      <label for="username" class="form-label">Username :</label>
      <input type="text" class="form-control" id="username" name="username" required oninvalid="this.setCustomValidity('Masukan username')" oninput="setCustomValidity('')">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password :</label>
      <input type="password" class="form-control" id="password" name="password" required oninvalid="this.setCustomValidity('Masukan username')" oninput="setCustomValidity('')">
    </div>
    <div class="text-center">
      <p>Not a member? <a href="/registerPeminjam">Register</a></p>
    </div>
    <center>
        <button type="submit" name="submit" class="btn btn-primary">Masuk</button>
    </center>
</form>