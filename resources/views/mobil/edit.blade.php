@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">Edit Data {{ $mobil->nama }} 
                <div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
                </div>
              </div>
              <div class="panel-body">
                <form action="{{ route('mobil.update',$mobil->id) }}" method="post" >
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                        <label class="control-label">nama</label>   
                        <input type="text" name="nama" class="form-control" value="{{ $mobil->nama }}"  required>
                        @if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('merk') ? ' has-error' : '' }}">
                        <label class="control-label">merk</label>   
                        <input type="text" name="merk" class="form-control" value="{{ $mobil->merk }}"  required>
                        @if ($errors->has('merk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('merk') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('plat_no') ? ' has-error' : '' }}">
                        <label class="control-label">plat_no</label>   
                        <input type="text" name="plat_no" class="form-control" value="{{ $mobil->plat_no }}"  required>
                        @if ($errors->has('plat_no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('plat_no') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('kapasitas') ? ' has-error' : '' }}">
                        <label class="control-label">kapasitas</label>   
                        <input type="text" name="kapasitas" class="form-control" value="{{ $mobil->kapasitas }}"  required>
                        @if ($errors->has('kapasitas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kapasitas') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('tahun_kel') ? ' has-error' : '' }}">
                        <label class="control-label">tahun_kel</label>   
                        <input type="date" name="tahun_kel" class="form-control" value="{{ $mobil->tahun_kel }}"  required>
                        @if ($errors->has('tahun_kel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tahun_kel') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
                        <label class="control-label">harga</label>   
                        <input type="text" name="harga" class="form-control" value="{{ $mobil->harga }}"  required>
                        @if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
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