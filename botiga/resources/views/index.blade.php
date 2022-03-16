@extends('disseny')

@section('content')

<h1>Llista de compres</h1>
<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <table class="table">
    <thead>
        <tr class="table-primary">
          <td>dni</td>
          <td>idprod</td>
          <td>data</td>
          <td>quantitat</td>
        </tr>
    </thead>
    <tbody>
        @foreach($compra as $cmpr)
        <tr>
            <td>{{$cmpr->dni}}</td>
            <td>{{$cmpr->idprod}}</td>
            <td>{{$cmpr->data}}</td>
            <td>{{$cmpr->quantitat}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection

