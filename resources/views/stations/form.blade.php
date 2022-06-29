<div class="card ">
              <div class="card-header card-header-success">
                <h4 class="card-title">{{ __('Add a Station') }}</h4>
                <p class="card-category">{{ __('Full details of a station') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" required="true" aria-required="true" value="{{ isset($station->name) ? $station->name : ''}}"/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Village') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('village') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('village') ? ' is-invalid' : '' }}" name="village" id="input-name" type="text" placeholder="{{ __('Village') }}" required="true" aria-required="true" value="{{ isset($station->village) ? $station->village : ''}}"/>
                      @if ($errors->has('village'))
                        <span id="village-error" class="error text-danger" for="input-name">{{ $errors->first('village') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('District') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('district') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('district') ? ' is-invalid' : '' }}" name="district" id="input-name" type="text" placeholder="{{ __('District') }}" required="true" aria-required="true" value="{{ isset($station->district) ? $station->district : ''}}"/>
                      @if ($errors->has('district'))
                        <span id="district-error" class="error text-danger" for="input-name">{{ $errors->first('district') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Number of Hives') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('number_of_hives') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('number_of_hives') ? ' is-invalid' : '' }}" name="number_of_hives" id="input-name" type="text" placeholder="{{ __('Number Of Hives') }}" required="true" aria-required="true" value="{{ isset($station->number_of_hives) ? $station->number_of_hives : ''}}"/>
                      @if ($errors->has('number_of_hives'))
                        <span id="hives-error" class="error text-danger" for="input-name">{{ $errors->first('number_of_hives') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-success">{{ $formMode === 'edit' ? 'Update' : 'Create' }}</button>
              </div>
            </div>