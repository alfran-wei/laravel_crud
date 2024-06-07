



<?php $__env->startSection('content'); ?>
    <div class="content container-fluid">

        <div class="page-header invoices-page-header">
            <div class="row align-items-center">
                <div class="col">
                    <ul class="breadcrumb invoices-breadcrumb">
                        <li class="breadcrumb-item invoices-breadcrumb-item">
                            <a href="invoices-list">
                                <i class="fe fe-chevron-left"></i> Back to Invoice List
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <div class="invoices-create-btn">
                        <a class="invoices-preview-link" href="#" data-bs-toggle="modal"
                            data-bs-target="#invoices_preview"><i class="fe fe-eye"></i> Preview</a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_invoices_details"
                            class="btn delete-invoice-btn">
                            Delete Invoice
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#save_invocies_details"
                            class="btn save-invoice-btn">
                            Save Draft
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card invoices-add-card">
                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="alert alert-danger"> <?php echo e($error); ?> </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>


                        <form action="/edit-invoices/traitement" method="POST" class="invoices-form">
                            <?php echo csrf_field(); ?>
                            <input type="text" name="id" style="display:none;" value="<?php echo e($invoices->id); ?>>
                            <div class="invoices-main-form">
                                <div class="row">
                                    <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="customer_name">Customer Name</label>
                                            <input type="text" class="form-control" id="customer_name"
                                                name="customer_name" placeholder="Enter customer name" value="<?php echo e($invoices->customer_name); ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="po_number">PO Number</label>
                                            <input type="text" class="form-control" id="po_number" name="po_number"
                                                placeholder="Enter PO Number" value="<?php echo e($invoices->po_number); ?>>
                                        </div>
                                        <div class="form-group">
                                            <label for="invoice_no">Invoice No.</label>
                                            <input type="text" class="form-control" id="invoice_no" name="invoice_no"
                                                placeholder="Enter Invoice No." value="<?php echo e($invoices->invoice_no); ?>>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-md-6 col-sm-12 col-12">
                                        <h4 class="invoice-details-title">Invoice details</h4>
                                        <div class="invoice-details-box">
                                            <div class="invoice-inner-footer">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="invoice-inner-date">
                                                            <span>
                                                                Date <input type="date" class="form-control"
                                                                    id="date" name="date" value="<?php echo e($invoices->date); ?>>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="invoice-inner-date invoice-inner-datepic">
                                                            <span>
                                                                Due Date <input type="date" class="form-control"
                                                                    id="due_date" name="due_date" value="<?php echo e($invoices->due_date); ?>>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="enable_tax">Enable Tax</label>
                                                <input type="checkbox" id="enable_tax" name="enable_tax" value="<?php echo e($invoices->enable_tax); ?>>
                                            </div>
                                            <div class="form-group">
                                                <label for="recurring_invoice">Recurring Invoice</label>
                                                <input type="checkbox" id="recurring_invoice" name="recurring_invoice" value="<?php echo e($invoices->recurring_invoice); ?>>
                                            </div>
                                            <div class="form-group" id="recurring_period_div">
                                                <label for="recurring_period">Recurring Period</label>
                                                <input type="text" class="form-control" id="recurring_period"
                                                    name="recurring_period" placeholder="Enter Recurring Period" value="<?php echo e($invoices->recurring_period); ?>>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-item">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="invoice-info">
                                            <strong class="customer-text">Billing Address <a class="small"
                                                    href="edit-invoices/{id}">Edit Address</a></strong>
                                            <textarea class="form-control" id="billing_address" name="billing_address" value="<?php echo e($invoices->billing_address); ?>></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="invoice-info">
                                            <strong class="customer-text">Shipping Address</strong>
                                            <textarea class="form-control" id="shipping_address" name="shipping_address" value="<?php echo e($invoices->shipping_address); ?>></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                            <div class="row">
                                <div class="col-lg-5 col-md-6">
                                    <div class="invoice-total-card">
                                        <h4 class="invoice-total-title">Summary</h4>
                                        <div class="invoice-total-box">
                                            <div class="invoice-total-inner">
                                                <div class="form-group">
                                                    <label for="taxable_amount">Taxable Amount</label>
                                                    <input type="text" class="form-control" id="taxable_amount"
                                                        name="taxable_amount" value="<?php echo e($invoices->taxable_amount); ?>>
                                                </div>
                                                <div class="form-group">
                                                    <label for="round_off">Round Off</label>
                                                    <input type="checkbox" id="round_off" name="round_off" value="<?php echo e($invoices->round_off); ?>>
                                                </div>
                                                <div class="form-group">
                                                    <label for="total_amount">Total Amount</label>
                                                    <input type="text" class="form-control" id="total_amount"
                                                        name="total_amount" value="<?php echo e($invoices->total_amount); ?>>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="upload-sign">
                                        <div class="form-group service-upload">
                                            <span>Upload Sign</span>
                                            <input type="file" id="signature" name="signature" value="<?php echo e($invoices->signature); ?>>
                                        </div>
                                        <div class="form-group">
                                            <label for="terms_conditions">Terms & Conditions</label>
                                            <textarea class="form-control" id="terms_conditions" name="terms_conditions" value="<?php echo e($invoices->terms_conditions); ?>></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="notes">Notes</label>
                                            <textarea class="form-control" id="notes" name="notes" value="<?php echo e($invoices->notes); ?>></textarea>
                                        </div>
                                        <div class="form-group float-end mb-0">
                                            <button class="btn btn-primary" type="submit">Update Invoice</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\preskool\resources\views/edit_invoices.blade.php ENDPATH**/ ?>