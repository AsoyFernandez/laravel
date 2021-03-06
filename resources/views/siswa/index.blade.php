@extends('template')

@section('main')
<div id="siswa">
	<h2>Siswa</h2>

	@if (!empty($siswa_list))
		<table class="table">
			<thead>
				<tr>
					<th>NISN</th>
					<th>Nama</th>
					<th>Kelas</th>
					<th>Jenis Kelamin</th>
					<th>Tanggal Lahir</th>
					<th>Telepon</th>
					<th>Hobi</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($siswa_list as $siswa)
				<tr>
					<td>{{ $siswa->nisn }}</td>
					<td>{{ $siswa->nama_siswa }}</td>
					<td>{{ $siswa->kelas->nama_kelas }} </td>
					<td>{{ $siswa->jenis_kelamin }}</td>
					<td>{{ $siswa->tanggal_lahir->format('d-M-Y') }}</td>
					<td>{{ !empty($siswa->telepon->nomor_telepon) ? 
						$siswa->telepon->nomor_telepon : '-'}} </td>
					<td>@foreach($siswa->hobi as $item)
				<strong><span>{{ $item->nama_hobi }}</span></strong>,
				@endforeach</td>
					<td><div class="box-button">{{ link_to('siswa/' . $siswa->id, 'Detail', ['class' => 'btn btn-success btn-sm']) }}</div>
						<div class="box-button">{{ link_to('siswa/' . $siswa->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}</div>
						<div class="box-button">{!! Form::open(['method'=> 'DELETE', 'action' => ['SiswaController@destroy', $siswa->id]])!!} 
												{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
												{!! Form::close() !!}	
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	@else
		<p>Tidak ada data siswa.</p>
	@endif


	<div class="table-nav">
		<div class="jumlah-data">
		@if (!empty($jumlah_siswa))
			<strong>Jumlah Siswa : {{ $jumlah_siswa}} dari {{ $siswa_all}} siswa</strong>
		@else
			<strong>Jumlah Siswa : {{ $siswa_all}} siswa</strong>
		@endif
		</div>
		<div class="paging">
			{{ $siswa_list->links() }}
		</div>
	</div>

	<div class="tombol-nav">
		<div><a href="siswa/create" class="btn btn-primary">Tambah Siswa</a></div>
	</div>
</div>
@endsection

@section('footer')
	@include('footer')
@endsection