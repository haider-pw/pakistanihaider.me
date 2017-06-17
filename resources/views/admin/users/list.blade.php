@extends('layouts.backend')
@section('Title','Users List')

@section('pageHead')
    <h1>
        Users
        <small>List</small>
    </h1>
@endsection

@section('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('assets/admin/plugins/datatables/dataTables.bootstrap.css')}}">
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Users List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="usersList" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($data['users'] as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td><a href="users/{{$user->id}}">{{$user->name}}</a></td>
                                        <td>{{$user->username}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>Status Here</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection

@section('scripts')
    <!-- DataTables -->
    <script src="{{url('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('assets/admin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>

    <script>
        $(function () {
            $("#usersList").DataTable();
        });
    </script>
@endsection
