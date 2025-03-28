@extends('layouts.app')

@section('content')
<form enctype="multipart/form-data" action="{{route('sauce.update', $sauce->id)}}" method="POST">
  @csrf
  @method("PUT")
  <div class="form-floating mb-3">
    <input name="name" class="form-control" id="name" placeholder="Name" value="{{$sauce->name}}">
    <label for="name">Name</label>
  </div>
  <div class="form-floating mb-3">
    <input name="manufacturer" class="form-control" id="manufacturer" placeholder="manufacturer" value="{{$sauce->manufacturer}}">
    <label for="manufacturer">Manufacturer</label>
  </div>
  <div class="form-floating mb-3">
    <input name="description" class="form-control" id="descrition" placeholder="Name" value="{{$sauce->name}}">
    <label for="description">Description</label>
  </div>
  <div class="form-floating mb-3">
    <input type="file" class="btn btn-primary form-control" value="ADD IMAGE" name="imageUrl" onchange="afficherImage(event)" id="imageUrl"/>
    <div class="mb-3" id="zoneImage" style="with=100px; height=100px;"><img src="{{asset($sauce->imageUrl)}}" width="100px" height="100px" alt=""></div>
  </div>
  <div class="form-floating mb-3">
    <input name="mainPepper" class="form-control" id="mainPepper" placeholder="mainPepper" value="{{$sauce->mainPepper}}">
    <label for="mainPepper">Main Pepper Ingredient</label>
  </div>
  <div class="mb-3 form-check">
    <label for="name">Heat</label><br>
    <input type="range" style="width: 200px;" class="" id="heat" min="0" max="10" value="{{$sauce->heat}}" oninput="heatValue.value = this.value" style="" name="heat">
    <input type="number" id="heatValue" min="0" max="10" value="{{$sauce->heat}}">
  </div>
  <input type="submit" class="btn btn-primary mb-3" value="Valider">
</form>
<script>
  function afficherImage(event) {
        var fichier = event.target.files[0];

        if (fichier) {
            var imageUrl = URL.createObjectURL(fichier);

            var img = document.createElement("img");
            img.src = imageUrl;

            img.style.width = "100px";

            var zoneImage = document.getElementById("zoneImage");
            zoneImage.innerHTML = "";
            zoneImage.appendChild(img);
        } else {
            alert("Aucune image sélectionnée.");
        }
    }
</script>
@endsection