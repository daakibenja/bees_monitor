@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Videos from the field</h4>
            <p class="card-category"> List of videos captured from all the hives</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Upload Date
                  </th>
                  <th>
                    Hive Name
                  </th>
                  <th>
                    Video
                  </th>
                  <th>
                    Size
                  </th>
                  <th>
                    Length
                  </th>
                </thead>
                <tbody>
                @foreach ($videos as $video)
                  <tr>
                    <td>
                    {{$video->id}}
                    </td>
                    <td>
                    {{$video->created_at}}
                    </td>
                    <td>
                    {{$video->title}}
                    </td>
                    <td>
                    <div class="modal fade modal-fullscreen-xxl-down" id="{{'video'.$video->id}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered modal-lg" style="width:90%;height:85%">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel">{{$video->video}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                          <video width="400" controls class="m-3 w-75">
  <source src="{{asset('videos/' . $video->video)}}">
  Your browser does not support HTML video.
</video>
                          </div>
                        </div>
                      </div></div>
<a class="btn-link" data-bs-toggle="modal" href="#{{'video'.$video->id}}" role="button">{{$video->video}}</a>
                    </td>
                    <td>
                      30MB
                    </td>
                    <td>
                      30s
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>  
              {{ $videos->links() }}                      
              <div>
              </div>   
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection