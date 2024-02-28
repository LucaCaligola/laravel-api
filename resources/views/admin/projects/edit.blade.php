@extends('layouts.admin')

@section('title', 'Edit project')

@section('main-content')

<section class="form-container container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h1 class="title mb-4 pt-3">
                   Modifica un progetto
                </h1>
                <form action="{{ route('admin.projects.update', $project) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title"class="form-label">
                            Nome del progetto
                        </label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old( 'title' ,$project->title) }}">
                    </div>

                    <div class="mb-3">
                        <label for="description"class="form-label">Descrizione:</label>
                        <input type="text" name="description" id="description" class="form-control" value="{{ old( 'description' ,$project->description) }}">
                    </div>

                    <div class="mb-3">
                        <label for="date"class="form-label">Data di pubblicazione:</label>
                        <input type="date" name="date" id="date" class="form-control" value="{{ old( 'date' ,$project->date) }}">
                    </div>

                    <div class="mb-3">
                        <label for="picture"class="form-label">Foto progetto:</label>
                        <input type="text" name="picture" id="picture" class="form-control" value="{{ old( 'picture' ,$project->picture) }}">
                    </div>

                    <div class="mb-3">
                        <label for="project_url"class="form-label">Link del progetto</label>
                        <input type="string" name="project_url" id="project_url" class="form-control" value="{{ old( 'project_url' ,$project->project_url) }}">
                    </div>

                    <div class="mb-3">
                        <label for="languages"class="form-label">Linguaggi utilizzati</label>
                        <input type="string" name="languages" id="project_url" class="form-control" value="{{ old( 'languages' ,$project->languages) }}">
                    </div>

                    <div class="mb-3">
                        <select for="type_id" class="form-label"
                            type="string" name="type_id" id="type_id" class="form-control">
                            @foreach ($types as $type)
                            
                            <option value="{{ old('id', $type->id) }}"> {{ old('name', $type->name) }}</option>
                            @endforeach
                        </select>
                   </div>


                    
                    <a href="{{ route('admin.projects.show', $project->id) }}">
                    <button type="submit" class="btn btn-primary">Modifica il progetto</button>
                    </a>
                    <button type="reset"  class="btn btn-warning">Pulisci il form</button>
                </form>
            </div>
        </div>
    </section>

    @endsection