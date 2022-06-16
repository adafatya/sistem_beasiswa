@extends('layouts/app')

@section('title', 'Beasiswa')

@section('content')
<form action={{ route('scholarship.criteria') }} method="post">
    @csrf
    <div class="col">
        <div class="mb-3">
            <input type="checkbox" name="criteria[]" value="poin_spkk"> Poin SPKK <br />
            <ul style="list-style-type:none;">
                <li> <input type="radio" name="isPoinSPKKCost" value="false"> Benefit </li>
                <li> <input type="radio" name="isPoinSPKKCost" value="true"> Cost </li>
                <li> Weight <input type="number" name="poin_spkk_weight" step="0.01"> </li>
            </ul>
        </div>
        <div class="mb-3">
            <input type="checkbox" name="criteria[]" value="ipk"> IPK <br />
            <ul style="list-style-type:none;">
                <li> <input type="radio" name="isIPKCost" value="false"> Benefit </li>
                <li> <input type="radio" name="isIPKCost" value="true"> Cost </li>
                <li> Weight <input type="number" name="ipk_weight" step="0.01"> </li>
            </ul>
        </div>
        <div class="mb-3">
            <input type="checkbox" name="criteria[]" value="tanggungan"> Tanggungan <br />
            <ul style="list-style-type:none;">
                <li> <input type="radio" name="isTanggunganCost" value="false"> Benefit </li>
                <li> <input type="radio" name="isTanggunganCost" value="true"> Cost </li>
                <li> Weight <input type="number" name="tanggungan_weight" step="0.01"> </li>
            </ul>
        </div>
    </div>
    <div class="col">
        <div class="mb-3">
            <input type="checkbox" name="criteria[]" value="penghasilan"> Penghasilan <br />
            <ul style="list-style-type:none;">
                <li> <input type="radio" name="isPenghasilanCost" value="false"> Benefit </li>
                <li> <input type="radio" name="isPenghasilanCost" value="true"> Cost </li>
                <li> Weight <input type="number" name="penghasilan_weight" step="0.01"> </li>
            </ul>
        </div>
        <div class="mb-3">
            <input type="checkbox" name="criteria[]" value="pengeluaran"> Pengeluaran <br />
            <ul style="list-style-type:none;">
                <li> <input type="radio" name="isPengeluaranCost" value="false"> Benefit </li>
                <li> <input type="radio" name="isPengeluaranCost" value="true"> Cost </li>
                <li> Weight <input type="number" name="pengeluaran_weight" step="0.01"> </li>
            </ul>
        </div>
        <div class="mb-3">
            <input type="checkbox" name="criteria[]" value="selisih"> Penghasilan-Pengeluaran <br />
            <ul style="list-style-type:none;">
                <li> <input type="radio" name="isSelisihCost" value="false"> Benefit </li>
                <li> <input type="radio" name="isSelisihCost" value="true"> Cost </li>
                <li> Weight <input type="number" name="selisih_weight" step="0.01"> </li>
            </ul>
        </div>
    </div>
    <button type="submit">Lanjut</button>
</form>
@endsection