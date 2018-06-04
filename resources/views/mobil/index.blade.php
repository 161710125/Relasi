@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Keterangan Mobil
			  	<div class="panel-title pull-right"><a href="{{ route('mobil.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama</th>
					  <th>ID Galeri</th>
					  <th>Merk</th>
					  <th>Plat Nomor</th>
					  <th>Kapasitas</th>
					  <th>Tahun Keluaran</th>
					  <th>Harga</th>
					  <th colspan="3">Option</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		@php $no = 1; @endphp
				  		@foreach($mobil as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td><a href="" class="thumbnail">
                            <img src="img/{{ $data->galeri->foto, $data->nama }}" style="max-height:150px;max-width:150px;margin-top:7px;"</td>
				    	<td>{{ $data->merk }}</td>
				    	<td>{{ $data->plat_no }}</td>
				    	<td>{{ $data->kapasitas }}</td>
				    	<td>{{ $data->tahun_kel }}</td>
				    	<td>{{ $data->harga }}</td>
						<td>
							<a class="btn btn-warning" href="{{ route('mobil.edit',$data->id) }}">Ubah</a>
						</td>
						<td>
							<form method="post" action="{{ route('mobil.destroy',$data->id) }}">
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