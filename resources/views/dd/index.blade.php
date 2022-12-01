@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-sm-12 mt-5">
                    <a href="{{ route('dd.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        New DD</a>
                    <div class="card mt-4">
                        <div class="card-header">
                            Daily Deceleration
                        </div>
                        <div class="card-body">
                            <table class="table text-center">
                                <tr class="table-head">
                                    <th>Sr No.</th>
                                    <th>Therapist Name</th>
                                    <th>Question One</th>
                                    <th>Question Two</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($dd as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->therapist_name}}</td>
                                    <td>{{$item->question_one}}</td>
                                    <td>{{$item->question_two}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>
                                        <a href="{{ url('/dd/' .$item->id )}}" class="btn btn-warning">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ url('/dd/' .$item->id. '/edit' )}}" class="btn btn-primary btn-small">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="{{ url('/dd/' .$item->id )}}" class="btn btn-danger btn-small">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
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