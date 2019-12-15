@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail film</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <strong>titre : </strong> {{$film->titre}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Genre : </strong> {{$film->auteur}}
        </div>
      </div>
      <div class="col-md-12">
        <a href="{{route('film.index')}}" class="btn btn-sm btn-success">Precedent</a>
      </div>
    </div>
  </div>
@endsection