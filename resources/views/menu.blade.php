<!Doctype html>
<html style="height: 100%">
   <head>
       <meta charset="utf-8">
       <title></title>
       <link rel="stylesheet" href="{{asset('css/app.css')}}">
   </head>
   <body style="height: 100%">
      <header class="d-flex border-dark bg-light pt-3">
          <a href="{{url('formulaire')}}" class="btn btn-success ml-4">Formullaire</a>
          <a href="{{url('liste')}}" class="btn btn-success ml-4">Liste</a>
      </header>
     <div class="container" style="height: 100%">
         @yield('contenu')
     </div>
   </body>
</html>
