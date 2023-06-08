

<?php $__env->startSection('title', $products->name); ?>

<?php $__env->startSection('content'); ?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="<?php echo e(url('/add-rating')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="product_id" value ="<?php echo e($products->id); ?>">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Rate <?php echo e($products->name); ?></h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="rating-css">
                    <div class="star-icon">
                        <?php if($user_rating): ?>
                            <?php for($i = 1; $i <= $user_rating->stars_rated; $i++): ?>
                                <input type="radio" value="<?php echo e($i); ?>" name="product_rating" checked id="rating<?php echo e($i); ?>">
                                <label for="rating<?php echo e($i); ?>" class="fa fa-star"></label>
                            <?php endfor; ?>
                            <?php for($j = $user_rating->stars_rated+1; $j <= 5; $j++): ?>
                                <input type="radio" value="<?php echo e($j); ?>" name="product_rating" id="rating<?php echo e($j); ?>">
                                <label for="rating<?php echo e($j); ?>" class="fa fa-star"></label>
                            <?php endfor; ?>
                            
                        <?php else: ?>
                            <input type="radio" value="1" name="product_rating" checked id="rating1">
                            <label for="rating1" class="fa fa-star"></label>
                            <input type="radio" value="2" name="product_rating" id="rating2">
                            <label for="rating2" class="fa fa-star"></label>
                            <input type="radio" value="3" name="product_rating" id="rating3">
                            <label for="rating3" class="fa fa-star"></label>
                            <input type="radio" value="4" name="product_rating" id="rating4">
                            <label for="rating4" class="fa fa-star"></label>
                            <input type="radio" value="5" name="product_rating" id="rating5">
                            <label for="rating5" class="fa fa-star"></label>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
      </div>
    </div>
</div>

<div class="py-3 mb-4 shadow-sm bg-purple border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="<?php echo e(url('category')); ?>">
                Produse
            </a> / 
            <a href="<?php echo e(url('view-category/'.$products->category->slug)); ?>">
                <?php echo e($products->category->name); ?>

            </a> /
            <a href="<?php echo e(url('category/'.$products->category->slug.'/'.$products->slug)); ?>">
                <?php echo e($products->name); ?>

            </a>
        </h6>
    </div>
</div>

<div class="container pb-5">
    <div class="product_data">
        <div class="">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img src="<?php echo e(asset('assets/uploads/products/'.$products->image)); ?>" class="w-100" alt="">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-0">
                        <?php echo e($products->name); ?>

                        <?php if( $products->trending == '1' ): ?>
                        <label style="font-size: 16px;" class="float-end badge bg-danger trending_tag"> Trending </label>
                        <?php endif; ?>
                    </h2>

                    <hr>
                    <label class="me-3">Pret Original: <s><?php echo e($products->original_price); ?> Lei</s></label>
                    <label class="fw-bold">Pret: <?php echo e($products->selling_price); ?> Lei</label>
                    <?php $ratenum = number_format($rating_value) ?>
                    <div class="rating">
                        <?php for($i = 1; $i<=$ratenum; $i++): ?>
                             <i class="fa fa-star checked"></i>
                        <?php endfor; ?>
                        <?php for($j = $ratenum+1; $j <= 5; $j++): ?>
                            <i class="fa fa-star"></i>
                        <?php endfor; ?>
                        <span>
                            <?php if($ratings->count() > 0): ?>
                                <?php echo e($ratings->count()); ?> Rating
                            <?php else: ?>
                                Niciun Rating
                            <?php endif; ?>
                        </span>
                    </div>
                    <p class="mt-3">
                        <?php echo $products->small_description; ?>

                    </p>
                    <hr>
                    <?php if($products->qty > 0): ?>
                        <label class="badge bg-success">In stoc</label>
                    <?php else: ?>
                        <label class="badge bg-danger">Stoc epuizat</label>
                    <?php endif; ?>
                    <div class="row mt-2">
                        <div class="col-md-3">
                            <input type="hidden" value="<?php echo e($products->id); ?>" class="prod_id">
                            <label for="Quantity">Cantitate</label>
                            <div class="input-group text-center mb-3" style="width:130px;">
                                <button class="input-group-text decrement-btn">-</button>
                                <input type="text" name="quantity" class="form-control qty-input text-center" value ="1"/>
                                <button class="input-group-text increment-btn">+</button>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <br/>
                            <?php if($products->qty > 0): ?>
                                <button type="button" class="btn btn-success me-3 addToCartBtn float-start">Adauga la Cos <i class="fa fa-shopping-cart"></i></button>
                            <?php endif; ?>
                            <button type="button" class="btn btn-primary me-3 addToWishlist float-start">Adauga la Wishlist <i class="fa fa-heart"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                    <h3>Descriere</h3>
                    <p class="mt-3">
                        <?php echo $products->description; ?>

                    </p>
                </div>
                <hr>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Ofera feedback
                    </button>
                    <a href="<?php echo e(url('add-review/'.$products->slug.'/userreview')); ?>" class="btn btn-link">
                        Adauga recenzia ta
                    </a>
                </div>
                <div class="col-md-8">
                    <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="user-review">
                            <label for=""><?php echo e($item->user->name .' '. $item->user->lname); ?></label>
                            <?php if($item->user_id == Auth::id()): ?>
                                <a href="<?php echo e(url('edit-review/'.$products->slug.'/userreview')); ?>" class="underline-btn">Editeaza Review</a>
                            <?php endif; ?>
                            <br>
                            <?php 
                                $rating = App\Models\Rating::where('prod_id', $products->id)->where('user_id', $item->user->id)->first();
                            ?>
                            <?php if($rating): ?>
                                <?php $user_rated = $rating->stars_rated ?>
                                <?php for($i = 1; $i<=$user_rated; $i++): ?>
                                <i class="fa fa-star checked"></i>
                                <?php endfor; ?>
                                <?php for($j = $user_rated+1; $j <= 5; $j++): ?>
                                    <i class="fa fa-star"></i>
                                <?php endfor; ?>
                            <?php endif; ?>
                            <small><?php echo e($item->created_at->format('d M Y H:i')); ?></small>
                            <p>
                                <?php echo e($item->user_review); ?>

                            </p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\XAMPP\htdocs\website\resources\views/frontend/products/view.blade.php ENDPATH**/ ?>