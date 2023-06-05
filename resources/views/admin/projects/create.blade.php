@extends('layouts.admin')
@section('title', 'Aggiungi progetto')
@section('content')
<div class="container mx-auto">
    <h3 class="text-center mb-3">Aggiungi progetto</h3>
    <form class="myform" action="">
        @csrf
        <div class="row">
            <div class="col-4">
                <label for="name" class="form-label">Nome progetto</label>
                <input type="text" name="name" class="form-control" placeholder="Inserisci un titolo">
            </div>
            <div class="col-4">
                <label for="image_url" class="form-label">URL immagine progetto</label>
                <input type="url" name="image_url" class="form-control" placeholder="https://example.com"
                    pattern="https://.*">
            </div>
            <div class="col-4">
                <label for="repo_url" class="form-label">URL Repository</label>
                <input type="url" name="repo_url" class="form-control" placeholder="https://example.com"
                    pattern="https://.*">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
                <label for="languages" class="form-label">Linguaggi</label>
                <input type="text" name="languages" class="form-control" placeholder="Linguaggi usati">
            </div>

            <div class="col-6">
                <label for="tags" class="form-label">Tags</label>
                <input type="text" name="tags" class="form-control" placeholder="Inserici tag del progetto">
            </div>
        </div>
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-8">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" rows="8" cols="30" placeholder="Inserisci una breve descrizione del progetto"></textarea>
            </div>

        </div>
        <div class="buttons mt-3 d-flex justify-content-center gap-2">
        <button type="submit" class="btn btn-primary ">Aggiungi</button>
        <button type="reset" class="btn btn-secondary">Reset</button>

    </div>

    </form>
</div>
@endsection
