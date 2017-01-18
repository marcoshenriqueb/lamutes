@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading clearfix">
                  <div class="pull-left">
                      <span class="lead">Capa</span>
                  </div>
              </div>
              <div class="panel-body">
                @if(count($cover) === 1)
                  {!! Form::model($cover, ['url' => '/admin/cover', 'files' => true, 'method' => 'put']) !!}
                @else
                  {!! Form::open(['url' => '/admin/cover', 'files' => true]) !!}
                @endif
                  <div class="form-group">
                    {{Form::label('title', 'Título')}}
                    {{Form::text('title', null, ['class' => 'form-control'])}}
                    @if($errors->has('title'))
                      <p class="text-danger">{{$errors->first('title')}}</p>
                    @endif
                  </div>
                  <div class="form-group">
                    {{Form::label('subtitle1', 'Sub título 1')}}
                    {{Form::text('subtitle1', null, ['class' => 'form-control'])}}
                    @if($errors->has('subtitle1'))
                      <p class="text-danger">{{$errors->first('subtitle1')}}</p>
                    @endif
                  </div>
                  <div class="form-group">
                    {{Form::label('subtitle2', 'Sub título 2')}}
                    {{Form::text('subtitle2', null, ['class' => 'form-control'])}}
                    @if($errors->has('subtitle2'))
                      <p class="text-danger">{{$errors->first('subtitle2')}}</p>
                    @endif
                  </div>
                  <div class="form-group">
                    {{Form::label('cover_image', 'Foto de capa')}}
                    {{Form::file('cover_image')}}
                    @if($errors->has('cover_image'))
                      <p class="text-danger">{{$errors->first('cover_image')}}</p>
                    @endif
                  </div>
                  <div class="form-group">
                    {{Form::submit('Salvar', ['class' => 'btn btn-primary'])}}
                  </div>
                {!! Form::close() !!}
              </div>
          </div>
        </div>
    </div>
</div>
@endsection
