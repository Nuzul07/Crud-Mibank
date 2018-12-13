@extends('layouts.admin')
@section('title')
Add Transaction
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" style="background-color: #e3f2fd;">Tambah Transaction</div>
        <div class="card-body">
         <form action="{{url('admin/transaction/save')}}" method="POST">
          <div class="form-group">
            <label for="formGroupExampleInput">Pilih User</label>
          <select class="custom-select my-1 mr-sm2" name="id_mibanks">
            <option disabled selected value="null">Choose</option>
            <?php
              $data = \App\Usermibank::all();
            ?>
            @foreach($data as $key)
            <option value="{{$key->id}}">{{$key->name}}</option>
            @endforeach
          </select>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Amount</label>
            <input type="text" class="form-control" name="amount" id="formGroupExampleInput" 
            placeholder="Amount" required>
          </div>
          @csrf
          <button class="btn btn-outline-success float-right" type="submit">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection