@extends('layouts.main')
@section('content')



<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-sm-12 mt-5">
                    <a href="{{ route('dd.index') }}" class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i> Go back</a>

                    <div class="card mt-3" style="padding: 20px;">
                        <div class="card-header"><i class="fa fa-user" aria-hidden="true"></i> details</div>
                        <div class="card-body">
                            <div class="card-title h3">Therapist Name : {{$dd->therapist_name}}</div>
                            <div class="card-text">Therapist Code : {{$dd->therapist_code}}</div>
                            <div class="card-text">Status :
                                <?php
                                if ($dd->status == '1') {
                                    echo "<span class='bg-success p-1'>Active</status>";
                                } else {
                                    echo "<span class='bg-danger p-1'>In Active</status>";
                                }
                                ?>
                            </div>
                            <div class="card-text">Therapist Created At : {{$dd->created_at}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection