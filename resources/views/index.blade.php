<!doctype html>
<html lang="fr">
 <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-
giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 <title>French cook</title>
 </head>
 <body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
 <div class="container-fluid">
 <a class="navbar-brand" href="/">French cook</a>
 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bstarget="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarSupportedContent">
 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
 <li class="nav-item">
 <a class="nav-link active" aria-current="page" href="{{ 'liste' }}">Les recettes</a>
 </li>
 <li class="nav-item">
 <a class="nav-link active" href="{{ 'ajouter' }}">Ajouter une recette</a>
 </li>
 <li class="nav-item">
 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
class="bi bi-envelope-open" viewBox="0 0 16 16">
 <path fill-rule="evenodd" d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1
5.4v.818l5.724 3.465L8 8.917l1.276.766L15 6.218V5.4a1 1 0 0 0-.53-.882l-6-3.2zM15 7.388l-4.754
2.877L15 13.117v-5.73zm-.035 6.874L8 10.083l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738zM1
13.117l4.754-2.852L1 7.387v5.73zM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0
1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2z"/>
 </svg>
 <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">{{ $message
?? '' }}</a>
 </li>
 </ul>
 <form class="d-flex" action= "{{ 'recherche' }}">
 <input class="form-control me-2" name="search" type="search" placeholder="ingredient ?"
aria-label="Search">
 <button class="btn btn-outline-success" type="submit">Recherche</button>
 </form>

 </div>
 </div>
</nav>
 <div id="contenu" class="container">
 @section('section') 

 @show
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-
beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-
ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
crossorigin="anonymous"></script>
</body>
</html>