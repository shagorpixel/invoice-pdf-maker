<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('company_number');
            $table->string('company_address');
            $table->string('bill_issue_date');
            $table->string('bill_number');
            $table->string('invoice_number');
            $table->string('due_date');
            $table->string('customer_name');
            $table->string('customer_address');
            $table->string('customer_phone_number');
            $table->string('customer_email');
            $table->string('billing_period_start_date');
            $table->string('billing_period_end_date');
            $table->string('Total_Energy_Consumed');
            $table->string('Total_Energy_Generated');
            $table->string('Energy_from_Grid');
            $table->string('Bank_Account');
            $table->string('Payment_Link');
            $table->string('Payment_Terms');
            $table->integer('Solar_Energy_Usage_Unit_Cost');
            $table->integer('Grid_Energy_Usage_Unit_Cost');
            $table->integer('Solar_Energy_Usage_Quantity');
            $table->integer('Solar_Energy_Usage_Total_Amount');
            $table->integer('Grid_Energy_Usage_Quantity');
            $table->integer('Grid_Energy_Usage_Total_Amount');
            $table->integer('Solar_Panel_Maintenance_Fee_Unit_Cost');
            $table->integer('Solar_Panel_Maintenance_Fee_Quantity');
            $table->integer('Solar_Panel_Maintenance_Fee_Total_Amount');
            $table->integer('Other_Service_Charges_Unit_Cost');
            $table->integer('Other_Service_Charges_Quantity');
            $table->integer('Other_Service_Charges_Total_Amount');
            $table->string('Your_Phone_Number');
            $table->string('Your_Support_Email');
            $table->integer('Total_Amount_Due');
            $table->string('late_fee_end_date');
            $table->integer('after_late_fee_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
