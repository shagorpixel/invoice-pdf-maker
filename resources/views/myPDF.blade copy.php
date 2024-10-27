<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Solar Rental Utility Bill</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            color: #333;
        }

        .bill-container {
            max-width: 800px;
            margin: 30px auto;
            background-color: #fff;
            padding: 25px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .company-info h1 {
            color: #2c3e50;
            font-size: 24px;
            margin-bottom: 5px;
        }

        .company-info p {
            color: #555;
            margin-bottom: 5px;
        }

        .bill-info p {
            color: #333;
            margin-bottom: 5px;
            text-align: right;
        }

        section {
            margin-bottom: 30px;
        }

        .customer-info, .solar-usage-summary, .charges-breakdown, .payment-info {
            background-color: #ecf0f1;
            padding: 15px;
            border-radius: 8px;
        }

        h2 {
            color: #2980b9;
            font-size: 20px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        p, td, th {
            font-size: 16px;
        }

        /* Usage Graph Styling */
        .graph-container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .graph {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            height: 300px;
            border-left: 2px solid #333;
            border-bottom: 2px solid #333;
            padding: 10px;
            margin-bottom: 20px;
        }

        .graph-bar {
            width: 50px;
            background-color: #2980b9;
            text-align: center;
            color: #fff;
            border-radius: 5px 5px 0 0;
        }

        .graph-bar span {
            display: block;
            margin-top: 5px;
        }

        .graph-labels {
            display: flex;
            justify-content: space-between;
            padding: 0 10px;
            color: #333;
        }

        .graph-labels p {
            width: 50px;
            text-align: center;
            margin-top: 5px;
        }

        /* Heights represent solar energy usage in kWh (adjustable) */
        .bar-jan { height: 70%; } /* Example: 70% of max usage */
        .bar-feb { height: 50%; }
        .bar-mar { height: 85%; }
        .bar-apr { height: 40%; }
        .bar-may { height: 90%; }
        .bar-jun { height: 60%; }
        .bar-jul { height: 95%; }
        .bar-aug { height: 75%; }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th {
            background-color: #2980b9;
            color: white;
            padding: 10px;
            text-align: left;
        }

        td {
            padding: 10px;
        }

        .footer {
            text-align: center;
            background-color: #f1f1f1;
            padding: 15px;
            border-radius: 8px;
        }

        .footer p {
            color: #555;
            margin-bottom: 8px;
        }

        a {
            color: #2980b9;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="bill-container">
        <header>
            <table style="border: none;">
                <tr>
                    <td style="border: none;">
                        <div  class="company-info">
                            <h1>Solar-Rental.org</h1>
                            <p>Company Address: {{$invoice->company_address}}</p>
                            <p>Phone: {{$invoice->company_number}}</p>
                            <p>Email: info@solar-rental.org</p>
                            <p>Website: <a href="https://www.solar-rental.org">www.solar-rental.org</a></p>
                        </div>
                    </td>
                    <td style="border: none;">
                        <div class="bill-info">
                            <p><strong>Date of Issue:</strong> {{$invoice->bill_issue_date}}</p>
                            <p><strong>Due Date:</strong> {{$invoice->due_date}}</p>
                            <p><strong>Bill Number:</strong> {{$invoice->bill_number}}</p>
                            <p><strong>Invoice Number:</strong>{{$invoice->invoice_number}}</p>
                        </div>
                    </td>
                </tr>
            </table>
        </header>

        <section class="customer-info">
            <h2>Customer Information</h2>
            <p><strong>Name:</strong> {{$invoice->customer_name}}</p>
            <p><strong>Address:</strong> {{$invoice->customer_address}}</p>
            <p><strong>Phone Number:</strong> {{$invoice->customer_phone_number}}</p>
            <p><strong>Email:</strong> {{$invoice->customer_email}}</p>
        </section>

        <section class="solar-usage-summary">
            <h2>Solar Usage Summary</h2>
            <p><strong>Billing Period:</strong> {{$invoice->billing_period_start_date}} to {{$invoice->billing_period_end_date}}</p>
            <p><strong>Total Energy Consumed:</strong> {{$invoice->Total_Energy_Consumed}}</p>
            <p><strong>Total Energy Generated (Solar):</strong> {{$invoice->Total_Energy_Generated}}</p>
            <p><strong>Energy from Grid:</strong> {{$invoice->Energy_from_Grid}}</p>

            <!-- Usage Graph -->
            <div class="graph-container">

            </div>
        </section>

        <section class="charges-breakdown">
            <h2>Charges Breakdown</h2>
            <table>
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Unit Cost (kWh)</th>
                        <th>Quantity (kWh)</th>
                        <th>Total Amount (USD)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Solar Energy Usage</td>
                        <td>${{$invoice->Solar_Energy_Usage_Unit_Cost}}</td>
                        <td>{{$invoice->Solar_Energy_Usage_Quantity}}</td>
                        <td>${{$invoice->Solar_Energy_Usage_Total_Amount}}</td>
                    </tr>
                    <tr>
                        <td>Grid Energy Usage</td>
                        <td>${{$invoice->Grid_Energy_Usage_Unit_Cost}}</td>
                        <td>{{$invoice->Grid_Energy_Usage_Quantity}}</td>
                        <td>${{$invoice->Grid_Energy_Usage_Total_Amount}}</td>
                    </tr>
                    <tr>
                        <td>Solar Panel Maintenance Fee</td>
                        <td>${{$invoice->Solar_Panel_Maintenance_Fee_Unit_Cost}}</td>
                        <td>{{$invoice->Solar_Panel_Maintenance_Fee_Quantity}}</td>
                        <td>${{$invoice->Solar_Panel_Maintenance_Fee_Total_Amount}}</td>
                    </tr>
                    <tr>
                        <td>Other Service Charges (if any)</td>
                        <td>${{$invoice->Other_Service_Charges_Unit_Cost}}</td>
                        <td>{{$invoice->Other_Service_Charges_Quantity}}</td>
                        <td>${{$invoice->Other_Service_Charges_Total_Amount}}</td>
                    </tr>
                </tbody>
            </table>
            <p><strong>Total Amount Due:</strong> ${{$invoice->Total_Amount_Due}}</p>
        </section>

        <section class="payment-info">
            <h2>Payment Instructions</h2>
            <p><strong>Bank Account:</strong> {{$invoice->Bank_Account}}</p>
            <p><strong>Payment Link:</strong> <a href="#">{{$invoice->Payment_Link}}</a></p>
            <p><strong>Payment Terms:</strong> Payment is due by the due date. Late payments incur a {{$invoice->Payment_Terms}} late fee.</p>
        </section>

        <section class="footer">
            <p><strong>Thank You for Going Solar!</strong></p>
            <p>By using solar energy, you're contributing to a cleaner, greener planet.</p>
            <p>Contact Us: {{$invoice->Your_Phone_Number}} | {{$invoice->Your_Support_Email}} | <a href="https://www.solar-rental.org">www.solar-rental.org</a></p>
        </section>
    </div>

</body>
</html>
