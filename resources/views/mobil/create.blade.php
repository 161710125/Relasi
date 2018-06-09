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
                <form action="{{ route('mobil.store') }}" method="post" >
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
                    <div class="form-group {{ $errors->has('id_galeri') ? 'has error' : '' }}">
                        <label class="control-label">Foto</label>
                        <select name="id_galeri" class="form-control">
                            <option>Pilih Foto</option>
                            @foreach($galeri as $data)
                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('id_galeri'))
                        <span class="help-block">
                            <strong>{{ $errors->first('id_galeri') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('merk') ? ' has-error' : '' }}">
                        <label class="control-label">Merk</label>   
                        <input type="text" name="merk" class="form-control"  required>
                        @if ($errors->has('merk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('merk') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('plat_no') ? ' has-error' : '' }}">
                        <label class="control-label">Plat Nomor</label>  
                        <input type="text" name="plat_no" class="form-control"  required>
                        @if ($errors->has('plat_no'))
                            <span class="help-block">
                                <strong>{{ $errors->first('plat_no') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('kapasitas') ? ' has-error' : '' }}">
                        <label class="control-label">Kapasitas</label>   
                        <input type="text" name="kapasitas" class="form-control"  required>
                        @if ($errors->has('kapasitas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kapasitas') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('tahun_kel') ? ' has-error' : '' }}">
                        <label class="control-label">Tahun Keluaran</label>   
                        <input type="date" name="tahun_kel" class="form-control"  required>
                        @if ($errors->has('tahun_kel'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tahun_kel') }}</strong>
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