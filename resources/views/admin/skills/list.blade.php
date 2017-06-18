@extends('layouts.backend')
@section('Title','Users List')

@section('pageHead')
    <h1>
        Skills
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
            <div class="col-md-2 pull-right">
                <button type="button"
                   class="btn btn-block btn-primary btn-success" data-toggle="modal" data-target="#addSkillModal">Add Skill</button>
            </div>
            <br/>
            <br/>
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Skills List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="skillsList" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Skill Name</th>
                                <th>Label</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data['skills'] as $skill)
                                <tr>
                                    <td>{{$skill->id}}</td>
                                    <td>{{$skill->name}}</td>
                                    <td>{{$skill->label}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Skill Name</th>
                                <th>Label</th>
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


@section('modals')
    <div id="addSkillModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add New Skill</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="skillInput">Skill</label>
                        <input class="form-control" type="text" name="skill" id="skillInput" placeholder="e-g HTML">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <!-- DataTables -->
    <script src="{{url('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('assets/admin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>

    <script>
        $(function () {
            $("#skillsList").DataTable();
        });
    </script>
@endsection
