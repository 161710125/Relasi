@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">Tambah Data Supir 
                <div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
                </div>
              </div>
              <div class="panel-body">
                <form action="{{ route('supir.store') }}" method="post" >
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                        <label class="control-label">Nama</label>   
                        <input type="text" name="nama" class="form-control"  required>
                        @if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                        <label class="control-label">Jenis Kelamin</label>  
                        <input type="text" name="jenis_kelamin" class="form-control"  required>
                        @if ($errors->has('jenis_kelamin'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="form-group {{ $errors->has('no_identitas') ? ' has-error' : '' }}">
                        <label class="control-label">Nomor Identitas</label>  
                        <input type="text" name="no_identitas" class="form-control"  required>
                        @if ($errors->has('no_identitas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_identitas') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
                        <label class="control-label">Nomor Handphone</label>  
                        <input type="text" name="no_hp" class="form-control"  required>
                        @if ($errors->has('no_hp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_hp') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                        <label class="control-label">Alamat</label>   
                        <textarea name="alamat" class="form-control"  required></textarea>
                        @if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
                        <label class="control-label">Harga</label>  
                        <input type="text" name="harga" class="form-control"  required>
                        @if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">Tambah</button>
                    </div>
                </form>
              </div>
            </div>  
        </div>
    </div>
</div>
@endsection