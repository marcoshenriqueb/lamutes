@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <div class="pull-left">
                        <span class="lead">Novo Album</span>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('albums.index')}}" class="btn btn-default">Voltar</a>
                    </div>
                </div>
                <div class="panel-body">
                    {!! Form::open(['url' => '/admin/albums', 'files' => true]) !!}
                        <div class="form-group">
                            {{Form::label('title', 'Título')}}
                            {{Form::text('title', null, ['class' => 'form-control'])}}
                            @if($errors->has('title'))
                                <p class="text-danger">{{$errors->first('title')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            {{Form::label('subtitle', 'Sub título')}}
                            {{Form::text('subtitle', null, ['class' => 'form-control'])}}
                            @if($errors->has('subtitle'))
                                <p class="text-danger">{{$errors->first('subtitle')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            {{Form::label('cover_image', 'Foto do album')}}
                            {{Form::file('cover_image')}}
                            @if($errors->has('cover_image'))
                                <p class="text-danger">{{$errors->first('cover_image')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            {{Form::label('disk_image', 'Foto do disco')}}
                            {{Form::file('disk_image')}}
                            @if($errors->has('disk_image'))
                                <p class="text-danger">{{$errors->first('disk_image')}}</p>
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
@endsection
