@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')
@if ($message = Session::get('success'))
	<div class="alert alert-success alert-block">
		<strong>{{ $message }}</strong>
	</div>
@endif
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Poin SPKK</th>
      <th scope="col">IPK</th>
      <th scope="col">Penghasilan/bulan</th>
      <th scope="col">Pengeluaran/bulan</th>
      <th scope="col">Tanggungan</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)
        <tr>
            <td>{{ $student->nama }}</td>
            <td>{{ $student->poin_spkk }}</td>
            <td>{{ $student->ipk }}</td>
            <td>{{ $student->penghasilan }}</td>
            <td>{{ $student->pengeluaran }}</td>
            <td>{{ $student->tanggungan }}</td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection