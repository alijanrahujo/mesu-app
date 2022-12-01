@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-sm-12 mt-5">
                    <a href="{{ route('dd.index') }}" class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i> Go back</a>
                    <div class="card mt-3">
                        <div class="card-header">
                            Create A New DD
                        </div>
                        <div class="card-body text-center">
                            <form action="{{ route('dd.store') }}" method="post">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="therapist_name" id="floatingInput" placeholder="John Doe">
                                    <label for="floatingInput">Therapist Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="therapist_code" id="floatingInput" placeholder="Therapist Code ###">
                                    <label for="floatingInput">Therapist Code</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="question_one" id="floatingInput" placeholder="Question One">
                                    <label for="floatingInput">Question One</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="question_two" id="floatingInput" placeholder="Question Two">
                                    <label for="floatingInput">Question Two</label>
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