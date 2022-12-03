@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 mt-5 mt-5">
                    <div class="card bg-info">
                        <div class="card-body">
                            <h4 class="card-title">No. Of Messus</h4>
                            <p class="card-text">{{$mesu['total_mesu']}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mt-5">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <h4 class="card-title">No. Of Active Messus</h4>
                            <p class="card-text">{{$mesu['active_mesu']}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mt-5">
                    <div class="card bg-success">
                        <div class="card-body">
                            <h4 class="card-title">Completed Test<small>'s</small></h4>
                            <p class="card-text">{{$mesu['therapist']}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection