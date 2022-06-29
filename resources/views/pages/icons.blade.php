@extends('layouts.app', ['activePage' => 'icons', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Images from the field</h4>
            <p class="card-category">List of images captured from all the hives</p>
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
                    Image
                  </th>
                  <th>
                    Size
                  </th>
                </thead>
                <tbody>
                @foreach ($images as $image)
                  <tr>
                    <td>
                    {{$image->id}}
                    </td>
                    <td>
                    {{$image->created_at}}
                    </td>
                    <td>
                    {{$image->title}}
                    </td>
                    <td>
                    <div class="modal fade" id="{{'image'.$image->id}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered modal-lg" style="width:90%;height:95%">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel">{{$image->image}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <img src="{{asset('images/' . $image->image)}}" class="w-100" alt=""> 
                          </div>
                          <!-- <div class="modal-footer">
                            <button class="btn btn-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">next</button>
                          </div> -->
                        </div>
                      </div></div>
<a class="btn-link" data-bs-toggle="modal" href="#{{'image'.$image->id}}" role="button">{{$image->image}}</a>
                    </td>
                    <td>
                      45MB
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $images->links() }}              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection