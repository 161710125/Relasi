@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Keterangan Mobil
			  	<div class="panel-title pull-right"><a href="{{ route('booking.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama</th>
					  <th>Nomor Handphone</th>
					  <th>Alamat</th>
					  <th>Identitas</th>
					  <th>Mobil</th>
					  <th>Supir</th>
					  <th>Tanggal Pinjam</th>
					  <th>Tanggal Kembali</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($booking as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama_p}} {{ $data->nama_a}}</td>
				    	<td>{{ $data->no_hp}}</td>
				    	<td>{{ $data->alamat}}</td>
				    	<td>{{ $data->identitas}}</td>
						<td>{{ $data->mobil->nama}}</td>
						<td>{{ $data->supir->nama}}</td>
						<td>{{ $data->tgl_pinjam}}</td>
						<td>{{ $data->tgl_kembali}}</td>
						<td>
						</td>
						<td>
							<form method="post" action="{{ route('booking.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Hapus</button>
							</form>
						</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection