@extends('layouts.front')

@section('title', "Write a Review")

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md 12">
            <div class="card">
                <div class="card-body">
                    @if($verified_purchase->count() > 0)
                        <h5>Scrie un Review pentru {{ $product->name }}</h5>
                        <form action="{{ url('/add-review') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <textarea class="form-control" name="user_review" rows="5" placeholder="Write a review"></textarea>
                            <button type="submit" class="btn btn-primary mt-3">Posteaza Review</button>
                        </form>
                    @else
                        <div class="alert alert-danger">
                            <h5>Nu sunteti eligibil pentru a scrie un review pentru acest produs.</h5>
                            <p>
                                Pentru a trimite un comentariu despre acest produs, trebuie sa aveti o achizitie a produsului in contul dvs. de client in ultimele 60 luni si produsul sa nu fie returnat.
                            </p>
                            <a href="{{ url('/') }}" class="btn btn-primary mt-3">Acasa</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection