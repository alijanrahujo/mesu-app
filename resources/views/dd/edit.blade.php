@extends('layouts.main')

@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid justify-content-center">
            <div class="row mt-5">
                <div class="col-sm-12 mt-5">
                    <a href="{{ route('user.index') }}" class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i> Go back</a>
                    <div class="card mt-3 " style="padding: 20px;">
                        <div class="card-header">Edit Therapist</div>
                        <div class="card-body">
                            <form action="{{ url('/dd/'. $dd->id) }}" method="post">
                                {!! csrf_field() !!}
                                @method("PATCH")
                                <input type="hidden" name="id" value="{{$dd->id}}">
                                <label>Therapist Name</label><br>
                                <input type="text" class="form-control" name="therapist_name" id="name" value="{{$dd->therapist_name}}" class="form-control w-50">
                                <label>Therapist Code</label>
                                <input type="text" class="form-control" name="therapist_code" id="therapist_name" value="{{$dd->therapist_code}}" class="form-control w-50">
                                <label class="mt-1">Status</label>
                                <select name="status" id="" class="form-select">
                                    <?php
                                    if ($dd->status == '1') {
                                        echo '<option vlaue="1">Active</option>';
                                        echo '<option value="0">In Active</option>';
                                    } else {
                                        echo '<option ="0">Inactive</option>';
                                        echo '<option value="1">Active</option>';
                                    }
                                    ?>
                                </select>
                                <input type="submit" value="Save Data" class="mt-4 btn btn-success fa fa-plus">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection