@extends('layouts/app')

@section('title', 'Beasiswa')

@section('content')
<form action={{ "" }} method="post">
    Poin SPKK <br />
    <input type="radio" name="isPoinSPKKCost" value="false"> Benefit
    <input type="radio" name="isPoinSPKKCost" value="true"> Cost
</form>
@endsection