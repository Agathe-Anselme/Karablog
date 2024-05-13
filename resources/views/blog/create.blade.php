@extends('base')

@section('title', 'Créer un article')

@section('content')
    <form action ="" method="post">
        @csrf
        <input type="text" name="title" value="Article de démonstration">
        <textarea name="content">Contenu de démonstration</textarea>
        <button>Enregistrer</button>
   </form>

@endsection