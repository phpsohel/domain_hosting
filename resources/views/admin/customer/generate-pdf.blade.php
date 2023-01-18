<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="showport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Information</title>
    <style>
        html,
        body {
            font-family: sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span,
        label {
            font-family: sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }

        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }

        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }

        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }

        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }

        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }

        .text-end {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }

        .no-border {
            border: 1px solid #fff !important;
        }

        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }

        @media print {
            * {
                font-size: 12px;
                line-height: 20px;
            }

            td,
            th {
                padding: 5px 0;
            }

            .hidden-print {
                display: none !important;
            }

            @page {
                margin: 0;
            }

            body {
                margin: 0.5cm;
                margin-bottom: 1.6cm;
            }
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <section class="content">
                <div class="container">
                    <div class="card mt-4" id="table_print">
                        <table class="order-details table table-bordered table-sm table-striped text-nowrap">
                            <tbody>
                                <tr>
                                    <td>Customer Name:</td>
                                    <td><b>{{ $show->name }}</b></td>
                                    <td>Company:</td>
                                    <td><b>{{ $show->company }}</b></td>
                                </tr>
                                <tr>
                                    <td>Email-1:</td>
                                    <td><b>{{ $show->email_1 }}</b></td>
                                    <td>Email-2:</td>
                                    <td><b>{{ $show->email_2 }}</b></td>
                                </tr>
                                <tr>
                                    <td>Phone-1:</td>
                                    <td><b>{{ $show->phone_1 }}</b></td>
                                    <td>Phone-1:</td>
                                    <td><b>{{ $show->phone_2 }}</b></td>
                                </tr>
                                <tr>
                                    <td>Website:</td>
                                    <td><b>{{ $show->website }}</b></td>
                                    <td>Address:</td>
                                    <td><b>{{ $show->address }}</b></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
    </div>
</body>
</html>
