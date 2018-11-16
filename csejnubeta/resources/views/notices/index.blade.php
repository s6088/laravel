@extends('layouts.app')
@section('content')
    
<div class="container-fluid mt-4">
        <!-- Table -->
        <div class="row">
          <div class="col">
            <div class="card shadow">
              <div class="card-header border-0">
                <h3 class="mb-0">Latest Notices</h3>
              </div>
              <div class="table-responsive">
                <table class="table align-items-center table-flush">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Headline</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col">Date</th>
                      <th scope="col">Posted by</th>
                    </tr>
                  </thead>
                  <tbody>
    
                    @foreach($notices as $notice)
                    <tr>
                        <td>
                            <a  href="/notices/{{$notice->id}}">{{$notice->title}}</a>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                             {{$notice->created_at}} 
                        </td>
                        <td >
                                {{$notice->user->name}}
                        </td>
                      </tr>
                @endforeach
    
                  </tbody>
                </table>
              </div>
              <div class="card-footer py-4">
                <nav aria-label="...">
                    {{$notices->links()}}
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

