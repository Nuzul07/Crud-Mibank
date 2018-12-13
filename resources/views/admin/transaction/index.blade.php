@extends('layouts.admin')
@section('title')
Transaction Dashboard
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" style="background-color: #e3f2fd;">Daftar Transaction</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table" id="example">
          <thead>
            <tr>
              <th>#</th>
              <th>User</th>
              <th>Amount</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $i= 1;
              $transaction = \App\Transaction::all();
              ?>
              @foreach($transaction as $q)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$q->id_mibanks}}</td>
              <td>{{$q->amount}}</td>
              <td>
                <a href="{{url('admin/transaction/edit/'.$q->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                 <a href="{{url('admin/transaction/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                 class="btn btn-outline-danger btn-sm">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
        <hr>
        <li class="list-group-item float-right">
          <a href="{{url('admin/transaction/add')}}" class="btn btn-primary btn-sm">Tambah Data</a>
        </li>
      </div>
    </div>
  </div>
</div>
</div>
@endsection