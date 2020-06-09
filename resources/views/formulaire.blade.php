@extends('menu')

@section('contenu')
    <form action="{{url('ajouter')}}" method="post" >
        @csrf
        <input type="text" class="w-50  mt-3 form-control" name="nom" placeholder="nom">
        <input type="text" class="w-50  mt-3 form-control" name="prenom" placeholder="prenom">
        <input type="text" class="w-50  mt-3 form-control" name="prenom" placeholder="prenom">

        <button type="submit" class="btn btn-info w-25  mt-3 form-control">Enregistrer</button>
    </form>
    
@endsection
