<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Gnerate CV</title>
</head>

<body>
    <h2 class=" text-center font-semibold bg-gray-300 text-2xl mb-4 p-3">Make Invoice</h2>
    @if (session('status'))
                <div class="bg-green-500 text-white text-center text-xl p-3 rounded mb-1 max-w-6xl mx-auto">
                    {{ session('status') }}
                </div>
    @endif
    <div class=" max-w-6xl mx-auto">
        <form action="{{route('admin.update',$invoice->id)}}" method="POST">
            @csrf
            @method('put')
            <div class=" grid grid-cols-12 gap-12">
                <div class="p-6.5 col-span-12 md:col-span-6 grid grid-cols-1 gap-2">
                    <h2 class=" text-center font-semibold text-lg bg-gray-100 p-2 rounded">Header and Customer Information Input</h2>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                        <div class="w-full xl:w-1/2">
                            <label for="company_address"
                                class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Company Address
                            </label>
                            <input value="{{$invoice->company_address}}" name="company_address" id="company_address" type="text" placeholder="Company Address"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                        <div class="w-full xl:w-1/2">
                            <label for="company_number" class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Company Phone
                            </label>
                            <input value="{{$invoice->company_number}}" name="company_number" id="company_number" type="text" placeholder="Company Phone Number"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                        <div class="w-full xl:w-1/2">
                            <label for="bill_issue_date"
                                class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Bill Issue Date
                            </label>
                            <input value="{{$invoice->bill_issue_date}}" name="bill_issue_date" id="bill_issue_date" name="bill_issue_date" type="text"
                                placeholder="Bill Issue Date"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                        <div class="w-full xl:w-1/2">
                            <label for="due_date" class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Due Date
                            </label>
                            <input value="{{$invoice->due_date}}" id="due_date" type="text" name="due_date" placeholder="Due Date"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                        <div class="w-full xl:w-1/2">
                            <label for="customer_name"
                                class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Customer Name
                            </label>
                            <input value="{{$invoice->customer_name}}" name="customer_name" id="customer_name" name="customer_name" type="text"
                                placeholder="Customer Name"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                        <div class="w-full xl:w-1/2">
                            <label for="customer_address" class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Customer Address
                            </label>
                            <input value="{{$invoice->customer_address}}" type="text" id="customer_address" name="customer_address" placeholder="Customer Address"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                        <div class="w-full xl:w-1/2">
                            <label for="customer_phone_number"
                                class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Customer Phone Number
                            </label>
                            <input value="{{$invoice->customer_phone_number}}" name="customer_phone_number" id="customer_phone_number" name="customer_phone_number" type="text"
                                placeholder="Customer Email Address"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                        <div class="w-full xl:w-1/2">
                            <label for="customer_email" class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Customer Email
                            </label>
                            <input value="{{$invoice->customer_email}}" type="text" id="customer_email" name="customer_email" placeholder="Customer Email"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                    </div>
                </div>
                <div class="p-6.5 col-span-12 md:col-span-6 grid grid-cols-1 gap-2">
                    <h2 class=" text-center font-semibold text-lg bg-gray-100 p-2 rounded">Solar Usage Summary & Payment Instructions</h2>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                        <div class="w-full xl:w-1/2">
                            <label for="billing_period_start_date"
                                class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Billing Period Start Date
                            </label>
                            <input value="{{$invoice->billing_period_start_date}}" id="billing_period_start_date" name="billing_period_start_date" type="text" placeholder="Billing Period Start Date"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                        <div class="w-full xl:w-1/2">
                            <label for="billing_period_end_date" class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Billing Period End Date
                            </label>
                            <input value="{{$invoice->billing_period_end_date}}" name="billing_period_end_date" id="billing_period_end_date" type="text" placeholder="Billing Price End Date"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                        <div class="w-full xl:w-1/2">
                            <label for="Total_Energy_Consumed"
                                class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Total Energy Consumed
                            </label>
                            <input value="{{$invoice->Total_Energy_Consumed}}" id="Total_Energy_Consumed" name="Total_Energy_Consumed" type="text"
                                placeholder="Total Energy Consumed"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                        <div class="w-full xl:w-1/2">
                            <label for="Total_Energy_Generated" class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Total Energy Generated (Solar)
                            </label>
                            <input value="{{$invoice->Total_Energy_Generated}}" id="Total_Energy_Generated" type="text" name="Total_Energy_Generated" placeholder="Total Energy Generated (Solar)"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                        <div class="w-full xl:w-1/2">
                            <label for="Energy_from_Grid"
                                class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Energy from Grid
                            </label>
                            <input value="{{$invoice->Energy_from_Grid}}" name="Energy_from_Grid" id="Energy_from_Grid" type="text"
                                placeholder="Energy from Grid"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                        <div class="w-full xl:w-1/2">
                            <label for="Bank_Account" class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Bank Account
                            </label>
                            <input value="{{$invoice->Bank_Account}}" type="text" id="Bank_Account" name="Bank_Account" placeholder="Bank Account"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                        <div class="w-full xl:w-1/2">
                            <label for="Payment_Link"
                                class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Payment Link
                            </label>
                            <input value="{{$invoice->Payment_Link}}" name="Payment_Link" id="Payment_Link" type="text"
                                placeholder="Payment Link"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                        <div class="w-full xl:w-1/2">
                            <label for="Payment_Terms" class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Payment Terms(%)
                            </label>
                            <input value="{{$invoice->Payment_Terms}}" type="text" id="Payment_Terms" name="Payment_Terms" placeholder="Payment Terms"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                    </div>
                </div>
                <div class="p-6.5 col-span-12 md:col-span-6 grid grid-cols-1 gap-2">
                    <h2 class=" text-center font-semibold text-lg bg-gray-100 p-2 rounded">Charges Breakdown</h2>
                    <div class="mb-4.5 grid grid-cols-12 gap-2 ">
                        <h2 class=" col-span-12 font-semibold text-lg">Solar Energy Usage</h2>
                        <div class="col-span-12 md:col-span-4">
                            <label class="font-semibold" for="">Unit Cost</label>
                            <input value="{{$invoice->Solar_Energy_Usage_Unit_Cost}}" id="Unit_Cost" name="Solar_Energy_Usage_Unit_Cost" type="text" placeholder="Unit Cost"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                        <div class="col-span-12 md:col-span-4">
                            <label class="font-semibold" for="">Quantity</label>
                            <input value="{{$invoice->Solar_Energy_Usage_Quantity}}" name="Solar_Energy_Usage_Quantity" type="text" placeholder="Quantity"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                        <div class="col-span-12 md:col-span-4">
                            <label class="font-semibold" for="">Total Amount</label>
                            <input readonly value="{{$invoice->Solar_Energy_Usage_Total_Amount}}" name="Solar_Energy_Usage_Total_Amount" id="billing_period_end_date" type="text" placeholder="Total Amount"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                    </div>
                    <div class="mb-4.5 grid grid-cols-12 gap-2 ">
                        <h2 class=" col-span-12 font-semibold text-lg">Grid Energy Usage</h2>
                        <div class="col-span-12 md:col-span-4">
                            <input value="{{$invoice->Grid_Energy_Usage_Unit_Cost}}" id="Unit_Cost" name="Grid_Energy_Usage_Unit_Cost" type="text" placeholder="Unit Cost"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                        <div class="col-span-12 md:col-span-4">
                            <input value="{{$invoice->Grid_Energy_Usage_Quantity}}" name="Grid_Energy_Usage_Quantity" type="text" placeholder="Quantity"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                        <div class="col-span-12 md:col-span-4">
                            <input readonly value="{{$invoice->Grid_Energy_Usage_Total_Amount}}" name="Grid_Energy_Usage_Total_Amount" id="billing_period_end_date" type="text" placeholder="Total Amount"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                    </div>
                    <div class="mb-4.5 grid grid-cols-12 gap-2 ">
                        <h2 class=" col-span-12 font-semibold text-lg">Solar Panel Maintenance Fee</h2>
                        <div class="col-span-12 md:col-span-4">
                            <input value="{{$invoice->Solar_Panel_Maintenance_Fee_Unit_Cost}}" id="Unit_Cost" name="Solar_Panel_Maintenance_Fee_Unit_Cost" type="text" placeholder="Unit Cost"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                        <div class="col-span-12 md:col-span-4">
                            <input value="{{$invoice->Solar_Panel_Maintenance_Fee_Quantity}}" name="Solar_Panel_Maintenance_Fee_Quantity" type="text" placeholder="Quantity"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                        <div class="col-span-12 md:col-span-4">
                            <input readonly value="{{$invoice->Solar_Panel_Maintenance_Fee_Total_Amount}}" name="Solar_Panel_Maintenance_Fee_Total_Amount" id="billing_period_end_date" type="text" placeholder="Total Amount"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                    </div>
                    <div class="mb-4.5 grid grid-cols-12 gap-2 ">
                        <h2 class=" col-span-12 font-semibold text-lg">Other Service Charges (if any)</h2>
                        <div class="col-span-12 md:col-span-4">
                            <input value="{{$invoice->Other_Service_Charges_Unit_Cost}}" id="Unit_Cost" name="Other_Service_Charges_Unit_Cost" type="text" placeholder="Unit Cost"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                        <div class="col-span-12 md:col-span-4">
                            <input value="{{$invoice->Other_Service_Charges_Quantity}}" name="Other_Service_Charges_Quantity" type="text" placeholder="Quantity"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                        <div class="col-span-12 md:col-span-4">
                            <input readonly value="{{$invoice->Other_Service_Charges_Total_Amount}}" name="Other_Service_Charges_Total_Amount" id="billing_period_end_date" type="text" placeholder="Total Amount"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                    </div>
                </div>
                <div class="p-6.5 col-span-12 md:col-span-6 grid grid-cols-1 gap-2">
                    <h2 class=" text-center font-semibold text-lg bg-gray-100 p-2 rounded">Contact Us and Total Amount</h2>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                        <div class="w-full">
                            <label for="Your_Phone_Number"
                                class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Your Phone Number
                            </label>
                            <input value="{{$invoice->Your_Phone_Number}}" id="Your_Phone_Number" name="Your_Phone_Number" type="text"
                                placeholder="Your Phone Number"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                        <div class="w-full">
                            <label for="Your_Support_Email"
                                class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Your Support Email
                            </label>
                            <input value="{{$invoice->Your_Support_Email}}" name="Your_Support_Email" id="Your_Support_Email" type="text"
                                placeholder="Your Support Email"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                        <div class="w-full">
                            <label for="Total_Amount_Due"
                                class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Total Amount Due
                            </label>
                            <input readonly value="{{$invoice->Total_Amount_Due}}" name="Total_Amount_Due" id="Total_Amount_Due" type="text"
                                placeholder="Total Amount Due"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                        <div class="w-full">
                            <label for="late_fee_end_date"
                                class="mb-3 block text-sm font-medium text-black dark:text-white">
                                Late Fee End Date
                            </label>
                            <input value="{{$invoice->late_fee_end_date}}" name="late_fee_end_date" id="late_fee_end_date" type="text"
                                placeholder="Total Amount Due"
                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>
                    </div>
                </div>
            </div>

            <div class=" text-center mt-3">
                <button class=" bg-blue-500 px-3 py-2 text-lg rounded text-white">Update Data</button>
                <a target="_blank" href="{{'/'}}" class=" bg-blue-500 px-3 py-2 text-lg rounded text-white">View Invoice</a>
                <a target="_blank" href="{{'/pdf'}}" class=" bg-blue-500 px-3 py-2 text-lg rounded text-white">Download Pdf</a>

            </div>
        </form>
    </div>
</body>

</html>
