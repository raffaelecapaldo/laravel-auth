@extends('layouts.admin')
@section('title', 'Lista progetti')
@section('content')
<div class="project-list">
<div class="container-fluid">
    <h3>Lista progetti</h3>
    <div class="table-responsive mt-2">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Immagine</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                <tr class="align-middle">
                    <th scope="row">{{$project->id}}</th>
                    <td>{{$project->name}}</td>
                    <td><img class="preview img-thumbnail" src="{{$project->image_url}}" alt="{{$project->name}}"></td>
                    <td>AZIONI</td>
                  </tr>
                @empty

                @endforelse

            </tbody>
          </table>
    </div>
</div>
</div>
@endsection
