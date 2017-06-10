@extends('layouts.backend')
@section('Title','Users List')

@section('pageHead')
    <h1>
        Dashboard
        <small>Control panel</small>
    </h1>
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Hover Data Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="usersList" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Group</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody></tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Group</th>
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