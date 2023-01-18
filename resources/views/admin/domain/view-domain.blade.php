@extends('admin.master')
@section('title', 'View Domain')
<!-- Theme style -->
@section('content')
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
<section class="content">
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th width="50%" colspan="2">
                        <h2 class="text-start">Domain & Hosting Information</h2>
                    </th>
                    <th width="50%" colspan="2" class="text-end company-data">
                        <a id="click_print" type="button" style="color: #fff;padding: 5px 10px;background: #2196f3;"><i class="fa-solid fa-print"></i> Print</a>
                        <a href="{{ route('domain.pdf',$view->id ) }}" id="click_print" type="submit" style="color: #fff;padding: 5px 10px;background: #ff7588;"><i class="fa-solid fa-file-pdf"></i> Pdf</a>
                        <a href="" target="_blank" type="submit" style="color: #fff;padding: 5px 10px;background: #e99a08;"><i class="fa-solid fa-file-csv"></i>CSV</a>
                        <a href="{{ route('generate-pdf.generate', $view->id) }}" target="_blank" type="submit" style="color: #fff;padding: 5px 10px;background: #eb543a;"><i class="fa-solid fa-table"></i>Excell</a>

                    </th>
                </tr>
            </thead>
        </table>
        <div class="card mt-4" id="table_print">
            <table class="order-details table table-bordered table-sm table-striped text-nowrap">
                <div class="did">
                    <tbody>
                        <thead>
                            <tr class="bg-blue">
                                <th width="50%" colspan="2" class="text-center">Domain Information</th>
                                <th width="50%" colspan="2" class="text-center">Hosting Information</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>Customer Name:</td>
                            <td><b>{{ $view->customer->name }}</b></td>
                            <td>Hosting Space:</td>
                            <td><b>{{ $view->hosting_space }}</b></td>
                        </tr>
                        <tr>
                            <td>Domain Name:</td>
                            <td><b>{{ $view->domain_name }}</b></td>
                            <td>Hosting Start Date:</td>
                            <td><b>{{ $view->hosting_start_date }}</b></td>
                        </tr>
                        <tr>
                            <td>Domain Yearly Price:</td>
                            <td><b>{{ $view->domain_yearly_price }}</b></td>
                            <td>Hosting Expiry Date:</td>
                            <td><b>{{ $view->hosting_expiry_date }}</b></td>
                        </tr>
                        <tr>
                            <td>Domain Start Date:</td>
                            <td><b>{{ $view->domain_start_date }}</b></td>
                            <td>Hosting Yearly Price:</td>
                            <td><b>{{ $view->hosting_yearly_price }}</b></td>
                        </tr>
                        <tr>
                            <td>Domain Expiry Date:</td>
                            <td><b>{{ $view->domain_expiry_date }}</b></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </div>
            </table>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('admin/dist/js/PrintJs.js')}}"></script>
    <script type="text/javascript">
        $('#click_print').click(function() {
            $('#table_print').printThis();
        })

    </script>
    @endsection
