@extends('layouts.admin')
@section('title')
Usermibank Dashboard
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" style="background-color: #e3f2fd;">Daftar Usermibank</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table" id="example">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Balance</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $i= 1;
              $usermibank = \App\Usermibank::all();
              ?>
              @foreach($usermibank as $q)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$q->name}}</td>
              <td>{{$q->balance}}</td>
              <td>
                <a href="{{url('admin/usermibank/edit/'.$q->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                 <a href="{{url('admin/usermibank/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                 class="btn btn-outline-danger btn-sm">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
        <hr>
        <li class="list-group-item float-right">
          <a href="{{url('admin/usermibank/add')}}" class="btn btn-primary btn-sm">Tambah Data</a>
        </li>
      </div>
    </div>
  </div>
</div>
</div>
@endsection