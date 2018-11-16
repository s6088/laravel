@extends('layouts.app')

@section('content')
<section class="section bg-secondary">
        <div class="container">
          <div class="row row-grid align-items-center">
            <div class="col-md-6">
              <div class="card bg-default shadow border-0">
                <img src="/storage/notice_files/{{$notice->notice_file}}" class="card-img-top">
              </div>
            </div>
            <div class="col-md-6">
              <div class="pl-md-5">
                <h3>{{$notice->title}}</h3>
                <p class="lead">{!!$notice->description!!}</p>
                <hr>
                <small>Written on {{$notice->created_at}} by {{$notice->user->name}}</small>
                <hr>
                <div class="container row">
                        @if(!Auth::guest())
                        @if(Auth::user()->id == $notice->user_id)
                            <div class="col-4">
                              <a href="/notices/{{$notice->id}}/edit" class="btn  btn-default col">Edit</a>                            
                            </div>
                            {!!Form::open(['action' => ['NoticesController@destroy', $notice->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger col'])}}
                            {!!Form::close()!!}
                        @endif
                    @endif
                </div>
                </div>
            </div>
          </div>
        </div>
      </section>
@endsection





