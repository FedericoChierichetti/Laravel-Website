@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Categorii</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nume</th>
                        <th>Descriere</th>
                        <th>Imagine</th>
                        <th>Actiune</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item) 
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/category/'.$item->image) }}" class="cate-image" alt="Image here">  
                            </td>
                            <td>
                                <a href="{{ url('edit-category/'.$item->id) }}" class="btn btn-primary">Editeaza</button>
                                <a href="{{ url('delete-category/'.$item->id) }}" class="btn btn-danger">Sterge</button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection