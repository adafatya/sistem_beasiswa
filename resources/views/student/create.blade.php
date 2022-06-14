@extends('layouts/app')

@section('title', 'Tambah Mahasiswa')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action={{ route('student.store') }}>
    @csrf
    <div class="mb-3">
        <label for="inputNama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="inputNama">
    </div>
    <div class="mb-3">
        <label for="inputPoinSPKK" class="form-label">Poin SPKK</label>
        <input type="number" class="form-control" name="poin_spkk" id="inputPoinSPKK">
    </div>
    <div class="mb-3">
        <label for="inputIPK" class="form-label">IPK</label>
        <input type="number" class="form-control" name="ipk" id="inputIPK" step="0.01">
    </div>
    <div class="mb-3">
        <label for="inputPenghasilan" class="form-label">Penghasilan/bulan</label>
        <input type="number" class="form-control" name="penghasilan" id="inputPenghasilan">
    </div>
    <div class="mb-3">
        <label for="inputPengeluaran" class="form-label">Pengeluaran/bulan</label>
        <input type="number" class="form-control" name="pengeluaran" id="inputPengeluaran">
    </div>
    <div class="mb-3">
        <label for="inputTanggungan" class="form-label">Tanggungan</label>
        <input type="number" class="form-control" name="tanggungan" id="inputTanggungan">
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>
@endsection