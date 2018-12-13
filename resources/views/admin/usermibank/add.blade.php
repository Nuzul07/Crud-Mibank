@extends('layouts.admin')
@section('title')
Add Usermibank
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" style="background-color: #e3f2fd;">Tambah Usermibank</div>
        <div class="card-body">
         <form action="{{url('admin/usermibank/save')}}" method="POST">
          <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" name="name" id="formGroupExampleInput" 
            placeholder="Name" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Password</label>
            <input type="text" class="form-control" name="password" id="formGroupExampleInput" 
            placeholder="Password" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Balance</label>
            <input type="text" class="form-control" name="balance" id="formGroupExampleInput" 
            placeholder="Balance" required>
          </div>
          @csrf
          <button class="btn btn-outline-success float-right" type="submit">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection