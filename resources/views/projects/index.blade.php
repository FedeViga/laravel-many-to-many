@extends('layouts.app')

@section('content')

    <div class="container py-5">

        <h2 class="mb-3">
            Projects List:
        </h2>

        <div class="list-group px-3">

            @foreach($projects as $project)
            <a href="{{route('projects.show', $project->id)}}" class="d-flex justify-content-between align-items-center list-group-item list-group-item-action" aria-current="true">
              <span>{{$project->title}}</span>
              <div class="infos d-flex flex-column">
                <span class="text-end">{{$project->type?->title}}</span>
                <div class="pills">
                  @foreach ($project->technologies as $technology)
                  <span class="badge rounded-pill" style="background-color: {{$technology->color ?? '#000000'}}">{{$technology->title}}</span>
                  @endforeach
                </div>
              </div>
            </a>
            @endforeach

          </div>
    </div>

@endsection