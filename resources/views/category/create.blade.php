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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create a category</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="{{route('category.store')}}">
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input required class="form-control" id="inputname" type="text" placeholder="Enter your category name" name="name" />
                                                        <label for="inputname">Category name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                        <select class="form-select" aria-label="Default select example" name="parent_category_id">
                                                            <option value="" selected> select parent</option>
                                                            @foreach($mains as $main)
                                                            <option value="{{$main->id}}">{{$main->name}}</option>
                                                            @endforeach
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3 ">
                                                <textarea required class="form-control" id="inputDescription" type="text" placeholder="write a brief something about the category" name="description" rows="40"></textarea>
                                                <label for="inputDescription">Description</label>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button  type="submit" class="btn btn-primary btn-block" href="{{route('crop.store')}}">Create Category</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{route('category.index')}}">Want to see your categories?</a></div>
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
