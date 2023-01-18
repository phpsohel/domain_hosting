@extends('layout.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
   <section class="content">
       <div class="container-fluid">
           <div class="row">
               <div class="col-lg-3 col-6">
                   <div class="small-box bg-info">
                       <div class="inner text-center">
                           <h3>150</h3>
                           <p class="text-white">Total Domain</p>
                       </div>
                       <div class="icon">
                           <i class="ion ion-bag"></i>
                       </div>
                       <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                   </div>
               </div>
                <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner text-center">
                        <h3>150</h3>
                        <p class="text-white">Total Hosting</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-warning">
                    <div class="inner text-center">
                        <h3 class="text-white">44</h3>
                        <p class="text-white">Total Customer</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
           </div>
       </div>
   </section>



@endsection

