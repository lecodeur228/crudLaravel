@extends('template.app')
@section('content')
    <center>
        <form action="{{route('articleCreate')}}" method="post">
            @csrf
            @method('POST')
            <div class="mb-3 mt-5 col-5">
                <label for="exampleFormControlInput1" class="form-label">tittre</label>
                <input type="text" class="form-control" name="title"  placeholder="nom du titre">
                @error('title')
                    <p class="text text-danger">le titre est requit</p>
                @enderror
            </div>
            <div class="mb-3 col-5">
                <label for="exampleFormControlTextarea1" class="form-label">article</label>
                <textarea class="form-control" placeholder="votre article" name="article" rows="3"></textarea>
                @error('article')
                <p class="text text-danger"> l'article est requit</p>
            @enderror
            </div>
            <button class="btn btn-primary col-5">Envoyer</button>
        </form>
    </center>
@endsection