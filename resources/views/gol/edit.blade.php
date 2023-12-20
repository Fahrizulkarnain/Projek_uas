@extends('gol.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('gol/' .$gol->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" nama="id" id="id" value="{{$gol->id}}" id="id" />
        <label>Nama</label></br>
        <input type="text" nama="nama" id="nama" value="{{$gol->nama}}" class="form-control"></br>
        <label>level</label></br>
        <input type="text" name="level" id="level" value="{{$level}" class="form-control"></br>
        <label>type</label></br>
        <input type="text" name="type" id="type" value="{{$gol->type}}" class="form-control"></br>
        <label>attibute</label></br>
        <input type="text" name="attibute" id="attibute" value="{{$gol->attibute}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop