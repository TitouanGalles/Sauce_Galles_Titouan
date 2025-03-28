@extends('layouts.app')
@section('content')
<ol class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Name</div>
      {{$sauce->name}}
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Manufacturer</div>
      {{$sauce->manufacturer}}
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Description</div>
      {{$sauce->description}}
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Photo</div>
      <div class="mb-3" id="zoneImage" style="with=100px; height=100px;"><img src="{{asset($sauce->imageUrl)}}" width="100px" height="100px" alt=""></div>
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Main Pepper Ingredient</div>
      {{$sauce->mainPepper}}
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fw-bold">Heat</div>
      {{$sauce->heat}}
    </div>
  </li>
</ol>
<a href="{{route('sauce.index')}}"><input type="button" class="btn btn-primary" value="Retour" src="{{route('sauce.index')}}"></a>
@endsection
