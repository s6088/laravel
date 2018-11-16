@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">
              <br>
              <br>
              <br>
                <a href="/notices/create" class="btn btn-warning">New notice</a>
                <a href="/" class="btn btn-warning">new classroom</a>
                <a href="/" class="btn btn-warning">start a research</a>
                <a href="/" class="btn btn-warning">make news</a>
                <a href="/" class="btn btn-warning">host event</a>
                <a href="/" class="btn btn-warning">profile</a>
                
                <br>
                <br>
                <br>
                <div class="panel-body">
                    <h3>My Previous notices</h3>
                    @if(count($notices) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($notices as $notice)
                                <tr>
                                    <td>{{$notice->title}}</td>
                                    <td><a href="/notices/{{$notice->id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['NoticesController@destroy', $notice->id], 'method' => 'notice', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                            {{$notices->links()}}
                        </table>
                    @else
                        <p>No notices Found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection