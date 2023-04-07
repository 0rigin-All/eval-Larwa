@extends('index')
@section('section')
<h2>Liste des recettes</h2>
<table>
    <tr>
        <td><h5>Titre</h5></td>  <td><h5>Ingredients</h5></td>  <td><h5>Durée Préparation</h5></td>  <td><h5>Photo</h5></td>
        @foreach ($recettes as $recette)
    <tr>
    <td>{{$recette->titre}}</td>   <td>{{$recette->ingredients}}</td>   <td>{{$recette->duree}} min</td>   <td><img src ="{{$recette->photo}}"/></td>
</tr>
        @endforeach
    </tr>
</table>
@stop