@extends('layout')
@section('content')
    <main>

        <div class="container-fluid px-4">
            <h1 class="mt-4"><i class="fas fa-leaf"></i>Farm Crops</h1>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link " href="{{route('farm.index')}}"><i class="fas fa-tree"></i>farm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('lease.index')}}"><i class="fas fa-coins px-1"></i>Farm Leases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('farm-crop.index')}}"><i class="fas fa-leaf"></i>Farm Crop</a>
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
                        <div class="card-body"><a class="small text-white stretched-link" href="{{route('farm-crop.create')}}">
                            </a>Add farm Crop</div>
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
                            <th><i class="fas fa-id-badge me-1"></i>Farm </th>
                            <th><i class="fas fa-id-card me-1"></i>Crop </th>
                            <th><i class="fas fa-hourglass-start me-1"></i>planted on</th>
                            <th><i class="fas fa-male me-1"></i>harvest by</th>
                            <th><i class="fas fa-calendar-alt me-1"></i>year planted </th>
                            <th><i class="fas fa-question-circle"></i>status </th>
                            <th colspan="3"><i class="fas fa-hammer me-1"></i>action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($farm_crops as $farm_crop)
                            <tr>
                                <td>{{$farm_crop->farm?->name}}</td>
                                <td>{{$farm_crop->crop?->name}}</td>
                                <td>{{$farm_crop->planted_on}}</td>
                                <td>{{$farm_crop->harvest_by}}</td>
                                <td>{{$farm_crop->year_planted}}</td>
                                <td>{{$farm_crop->status}}</td>
                                <td><a class="btn btn-outline-primary " href="{{route('farm-crop.edit', $farm_crop)}}"><i class="fas fa-edit"></i>Edit</a></td>
                                <td>
                                    <form method="post" action="{{route('farm-crop.destroy',$farm_crop)}}">
                                        @csrf
                                        @method('delete')
                                        <button  type="submit" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger">
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
