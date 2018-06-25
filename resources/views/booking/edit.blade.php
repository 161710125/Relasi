@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">Edit Data Pembeli ID : {{$booking->id}}
                <div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
                </div>
              </div>
              <div class="panel-body">
                <form action="{{ route('booking.update',$booking->id) }}" method="post" >
                    <input name="_method" type="hidden" value="PATCH">
                    {{ csrf_field() }}
                    
                    <div class="form-group {{ $errors->has('id_customer') ? ' has-error' : '' }}">
                        <label class="control-label">Nama Customer</label>  
                        <select name="id_customer" class="form-control">
                            @foreach($customer as $data)
                            <option value="{{ $data->id }}" {{ $customerselect == $data->id ? 'selected=="selected"' : '' }}>{{ $data->nama }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('id_customer'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_customer') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('id_mobil') ? ' has-error' : '' }}">
                        <label class="control-label">Nama Mobil</label>  
                        <select name="id_mobil" class="form-control">
                            @foreach($mobil as $data)
                            <option value="{{ $data->id }}" {{ $mobilselect == $data->id ? 'selected=="selected"' : '' }}>{{ $data->nama }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('id_mobil'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_mobil') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('id_supir') ? ' has-error' : '' }}">
                        <label class="control-label">Nama Supir</label>  
                        <select name="id_supir" class="form-control">
                            @foreach($supir as $data)
                            <option value="{{ $data->id }}" {{ $supirselect == $data->id ? 'selected=="selected"' : '' }}>{{ $data->nama }}</option>
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
                        <input type="date" placeholder="yyyy-mm-dd" name="tgl_pinjam" class="form-control" value="{{ $booking->tgl_pinjam }}"  required>
                        @if ($errors->has('tgl_pinjam'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_pinjam') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group {{ $errors->has('tgl_kembali') ? ' has-error' : '' }}">
                        <label class="control-label">Tanggal Kembali</label>   
                        <input type="date" placeholder="yyyy-mm-dd" namplaceholder="yyyy-mm-dd"e="tgl_kembali" class="form-control" value="{{ $booking->tgl_kembali }}"  required>
                        @if ($errors->has('tgl_kembali'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_kembali') }}</strong>
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