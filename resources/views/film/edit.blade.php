@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit film</h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('film.update',$film->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-12">
          <strong>Titre :</strong>
          <input type="text" name="titre" class="form-control" value="{{$film->titre}}">
        </div>
        <div class="col-md-12">
          <strong>genre</strong>
          <input type="text" name="auteur" class="form-control" value="{{$film->auteur}}">
        </div>

        <div class="col-md-12">
          <a href="{{route('film.index')}}" class="btn btn-sm btn-success">Precedent</a>
          <button type="submit" class="btn btn-sm btn-primary">Valider</button>
        </div>
      </div>
    </form>
  </div>
@endsection