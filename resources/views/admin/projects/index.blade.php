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
                <th scope="col">URL Repository</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                <tr class="align-middle">
                    <th scope="row">{{$project->id}}</th>
                    <td>{{$project->name}}</td>
                    <td><img class="preview img-thumbnail" src="{{$project->image_url}}" alt="{{$project->name}}"></td>
                    <td><a href="{{$project->repo_url}}">{{"$project->name Github"}}</a></td>
                    <td>
                        <button class="btn btn-success"><a class="text-white" href="{{route('admin.projects.show', $project->slug)}}"><i class="fa-solid fa-eye"></i></a></button>
                        <button class="btn btn-warning "><a class="text-black" href="{{route('admin.projects.edit', $project->slug)}}"><i class="fa-solid fa-pen-to-square"></i></a></button>
                        <button class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>
                    </td>
                  </tr>
                @empty

                @endforelse

            </tbody>
          </table>
    </div>
</div>
</div>
@endsection
