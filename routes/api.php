<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Recette;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/recettes', function(Request $request){
    $recettes = Recette::select("id","titre","ingredients", "photo", "duree")->get();
    return response()->json($recettes);
});
Route::delete('/recettes/{id}', function ($id) {
    $recette = Recette::find($id);
    $ok=$recette->delete();
    if ($ok) {
        return response()->json(["status" => 1, "message" => "recette supprimé"],200);
        } else {
        return response()->json(["status" => 0, "message" => "cette recette n'existe pas"],400);
        }
});
Route::put('/recettes',function(Request $request){
    $id = $request->id;
    $recette = Recette::find($id);
    $recette->titre = request('titre');
    $recette->ingredients = request('ingredients');
    $recette->duree = request('duree');
    $recette->photo = request('photo');
    $ok=$recette->save();
    if ($ok) {
        return response()->json(["status" => 1, "message" => "recette modifié"],200);
        } else {
        return response()->json(["status" => 0, "message" => "cette recette n'existe pas"],400);
        }
});