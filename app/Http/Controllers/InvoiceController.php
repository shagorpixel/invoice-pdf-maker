<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoice = Invoice::get()->first();
        return view('myPDF',compact('invoice'));
    }

    public function edit()
    {
         $invoice = Invoice::get()->first();
         return view('admin.dashboard',compact('invoice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$invoice)
    {
        $total_amount_due = ($request->Solar_Energy_Usage_Unit_Cost * $request->Solar_Energy_Usage_Quantity) +

        ($request->Grid_Energy_Usage_Unit_Cost * $request->Grid_Energy_Usage_Quantity)+

        ($request->Solar_Panel_Maintenance_Fee_Unit_Cost * $request->Solar_Panel_Maintenance_Fee_Quantity) +
        ($request->Other_Service_Charges_Unit_Cost * $request->Other_Service_Charges_Quantity);

        $data = [
           'company_number'=> $request->company_number,
           'bill_issue_date'=>$request->bill_issue_date,
           'invoice_number'=>uniqid(),
           'bill_number'=>uniqid(),
           'due_date'=>$request->due_date,
           'customer_name'=>$request->customer_name,
           'customer_address'=>$request->customer_address,
           'company_address'=>$request->company_address,
           'customer_phone_number'=>$request->customer_email,
           'customer_email'=>$request->customer_email,
           'billing_period_start_date'=>$request->billing_period_start_date,
           'billing_period_end_date'=>$request->billing_period_end_date,
           'Total_Energy_Consumed'=>$request->Total_Energy_Consumed,
           'Total_Energy_Generated'=>$request->Total_Energy_Generated,
           'Energy_from_Grid'=>$request->Energy_from_Grid,
           'Bank_Account'=>$request->Bank_Account,
           'Payment_Link'=>$request->Payment_Link,
           'Payment_Terms'=>$request->Payment_Terms,

           'Solar_Energy_Usage_Unit_Cost'=>$request->Solar_Energy_Usage_Unit_Cost,
           'Solar_Energy_Usage_Quantity'=>$request->Solar_Energy_Usage_Quantity,
           'Solar_Energy_Usage_Total_Amount'=>$request->Solar_Energy_Usage_Unit_Cost * $request->Solar_Energy_Usage_Quantity,


           'Grid_Energy_Usage_Unit_Cost'=>$request->Grid_Energy_Usage_Unit_Cost,
           'Grid_Energy_Usage_Quantity'=>$request->Grid_Energy_Usage_Quantity,
           'Grid_Energy_Usage_Total_Amount'=>$request->Grid_Energy_Usage_Unit_Cost * $request->Grid_Energy_Usage_Quantity,


           'Solar_Panel_Maintenance_Fee_Unit_Cost'=>$request->Solar_Panel_Maintenance_Fee_Unit_Cost,
           'Solar_Panel_Maintenance_Fee_Quantity'=>$request->Solar_Panel_Maintenance_Fee_Quantity,
           'Solar_Panel_Maintenance_Fee_Total_Amount'=>$request->Solar_Panel_Maintenance_Fee_Unit_Cost * $request->Solar_Panel_Maintenance_Fee_Quantity ,


           'Other_Service_Charges_Unit_Cost'=>$request->Other_Service_Charges_Unit_Cost,
           'Other_Service_Charges_Quantity'=>$request->Other_Service_Charges_Quantity,
           'Other_Service_Charges_Total_Amount'=>$request->Other_Service_Charges_Unit_Cost * $request->Other_Service_Charges_Quantity,

           'Your_Phone_Number'=>$request->Your_Phone_Number,
           'Your_Support_Email'=>$request->Your_Support_Email,

           'Total_Amount_Due'=>$total_amount_due,


           'late_fee_end_date'=>$request->late_fee_end_date,
           'after_late_fee_amount'=>($total_amount_due * ($request->Payment_Terms/100)) + $total_amount_due ,
        ];

        $invoice = Invoice::find($invoice);
        $invoice->update($data);
        return redirect()->back()->with('status','Invoice Updated Successfully');
    }
}
