@extends('layouts.app')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h3>La liste des films</h3>
      </div>
      <div class="col-sm-2">
        <a class="btn btn-sm btn-success" href="{{ route('film.create') }}">Ajouter un film</a>
      </div>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{$message}}</p>
      </div>
    @endif
    @foreach ($films as $film)
    <div class="card text-white bg-dark mb-3" style="max-width: 50%;">

    <div class="card-title" style="text-align:center;"><h5>Information du film</h5></div>

  <div class="card-body">
   <div> <strong>Titre:</strong> {{$film->titre}}</div>

    <div><strong>Genre:</strong> {{$film->auteur}}</div>
  </div>
  <div class="card-footer">
  <form action="{{ route('film.destroy', $film->id) }}" method="post">
              <a class="btn btn-sm btn-success" href="{{route('film.show',$film->id)}}">Voir</a>
              <a class="btn btn-sm btn-warning" href="{{route('film.edit',$film->id)}}">Modifier</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
            </form>
            </div>
</div>
<br><br>
@endforeach
{!! $films->links() !!}
  </div>
@endsection