@extends('layouts.app')

@section('content')
<a href="{{route('utilisateur.create')}}" class="btn btn-primary">Ajouter un utilisateur</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">email</th>
      <th scope="col">modification</th>
    </tr>
  </thead>
  <tbody>
    @foreach($utilisateurs as $utilisateur)
    <tr>
      <th scope="row">{{$utilisateur->email}}</th>
      <td>
        <a href="{{ route('utilisateur.show', ['id' =>$utilisateur->id])}}" class="btn btn-primary">Voir plus</a>
        <a href="{{ route('utilisateur.edit', ['id' =>$utilisateur->id])}}" class="btn btn-secondary">Modifier</a>
        <form action="{{route('utilisateur.destroy', $utilisateur->id)}}" method="POST" style="display: inline-block">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
      </td>

    </tr>
    @endforeach
  
  </tbody>
</table>

@endsection