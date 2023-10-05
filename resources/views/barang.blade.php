@extends('layout.main')
@section('title')
    Halaman Barang
@endsection
@include('navbar')
@section('body')
	@php
		use Carbon\Carbon;
	@endphp
	<div class="container">
		<div class="d-flex flex-row justify-content-between mb-3">
			<h3>
				Semua Data Barang
			</h3>
		</div>
	<table border="1px" class="table table-bordered">
		<thead class="table-dark text-center">
			<tr>
			<th>id</th>
			<th>Nama Barang</th>
			<th>harga</th>
			<th>stok</th>
			<th>ID supplier</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($barang as $item)
			<tr>
				<td class="text-center">{{ $item->id }}</td>
				<td>{{ $item->nama_barang }}</td>
				<td>{{ "Rp ". number_format($item->harga, 2, ',', '.') }}</td>
				<td>{{ $item->stok }}</td>
				<td>{{ $item->id_supplier }}</td>
				<td>
					lala
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	</div>
@endsection
