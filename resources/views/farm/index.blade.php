@extends('layout')
@section('content')
    <main>

        <div class="container-fluid px-4">
            <h1 class="mt-4"><i class="fas fa-tree"></i> Farm</h1>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('farm.index')}}"><i class="fas fa-tree"></i>farm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('lease.index')}}"><i class="fas fa-coins px-1"></i>Farm Leases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('farm-crop.index')}}"><i class="fas fa-leaf"></i>Farm Crop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register.index')}}"><i class="fas fa-book"></i>Farm Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('note.index')}}"><i class="fas fa-pen"></i>Farm Notes</a>
                </li>
            </ul>

            <div class="row pt-3">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-dark text-white mb-4">
                        <div class="card-body"><a class="small text-white stretched-link" href="{{route('farm.create')}}">
                            </a>Add farm</div>
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
                            <th><i class="fas fa-pen me-1"></i>Name</th>
                            <th><i class="fas fa-bookmark me-1"></i>Description</th>
                            <th><i class="fas fa-crop me-1"></i>size (Acres)</th>
                            <th><i class="fas fa-location me-1"></i>location</th>
                            <th><i class="fas fa-calendar-check me-1"></i>created on</th>
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
                        @foreach($farms as $farm)
                            <tr>
                                <td>{{$farm->name}}</td>
                                <td>{{$farm->description}}</td>
                                <td>{{$farm->size}}</td>
                                <td>{{$farm->location}}</td>
                                <td>{{$farm->created_on}}</td>
                                <td><a class="btn btn-primary " href="{{route('farm.edit', $farm)}}"><i class="fas fa-edit"></i>Edit</a>
                                <td><a class="btn btn-warning " href="{{route('farm.show', $farm)}}">View More<i class="fas fa-arrow-right px-lg-2"></i></a>
                                </td>
                                <td>
                                    <form method="post" action="{{route('farm.destroy',$farm)}}">
                                        @csrf
                                        @method('delete')
                                        <button  type="submit" class="btn btn-danger delete-confirm ">
                                            <i class="fas fa-trash"></i>delete</button>
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
