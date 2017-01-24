@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
            @endif
            <li class="list-group-item">
              <a href="{{ url('/admin/cover') }}"><span class="lead">Capa</span></a>
            </li>
            <li class="list-group-item">
              <a href="{{ route('albums.index') }}"><span class="lead">Albums</span></a>
            </li>
            <li class="list-group-item">
              <a href="{{ route('events.index') }}"><span class="lead">Eventos</span></a>
            </li>
            <li class="list-group-item">
              <a href="{{ url('/admin/images') }}"><span class="lead">Imagens da home</span></a>
            </li>
        </div>
    </div>
</div>
@endsection
