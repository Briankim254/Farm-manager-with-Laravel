@extends('layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Crops</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Crops</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-dark text-white mb-4">
                        <div class="card-body"><a class="small text-white stretched-link" href="{{route('crop.create')}}">
                            </a>Add crop</div>
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
                            <th><i class="fas fa-clock me-1"></i>Duration</th>
                            <th colspan="2"><i class="fas fa-hammer me-1"></i>Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Duration</th>
                            <th colspan="2">Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($crops as $crop)
                        <tr>
                            <td>{{$crop->name}}</td>
                            <td>{{$crop->description}}</td>
                            <td>{{$crop->duration}}</td>
                            <td><a class="btn btn-outline-primary " href="{{route('crop.edit', $crop)}}"><i class="fas fa-edit"></i>Edit</a>
                            </td>
                            <td>
                                <form method="post" action="{{route('crop.destroy',$crop)}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger">
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
