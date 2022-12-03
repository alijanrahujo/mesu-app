@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-sm-12 mt-5">
                    <a href="{{ route('art.index') }}" class="btn btn-primary"><i class="fas fa-arrow-circle-left"></i> Go back</a>
                    <div class="card mt-3">
                        <div class="card-header">
                            Create A New Art
                        </div>
                        <div class="card-body text-center">
                            <form action="{{ route('art.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" required name="test_name" id="floatingInput" placeholder="Test Name">
                                    <label for="floatingInput">Test Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" required name="start_date" id="floatingInput" placeholder="Start Date">
                                    <label for="floatingInput">Start Date</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="date" class="form-control" required name="end_date" id="floatingInput" placeholder="End Date">
                                    <label for="floatingInput">End Date</label>
                                </div>
                                <!-- <input type="file" class="form-control" required accept=".jpg, .png, .jpeg, .pdf, .doc, .docx" name="file" id="floatingInput" placeholder="File"> -->

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