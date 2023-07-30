@extends('template.app')
@section('content')
    <center>
        <form action="{{route('articleUpdate',$article)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3 mt-5 col-5">
                <label for="exampleFormControlInput1" class="form-label">titre</label>
                <input type="text" class="form-control" name="title"  value="{{$article->title}}" placeholder="nom du titre">
                @error('title')
                    <p class="text text-danger">le titre est requit</p>
                @enderror
            </div>
            <div class="mb-3 col-5">
                <label for="exampleFormControlTextarea1" class="form-label">article</label>
                <textarea class="form-control" placeholder="votre article" name="article" rows="3">{{$article->article}}</textarea>
                @error('article')
                <p class="text text-danger"> l'article est requit</p>
            @enderror
            </div>
            <button class="btn btn-primary col-5">Envoyer</button>
        </form>
    </center>
@endsection