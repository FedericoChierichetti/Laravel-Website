<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="Website"></a>
      <div class="search-bar">
        <form action="<?php echo e(url('searchproduct')); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <div class="input-group">
            <input type="search" class="form-control" id="search_product" name="product_name" required placeholder="Cauta produsul dorit" aria-describedby="basic-addon1">
            <button type="submit" class="input-group-text"><i class="fa fa-search"></i></button>
          </div>
      </form>
    </div>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('category')); ?>">Produse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('cart')); ?>">Cosul meu
                <span class="badge badge-pill bg-primary cart-count">0</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('wishlist')); ?>">Wishlist
                <span class="badge badge-pill bg-success wishlist-count">0</span>
            </a>
          </li>


          <?php if(auth()->guard()->guest()): ?>
              <?php if(Route::has('login')): ?>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Autentificare')); ?></a>
                  </li>
              <?php endif; ?>

              <?php if(Route::has('register')): ?>
                  <li class="nav-item">
                      <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Inregistrare')); ?></a>
                  </li>
              <?php endif; ?>
          <?php else: ?>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      <?php echo e(Auth::user()->name); ?>

                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                      <a class="dropdown-item" href="<?php echo e(url('my-orders')); ?>">
                        Comenzile mele
                      </a>
                    </li>  
                    <?php if(auth()->check() && auth()->user()->role_as == 1): ?>
                            <a class="dropdown-item" href="<?php echo e(url('dashboard')); ?>">
                                Dashboard
                            </a>
                    <?php endif; ?>
                  <li>
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <?php echo e(__('Logout')); ?>  
                    </a>
             
                      <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                          <?php echo csrf_field(); ?>
                      </form>
                  </div>
              </li>
          <?php endif; ?>
        </ul>
        </div>
    </div>
  </nav>
<?php /**PATH F:\XAMPP\htdocs\website\resources\views/layouts/inc/frontnavbar.blade.php ENDPATH**/ ?>