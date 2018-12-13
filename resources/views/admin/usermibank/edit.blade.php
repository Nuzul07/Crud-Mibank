@extends('layouts.admin')
@section('title')
Edit Transaction
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" style="background-color: #e3f2fd;">Edit Transaction</div>
        <div class="card-body">
         <form action="{{url('admin/transaction/update')}}" method="POST">
          <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" name="name" id="formGroupExampleInput" 
            placeholder="Name" value="{{$usermibank->name}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Password</label>
            <input type="text" class="form-control" name="password" id="formGroupExampleInput" 
            placeholder="Password" value="{{$usermibank->password}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Balance</label>
            <input type="text" class="form-control" name="balance" id="formGroupExampleInput" 
            placeholder="Balance" value="{{$usermibank->balance}}" required>
          </div>
          @csrf
          <input type="hidden" name="id" value="{{$usermibank->id}}">
          <button class="btn btn-outline-success float-right" type="submit">Update Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection