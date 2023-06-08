@extends('layouts.front')

@section('title')
    ND MEDHEALTH | Companie farmaceutică cu o gamă completă de servicii
@endsection

@section('content')
    @include('layouts.inc.slider')

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Top Oferte</h2>
                <div class="mb-5">
                    <div class="owl-carousel featured-carousel owl-theme">
                        @foreach ($featured_products as $prod)
                            <div class="item">
                                <a href="{{url('category/'.$prod->category->name.'/'.$prod->slug)}}">
                                <div class="card">
                                    <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" alt="Product image">
                                    <div class="card-body">
                                        <h5><b>{{ $prod->name }}</b></h5>
                                        <a href="{{url('category/'.$prod->category->name.'/'.$prod->slug)}}"></a>
                                        <span class="float-start">{{ $prod->selling_price }} Lei</span>
                                        <span class="float-end"> <s>{{ $prod->original_price }} Lei</s></span>
                                    </div>
                                </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Categorii Populare</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($trending_category as $tcategory)
                        <div class="item">
                            <a href="{{ url('view-category/'.$tcategory->slug) }}">
                                <div class="card">
                                    <img src="{{ asset('assets/uploads/category/'.$tcategory->image) }}" alt="Product image">
                                    <div class="card-body">
                                        <h5><b>{{ $tcategory->name }}</b></h5>
                                        <p>
                                            {{ $tcategory->description }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                     @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.featured-carousel').owlCarousel({
            loop:false,
            margin:10,
            nav:true,
            dots:true,
            center:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })
    </script>
@endsection