

<?php $__env->startSection('content'); ?>
    <div class="content container-fluid">

        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Invoices</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Invoices</li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="page-header">
            <div class="row align-items-center">
                <div class="col"></div>
                <div class="col-auto">
                    <a href="invoices-list" class="invoices-links active">
                        <i class="feather feather-list"></i>
                    </a>
                    <a href="invoice-grid.html" class="invoices-links">
                        <i class="feather feather-grid"></i>
                    </a>
                </div>
            </div>
        </div>


        <div class="card report-card">
            <div class="card-body pb-0">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="app-listing">
                            <li>
                                <div class="multipleSelection">
                                    <div class="selectBox">
                                        <p class="mb-0"><i class="fas fa-user-plus me-1 select-icon"></i> Select User</p>
                                        <span class="down-icon"><i class="fas fa-chevron-down"></i></span>
                                    </div>
                                    <div id="checkBoxes">
                                        <form action="#">
                                            <p class="checkbox-title">Customer Search</p>
                                            <div class="form-custom">
                                                <input type="text" class="form-control bg-grey"
                                                    placeholder="Enter Customer Name">
                                            </div>
                                            <div class="selectBox-cont">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Brian Johnson
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Russell Copeland
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Greg Lynch
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> John Blair
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Barbara Moore
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Hendry Evan
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span> Richard Miles
                                                </label>
                                            </div>
                                            <button type="submit" class="btn w-100 btn-primary">Apply</button>
                                            <button type="reset" class="btn w-100 btn-grey">Reset</button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="multipleSelection">
                                    <div class="selectBox">
                                        <p class="mb-0"><i class="fas fa-calendar me-1 select-icon"></i> Select Date</p>
                                        <span class="down-icon"><i class="fas fa-chevron-down"></i></span>
                                    </div>
                                    <div id="checkBoxes">
                                        <form action="#">
                                            <p class="checkbox-title">Date Filter</p>
                                            <div class="selectBox-cont selectBox-cont-one h-auto">
                                                <div class="date-picker">
                                                    <div class="form-custom cal-icon">
                                                        <input class="form-control datetimepicker" type="text"
                                                            placeholder="Form">
                                                    </div>
                                                </div>
                                                <div class="date-picker pe-0">
                                                    <div class="form-custom cal-icon">
                                                        <input class="form-control datetimepicker" type="text"
                                                            placeholder="To">
                                                    </div>
                                                </div>
                                                <div class="date-list">
                                                    <ul>
                                                        <li><a href="#" class="btn date-btn">Today</a></li>
                                                        <li><a href="#" class="btn date-btn">Yesterday</a></li>
                                                        <li><a href="#" class="btn date-btn">Last 7 days</a></li>
                                                        <li><a href="#" class="btn date-btn">This month</a></li>
                                                        <li><a href="#" class="btn date-btn">Last month</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="multipleSelection">
                                    <div class="selectBox">
                                        <p class="mb-0"><i class="fas fa-book-open me-1 select-icon"></i> Select Status
                                        </p>
                                        <span class="down-icon"><i class="fas fa-chevron-down"></i></span>
                                    </div>
                                    <div id="checkBoxes">
                                        <form action="#">
                                            <p class="checkbox-title">By Status</p>
                                            <div class="selectBox-cont">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="name" checked>
                                                    <span class="checkmark"></span> All Invoices
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="name">
                                                    <span class="checkmark"></span> Paid
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="name">
                                                    <span class="checkmark"></span> Overdue
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="name">
                                                    <span class="checkmark"></span> Draft
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="name">
                                                    <span class="checkmark"></span> Recurring
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="name">
                                                    <span class="checkmark"></span> Cancelled
                                                </label>
                                            </div>
                                            <button type="submit" class="btn w-100 btn-primary">Apply</button>
                                            <button type="reset" class="btn w-100 btn-grey">Reset</button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="multipleSelection">
                                    <div class="selectBox">
                                        <p class="mb-0"><i class="fas fa-bookmark me-1 select-icon"></i> By Category</p>
                                        <span class="down-icon"><i class="fas fa-chevron-down"></i></span>
                                    </div>
                                    <div id="checkBoxes">
                                        <form action="#">
                                            <p class="checkbox-title">Category</p>
                                            <div class="form-custom">
                                                <input type="text" class="form-control bg-grey"
                                                    placeholder="Enter Category Name">
                                            </div>
                                            <div class="selectBox-cont">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="category">
                                                    <span class="checkmark"></span> Advertising
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="category">
                                                    <span class="checkmark"></span> Food
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="category">
                                                    <span class="checkmark"></span> Marketing
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="category">
                                                    <span class="checkmark"></span> Repairs
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="category">
                                                    <span class="checkmark"></span> Software
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="category">
                                                    <span class="checkmark"></span> Stationary
                                                </label>
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="category">
                                                    <span class="checkmark"></span> Travel
                                                </label>
                                            </div>
                                            <button type="submit" class="btn w-100 btn-primary">Apply</button>
                                            <button type="reset" class="btn w-100 btn-grey">Reset</button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="report-btn">
                                    <a href="#" class="btn">
                                        <img src="assets/img/icons/invoices-icon5.png" alt class="me-2"> Generate report
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="card invoices-tabs-card border-0">
            <div class="card-body card-body pt-0 pb-0">
                <div class="invoices-main-tabs">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-8">
                            <div class="invoices-tabs">
                                <ul>
                                    <li><a href="invoices-list" class="active">All Invoice</a></li>
                                    <li><a href="invoices-paid.html">Paid</a></li>
                                    <li><a href="invoices-overdue.html">Overdue</a></li>
                                    <li><a href="invoices-draft.html">Draft</a></li>
                                    <li><a href="invoices-recurring.html">Recurring</a></li>
                                    <li><a href="invoices-cancelled.html">Cancelled</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="invoices-settings-btn">
                                <a href="invoices-settings.html" class="invoices-settings-icon">
                                    <i class="feather feather-settings"></i>
                                </a>
                                <a href="add-invoices" class="btn">
                                    <i class="feather feather-plus-circle"></i> New Invoice
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card inovices-card">
                    <div class="card-body">
                        <div class="inovices-widget-header">
                            <span class="inovices-widget-icon">
                                <img src="assets/img/icons/invoices-icon1.svg" alt>
                            </span>
                            <div class="inovices-dash-count">
                                <div class="inovices-amount">$8,78,797</div>
                            </div>
                        </div>
                        <p class="inovices-all">All Invoices <span>50</span></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card inovices-card">
                    <div class="card-body">
                        <div class="inovices-widget-header">
                            <span class="inovices-widget-icon">
                                <img src="assets/img/icons/invoices-icon2.svg" alt>
                            </span>
                            <div class="inovices-dash-count">
                                <div class="inovices-amount">$4,5884</div>
                            </div>
                        </div>
                        <p class="inovices-all">Paid Invoices <span>60</span></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card inovices-card">
                    <div class="card-body">
                        <div class="inovices-widget-header">
                            <span class="inovices-widget-icon">
                                <img src="assets/img/icons/invoices-icon3.svg" alt>
                            </span>
                            <div class="inovices-dash-count">
                                <div class="inovices-amount">$2,05,545</div>
                            </div>
                        </div>
                        <p class="inovices-all">Unpaid Invoices <span>70</span></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card inovices-card">
                    <div class="card-body">
                        <div class="inovices-widget-header">
                            <span class="inovices-widget-icon">
                                <img src="assets/img/icons/invoices-icon4.svg" alt>
                            </span>
                            <div class="inovices-dash-count">
                                <div class="inovices-amount">$8,8,797</div>
                            </div>
                        </div>
                        <p class="inovices-all">Cancelled Invoices <span>80</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="table-responsive">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>
                            <table class="table table-stripped table-hover datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Invoice ID</th>
                                        <th>Created on</th>
                                        <th>Invoice to</th>
                                        <th>Amount</th>
                                        <th>Due date</th>
                                        <th>Status</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                
                                    <tr>
                                        <td>
                                           <?php echo e($invoice->invoice_no); ?>

                                        </td>
                                        <td><?php echo e($invoice->date); ?></td>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="#"><img
                                                        class="avatar avatar-sm me-2 avatar-img rounded-circle"
                                                        src="" alt="<?php echo e($invoice->signature); ?>"><?php echo e($invoice->customer_name); ?></a>
                                            </h2>
                                        </td>
                                        <td class="text-primary">$<?php echo e($invoice->total_amount); ?></td>
                                        <td><?php echo e($invoice->due_date); ?></td>
                                        <td><span class="badge bg-danger-light">Overdue</span></td>
                                        <td class="text-end">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false"><i
                                                        class="fas fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="edit-invoices/<?php echo e($invoice->id); ?>"><i
                                                            class="far fa-edit me-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="view-invoices"><i
                                                            class="far fa-eye me-2"></i>View</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="far fa-trash-alt me-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="far fa-check-circle me-2"></i>Mark as sent</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="far fa-paper-plane me-2"></i>Send Invoice</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="far fa-copy me-2"></i>Clone Invoice</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\preskool\resources\views/invoices_list.blade.php ENDPATH**/ ?>