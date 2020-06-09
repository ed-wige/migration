@extends('menu')

@section('contenu')
    <table class="mt-4 table table-bordered table-hover">
        <thead>
           <th>id</th>
           <th>nom</th>
           <th>prenom</th>
        </thead>
        <tbody>
        @foreach($clientrep as $client)
           <tr>
               <td>{{$client->id}}</td>
               <td>{{$client->nom}}</td>
               <td>{{$client->prenom}}</td>
           </tr>
        @endforeach
        </tbody>
    </table>
@endsection
