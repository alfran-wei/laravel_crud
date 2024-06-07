<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function invoices_list(){
        $invoices = Invoice::all();
        return view('invoices_list', compact('invoices'));
    }

    public function add_invoices(){
        return view('add_invoices');
    }

    public function edit_invoices($id){
        $invoices = invoice::find($id);

        return view('edit_invoices', compact('invoices'));
    }

    public function add_invoices_traitement(Request $request){
        $request->validate([
            'customer_name' => 'required',
            'po_number' => 'required',
            'invoice_no' => 'required',
            'date' => 'required',
            'due_date' => 'required',
            'enable_tax' => 'required',
            'recurring_invoice' => 'required',
            'recurring_period' => 'required',
            'billing_address' => 'required',
            'shipping_address' => 'required',
            'taxable_amount' => 'required',
            'round_off' => 'required',
            'total_amount' => 'required',
            'signature' => 'required',
            'terms_conditions' => 'required',
            'notes' => 'required',

        ]);

        // Convertir les valeurs des cases à cocher en booléens
$enableTax = $request->has('enable_tax') ? true : false;
$recurringInvoice = $request->has('recurring_invoice') ? true : false;
$roundOff = $request->round_off ? (float) $request->round_off : null;
    

        $invoice = new Invoice();
        $invoice->customer_name = $request->customer_name; // required
        $invoice->po_number = $request->po_number; // required
        $invoice->invoice_no = $request->invoice_no; // required
        $invoice->date = $request->date; // required
        $invoice->due_date = $request->due_date; // required
        $invoice->enable_tax = $enableTax; // Utiliser la valeur booléenne convertie
        $invoice->recurring_invoice = $recurringInvoice; // Utiliser la valeur booléenne convertie
        $invoice->recurring_period = $request->recurring_period; // required
        $invoice->billing_address = $request->billing_address; // required
        $invoice->shipping_address = $request->shipping_address; // required
        $invoice->round_off = $roundOff; // Utiliser la valeur décimale convertie
        $invoice->total_amount = $request->total_amount; // required
        $invoice->signature = $request->signature; // required
        $invoice->terms_conditions = $request->terms_conditions; // required
        $invoice->notes = $request->notes; // required
        $invoice->save(); 
 
        return redirect('/add-invoices')->with('status', 'facture enregistré avec succes');

    }

    public function edit_invoices_traitement(Request $request){
        $request->validate([
            'customer_name' => 'required',
            'po_number' => 'required',
            'invoice_no' => 'required',
            'date' => 'required',
            'due_date' => 'required',
            'enable_tax' => 'required',
            'recurring_invoice' => 'required',
            'recurring_period' => 'required',
            'billing_address' => 'required',
            'shipping_address' => 'required',
            'taxable_amount' => 'required',
            'round_off' => 'required',
            'total_amount' => 'required',
            'signature' => 'required',
            'terms_conditions' => 'required',
            'notes' => 'required',

        ]);
        // Convertir les valeurs des cases à cocher en booléens
            $enableTax = $request->has('enable_tax') ? true : false;
            $recurringInvoice = $request->has('recurring_invoice') ? true : false;
            $roundOff = $request->round_off ? (float) $request->round_off : null;
    
            $invoice = Invoice::find($request->id);
            $invoice->customer_name = $request->customer_name; // required
            $invoice->po_number = $request->po_number; // required
            $invoice->invoice_no = $request->invoice_no; // required
            $invoice->date = $request->date; // required
            $invoice->due_date = $request->due_date; // required
            $invoice->enable_tax = $enableTax; // Utiliser la valeur booléenne convertie
            $invoice->recurring_invoice = $recurringInvoice; // Utiliser la valeur booléenne convertie
            $invoice->recurring_period = $request->recurring_period; // required
            $invoice->billing_address = $request->billing_address; // required
            $invoice->shipping_address = $request->shipping_address; // required
            $invoice->round_off = $roundOff; // Utiliser la valeur décimale convertie
            $invoice->total_amount = $request->total_amount; // required
            $invoice->signature = $request->signature; // required
            $invoice->terms_conditions = $request->terms_conditions; // required
            $invoice->notes = $request->notes; // required
            $invoice->update(); 

            return redirect('/invoices-list')->with('status', 'facture modifiée avec succes');

    }

    
}
