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
                        <span class="lead">Eventos</span>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('events.create')}}" class="btn btn-default">Novo evento</a>
                    </div>
                </div>
                <div class="panel-body">
                    @if(count($events) === 0)
                        <p class="bg-warning" style="padding:1rem;">Sem eventos cadastrados</p>
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                    @foreach($events as $e)
                                        <tr>
                                            <td><h3>{{$e->venue}}</h3></td>
                                            <td><p>{{$e->date}}</p></td>
                                            <td>
                                                <a href="{{route('events.edit', ['album' => $e->id])}}" class="btn btn-warning">Editar</a>
                                                <a href="{{ route('events.destroy', ['album' => $e->id]) }}"
                                                    class="btn btn-danger"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('delete-form').submit();">
                                                    Deletar
                                                </a>
                                                {!! Form::open(['url' => '/admin/events/' . $e->id, 'id' => 'delete-form', 'method' => 'DELETE', 'style' => 'display: none;']) !!}
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
