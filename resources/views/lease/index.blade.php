@extends('layout')
@section('content')
    <main>

        <div class="container-fluid px-4">
            <h1 class="mt-4"><i class="fas fa-coins px-1"></i> Farm Leases</h1>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('farm.index')}}"><i class="fas fa-tree"></i>farm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('lease.index')}}"><i class="fas fa-coins px-1"></i>Farm
                        Leases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('farm-crop.index')}}"><i class="fas fa-leaf"></i>Farm Crop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register.index')}}"><i class="fas fa-book"></i>Farm Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('note.index')}}"><i class="fas fa-pen"></i>Farm Notes</a>
                </li>
            </ul>
            <div class="row pt-3">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-dark text-white mb-4">
                        <div class="card-body"><a class="small text-white stretched-link"
                                                  href="{{route('lease.create')}}">
                            </a>Add Lease
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th><i class="fas fa-pen me-1"></i>farm</th>
                            <th><i class="fas fa-calendar-check me-1"></i>date from</th>
                            <th><i class="fas fa-calendar-times me-1"></i>date to</th>
                            <th><i class="fas fa-smile me-1"></i>farmer name</th>
                            <th><i class="fas fa-phone me-1"></i>farmer phone</th>
                            <th><i class="fas fa-coins me-1"></i>price</th>
                            <th colspan="3"><i class="fas fa-hammer me-1"></i>Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>size</th>
                            <th>created on</th>
                            <th>location</th>
                            <th colspan="3">Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($farm_leases as $farm_lease)
                            <tr>
                                <td>{{$farm_lease->parent->name?? ''}}</td>
                                <td>{{$farm_lease->date_from}}</td>
                                <td>{{$farm_lease->date_to}}</td>
                                <td>{{$farm_lease->farmer_name}}</td>
                                <td>{{$farm_lease->farmer_phone}}</td>
                                <td>{{$farm_lease->price}}</td>
                                <td><a class="btn btn-primary " href="{{route('lease.edit', $farm_lease)}}"><i
                                            class="fas fa-edit"></i>Edit</a></td>
                                <td>
                                    <form method="post" action="{{route('lease.destroy',['lease'=>$farm_lease->id])}}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" onclick="return confirm('Are you sure?')"
                                                class="btn btn-danger">
                                            <i class="fas fa-trash"></i>delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

@endsection
