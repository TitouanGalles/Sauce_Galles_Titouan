@extends('layouts.app')

@section('content')
<form enctype='multipart/form-data' action="{{ route('sauce.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="userId" name="userId" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="manufacturer" class="form-label">Manufacturer</label>
        <input type="text" class="form-control" id="manufacturer" name="manufacturer" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <input type="file" class="btn btn-primary form-control" value="ADD IMAGE" name="imageUrl" onchange="afficherImage(event)" id="imageUrl"/>
        <div class="mb-3" id="zoneImage"></div>
    </div>

    <div class="mb-3">
        <label for="mainPepper" class="form-label">Main Pepper Ingredient</label>
        <input type="text" class="form-control" id="mainPepper" name="mainPepper">
    </div>

    <div class="mb-3 form-check">
        <label for="heat" class="form-label">Heat</label>
        <div class="slider-container">
            <input type="range" style="width: 200px;" class="" id="heat" min="0" max="10" value="0" oninput="heatValue.value = this.value" style="" name="heat">
            <input type="number" id="heatValue" min="0" max="10" value="0">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script>
    
    function afficherImage(event) {
        var fichier = event.target.files[0];

        if (fichier) {
            var imageUrl = URL.createObjectURL(fichier);

            var img = document.createElement("img");
            img.src = imageUrl;

            img.style.width = "150px";

            var zoneImage = document.getElementById("zoneImage");
            zoneImage.innerHTML = "";
            zoneImage.appendChild(img);
        } else {
            alert("Aucune image sélectionnée.");
        }
    }
    
</script>

@endsection