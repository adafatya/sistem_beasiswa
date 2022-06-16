@extends('layouts.app')

@section('title', 'Scholarship Recommendation')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col"> Alternatif </th>
            @for ($i = 0; $i < count($criteria); $i++)
            <th scope="col"> {{ $criteria[$i] }} </th>
            @endfor
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < count($matrix); $i++)
        <tr>
            <th scope="row"> {{ "Alt".$i+1 }} </th>
            @for ($j = 0; $j < count($criteria); $j++)
            <td> {{ $matrix[$i][$criteria[$j]] }} </th>
            @endfor
        </tr>
        @endfor
        <tr>
            <th scope="row"> Weights </th>
            @for ($i = 0; $i < count($criteria); $i++)
            <td> {{ $weights[$criteria[$i]] }} </td>
            @endfor
        </tr>
    </tbody>
</table>
@endsection