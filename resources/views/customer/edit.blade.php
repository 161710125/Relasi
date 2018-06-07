@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">Edit Data {{ $customer->nama }}
                <div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
                </div>
              </div>
              <div class="panel-body">
                <form action="{{ route('customer.update',$customer->id) }}" method="post" >
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                        <label class="control-label">Nama</label>   
                        <input type="text" name="nama" class="form-control" value="{{ $customer->nama }}"  required>
                        @if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                        <label class="control-label">Alamat</label>   
                        <input type="text" name="alamat" class="form-control" value="{{ $customer->alamat }}"  required>
                        @if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
                        <label class="control-label">Nomor Handphone</label>   
                        <input type="text" name="no_hp" class="form-control" value="{{ $customer->no_hp }}"  required>
                        @if ($errors->has('no_hp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_hp') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                        <label class="control-label">Jenis Kelamin</label>   
                        <input type="text" name="jenis_kelamin" class="form-control" value="{{ $customer->jenis_kelamin }}"  required>
                        @if ($errors->has('jenis_kelamin'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                            </span>
                        @endif
                    </div>

                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
              </div>
            </div>  
        </div>
    </div>
</div>
@endsection