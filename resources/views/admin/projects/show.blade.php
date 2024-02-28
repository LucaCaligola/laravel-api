@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>
                {{ $project->title }}
            </h2>
        </div>
        <div class="col-12">
            
            <img src="{{ $project->picture }}" alt="">

            <p>
                Descrizione: {{ $project->description }}
            </p>
            <p>
                Data di pubblicazione: {{ $project->date }}
            </p>
        
            <p>
                Link al progetto: {{ $project->project_url}}
            </p>
            <p>
                Stack: {{ $project->type->name }}
            </p>

            <p>
                Linguaggi: {{ $project->languages}}
            </p>
         
            <a href="{{ route('admin.projects.edit', $project) }}" class="text-decoration-none">
                <button class="btn btn-sm btn-success">
                    Edit
                </button>
            </a>
            <button class="btn btn-sm btn-warning">
                Delete
            </button>
            
        </tr>
        </div>
    </div>
</div>
@endsection
