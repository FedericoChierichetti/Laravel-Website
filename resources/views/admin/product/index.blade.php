@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Pagina Produse</h4>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Categorie</th>
                        <th>Nume</th>
                        <th>Pret de Vanzare</th>
                        <th>Imagine</th>
                        <th>Actiune</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $item) 
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->selling_price }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/products/'.$item->image) }}" class="cate-image" alt="Image here">  
                            </td>
                            <td>
                                <a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-primary btn-sm">Editeaza</button>
                                <a href="{{ url('delete-product/'. $item->id) }}" class="btn btn-danger btn-sm">Sterge</button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection