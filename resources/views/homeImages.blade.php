@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
              <div class="panel-heading clearfix">
                  <div class="pull-left">
                      <span class="lead">Imagens da Home</span>
                  </div>
              </div>
              <div class="panel-body">
                @if(count($homeImages) === 1)
                  {!! Form::model($homeImages, ['url' => '/admin/images', 'files' => true, 'method' => 'put']) !!}
                @else
                  {!! Form::open(['url' => '/admin/images', 'files' => true]) !!}
                @endif
                  <div class="form-group">
                    {{Form::label('next_event_image', 'Foto da sessão próximos eventos')}}
                    {{Form::file('next_event_image')}}
                    @if($errors->has('next_event_image'))
                      <p class="text-danger">{{$errors->first('next_event_image')}}</p>
                    @endif
                  </div>
                  <div class="form-group">
                    {{Form::label('next_event_image2', 'Foto da sessão countdown')}}
                    {{Form::file('next_event_image2')}}
                    @if($errors->has('next_event_image2'))
                        <p class="text-danger">{{$errors->first('next_event_image2')}}</p>
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
