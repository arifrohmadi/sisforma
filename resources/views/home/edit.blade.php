@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       {{-- <div class="col-md-8 col-md-offset-2"> --}}
        <div class="col-lg-12 margin-tb">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Update Data</h3></div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="panel-body">
                <a href="{{ URL('home') }}" class="btn btn-raised btn-primary pull-left">Kembali</a>

        {{-- start part alert --}}
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
        {{-- end part alert --}}

        <div class="row">
            <div class="col-md-12"><hr>
                <div class="col-md-2"></div>
                <div class="col-md-8">
                
                    <form class="form-horizontal" action="{{ URL('home/update/'. $showById->id) }}" method="POST">
                    {{ csrf_field() }}
                      <fieldset>
                            <div class="form-group label-floating">
                              <label class="control-label" for="focusedInput2">Nama</label>
                              <input class="form-control" id="focusedInput2" type="text" name="name" value="{{ $showById->user->name }}">
                              <p class="help-block">* Masukan nama dengan benar.</p>
                            </div>
                            <div class="form-group label-floating">
                              <label class="control-label" for="focusedInput2">Email</label>
                              <input class="form-control" id="focusedInput2" type="text" name="email" value="{{ $showById->user->email }}">
                              <p class="help-block">* Masukan email dengan benar.</p>
                            </div>
                            <div class="form-group label-floating">
                              <label class="control-label" for="select111">Jenis Kelamin</label>
                              
                                <select id="select111" class="form-control" name="jenis_kelamin">
                                  <option value="laki-laki">Laki-laki</option>
                                  <option value="perempuan">Perempuan</option>
                                </select>                                        
                              
                            </div>
                            <div class="form-group label-floating">
                              <label class="control-label" for="focusedInput2">Pekerjaan</label>
                              <input class="form-control" id="focusedInput2" type="text" name="pekerjaan" value="{{ $showById->pekerjaan }}">
                              <p class="help-block">Apabila belum bekerja bisa dikosongi.</p>
                            </div>
                            <div class="form-group label-floating">
                              <label class="control-label" for="focusedInput2">Alamat</label>
                              <input class="form-control" id="focusedInput2" type="text" name="alamat" value="{{ $showById->alamat }}">
                              <p class="help-block">* Masukan alamat lengkap.</p>
                            </div>
                            <div class="form-group label-floating">
                              <label class="control-label" for="focusedInput2">No. Telepon</label>
                              <input class="form-control" id="focusedInput2" type="text" name="telp" value="{{ $showById->telp }}">
                              <p class="help-block">* Masukan no. telepon.</p>
                            </div>
                            <div class="form-group label-floating">
                              <label class="control-label" for="focusedInput2">Linkedin</label>
                              <input class="form-control" id="focusedInput2" type="text" name="linkedin" value="{{ $showById->linkedin }}">
                              <p class="help-block">Masukan alamat linkedin (bila ada)</p>
                            </div>
                            <div class="form-group label-floating">
                              <label class="control-label" for="focusedInput2">Angkatan</label>
                              <input class="form-control" id="focusedInput2" type="text" name="angkatan" value="{{ $showById->angkatan }}">
                              <p class="help-block">* Masukan angkatan (tahun masuk).</p>
                            </div>
                            <div class="form-group">
                              <div class="col-md-12">
                                <button type="submit" class="btn btn-raised btn-primary pull-right">Submit</button>
                                <button type="reset" class="btn btn-raised btn-light pull-right">Reset</button>
                              </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>
@endsection
