<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class invoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'company_number'=>'019399404',
            'company_address'=>'Agnibina Road Jhenaidah',
            'bill_issue_date'=>'10-01-2024',
            'invoice_number'=>4837484,
            'bill_number'=>5342323,
            'due_date'=>'11-02-2024',
            'customer_name'=>'John Doe',
            'customer_address'=>'Horinakundu, Jhenaidah',
            'customer_phone_number'=>'0194899394',
            'customer_email'=>'customer@gmail.com',
            'billing_period_start_date'=>'05-07-2024',
            'billing_period_end_date'=>'10-07-2024',
            'Total_Energy_Consumed'=>'data',
            'Total_Energy_Generated'=>'Mydata',
            'Energy_from_Grid'=>'data',
            'Bank_Account'=>'01904930',
            'Payment_Link'=>'data',
            'Payment_Terms'=>3,
            'Solar_Energy_Usage_Unit_Cost'=>10,
            'Solar_Energy_Usage_Quantity'=>20,
            'Solar_Energy_Usage_Total_Amount'=>43,
            'Grid_Energy_Usage_Unit_Cost'=>23,
            'Grid_Energy_Usage_Quantity'=>43,
            'Grid_Energy_Usage_Total_Amount'=>54,
            'Solar_Panel_Maintenance_Fee_Unit_Cost'=>34,
            'Solar_Panel_Maintenance_Fee_Quantity'=>54,
            'Solar_Panel_Maintenance_Fee_Total_Amount'=>23,
            'Other_Service_Charges_Unit_Cost'=>54,
            'Other_Service_Charges_Quantity'=>23,
            'Other_Service_Charges_Total_Amount'=>23,
            'Your_Phone_Number'=>'01747834874',
            'Your_Support_Email'=>'support@gmail.com',
            'Total_Amount_Due'=>100,
            'late_fee_end_date'=>'10-January-2024',
            'after_late_fee_amount'=>56,
        ];

        Invoice::insert($data);
    }
}
