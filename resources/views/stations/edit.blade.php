@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('User Profile')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ url('/admin/station/' . $station->id) }}" autocomplete="off" class="form-horizontal">
          {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('stations.form', ['formMode' => 'edit'])
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection