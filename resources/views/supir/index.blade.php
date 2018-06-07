@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Supir
			  	<div class="panel-title pull-right"><a href="{{ route('supir.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama</th>
					  <th>Jenis Kelamin</th>
					  <th>No Identitas</th>
					  <th>Nomor Handphone</th>
					  <th>Alamat</th>
					  <th>Harga</th>
					  <th colspan="2">Option</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($supir as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td>{{ $data->jenis_kelamin }}</td>
				    	<td>{{ $data->no_identitas }}</td>
				    	<td>{{ $data->no_hp }}</td>
				    	<td>{{ $data->alamat }}</td>
				    	<td>{{ $data->harga }}</td>
				    	<td>
							<a class="btn btn-warning" href="{{ route('supir.edit',$data->id) }}">Ubah</a>
						</td>
						<td>
							<form method="post" action="{{ route('supir.destroy',$data->id) }}">
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