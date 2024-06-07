<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('po_number')->nullable();
            $table->string('invoice_no')->nullable();
            $table->date('date')->nullable();
            $table->date('due_date')->nullable();
            $table->boolean('enable_tax')->default(false);
            $table->boolean('recurring_invoice')->default(false);
            $table->string('recurring_period')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('shipping_address')->nullable();
            $table->decimal('taxable_amount', 15, 2)->nullable();
            $table->decimal('round_off', 15, 2)->nullable();
            $table->decimal('total_amount', 15, 2);
            $table->string('signature')->nullable();
            $table->text('terms_conditions')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
