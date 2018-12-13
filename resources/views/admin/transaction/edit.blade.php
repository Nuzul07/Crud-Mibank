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
            <label for="formGroupExampleInput">Amount</label>
            <input type="text" class="form-control" name="amount" id="formGroupExampleInput" 
            placeholder="Amount" value="{{$transaction->amount}}" required>
          </div>
          @csrf
          <input type="hidden" name="id" value="{{$transaction->id}}">
          <button class="btn btn-outline-success float-right" type="submit">Update Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection