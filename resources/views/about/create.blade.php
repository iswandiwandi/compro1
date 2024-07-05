@extends('layouts.app')
@section('content')
<div class="card">
<div class="card-header">{{$title}}</div>
    <div class="card-body">
       <form action="{{route('admin.profile.store')}}" method="POST">
        @csrf
        <div class="form-group mb-3">
        <label for="">Nama</label>
        <input type="text" name="name" placeholder="Masukkan Nama Lengkap Anda" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="">Email</label>
        <input type="email" name="email" placeholder="Masukkan Email Anda" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="">Nomor Tlp</label>
        <input type="number" name="phone" placeholder="Masukkan No Tlp Anda" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="">Alamat</label>
        <textarea name="address" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group mb-3">
        <label for="">Deskripsi</label>
        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group mb-3">
        <label for="">Github</label>
        <input type="text" name="github_link" placeholder="Masukkan Url Github Anda" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="">linkedin</label>
        <input type="text" name="linkedin_link" placeholder="Masukkan Url linkedln Anda" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="">Facebook</label>
        <input type="text" name="facebook_link" placeholder="Masukkan Url Facebook Anda" class="form-control">
    </div>
    <div class="form-group mb-3">
        <label for="">Twitter</label>
        <input type="text" name="twitter_link" placeholder="Masukkan Url Twiter Anda" class="form-control">
    </div>
    <div class="form-group mb-3">
        <input type="submit" class="btn btn-primary" value="Simpan">
        <a href="{{url()->previous()}}" class="btn btn-danger">Kembali</a>
    </div>
    
</form>
</div>
@endsection
