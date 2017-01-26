@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <div class="pull-left">
                        <span class="lead">Nova Música</span>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('songs.index')}}" class="btn btn-default">Voltar</a>
                    </div>
                </div>
                <div class="panel-body">
                    {!! Form::model($song, ['url' => '/admin/songs/' . $song->id, 'files' => true, 'method' => 'put']) !!}
                        <div class="form-group">
                            {{Form::label('title', 'Título')}}
                            {{Form::text('title', null, ['class' => 'form-control'])}}
                            @if($errors->has('title'))
                                <p class="text-danger">{{$errors->first('title')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            {{Form::label('album_id', 'Álbum')}}
                            {{Form::select('album_id', $albums, $song->album_id, ['class' => 'form-control'])}}
                            @if($errors->has('album_id'))
                                <p class="text-danger">{{$errors->first('album_id')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            {{Form::label('file', 'Música')}}
                            {{Form::file('file')}}
                            @if($errors->has('file'))
                                <p class="text-danger">{{$errors->first('file')}}</p>
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
