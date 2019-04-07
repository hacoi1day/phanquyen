@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h4>Danh sách người dùng</h4>
            </div>
            <div class="col-12 my-1">
                <a class="btn btn-success" href="{{ route('user.add')  }}">Add User</a>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listUser as $user)
                        <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a class="btn btn-primary" href="#">Edit</a>
                                <a class="btn btn-danger" href="#">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection





