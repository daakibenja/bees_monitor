@extends('layouts.app', ['activePage' => 'map', 'titlePage' => __('Map')])

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
                    Station
                  </th>
                  <th>
                    Hive Name
                  </th>
                  <th>
                    Wind Speed
                  </th>
                  <th>
                    Wind Direction
                  </th>
                  <th>
                    Temperature
                  </th>
                  <th>
                    Rain
                  </th>
                </thead>
                <tbody>
                @foreach ($parameters as $parameter)
                  <tr>
                    <td>
                    {{$parameter->id}}
                    </td>
                    <td>
                    {{$parameter->station}}
                    </td>
                    <td>
                    {{$parameter->hive_name}}
                    </td>
                    <td>
                    {{$parameter->wind_speed}}
                    </td>
                    <td>
                    {{$parameter->wind_direction}}
                    </td>
                    <td>
                    {{$parameter->temperature}}
                    </td>
                    <td>
                    {{$parameter->rain}}
                    </td>
                    <td>
                    {{$parameter->carbondioxide}}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $parameters->links() }}              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection