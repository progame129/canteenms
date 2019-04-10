<?php $__env->startSection('main-content'); ?>

   

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="<?php echo e(route('category_add')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <label>Category Name</label>
                                <input class="form-control" name="nameCategory" placeholder="Please Enter Category Name" />
                            </div>
                            
                            <button type="submit" class="btn btn-default">Category Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
   <script src="<?php echo e(asset('theme/asset/js/jquery.min.js')); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo e(asset('theme/asset/js/bootstrap.min.js')); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo e(asset('theme/asset/js/metisMenu.min.js')); ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo e(asset('theme/asset/js/sb-admin-2.js')); ?>"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo e(asset('theme/asset/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('theme/asset/js/dataTables.bootstrap.min.js')); ?>"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\canteenms\resources\views/category_add.blade.php */ ?>