@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <div class="pull-left">
                        <span class="lead">Editar Evento</span>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('events.index')}}" class="btn btn-default">Voltar</a>
                    </div>
                </div>
                <div class="panel-body">
                    {!! Form::open(['url' => '/admin/events/' . $event['id'], 'files' => true, 'method' => 'put']) !!}
                        <div class="form-group">
                            {{Form::label('venue', 'Lugar')}}
                            {{Form::text('venue', $event['venue'], ['class' => 'form-control'])}}
                            @if($errors->has('venue'))
                                <p class="text-danger">{{$errors->first('venue')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            {{Form::label('location', 'Endereço')}}
                            {{Form::text('location', $event['location'], ['class' => 'form-control'])}}
                            @if($errors->has('location'))
                                <p class="text-danger">{{$errors->first('location')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            {{Form::label('date', 'Data')}}
                            {{Form::date('date', $event['date'], ['class' => 'form-control'])}}
                            @if($errors->has('date'))
                                <p class="text-danger">{{$errors->first('date')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            {{Form::label('time', 'Hora')}}
                            <input type="time" name="time" class="form-control" value={{$event['time']}}>
                            @if($errors->has('time'))
                                <p class="text-danger">{{$errors->first('time')}}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            {{Form::label('fb_url', 'Link do facebook')}}
                            {{Form::text('fb_url', $event['fb_url'], ['class' => 'form-control'])}}
                            @if($errors->has('fb_url'))
                                <p class="text-danger">{{$errors->first('fb_url')}}</p>
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
