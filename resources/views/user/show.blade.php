@extends('layouts.main')
@section('content')



<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-sm-12 mt-5">
                    <a href="{{ route('user.index') }}" class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i> Go back</a>

                    <div class="card mt-3" style="padding: 20px;">
                        <div class="card-header"><i class="fa fa-user" aria-hidden="true"></i> details</div>
                        <div class="card-body">
                            <div class="card-title h3">Mesu Name : {{$user->name}}</div>
                            <div class="card-text">Mesu Code : {{$user->mesu_code}}</div>
                            <div class="card-text">Mesu NRIC : {{$user->nric}}</div>
                            <div class="card-text">Status :
                                <?php
                                if ($user->status == '1') {
                                    echo "<span class='bg-success p-1'>Active</status>";
                                } else {
                                    echo "<span class='bg-danger p-1'>In Active</status>";
                                }
                                ?>
                            </div>
                            <div class="card-text">Mesu Created At : {{$user->created_at}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection