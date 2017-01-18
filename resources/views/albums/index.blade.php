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
                        <span class="lead">Albums</span>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('albums.create')}}" class="btn btn-default">Novo album</a>
                    </div>
                </div>
                <div class="panel-body">
                    @if(count($albums) === 0)
                        <p class="bg-warning" style="padding:1rem;">Sem albums cadastrados</p>
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                    @foreach($albums as $a)
                                        <tr>
                                            <td><img src="{{$a->cover_image}}" height="80" width="80" style="border-radius:5px;"></td>
                                            <td><h3>{{$a->title}}</h3></td>
                                            <td>
                                                <a href="{{route('albums.edit', ['album' => $a->id])}}" class="btn btn-warning">Editar</a>
                                                <a href="{{ route('albums.destroy', ['album' => $a->id]) }}"
                                                    class="btn btn-danger"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('delete-form').submit();">
                                                    Deletar
                                                </a>
                                                {!! Form::open(['url' => '/admin/albums/' . $a->id, 'id' => 'delete-form', 'method' => 'DELETE', 'style' => 'display: none;']) !!}
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
