@extends('layouts.app', ['activePage' => 'upgade', 'titlePage' => __('Upgrade to PRO')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Audios from the field</h4>
            <p class="card-category"> List of audios captured from all the hives</p>
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
                    Audio
                  </th>
                  <th>
                    Size
                  </th>
                  <th>
                    Length
                  </th>
                </thead>
                <tbody>
                @foreach ($audios as $audio)
                  <tr>
                    <td>
                    {{$audio->id}}
                    </td>
                    <td>
                    {{$audio->created_at}}
                    </td>
                    <td>
                    {{$audio->title}}
                    </td>
                    <td>
                    <div class="modal fade modal-fullscreen-xxl-down" id="{{'audio'.$audio->id}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered modal-lg" style="width:90%;height:85%">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel">{{$audio->audio}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                          <audio controls>
  <source src="{{asset('audios/' . $audio->audio)}}">
Your browser does not support the audio element.
</audio>
                          </div>
                        </div>
                      </div></div>
<a class="btn-link" data-bs-toggle="modal" href="#{{'audio'.$audio->id}}" role="button">{{$audio->audio}}</a>
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
              {{ $audios->links() }}                      
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