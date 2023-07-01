@extends('layouts.front')

@section('title')
    Checkout
@endsection

@section('content')
    <div class="container mt-3">
        @if ($errors->any())
            <div class="alert alert-danger">
                Toate câmpurile sunt obligatorii.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ url('place-order') }}" method="POST">
        {{ csrf_field() }}
            <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h6>Detalii livrare comanda</h6>
                        <hr>
                        <div class="row checkout-form">
                            <div class="col-md-6">
                                <label for="">Prenume</label>
                                <input type="text" class="form-control firstname" value="{{ Auth::user()->name }}" name="fname" placeholder="Introduceți prenumele">
                                <span id="fname_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="">Nume de familie</label>
                                <input type="text" class="form-control lastname" value="{{ Auth::user()->lname }}" name="lname" placeholder="Introduceți numele de familie">
                                <span id="lname_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Email</label>
                                <input type="text" class="form-control email" value="{{ Auth::user()->email }}" name="email" placeholder="Introduceți email">
                                <span id="email_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Numar de Telefon</label>
                                <input type="text" class="form-control phone" value="{{ Auth::user()->phone }}" name="phone" placeholder="Introduceți numărul de telefon">
                                <span id="phone_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Adresa 1</label>
                                <input type="text" class="form-control address1" value="{{ Auth::user()->address1 }}" name="address1" placeholder="Introduceți adresa 1">
                                <span id="address1_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Adresa 2</label>
                                <input type="text" class="form-control address2" value="{{ Auth::user()->address2 }}" name="address2" placeholder="Introduceți adresa 2">
                                <span id="address2_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Localitate</label>
                                <input type="text" class="form-control city" value="{{ Auth::user()->city }}" name="city" placeholder="Introduceți localitatea">
                                <span id="city_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Judet</label>
                                <input type="text" class="form-control state" value="{{ Auth::user()->state }}" name="state" placeholder="Introduceți județul">
                                <span id="state_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Tara</label>
                                <input type="text" class="form-control country" value="{{ Auth::user()->country }}" name="country" placeholder="Introduceți țara">
                                <span id="country_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Cod Postal</label>
                                <input type="text" class="form-control pincode" value="{{ Auth::user()->pincode }}" name="pincode" placeholder="Introduceți codul postal">
                                <span id="pincode_error" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h6>Sumar Comanda</h6>
                        <hr>
                        @if($cartitems->count() > 0)
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nume</th>
                                        <th>Cantitate</th>
                                        <th>Pret</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $total = 0; @endphp
                                    @foreach ($cartitems as $item)
                                        <tr>
                                            @php $total += ($item->products->selling_price * $item->prod_qty) @endphp
                                            <td>{{ $item->products->name }}</td>
                                            <td>{{ $item->prod_qty }}</td>
                                            <td>{{ $item->products->selling_price }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>                     
                            <h6 class="px-2"> Subtotal: <span class="float-end">{{$total}} Lei</span></h6>
                            <hr>
                            <input type="hidden" name="payment_mode" value="Ramburs, la livrare">
                            <button type="submit" class="btn btn-success w-100 mb-3">Plaseaza Comanda (Ramburs, la livrare)</button>
                            <div id="paypal-button-container"></div>
                        @else   
                            <h4 class="text-center">Nici un produs in cos</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="https://www.paypal.com/sdk/js?client-id=AemGPxfvFtVp2pm0UnW_R4iqBcsagbfTkGkIqCo2CgCDk1HE6z_3mmJQ4yv_bIvO-9OonPnTcHt0IGn1"></script>

    <script>
        paypal.Buttons({
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '{{ $total }}'
                        }
                    }]
                });
            },
            onApprove: function(data, actions)  {
                return actions.order.capture().then(function(details){
                    var firstname = $('.firstname').val();
                    var lastname = $('.lastname').val();
                    var email = $('.email').val();
                    var phone = $('.phone').val();
                    var address1 = $('.address1').val();
                    var address2 = $('.address2').val();
                    var city = $('.city').val();
                    var state = $('.state').val();
                    var country = $('.country').val();
                    var pincode = $('.pincode').val();

                    $.ajax({
                        method: "POST",
                        url: "/place-order",
                        data: {
                            'fname': firstname,
                            'lname': lastname,
                            'email': email,
                            'phone': phone,
                            'address1': address1,
                            'address2': address2,
                            'city': city,
                            'state': state,
                            'country': country,
                            'pincode': pincode,
                            'payment_mode': "Paid by Paypal",
                            'payment_id': details.id,
                        },
                        success: function(response){
                            swal(response.status)
                            .then((value) => {
                                window.location.href = "/my-orders";
                            });
                        }
                    });
                });
            }
        }).render('#paypal-button-container');
    </script>
@endsection
