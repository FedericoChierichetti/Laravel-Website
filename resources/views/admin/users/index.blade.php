@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Utilizatori inregistrati</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nume</th>
                        <th>Email</th>
                        <th>Numar de telefon</th>
                        <th>Actiune</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $item) 
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name.' '.$item->lname }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>

                            <td>
                                <a href="{{ url('view-user/'.$item->id) }}" class="btn btn-primary btn-sm">View</button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection