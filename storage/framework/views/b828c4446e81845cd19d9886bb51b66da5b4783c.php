<?php $__env->startSection('main-content'); ?>
    <section class="content-header">
        <h1>
            Danh sách sản phẩm
        </h1>
        <form action="<?php echo e(route('product_get')); ?>" method="get" id="formAddProduct">
            <input type="submit" value="Thêm sản phẩm" class="btn btn-default">
        </form>

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
                                <th class="sorting_asc col-md-2" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="">Tên sản phẩm</th>
                                <th class="sorting col-md-1" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Ảnh</th>
                                <th class="sorting col-md-1" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Giá</th>
                                <th class="sorting col-md-1" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Mô tả</th>
                                <th class="sorting col-md-1" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Danh mục</th>
                                <th class="sorting col-md-1" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Action</th>
                                <th class="sorting col-md-2" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Xóa</th></tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($product->id); ?></td>
                                    <td><?php echo e($product->name); ?></td>
                                    <td><img style="height: 70px ; width: 70px ;" src="<?php echo e($product->img); ?>"></td>
                                    <td><?php echo e($product->price); ?></td>
                                    <td><?php echo e($product->description); ?></td>
                                    <td><?php echo e($product->category_name); ?></td>

                                    <td><a href="<?php echo e(route('edit-product', ['id'=>$product->id])); ?>"><button class="btn btmn-danger" type="button">Edit</button></a>
                                    <td>
                                        <a href="<?php echo e(route('delete-product')); ?>?id=<?php echo e($product->id); ?>"><button class="btn btmn-warning" type="button">Delete</button></a>
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
<?php /* C:\xampp\htdocs\canteenms\resources\views/vendor/adminlte/layouts/danh-sach-san-pham.blade.php */ ?>