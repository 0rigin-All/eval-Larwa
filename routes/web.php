<?php

use Illuminate\Support\Facades\Route;
use App\Models\Recette;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('accueil');
});
Route::get('/liste', function(){
    $recettes = Recette::select("id","titre","ingredients", "photo", "duree")->get();
 return view("liste", ["recettes"=>$recettes]);
});
Route::get('/recherche', function (Request $request) {
    dump($request->all);
    $recettes = Recette::where('ingredients','LIKE',"%".$request->search."%")->get();
    return view('resultat_recherche',["recettes"=>$recettes, "request"=>$request]);
});
Route::get('/ajouter', function(){
    return view('ajouter');
});
Route::post('/ajout', function(){
    $recette = new Recette;
    $recette->titre = request('titre');
    $recette->ingredients = request('ingredients');
    $recette->duree = request('duree');
    $recette->photo = request('photo');
    $ok=$recette->save();
    $message=$ok?"recette ajoutée":"erreur";
    return view('confirmation',["message"=>$message]);
});
