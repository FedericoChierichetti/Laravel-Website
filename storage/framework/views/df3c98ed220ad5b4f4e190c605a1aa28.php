<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo" style="margin-left: 10px;"><a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('assets/images/logo.png')); ?>" width="230px" alt="Website" class="simple-text logo-normal">
    </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item <?php echo e(Request::is('dashboard') ? 'active':''); ?> ">
          <a class="nav-link">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
          </a>
        </li>      
        <li class="nav-item <?php echo e(Request::is('categories') ? 'active':''); ?>">
          <a class="nav-link" href="<?php echo e(url('categories')); ?>">
            <i class="material-icons">person</i>
            <p>Categorii</p>
          </a>
        </li>
        <li class="nav-item <?php echo e(Request::is('add-category') ? 'active':''); ?>">
          <a class="nav-link" href="<?php echo e(url('add-category')); ?>">
            <i class="material-icons">person</i>
            <p>Adauga Categorii</p>
          </a>
        </li>

        <li class="nav-item <?php echo e(Request::is('products') ? 'active':''); ?>">
          <a class="nav-link" href="<?php echo e(url('products')); ?>">
            <i class="material-icons">person</i>
            <p>Produse</p>
          </a>
        </li>
        <li class="nav-item <?php echo e(Request::is('add-products') ? 'active':''); ?>">
          <a class="nav-link" href="<?php echo e(url('add-products')); ?>">
            <i class="material-icons">person</i>
            <p>Adauga Produse</p>
          </a>
        </li>

        <li class="nav-item <?php echo e(Request::is('orders') ? 'active':''); ?>">
          <a class="nav-link" href="<?php echo e(url('orders')); ?>">
            <i class="material-icons">content_paste</i>
            <p>Orders</p>
          </a>
        </li>
        <li class="nav-item <?php echo e(Request::is('users') ? 'active':''); ?>">
          <a class="nav-link" href="users">
            <i class="material-icons">person</i>
            <p>Users</p>
          </a>
        </li>
      </ul>
    </div>
  </div><?php /**PATH F:\XAMPP\htdocs\website\resources\views/layouts/inc/sidebar.blade.php ENDPATH**/ ?>