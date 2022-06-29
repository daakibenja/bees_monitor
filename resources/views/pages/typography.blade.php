@extends('layouts.app', ['activePage' => 'typography', 'titlePage' => __('Typography')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-success">
              <h4 class="card-title ">Stations</h4>
              <p class="card-category"> Here you can manage stations</p>
            </div>
            <div class="card-body">
                              <div class="row">
                <div class="col-12 text-right">
                  <a href="{{ url('/admin/station/create') }}" class="btn btn-sm btn-success">Add Station</a>
                </div>
              </div>
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <tr>
                      <th>
                        ID
                    </th>
                    <th>
                      NAME
                    </th>
                    <th>
                      VILLAGE
                    </th>
                    <th>
                      DISTRICT
                    </th>
                    <th>
                      NUMBER OF HIVES
                    </th>
                    <th class="text-right">
                      Actions
                    </th>
                  </tr></thead>
                  <tbody>
                  @foreach($stations as $item)
                                            <tr>
                                            <td>
                          {{$item->id}}
                        </td>
                        <td>
                          {{$item->name}}
                        </td>
                        <td>
                        {{$item->village}}
                        </td>
                        <td>
                        {{$item->district}}
                        </td>
                        <td>
                        {{$item->number_of_hives}}
                        </td>
                        <td class="td-actions text-right">
                                                        <a rel="tooltip" class="btn btn-success btn-link" href="{{ url('/admin/station/' . $item->id . '/edit') }}" data-original-title="" title="">
                              <i class="material-icons">edit</i>
                              <div class="ripple-container"></div>
                            </a>
                            <form method="POST" action="{{ url('/admin/station' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="button3" title="Delete Station" onclick="return confirm(&quot;Confirm delete?&quot;)" style="border:0px;color:red"><i class="fa fa-trash-o" aria-hidden="true"></i> </button>
                                            </form>
                                                    </td>
                      </tr>
                      @endforeach
                                        </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection