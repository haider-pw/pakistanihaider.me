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
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data['skills'] as $skill)
                                <tr data-id="{{$skill->id}}">
                                    <td>{{$skill->id}}</td>
                                    <td>{{$skill->name}}</td>
                                    <td>{{$skill->label}}</td>
                                    <td>
                                        <a style="cursor: pointer;" data-toggle="modal" data-target="#editSkillModal"><i class="fa fa-pencil text-black fa-lg" data-toggle="tooltip" title="Edit"></i></a>
                                        &nbsp;
                                        <a style="cursor: pointer;"><i class="fa fa-trash text-red fa-lg" data-toggle="tooltip" title="Delete"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Skill Name</th>
                                <th>Label</th>
                                <th>Actions</th>
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
                <form action="{{url('admin/skill/add')}}" id="addSkill-form" method="POST">
                {{ csrf_field() }}
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
                    <button type="button" class="btn btn-success" id="addSkillBtn">Add</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>

        </div>
    </div>
    <div id="editSkillModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <form action="{{url('admin/skill/update')}}" id="updateSkill-form" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" id="hiddenSkillID" name="skillID">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Edit Skill</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="skillInput">Skill</label>
                            <input class="form-control" type="text" name="skill" id="skillInput" placeholder="e-g HTML">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" id="updateSkillBtn">Update</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
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
            //AddSkillBtn on click
            $('#addSkillBtn').on('click',function(e){
                var form = $(this).parents('form');
                $.ajaxSetup({
                    header:form.find('input[name="_token"]').val()
                });

                e.preventDefault(e);

                $.ajax({
                    type:form.attr('method'),
                    url:form.attr('action'),
                    data:form.serialize(),
                    dataType: 'json',
                    success: function(data){
                        console.log(data);
                    }
                });
            });
            //When Edit Modal is Shown
            $('#editSkillModal').on('shown.bs.modal',function(e){
                var relatedBtn = e.relatedTarget;
                var skillID = $(relatedBtn).parents('tr').attr('data-id');
                var modal = $(this);
                //Assign SkillID to hidden Field of Modal for later use.
                modal.find('#hiddenSkillID').val(skillID);

                $.ajax({
                    url:"{{url('admin/skill/edit')}}/"+skillID,
                    type:"GET",
                    success:function (data) {
                        //Assign value to the edit skill input box
                        modal.find('form').find('input[name="skill"]').val(data)
                    }
                })
            });
            //UpdateSkillBtn on click
            $('#updateSkillBtn').on('click',function(){

                var form = $(this).parents('form');
                $.ajaxSetup({
                    header:form.find('input[name="_token"]').val()
                });
                $.ajax({
                    type:form.attr('method'),
                    url:form.attr('action'),
                    data:form.serialize(),
                    dataType: 'json',
                    success: function(data){
                        console.log(data);
                    }
                });
            });
        });
    </script>
@endsection
