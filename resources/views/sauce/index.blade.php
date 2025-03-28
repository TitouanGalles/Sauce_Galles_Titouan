@extends('layouts.app')

@section('content')
<a href="{{route('sauce.create')}}" class="btn btn-primary">Ajouter une sauce</a>

<div class="container text-center">
  <div class="row row-cols-4 justify-content-center" >
  @foreach($sauces as $sauce)
    <div class="card col ms-5 my-5" style="width: 15rem;">
      <img src="{{ asset($sauce->imageUrl) }}" class="card-img-top" alt="">
      <div class="card-body">
        <h5 class="card-title">{{ $sauce->name }}</h5>
        <p class="card-text">{{ $sauce->description }}</p>
        <a href="{{ route('sauce.show', ['id' =>$sauce->id])}}" class="btn btn-primary">Voir plus</a>
          <a href="{{ route('sauce.edit', ['id' =>$sauce->id])}}" class="btn btn-secondary">Modifier</a>
          <form action="{{route('sauce.destroy', $sauce->id)}}" method="POST" style="display: inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>
      </div>
    </div>
  @endforeach
  </div>
</div>

@endsection