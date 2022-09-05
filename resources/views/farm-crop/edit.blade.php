@extends('layout')
@section('content')
    <main>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create a Farm crop</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="{{route('farm-crop.update',$farm_crop)}}">
                                            @csrf
                                            @method('put')
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <select class="form-select" aria-label="Default select example" name="farm_id">
                                                        <option value="" selected> select farm</option>
                                                        @foreach($farms as $farm)
                                                            <option value="{{$farm->id}}"
                                                           @selected($farm->id==$farm_crop->farm_id) >{{$farm->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-select" aria-label="Default select example" name="farm_id">
                                                        <option value="" selected> select crop</option>
                                                        @foreach($crops as $crop)
                                                            <option value="{{$farm->id}}"
                                                            @selected($crop->id==$farm_crop->crop_id)>{{$crop->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input required class="form-control" id="inputdate" type="date" placeholder="Enter the date" name="planted_on" value="{{$farm_crop->planted_on}}" />
                                                        <label for="inputdate">plated on</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input required class="form-control" id="inputDuration" type="text" placeholder="who harvested" name="harvest_by" value="{{$farm_crop->harvest_by}}"/>
                                                        <label for="inputDuration">harvested by</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input required class="form-control" id="inputFirstName" type="number" placeholder="year planted" name="year_planted" value="{{$farm_crop->year_planted}}" />
                                                        <label for="inputFirstName"> Year planted </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input required class="form-control" id="inputDuration" type="string" placeholder="State the status" name="status" value="{{$farm_crop->status}}"/>
                                                        <label for="inputDuration">Status</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button  type="submit" class="btn btn-primary btn-block">Update</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{route('farm-crop.index')}}">Want to see your farm crops?</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </main>
@endsection
