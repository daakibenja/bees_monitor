@extends('layouts.app', ['activePage' => 'map', 'titlePage' => __('Map')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-success">
            <h4 class="card-title ">Weight, Temperature, Humidity from the field</h4>
            <p class="card-category">Data Parameters captured from all the hives</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    ID
                  </th>
                  <th>
                    Weight
                  </th>
                  <th>
                    Temperature
                  </th>
                  <th>
                    Humidity
                  </th>
                  <th>
                    Time
                  </th>
                </thead>
                <tbody>
                @foreach ($parameters as $parameter)
                  <tr>
                    <td>
                    {{$parameter->id}}
                    </td>
                    <td>
                    {{$parameter->weight}}
                    </td>
                    <td>
                    {{$parameter->temperature}}
                    </td>
                    <td>
                    {{$parameter->humidity}}
                    </td>
                    <td>
                    {{$parameter->time}}
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