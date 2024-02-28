@extends('layouts.admin')

@section ('title', 'Projects')

@section('main-content')

<div class="m-3">
    <h1 class="text-center">
       Ecco i tuoi Progetti {{ Auth::user()->name }}
    </h1>
</div>
<div class="container-fluid">
    <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col">Project Url</th>
                        <th scope="col">Actions</th>
                        <th scope="col">Type</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ( $projects as $project )
                        <tr>
                            <th scope="">
                                {{ $project->id }}
                            </th>
                            <td>
                                {{ $project->title }}
                            </td>
                            <td>
                                {{ $project->description }}
                            </td>
                            <td>
                                {{ $project->date }}
                            </td>
                            <td>
                                {{ $project->project_url }}
                            </td>

                        

                            {{-- <td>
                                {{  }}
                            </td>
                            --}}
                        
                                <td>
                                    <div class="d-flex justify-space-between">
                                        <div>
                                            <a href="{{ route('admin.projects.show', $project) }}" class="text-decoration-none">
                                                <button class="btn btn-sm btn-primary m-1">
                                                    View
                                                </button>
                                            </a>
                                        </div>
                                    
                                        <div>
                                            <a href="{{ route('admin.projects.edit', $project) }}" class="text-decoration-none">
                                                <button class="btn btn-sm btn-success m-1">
                                                    Edit
                                                </button>
                                            </a>
                                        </div>

                                        <div>
                                            <form class="d-inline-block" action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-warning m-1" type="submit">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                  
                                    {{ $project->type->name }}
                                </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">
                                There are no posts available
                            </td>
                        </tr>
                    @endforelse

                </tbody>

    </table>

    <div class="create">
        <a href="{{ route('admin.projects.create') }}">
            <button class="btn btn-danger">
                Aggiungi Progetto
            </button>
        </a>
    </div>
</div>
@endsection