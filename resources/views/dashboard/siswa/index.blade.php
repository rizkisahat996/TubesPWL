@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Data Siswa</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="row justify-content-start mb-3">
  <div class="col-md-6">
    <form action="{{ route('dashboard.siswa.index') }}" method="GET" role="search">
      @csrf
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
        <button class="btn btn-dark" type="submit" id="button-addon2">Search</button>
      </div>
    </form>
  </div>
</div>

<div class="table-responsive col-lg-10">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->username }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->status }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection