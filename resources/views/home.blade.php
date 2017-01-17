@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <li class="list-group-item">
              <a href="{{ url('/admin/cover') }}"><span class="lead">Capa</span></a>
            </li>
        </div>
    </div>
</div>
@endsection
