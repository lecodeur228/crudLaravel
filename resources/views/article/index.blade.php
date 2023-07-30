@extends('template.app')
@section('content')
  <center>
    @error('error')
    <div class="alert alert-success">
       <p>add</p>
    </div>
   @enderror
   <a href="{{route('articleAdd')}}" class="btn btn-primary m-5 justify-content-center">ajouter un article</a>

    @forelse ($articles as $article)
   
    <div class="card text-black bg-light justify-content-center m-5 col-4">
      <div class="card-body">
        <h4 class="card-title">{{$article->title}}</h4>
        <p class="card-text">{{$article->article}}</p>
      </div>
      <div class="card-body">
        <a href="{{route('articleEdit',$article->id)}}" class="card-link text-warning">editer</a>
        <a href="{{route('articledelete',$article->id)}}" class="card-link text-danger">suprimer</a>
      </div>
    </div>
@empty
    <p>pas d'article ajouté</p>
@endforelse     
  </center>
@endsection