@extends('layouts.main')

@section('content')
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
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="alert alert-danger"> {{ $error }} </li>
                            @endforeach

                        </ul>


                        <form action="/add-invoices/traitement" method="POST" class="invoices-form">
                            @csrf
                            <div class="invoices-main-form">
                                <div class="row">
                                    <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label for="customer_name">Customer Name</label>
                                            <input type="text" class="form-control" id="customer_name"
                                                name="customer_name" placeholder="Enter customer name">
                                        </div>
                                        <div class="form-group">
                                            <label for="po_number">PO Number</label>
                                            <input type="text" class="form-control" id="po_number" name="po_number"
                                                placeholder="Enter PO Number">
                                        </div>
                                        <div class="form-group">
                                            <label for="invoice_no">Invoice No.</label>
                                            <input type="text" class="form-control" id="invoice_no" name="invoice_no"
                                                placeholder="Enter Invoice No.">
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
                                                                    id="date" name="date">
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="invoice-inner-date invoice-inner-datepic">
                                                            <span>
                                                                Due Date <input type="date" class="form-control"
                                                                    id="due_date" name="due_date">
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="enable_tax">Enable Tax</label>
                                                <input type="checkbox" id="enable_tax" name="enable_tax">
                                            </div>
                                            <div class="form-group">
                                                <label for="recurring_invoice">Recurring Invoice</label>
                                                <input type="checkbox" id="recurring_invoice" name="recurring_invoice">
                                            </div>
                                            <div class="form-group" id="recurring_period_div">
                                                <label for="recurring_period">Recurring Period</label>
                                                <input type="text" class="form-control" id="recurring_period"
                                                    name="recurring_period" placeholder="Enter Recurring Period">
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
                                            <textarea class="form-control" id="billing_address" name="billing_address"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6">
                                        <div class="invoice-info">
                                            <strong class="customer-text">Shipping Address</strong>
                                            <textarea class="form-control" id="shipping_address" name="shipping_address"></textarea>
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
                                                        name="taxable_amount">
                                                </div>
                                                <div class="form-group">
                                                    <label for="round_off">Round Off</label>
                                                    <input type="checkbox" id="round_off" name="round_off">
                                                </div>
                                                <div class="form-group">
                                                    <label for="total_amount">Total Amount</label>
                                                    <input type="text" class="form-control" id="total_amount"
                                                        name="total_amount">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="upload-sign">
                                        <div class="form-group service-upload">
                                            <span>Upload Sign</span>
                                            <input type="file" id="signature" name="signature">
                                        </div>
                                        <div class="form-group">
                                            <label for="terms_conditions">Terms & Conditions</label>
                                            <textarea class="form-control" id="terms_conditions" name="terms_conditions"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="notes">Notes</label>
                                            <textarea class="form-control" id="notes" name="notes"></textarea>
                                        </div>
                                        <div class="form-group float-end mb-0">
                                            <button class="btn btn-primary" type="submit">Save Invoice</button>
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
    </div>


    <div class="modal custom-modal fade invoices-preview" id="invoices_preview" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="card invoice-info-card">
                                <div class="card-body pb-0">
                                    <div class="invoice-item invoice-item-one">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="invoice-logo">
                                                    <img src="assets/img/logo.png" alt="logo">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="invoice-info">
                                                    <div class="invoice-head">
                                                        <h2 class="text-primary">Invoice</h2>
                                                        <p>Invoice Number : In983248782</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="invoice-item invoice-item-bg">
                                        <div class="invoice-circle-img">
                                            <img src="assets/img/invoice-circle1.png" alt class="invoice-circle1">
                                            <img src="assets/img/invoice-circle2.png" alt class="invoice-circle2">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                                <div class="invoice-info">
                                                    <strong class="customer-text-one">Billed to</strong>
                                                    <h6 class="invoice-name">Customer Name</h6>
                                                    <p class="invoice-details invoice-details-two">
                                                        9087484288 <br>
                                                        Address line 1, <br>
                                                        Address line 2 <br>
                                                        Zip code ,City - Country
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="invoice-info">
                                                    <strong class="customer-text-one">Invoice From</strong>
                                                    <h6 class="invoice-name">Company Name</h6>
                                                    <p class="invoice-details invoice-details-two">
                                                        9087484288 <br>
                                                        Address line 1, <br>
                                                        Address line 2 <br>
                                                        Zip code ,City - Country
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="invoice-info invoice-info-one border-0">
                                                    <p>Issue Date : 27 Jul 2022</p>
                                                    <p>Due Date : 27 Aug 2022</p>
                                                    <p>Due Amount : $ 1,54,22 </p>
                                                    <p>Recurring Invoice : 15 Months</p>
                                                    <p class="mb-0">PO Number : 54515454</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="invoice-item invoice-table-wrap">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="invoice-table table table-center mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Description</th>
                                                                <th>Category</th>
                                                                <th>Rate/Item</th>
                                                                <th>Quantity</th>
                                                                <th>Discount (%)</th>
                                                                <th class="text-end">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Dell Laptop</td>
                                                                <td>Laptop</td>
                                                                <td>$1,110</td>
                                                                <th>2</th>
                                                                <th>2%</th>
                                                                <td class="text-end">$400</td>
                                                            </tr>
                                                            <tr>
                                                                <td>HP Laptop</td>
                                                                <td>Laptop</td>
                                                                <td>$1,500</td>
                                                                <th>3</th>
                                                                <th>6%</th>
                                                                <td class="text-end">$3,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Apple Ipad</td>
                                                                <td>Ipad</td>
                                                                <td>$11,500</td>
                                                                <th>1</th>
                                                                <th>10%</th>
                                                                <td class="text-end">$11,000</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="invoice-payment-box">
                                                <h4>Payment Details</h4>
                                                <div class="payment-details">
                                                    <p>Debit Card XXXXXXXXXXXX-2541 HDFC Bank</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="invoice-total-card">
                                                <div class="invoice-total-box">
                                                    <div class="invoice-total-inner">
                                                        <p>Taxable <span>$6,660.00</span></p>
                                                        <p>Additional Charges <span>$6,660.00</span></p>
                                                        <p>Discount <span>$3,300.00</span></p>
                                                        <p class="mb-0">Sub total <span>$3,300.00</span></p>
                                                    </div>
                                                    <div class="invoice-total-footer">
                                                        <h4>Total Amount <span>$143,300.00</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invoice-sign-box">
                                        <div class="row">
                                            <div class="col-lg-8 col-md-8">
                                                <div class="invoice-terms">
                                                    <h6>Notes:</h6>
                                                    <p class="mb-0">Enter customer notes or any other details</p>
                                                </div>
                                                <div class="invoice-terms mb-0">
                                                    <h6>Terms and Conditions:</h6>
                                                    <p class="mb-0">Enter customer notes or any other details</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <div class="invoice-sign text-end">
                                                    <img class="img-fluid d-inline-block" src="assets/img/signature.png"
                                                        alt="sign">
                                                    <span class="d-block">Harristemp</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal custom-modal fade bank-details" id="bank_details" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="form-header text-start mb-0">
                        <h4 class="mb-0">Add Bank Details</h4>
                    </div>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="bank-inner-details">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Account Holder Name</label>
                                    <input type="text" class="form-control" placeholder="Add Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Bank name</label>
                                    <input type="text" class="form-control" placeholder="Add Bank name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>IFSC Code</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Account Number</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="bank-details-btn">
                        <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn bank-cancel-btn me-2">Cancel</a>
                        <a href="javascript:void(0);" class="btn bank-save-btn">Save Item</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal custom-modal fade" id="delete_invoices_details" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Delete Invoice Details</h3>
                        <p>Are you sure want to delete?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal"
                                    class="btn btn-primary paid-continue-btn">Delete</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal"
                                    class="btn btn-primary paid-cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal custom-modal fade" id="save_invocies_details" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="form-header">
                        <h3>Save Invoice Details</h3>
                        <p>Are you sure want to save?</p>
                    </div>
                    <div class="modal-btn delete-action">
                        <div class="row">
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal"
                                    class="btn btn-primary paid-continue-btn">Save</a>
                            </div>
                            <div class="col-6">
                                <a href="javascript:void(0);" data-bs-dismiss="modal"
                                    class="btn btn-primary paid-cancel-btn">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
