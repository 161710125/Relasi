@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">Tambah Data Mobil 
                <div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
                </div>
              </div>
              <div class="panel-body">
                <form action="{{ route('booking.store') }}" method="post" >
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('id_customer') ? 'has error' : '' }}">
                        <label class="control-label">Foto</label>
                        <select name="id_customer" class="form-control">
                            <option>Foto Id</option>
                            @foreach($customer as $data)
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('id_customer'))
                        <span class="help-block">
                            <strong>{{ $errors->first('id_customer') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('id_mobil') ? 'has error' : '' }}">
                        <label class="control-label">Foto</label>
                        <select name="id_mobil" class="form-control">
                            <option>Foto Id</option>
                            @foreach($mobil as $data)
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('id_mobil'))
                        <span class="help-block">
                            <strong>{{ $errors->first('id_mobil') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('id_supir') ? 'has error' : '' }}">
                        <label class="control-label">Foto</label>
                        <select name="id_supir" class="form-control">
                            <option>Foto Id</option>
                            @foreach($supir as $data)
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('id_supir'))
                        <span class="help-block">
                            <strong>{{ $errors->first('id_supir') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('tgl_pinjam') ? ' has-error' : '' }}">
                        <label class="control-label">tgl_pinjam</label>   
                        <input type="date" name="tgl_pinjam" class="form-control"  required>
                        @if ($errors->has('tgl_pinjam'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_pinjam') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('tgl_kembali') ? ' has-error' : '' }}">
                        <label class="control-label">tgl_kembali</label>  
                        <input type="date" name="tgl_kembali" class="form-control"  required>
                        @if ($errors->has('tgl_kembali'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_kembali') }}</strong>
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