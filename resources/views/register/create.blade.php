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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Register</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="{{route('register.store')}}">
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <select required class="form-select" aria-label="Default select example" name="farm_crop_id">
                                                        <option value="" selected> select Farm Crop</option>
                                                        @foreach($FarmCrops as $FarmCrop)
                                                            <option value="{{$FarmCrop->id}}">{{$FarmCrop->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <select required class="form-select" aria-label="Default select example" name="category_id">
                                                        <option value="" selected> select category</option>
                                                        @foreach($categories as $category)
                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input required class="form-control" id="inputdate" type="text" placeholder="Enter the date" name="total_cost"  />
                                                        <label for="inputdate">total cost</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input required class="form-control" id="inputDuration" type="text" placeholder="who harvested" name="quantity"/>
                                                        <label for="inputDuration">quantity</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <textarea required class="form-control" id="inputFirstName" type="number" placeholder="year planted" name="description"></textarea>
                                                        <label for="inputFirstName">Description</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input required class="form-control" id="inputDuration" type="date" placeholder="State the status" name="date_created"/>
                                                        <label for="inputDuration">date created</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button  type="submit" class="btn btn-primary btn-block">Create Register</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{route('register.index')}}">Want to see your Register?</a></div>
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
