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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit a Farm Lease</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="{{route('lease.update',$farm_lease)}}">
                                            @method('put')
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input required class="form-control" id="name" type="text" placeholder="Enter your farmer name" name="farmer_name" value="{{$farm_lease->farmer_name}}" />
                                                        <label for="name">Farmer name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input required class="form-control" id="tel" type="text" placeholder="Enter your farmer name" name="farmer_phone" value="{{$farm_lease->farmer_phone}}"/>
                                                        <label for="tel">Farmer tel</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input required class="form-control" id="inputdate" type="date" placeholder="Enter the start date" name="date_from" value="{{$farm_lease->date_from}}" />
                                                        <label for="inputdate">start date</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input required class="form-control" id="inputdate" type="date" placeholder="Enter the end date" name="date_to" value="{{$farm_lease->date_to}}" />
                                                        <label for="inputdate">end date</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <select class="form-select" name="farm_id" >
                                                        <option disabled label="select farm"></option>
                                                        @foreach($farms as $farm )
                                                            <option value="{{$farm->id}}"
                                                            @selected($farm->id==$farm_lease->farm_id)>{{$farm->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input required class="form-control" id="price" type="text" placeholder="Enter the end date" name="price" value="{{$farm_lease->price}}" />
                                                        <label for="price">price</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button  type="submit" class="btn btn-primary btn-block">Update farm Lease</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{route('lease.index')}}">Want to see your leases?</a></div>
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
