@extends('layouts.front')

@section('title')
    Comenzile mele
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Vizualizare Comanda
                            <a href="{{ url('my-orders') }}" class="btn btn-warning float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-details">
                                <h4>Detalii livrare</h4>
                                <hr>
                                <label for="">Prenume</label>
                                <div class="border">{{ $orders->fname }}</div>
                                <label for="">Nume de familie</label>
                                <div class="border">{{ $orders->lname }}</div>
                                <label for="">Email</label>
                                <div class="border">{{ $orders->email }}</div>
                                <label for="">Nume de telefon</label>
                                <div class="border">{{ $orders->phone }}</div>
                                <label for="">Adresa de livrare</label>
                                <div class="border">
                                    {{ $orders->address1 }}, <br>
                                    {{ $orders->address2 }}, <br>
                                    {{ $orders->city }}, <br>
                                    {{ $orders->state }},
                                    {{ $orders->country }},
                                </div>
                                <label for="">Cod Postal</label>
                                <div class="border p-2">{{ $orders->pincode }}</div>
                        </div>
                        <div class="col-md-6">
                            <h4>Detalii Comanda</h4>
                            <hr>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nume</th>
                                        <th>Cantitate</th>
                                        <th>Pret</th>
                                        <th>Imagine</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders->orderitems as $item)
                                        <tr>
                                            <td>{{ $item->products->name }}</td>
                                            <td>{{ $item->qty }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>
                                                <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" width="50px" alt="Product Image">
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <h4 class="px-2">Pret total : <span class="float-end">{{ $orders->total_price }} Lei</span></h4>
                            <h6 class="px-2">Mod de plata : {{ $orders->payment_mode }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
