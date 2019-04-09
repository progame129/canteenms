
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <?php if(! Auth::guest()): ?>
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo e(Gravatar::get($user->email)); ?>" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p><?php echo e(Auth::user()->name); ?></p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> <?php echo e(trans('adminlte_lang::message.online')); ?></a>
                </div>
            </div>
        <?php endif; ?>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="<?php echo e(trans('adminlte_lang::message.search')); ?>..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
       
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="<?php echo e(url('home')); ?>"><i class='fa fa-link'></i> <span><?php echo e(trans('adminlte_lang::message.home')); ?></span></a></li>
            <li><a href="<?php echo e(url('danh-muc-san-pham')); ?>"><i class='fa fa-link'></i> <span><?php echo e(trans('Danh mục sản phẩm')); ?></span><i class="fa fa-angle-left pull-right"></i></a></li>
            <li class="treeview">
                <a href="<?php echo e(url('danh-sach-san-pham')); ?>"><i class='fa fa-link'></i> <span><?php echo e(trans('Quản lý sản phẩm')); ?></span> <i class="fa fa-angle-left pull-right"></i></a>
            </li>
            <li>
                <a href="<?php echo e(url('danh-sach-don-hang')); ?>"><i class="fas fa-file-invoice-dollar"></i> <span><?php echo e(trans('Quản lí đơn hàng')); ?></span></a>
            </li>
            <li>
                <a href="#"><i class='fa fa-link'></i> <span><?php echo e(trans('Quản lý phản hồi')); ?></span> <i class="fa fa-angle-left pull-right"></i></a>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

<?php /* C:\xampp\htdocs\canteenms\resources\views/vendor/adminlte/layouts/partials/sidebar.blade.php */ ?>