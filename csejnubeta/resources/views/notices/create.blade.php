@extends('layouts.app')

@section('content')
<section class="section section-lg pt-lg-0 section-contact-us">
        <div class="container">
          <div class="row justify-content-center mt-4">
            <div class="col-lg-12">
              <div class="card bg-gradient-secondary shadow">
                <div class="card-body p-lg-5">
                  <h4 class="mb-1">Create New Notice</h4>
                  {!! Form::open(['action' => 'NoticesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                  <div class="form-group mt-5">
                    <div class="input-group input-group-alternative">
                      {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                    </div>
                  </div>
                  
                  <div class="form-group mb-4">
                    {{Form::textarea('description', '', ['id' => 'article-ckeditor', 'class' => 'form-control form-control-alternative', 'placeholder' => 'Type a message...'])}}
                  </div>
                  <div class="form-group mb-4">
                        <p>image limit under 2 mb</p><br>
                        {{Form::file('notice_file', ['class'=>'btn btn-default btn-round btn-block btn-lg'])}}
                  </div>
                  
                  <div>
                    {{Form::submit('Publish', ['class'=>'btn btn-default btn-round btn-block btn-lg'])}}
                  </div>
                  {!! Form::close() !!}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection



