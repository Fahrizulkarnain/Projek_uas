@extends('gol.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Holo-Ghost Page</div>
  <div class="card-body">
      
      <form action="{{ url('gol') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
        <label>level</label></br>
        <input type="text" name="level" id="level" class="form-control"></br>
        <label>type</label></br>
        <input type="text" name="type" id="type" class="form-control"></br>
        <label>attribute</label></br>
        <input type="text" name="attribute" id="attribute" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop