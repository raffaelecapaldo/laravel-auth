@extends('layouts.admin')
@section('title', 'Modifica progetto')
@section('content')
<div class="container mx-auto">
    <h3 class="text-center mb-3">Modifica {{$project->title}}</h3>
    <form class="myform" action="">
        <div class="row">
            <div class="col-4">
                <label for="name" class="form-label">Nome progetto</label>
                <input value="{{$project->name}}" type="text" name="name" class="form-control" placeholder="Inserisci un titolo">
            </div>
            <div class="col-4">
                <label for="image_url" class="form-label">URL immagine progetto</label>
                <input value="{{$project->image_url}}" type="url" name="image_url" class="form-control" placeholder="https://example.com"
                    pattern="https://.*">
            </div>
            <div class="col-4">
                <label for="repo_url" class="form-label">URL Repository</label>
                <input value="{{$project->repo_url}}" type="url" name="repo_url" class="form-control" placeholder="https://example.com"
                    pattern="https://.*">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
                <label for="languages" class="form-label">Linguaggi</label>
                <input value="{{$project->languages}}" type="text" name="languages" class="form-control" placeholder="Linguaggi usati">
            </div>

            <div class="col-6">
                <label for="tags" class="form-label">Tags</label>
                <input value="{{$project->tags}}" type="text" name="tags" class="form-control" placeholder="Inserici tag del progetto">
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-8">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description"  cols="30" placeholder="Inserisci una breve descrizione del progetto">{{$project->description}}"</textarea>
            </div>

        </div>
        <div class="buttons mt-3 d-flex justify-content-center">
        <button type="submit" class="btn btn-primary ">Aggiungi</button>
    </div>

    </form>
</div>
@endsection
