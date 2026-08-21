

<?php $__env->startSection('content'); ?>
<!-- Start Content-->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="page-title-box">
                <h2 class="page-title font-weight-bold text-uppercase">Manage Bills</h2>
            </div>
        </div>

    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <!--Include alert file-->
            <?php echo $__env->make('include.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="card-box">
                <a href="<?php echo e(route('add-gst-bill')); ?>" class="btn btn-sm btn-blue waves-effect waves-light float-right">
                    <i class="mdi mdi-plus-circle"></i> Create New Bill
                </a>
                <h4 class="header-title mb-4 text-uppercase">Manage Bills</h4>

                <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100 table-bordered" id="tickets-table">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Invoice No</th>
                            <th>Cielnt's Info</th>
                            <th>Billing Info</th>
                            <th>Invoice Date</th>
                            <th class="hidden-sm">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php if(count($bills)): ?>
                        <?php $__currentLoopData = $bills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><b><?php echo e($index+1); ?></b></td>
                            <td>#<?php echo e($bill->invoice_no); ?></td>
                            <td>
                                <ul class="list-unstyled">
                                    <li><b>Name:</b> <span> <?php echo e($bill->party->full_name); ?></span></li>
                                    <li><b>Phone:</b> <span> <?php echo e($bill->party->phone_no); ?></span></li>
                                </ul>
                            </td>

                            <td>
                                <ul class="list-unstyled">
                                    <li><b>Total Amount:</b> <span>₹<?php echo e($bill->total_amount); ?></span></li>
                                    <li><b>TAX:</b> <span>₹<?php echo e($bill->tax_amount); ?></span></li>
                                    <li><b>Net Amount:</b> <span>₹<?php echo e($bill->net_amount); ?></span></li>
                                </ul>
                            </td>

                            <td><?php echo e(date("d-m-Y", strtotime($bill->invoice_date))); ?></td>
                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="<?php echo e(route('delete', ['gst_bills', $bill->id])); ?>"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Delete</a>
                                        <a class="dropdown-item" href="<?php echo e(route('print-gst-bill', $bill->id)); ?>"><i class="mdi mdi-printer mr-2 text-muted font-18 vertical-middle"></i>
                                            Print</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                        <tr>
                            <td colspan="6">No record found!</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div><!-- end col -->
        </div>
    </div>
    <!-- end row -->

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\gst-billing\resources\views/gst-bill/index.blade.php ENDPATH**/ ?>