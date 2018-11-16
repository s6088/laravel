

@extends('layouts.app')

@section('content')
<section class="section section-lg pt-lg-0 section-contact-us">
        <div class="container">
          <div class="row justify-content-center mt-4">
            <div class="col-lg-12">
              <div class="card bg-gradient-secondary shadow">
                <div class="card-body p-lg-5">
                  <h4 class="mb-1">Edit Notice</h4>
                  {!! Form::open(['action' => ['NoticesController@update', $notice->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                  <div class="form-group mt-5">
                    <div class="input-group input-group-alternative">
                            {{Form::text('title', $notice->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                        </div>
                  </div>
                  
                  <div class="form-group mb-4">
                        {{Form::textarea('description', $notice->description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Dsscription'])}}
                    </div>
                  <div class="form-group mb-4">
                        {{Form::file('notice_file')}}
                  </div>
                  
                  <div>
                        {{Form::hidden('_method','PUT')}}
                        {{Form::submit('Save', ['class'=>'btn btn-default btn-round btn-block btn-lg'])}}
                  </div>
                  {!! Form::close() !!}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection



