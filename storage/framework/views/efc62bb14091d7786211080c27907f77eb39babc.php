<?php $__env->startSection('htmlheader_title'); ?>
Đơn hàng chi tiết
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
<section class="content-header">
    <h1>
        Chi tiết đơn hàng
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Bill</a></li>
        <li class="active">List</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <div class="row">
                <div class="col-md-12">
                    <div class="container123  col-md-6"   style="">
                        <h4></h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="col-md-4">Thông tin khách hàng</th>
                                    <th class="col-md-6"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Thông tin người đặt hàng</td>
                                    <td><?php echo e($customerInfo->name); ?></td>
                                </tr>
                                <tr>
                                    <td>Ngày đặt hàng</td>
                                    <td><?php echo e($customerInfo->created_at); ?></td>
                                </tr>
                                <tr>
                                    <td>Số điện thoại</td>
                                    <td><?php echo e($customerInfo->phone_number); ?></td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ</td>
                                    <td><?php echo e($customerInfo->address); ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?php echo e($customerInfo->email); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <table id="myTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting col-md-1" >STT</th>
                                <th class="sorting_asc col-md-4">Tên sản phẩm</th>
                                <th class="sorting col-md-2">Số lượng</th>
                                <th class="sorting col-md-2">Giá tiền</th>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $billInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key+1); ?></td>
                                    <td><?php echo e($bill->product_name); ?></td>
                                    <td><?php echo e($bill->quantity); ?></td>
                                    <td><?php echo e(number_format($bill->price)); ?> VNĐ</td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td colspan="3"><b>Tổng tiền</b></td>
                                    <td colspan="1"><b class="text-red"><?php echo e(number_format($customerInfo->bill_total)); ?> VNĐ</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12">
                    <form action="<?php echo e(url('danh-sach-don-hang')); ?>/<?php echo e($customerInfo->bill_id); ?>" method="POST">
                        <input type="hidden" name="_method" value="PUT">
                        <?php echo e(csrf_field()); ?>

                        <div class="col-md-8"></div>
                        <div class="col-md-4">
                            <div class="form-inline">
                                <label>Trạng thái giao hàng: </label>
                                <select name="status" class="form-control input-inline" style="width: 200px">
                                    <option value="1">Chưa giao</option>
                                    <option value="2">Đang giao</option>
                                    <option value="3">Đã giao</option>
                                </select>

                                <input type="submit" value="Xử lý" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\canteenms\resources\views/vendor/adminlte/layouts/chi-tiet-don-hang.blade.php */ ?>