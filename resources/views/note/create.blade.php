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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create a
                                            Note</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="{{route('note.store')}}">
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <select class="form-select"
                                                            name="farm_crop_id">
                                                        <option value="" selected> select farm crop</option>
                                                        @foreach($farmcrops as $farmcrop)
                                                            <option
                                                                value="{{$farmcrop->id}}">{{$farmcrop->id}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <textarea required class="form-control" id="describe"
                                                          type="text"
                                                          placeholder="write a brief something "
                                                          name="notes"></textarea>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary btn-block"
                                                            href="{{route('note.store')}}"> Note
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{route('note.index')}}">Want to see your Notes?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

    </main>
@endsection
