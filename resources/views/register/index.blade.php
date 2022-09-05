@extends('layout')
@section('content')
    <main>

        <div class="container-fluid px-4">
            <h1 class="mt-4"><i class="fas fa-book"></i>register</h1>
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
                    <a class="nav-link active" href="{{route('register.index')}}"><i class="fas fa-book"></i>Farm Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('note.index')}}"><i class="fas fa-pen"></i>Farm Notes</a>
                </li>
            </ul>
            <div class="row pt-3">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-dark text-white mb-4">
                        <div class="card-body"><a class="small text-white stretched-link" href="{{route('register.create')}}">
                            </a>Add register</div>
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
                            <th><i class="fas fa-address-card me-1"></i>farm crop </th>
                            <th><i class="fas fa-object-ungroup me-1"></i>category </th>
                            <th><i class="fas fa-coins me-1"></i>total cost</th>
                            <th><i class="fas fa-weight-hanging me-1"></i>quantity</th>
                            <th><i class="fas fa-bookmark me-1"></i>description</th>
                            <th><i class="fas fa-calendar-check me-1"></i>date created</th>
                            <th colspan="3"><i class="fas fa-hammer me-1"></i>Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>farm crop id</th>
                            <th>category id</th>
                            <th>total cost</th>
                            <th>quantity</th>
                            <th>description</th>
                            <th>date created</th>
                            <th colspan="3">Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($registers as $register)
                            <tr>
                                <td>{{$register->farmcrop?->id}}</td>
                                <td>{{$register->Categoryparent?->name}}</td>
                                <td>{{$register->total_cost}}</td>
                                <td>{{$register->quantity}}</td>
                                <td>{{$register->description}}</td>
                                <td>{{$register->date_created}}</td>
                                <td><a class="btn btn-primary " href="{{route('register.edit', $register)}}"><i class="fas fa-edit"></i>Edit</a></td>
                                <td>
                                    <form method="post" action="{{route('register.destroy',$register)}}">
                                        @csrf
                                        @method('delete')
                                        <button  type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">
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
