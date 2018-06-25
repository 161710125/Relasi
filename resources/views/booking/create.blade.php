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
                    <div class="form-group {{ $errors->has('nama_p') ? ' has-error' : '' }}">
                        <label class="control-label">nama_p</label>   
                        <input type="text" name="nama_p" class="form-control"  required>
                        @if ($errors->has('nama_p'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_p') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('nama_a') ? ' has-error' : '' }}">
                        <label class="control-label">nama_a</label>   
                        <input type="text" name="nama_a" class="form-control"  required>
                        @if ($errors->has('nama_a'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_a') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
                        <label class="control-label">no_hp</label>   
                        <input type="text" name="no_hp" class="form-control"  required>
                        @if ($errors->has('no_hp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_hp') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                        <label class="control-label">alamat</label>   
                        <input type="text" name="alamat" class="form-control"  required>
                        @if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('jemput_p') ? ' has-error' : '' }}">
                        <label class="control-label">jemput_p</label>   
                        <input type="text" name="jemput_p" class="form-control"  required>
                        @if ($errors->has('jemput_p'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jemput_p') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('jemput_a') ? ' has-error' : '' }}">
                        <label class="control-label">jemput_a</label>   
                        <input type="text" name="jemput_a" class="form-control"  required>
                        @if ($errors->has('jemput_a'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jemput_a') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('identitas') ? ' has-error' : '' }}">
                        <label class="control-label">identitas</label>   
                        <input type="text" name="identitas" class="form-control"  required>
                        @if ($errors->has('identitas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('identitas') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('id_mobil') ? 'has error' : '' }}">
                        <label class="control-label">Mobil</label>
                        <select name="id_mobil" class="form-control">
                            <option>Pilih :</option>
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
                        <label class="control-label">Supir</label>
                        <select name="id_supir" class="form-control">
                            <option>Pilih :</option>
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
                        <label class="control-label">Tanggal Pinjam</label>   
                        <input type="date" name="tgl_pinjam" class="form-control"  required>
                        @if ($errors->has('tgl_pinjam'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_pinjam') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('tgl_kembali') ? ' has-error' : '' }}">
                        <label class="control-label">Tanggal Kembali</label>  
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