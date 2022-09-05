@extends('layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"><i class="fas fa-pen"></i> Notes</h1>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link " href="{{route('farm.index')}}"><i class="fas fa-tree"></i>farm</a>
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
                    <a class="nav-link active" href="{{route('note.index')}}"><i class="fas fa-pen"></i>Farm Notes</a>
                </li>
            </ul>
            <div class="row pt-3">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-dark text-white mb-4">
                        <div class="card-body"><a class="small text-white stretched-link" href="{{route('note.create')}}">
                            </a>Add note</div>
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
                            <th><i class="fas fa-id-card me-1"></i>Farm crop</th>
                            <th><i class="fas fa-sticky-note me-1"></i>Notes</th>
                            <th colspan="2"><i class="fas fa-hammer me-1"></i>Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th colspan="2">Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($farm_notes as $farm_note)
                            <tr>
                                <td>{{$farm_note->farm2?->id}}</td>
                                <td>{!! $farm_note->notes !!}</td>
                                <td><a class="btn btn-outline-primary " href="{{route('note.edit', $farm_note)}}"><i class="fas fa-edit"></i>Edit</a>
                                </td>
                                <td>
                                    <form method="post" action="{{route('note.destroy',$farm_note)}}">
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
