@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    <div class="pull-left">
                        <span class="lead">Músicas</span>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('songs.create')}}" class="btn btn-default">Nova música</a>
                    </div>
                </div>
                <div class="panel-body">
                    @if(count($songs) === 0)
                        <p class="bg-warning" style="padding:1rem;">Sem músicas cadastradas</p>
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                    @foreach($songs as $s)
                                        <tr>
                                            <td><p>{{$s->title}}</p></td>
                                            <td><p>{{$s->album->title}}</p></td>
                                            <td>
                                                <audio controls>
                                                    <source src="{{$s->file}}" type="audio/mp3">
                                                    Your browser does not support the audio element.
                                                </audio>
                                            </td>
                                            <td>
                                                <a href="{{route('songs.edit', ['song' => $s->id])}}" class="btn btn-warning">Editar</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('events.destroy', ['song' => $s->id]) }}"
                                                    class="btn btn-danger"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('delete-form').submit();">
                                                    Deletar
                                                </a>
                                                {!! Form::open(['url' => '/admin/songs/' . $s->id, 'id' => 'delete-form', 'method' => 'DELETE', 'style' => 'display: none;']) !!}
                                                {!! Form::close() !!}
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
