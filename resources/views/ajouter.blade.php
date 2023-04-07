@extends('index')
@section('section')
<form action="ajout" method="post">
 <div class="mb-3">
 <label for="titre" class="form-label">Titre de la Recette</label>
 <input type="text" class="form-control" id="titre" name="titre" aria-describedby="titre">
 </div>
 <div class="mb-3">
 <label for="ingredients" class="form-label">Liste des ingrédients</label>
 <input type="text" class="form-control" id="ingredients" name="ingredients">
 </div>
 <div class="mb-3">
 <label for="duree" class="form-label">Durée préparation (en mn)</label>
 <input type="text" class="form-control" id="duree" name="duree">
 </div>
 <div class="mb-3">
 <label for="photo" class="form-label">Photo (url)</label>
 <input type="text" class="form-control" id="photo" name="photo">
 </div>
 <button type="submit" class="btn btn-primary">Valider</button>
 @csrf
 </form>
@stop