@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>La liste des films</h3>
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

    <form action="{{route('film.store')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <strong>Titre:</strong>
          <input type="text" name="titre" class="form-control" placeholder="titre ">
        </div>
        <div class="col-md-12">
          <strong>Genre :</strong>
          <input type="text" name="auteur" class="form-control" placeholder="Genre ">
        </div>

        <div class="col-md-12">
          <a href="{{route('film.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>
@endsection