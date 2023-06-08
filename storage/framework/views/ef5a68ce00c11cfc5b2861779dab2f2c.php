

<?php $__env->startSection('title'); ?>
    Checkout
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-3">
        <form action="<?php echo e(url('place-order')); ?>" method="POST">
        <?php echo e(csrf_field()); ?>

            <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h6>Detalii livrare comanda</h6>
                        <hr>
                        <div class="row checkout-form">
                            <div class="col-md-6">
                                <label for="">Prenume</label>
                                <input type="text" class="form-control firstname" value="<?php echo e(Auth::user()->name); ?>" name="fname" placeholder="Enter First Name">
                                <span id="fname_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="">Nume de familie</label>
                                <input type="text" class="form-control lastname" value="<?php echo e(Auth::user()->lname); ?>" name="lname" placeholder="Enter Last Name">
                                <span id="lname_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Email</label>
                                <input type="text" class="form-control email" value="<?php echo e(Auth::user()->email); ?>" name="email" placeholder="Enter Email">
                                <span id="email_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Numar de Telefon</label>
                                <input type="text" class="form-control phone" value="<?php echo e(Auth::user()->phone); ?>" name="phone" placeholder="Enter Phone Number">
                                <span id="phone_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Adresa 1</label>
                                <input type="text" class="form-control address1" value="<?php echo e(Auth::user()->address1); ?>" name="address1" placeholder="Enter Address 1">
                                <span id="address1_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Adresa 2</label>
                                <input type="text" class="form-control address2" value="<?php echo e(Auth::user()->address2); ?>" name="address2" placeholder="Enter Address 2">
                                <span id="address2_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Localitate</label>
                                <input type="text" class="form-control city" value="<?php echo e(Auth::user()->city); ?>" name="city" placeholder="Enter City">
                                <span id="city_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Judet</label>
                                <input type="text" class="form-control state" value="<?php echo e(Auth::user()->state); ?>" name="state" placeholder="Enter State">
                                <span id="state_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Tara</label>
                                <input type="text" class="form-control country" value="<?php echo e(Auth::user()->country); ?>" name="country" placeholder="Enter Country">
                                <span id="country_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Cod Postal</label>
                                <input type="text" class="form-control pincode" value="<?php echo e(Auth::user()->pincode); ?>" name="pincode" placeholder="Enter Pin Code">
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
                        <?php if($cartitems->count() > 0): ?>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nume</th>
                                        <th>Cantitate</th>
                                        <th>Pret</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $total = 0; ?>
                                    <?php $__currentLoopData = $cartitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <?php $total += ($item->products->selling_price * $item->prod_qty) ?>
                                            <td><?php echo e($item->products->name); ?></td>
                                            <td><?php echo e($item->prod_qty); ?></td>
                                            <td><?php echo e($item->products->selling_price); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>                     
                            <h6 class="px-2"> Subtotal: <span class="float-end"><?php echo e($total); ?> Lei</span></h6>
                            <hr>
                            <input type="hidden" name="payment_mode" value="Ramburs, la livrare">
                            <button type="submit" class="btn btn-success w-100 mb-3">Plaseaza Comanda (Ramburs, la livrare)</button>
                            <div id="paypal-button-container"></div>
                        <?php else: ?>   
                            <h4 class="text-center">Nici un produs in cos</h4>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="https://www.paypal.com/sdk/js?client-id=AemGPxfvFtVp2pm0UnW_R4iqBcsagbfTkGkIqCo2CgCDk1HE6z_3mmJQ4yv_bIvO-9OonPnTcHt0IGn1"></script>

    <script>
        paypal.Buttons({
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '<?php echo e($total); ?>'
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\website\resources\views/frontend/checkout.blade.php ENDPATH**/ ?>