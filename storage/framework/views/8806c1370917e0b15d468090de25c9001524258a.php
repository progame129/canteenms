<?php $__env->startSection('htmlheader_title'); ?>
Quản lí đơn hàng
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
<section class="content-header">
    <h1>
        Danh sách đơn hàng
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Bill</a></li>
        <li class="active">List</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <?php if(Session::has('message')): ?>
    <div class="alert alert-info"> <?php echo e(Session::get('message')); ?></div>
    <?php endif; ?>

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <div class="row">
                <div class="col-md-12">
                    <table id="myTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                       <thead>
                        <tr role="row">
                            <th class="sorting col-md-1" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="" >ID</th>
                            <th class="sorting_asc col-md-2" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="">Tên người order</th>
                            <th class="sorting col-md-2" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Địa chỉ</th>
                            <th class="sorting col-md-1" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Ngày đặt hàng</th>
                            <th>Email</th>
                            <th>Trạng thái</th>
                            <th class="sorting col-md-1" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Action</th>
                            <th class="sorting col-md-2" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Sửa</th></tr>
                            <th class="sorting col-md-2" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Xóa</th></tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($customer->id); ?></td>
                                <td><?php echo e($customer->name); ?></td>
                                <td><?php echo e($customer->address); ?></td>
                                <td><?php echo e($customer->created_at); ?></td>
                                <td><?php echo e($customer->email); ?></td>
                                <td><?php switch($customer->bill_status):
                                    case (1): ?>
                                    Chưa giao
                                    <?php break; ?>

                                    <?php case (2): ?>
                                    Đang giao
                                    <?php break; ?>

                                    <?php case (3): ?>
                                    Đã Giao
                                    <?php break; ?>

                                    <?php default: ?>
                                    Chưa xử lý
                                    <?php endswitch; ?>
                                </td>
                                <td><a href="<?php echo e(url('chi-tiet-don-hang')); ?>/<?php echo e($customer->id); ?>">Detail</a></td>
                                <td>
                                    <form action="<?php echo e(url('danh-sach-don-hang')); ?>/<?php echo e($customer->id); ?>" method="post" id="formDelete">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="submit" value="Delete" class="btn btn-danger">
                                        <?php echo e(csrf_field()); ?>

                                    </form>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\canteenms\resources\views/vendor/adminlte/layouts/danh-sach-don-hang.blade.php */ ?>