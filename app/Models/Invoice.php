<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
    'company_number',
    'invoice_number',
    'bill_number',
    'bill_issue_date',
    'due_date',
    'customer_name',
    'customer_address',
    'company_address',
    'customer_phone_number',
    'customer_email',
    'billing_period_start_date',
    'billing_period_end_date',
    'Total_Energy_Consumed',
    'Total_Energy_Generated',
    'Energy_from_Grid',
    'Bank_Account',
    'Payment_Link',
    'Payment_Terms',
    'Solar_Energy_Usage_Unit_Cost',
    'Solar_Energy_Usage_Quantity',
    'Solar_Energy_Usage_Total_Amount',
    'Grid_Energy_Usage_Unit_Cost',
    'Grid_Energy_Usage_Quantity',
    'Grid_Energy_Usage_Total_Amount',
    'Solar_Panel_Maintenance_Fee_Unit_Cost',
    'Solar_Panel_Maintenance_Fee_Quantity',
    'Solar_Panel_Maintenance_Fee_Total_Amount',
    'Other_Service_Charges_Unit_Cost',
    'Other_Service_Charges_Quantity',
    'Other_Service_Charges_Total_Amount',
    'Your_Phone_Number',
    'Your_Support_Email',
    'Total_Amount_Due',
    'late_fee_end_date',
    'after_late_fee_amount',
];
}
