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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit the farm</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="{{route('farm.update',$farm)}}">
                                            @csrf
                                            @method('put')
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input required class="form-control" id="inputFirstName" type="text" placeholder="Enter your farm size" name="name" value="{{$farm->name}}" />
                                                        <label for="inputFirstName">farm name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input required class="form-control" id="inputdate" type="date" placeholder="Enter the date" name="created_on" value="{{$farm->created_on}}" />
                                                        <label for="inputdate">created</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input required class="form-control" id="inputFirstName" type="number" placeholder="Enter your farm size" name="size" value="{{$farm->size}}" />
                                                        <label for="inputFirstName">farm size (Acres)</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input required class="form-control" id="inputDuration" type="string" placeholder="State your location" name="location" value="{{$farm->location}}"/>
                                                        <label for="inputDuration">location</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea required class="form-control" id="inputDescription" type="text" placeholder="write a brief something about the farm" name="description">{{$farm->description}}</textarea>
                                                <label for="inputDescription">Description</label>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button  type="submit" class="btn btn-primary btn-block" ><strong>Update</strong></button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{route('farm.index')}}">Want to see your farms?</a></div>
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
