@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-sm-12 mt-5">
                    <a href="{{ route('user.index') }}" class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i> Go back</a>
                    <div class="card mt-3">
                        <div class="card-header">
                            Create A New Messu
                        </div>
                        <div class="card-body text-center">
                            <form action="{{ route('user.store') }}" method="post">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="name" id="floatingInput" placeholder="John Doe">
                                    <label for="floatingInput">Messu Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="mesu_code" id="floatingInput" placeholder="John Doe">
                                    <label for="floatingInput">Messu Code </label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingPassword" name="nric" placeholder="NRIC">
                                    <label for="floatingPassword">NRIC</label>
                                </div>
                                <input type="submit" class="btn btn-success btn-md mt-3 w-50">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection