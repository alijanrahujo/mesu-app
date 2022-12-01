@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-sm-12 mt-5">
                    <a href="{{ route('art.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        New Art</a>
                    <div class="card mt-4">
                        <div class="card-header">
                            Weekly Art Test
                        </div>
                        <div class="card-body">
                            <table class="table text-center">
                                <tr class="table-head">
                                    <th>Sr No.</th>
                                    <th>Test Name</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <!-- <th>Messu Name</th> -->
                                    <th>Test Status</th>
                                    <!-- <th>Action</th> -->
                                </tr>
                                @foreach($art as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->test_name}}</td>
                                    <td>{{$item->start_date}}</td>
                                    <td>{{$item->end_date}}</td>
                                    <td>
                                        <?php
                                        if ($item->status == '1') {
                                            echo 'Submitted';
                                        } else {
                                            echo "Not Submitted";
                                        }
                                        ?>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection