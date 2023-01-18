@extends('admin.master')
@section('title', 'View Customer')
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
                        <h2 class="text-start"> Customer Information</h2>
                    </th>
                    <th width="50%" colspan="2" class="text-end company-data">
                        <a id="click_print" type="button" style="color: #fff;padding: 5px 10px;background: #2196f3;"><i class="fa-solid fa-print"></i> Print</a>
                        <a href="{{ route('generate-pdf.generate', $view->id) }}" target="_blank" type="submit" style="color: #fff;padding: 5px 10px;background: #ff7588;"><i class="fa-solid fa-file-pdf"></i> Pdf</a>
                        <a href="{{ route('generate-pdf.generate', $view->id) }}" target="_blank" type="submit" style="color: #fff;padding: 5px 10px;background: #e99a08;"><i class="fa-solid fa-file-csv"></i>CSV</a>
                        <a href="{{ route('generate-pdf.generate', $view->id) }}" target="_blank" type="submit" style="color: #fff;padding: 5px 10px;background: #eb543a;"><i class="fa-solid fa-table"></i>Excell</a>
                    </th>
                </tr>
            </thead>
        </table>
        <div class="card mt-4" id="table_print">
            <table class="order-details table table-bordered table-sm table-striped text-nowrap">
                <div class="did">
                    {{-- <h3 class="text-center hidden-print">Customer Information</h3> --}}
                    <tbody>
                        {{-- <thead>
                            <tr class="bg-blue">
                                <th width="50%" colspan="2" class="text-center">Domain Information</th>
                                <th width="50%" colspan="2" class="text-center">Hosting Information</th>
                            </tr>
                        </thead> --}}
                        <tr>
                            <td>Customer Name:</td>
                            <td><b>{{ $view->name }}</b></td>
                            <td>Company:</td>
                            <td><b>{{ $view->company }}</b></td>

                        </tr>
                        <tr>
                            <td>Email-1:</td>
                            <td><b>{{ $view->email_1 }}</b></td>
                            <td>Email-2:</td>
                            <td><b>{{ $view->email_2 }}</b></td>

                        </tr>
                        <tr>
                            <td>Phone-1:</td>
                            <td><b>{{ $view->phone_1 }}</b></td>
                            <td>Phone-1:</td>
                            <td><b>{{ $view->phone_2 }}</b></td>
                        </tr>
                        <tr>
                            <td>Website:</td>
                            <td><b>{{ $view->website }}</b></td>
                            <td>Address:</td>
                            <td><b>{{ $view->address }}</b></td>
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

    {{-- @extends('admin.master')
@section('title', 'View Customer')
<!-- Theme style -->
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">View Customer</h3>
                    </div>
                    <!-- /.col -->
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8 card" style="padding: 30px;">
                        <div class="card-body">
                            <div class="modal-body">
                                <div class="card-body w3-animate-bottom">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Name: <span><b>{{ $view->name }}</b></span></label>
    <hr>
    </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1"> Company: <span><b>{{ $view->company }}</b></span></label>
            <hr>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1"> Email-1: <span><b>{{ $view->email_1 }}</b></span></label>
            <hr>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1"> Email-2: <span><b>{{ $view->email_2 }}</b></span></label>
            <hr>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1"> Phone-1: <span><b>{{ $view->phone_1 }}</b></span></label>
            <hr>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1"> Phone-2: <span><b>{{ $view->phone_2 }}</b></span></label>
            <hr>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1"> Website: <span><b>{{ $view->website }}</b></span></label>
            <hr>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1"> Address: <span><b>{{ $view->address }}</b></span></label>
            <hr>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-2"></div>
    </div>
    </div>
    </div>

</section>
@endsection --}}
