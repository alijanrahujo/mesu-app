@extends('layouts.main')
@section('content')
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <!-- <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div>
            </div> -->
        </div>
    </div>


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>No. Of Messus</h3>
                            <p style="font-size: 25px;">56</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>No. Of Active Messus</h3>
                            <p style="font-size: 25px;">20</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>Completed Tests</h3>
                            <p style="font-size: 25px;">10</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection