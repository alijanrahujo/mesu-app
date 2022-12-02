@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-sm-12 mt-5">
                    <a href="{{ route('user.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        New User</a>
                    <div class="card mt-4">
                        <div class="card-header">
                            All Messus
                        </div>
                        <div class="card-body">
                            <table class="table text-center">
                                <tr class="table-primary">
                                    <th>Sr No.</th>
                                    <th>Mesu Name</th>
                                    <th>Mesu Code</th>
                                    <th>Mesu Status</th>
                                    <!-- <th colspan="3">Action</th> -->
                                </tr>
                                @foreach($user as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->mesu_code}}</td>
                                    <td>
                                        <?php
                                        if ($item->status == '1') {
                                            echo 'Active';
                                        } else {
                                            echo "In Active";
                                        }
                                        ?>
                                    </td>
                                    <!-- <td>
                                        <a href="{{ url('/user/' .$item->id )}}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ url('/user/' .$item->id. '/edit' )}}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        {{ Form::open(array('route' => array('user.destroy',$item->id), 'method' => 'delete')) }}
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        {{ Form::close() }}
                                    </td> -->
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