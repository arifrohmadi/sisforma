@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       {{-- <div class="col-md-8 col-md-offset-2"> --}}
        <div class="col-lg-12 margin-tb">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Data Alumni</h3></div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (Session::has('after_update'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-dismissible alert-{{ Session::get('after_update.alert') }}">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>{{ Session::get('after_update.title') }}</strong>
                      <a href="javascript:void(0)" class="alert-link">{{ Session::get('after_update.text-1') }}</a> {{ Session::get('after_update.text-2') }}
                    </div>
                </div>
            </div>
        @endif
        
        <center>
        <table class="table table-bordered table-hover table-striped table-responsive">
            <thead>
                <tr class="bg-primary">
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No. Telepon</th>
                    <th scope="col">Email</th>
                    <th scope="col">Linkedin</th>
                    <th scope="col">Angkatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $users as $user )
                    <tr>
                        <td>{{ $user->id}} </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->profile->jenis_kelamin }}</td>
                        <td>{{ $user->profile->pekerjaan }}</td>
                        <td>{{ $user->profile->alamat }}</td>
                        <td>{{ $user->profile->telp }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->profile->linkedin }}</td>
                        <td>{{ $user->profile->angkatan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </center>    
            </div>
        </div>
    </div>
</div>
@endsection
