@extends('gol.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Fizmon</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Nama : {{ $gol->nama }}</h5>
        <p class="card-text">level : {{ $gol->level }}</p>
        <p class="card-text">type : {{ $gol->type }}</p>
        <p class="card-text">attribute : {{ $gol->attribute }}</p>
  </div>
       
    </hr>
  
  </div>
</div>