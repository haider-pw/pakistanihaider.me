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
    <section class="notifications">
        @include('flash::message')
    </section>
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
                                <th>Skill</th>
                                <th>Percentage</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data['skills'] as $skill)
                                <tr data-id="{{$skill->id}}">
                                    <td>{{$skill->id}}</td>
                                    <td>{{$skill->source->label}}</td>
                                    <td>{{$skill->percentage}}</td>
                                    <td>
                                        <a style="cursor: pointer;" data-toggle="modal" data-target="#editSkillModal"><i class="fa fa-pencil text-black fa-lg" data-toggle="tooltip" title="Edit"></i></a>
                                        &nbsp;
                                        <a style="cursor: pointer;" data-toggle="modal" data-target="#deleteSkillModal"><i class="fa fa-trash text-red fa-lg" data-toggle="tooltip" title="Delete"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Skill</th>
                                <th>Percentage</th>
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
                        <label for="sysSkillInput">Skill</label>
                        <select class="form-control" name="sys_skill" id="sysSkillInput">
                            @foreach($data['sysSkills'] as $sysSkill)
                                <option value="{{$sysSkill->id}}">{{$sysSkill->label}}</option>
                            @endforeach
                        </select>
                        {{--<input class="form-control" type="text" name="skill" id="skillInput" placeholder="e-g HTML">--}}
                    </div>
                    <div class="form-group">
                        <label for="percentageInput">Percentage</label>
                        <div class="input-group">
                            <span class="input-group-addon">%</span>
                            <input class="form-control" type="text" name="percentage" id="percentageInput" placeholder="e-g 70">
                        </div>
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
                            <label for="sysSkillInput">Skill</label>
                            <select class="form-control" name="sys_skill" id="sysSkillInput">
                                @foreach($data['sysSkills'] as $sysSkill)
                                    <option value="{{$sysSkill->id}}">{{$sysSkill->label}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="percentageInput">Percentage</label>
                            <div class="input-group">
                                <span class="input-group-addon">%</span>
                                <input class="form-control" type="text" name="percentage" id="percentageInput" placeholder="e-g 70">
                            </div>
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
    <div id="deleteSkillModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <form action="{{url('admin/skill/delete')}}" id="deleteSkill-form" method="GET">
                    {{ csrf_field() }}
                    <input type="hidden" id="hiddenSkillID" name="skillID">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Delete Skill?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure to delete Skill <strong></strong> ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" id="deleteSkillBtn">Delete</button>
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

    <script type="text/javascript">
        $(function () {
            $("#skillsList").DataTable();
            //AddSkillBtn on click
            $('#addSkillBtn').on('click',function(e){
                var form = $(this).parents('form');
                $.ajaxSetup({
                    header:form.find('input[name="_token"]').val()
                });

                e.preventDefault(e);

                //First Remove all the Previous Help Boxes that have been Added in the Form.
                form.find('span.help-block').remove();

                $.ajax({
                    type:form.attr('method'),
                    url:form.attr('action'),
                    data:form.serialize(),
                    dataType: 'json',
                    success: function(data){
                        if(data.type){ //This means there is some Error.
                            Notification(data.box,data.message);
                        }else if(data.id){ //This means record was successfully added.
                            form.parents('.modal').modal('hide');
                            //Refresh the Page to See the Entry.
                            location.reload();
                        }
                    },
                    error:function(message){
                        //Check if Validation Messages Show up.
                        if(message.responseText){
                            try{
                                var jsonMessage = JSON.parse(message.responseText);
                                $.each(jsonMessage,function(key,value){
                                    var percentageInputBox = form.find('input[name="'+key+'"]');
                                    percentageInputBox.parents('.form-group').addClass('has-error');
//                                    percentageInputBox.parents('.form-group').find('span.help-block').remove();
                                    percentageInputBox.parents('.form-group').append('<span class="help-block">'+value[0]+'</span>')
                                });

                            }catch (ex){
                                console.log(ex);
                            }
                        }
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
                        modal.find('form').find('input[name="sysSkillInput"] option').filter(function() {
                            return ($(this).text() == data.skill); //To select Blue
                        }).prop('selected', true);
                        modal.find('form').find('input[name="percentage"]').val(data.percentage);
                    }
                });
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
                        if(data.type){
                            Notification(data.box,data.message);
                            form.parents('.modal').modal('hide');
                        }
                    },
                    error:function(message){
                        console.log(message.responseText);
                        //Check if Validation Messages Show up.
                        if(message.responseText){
                            try{
                                var jsonMessage = JSON.parse(message.responseText);
                                $.each(jsonMessage,function(key,value){
                                    var percentageInputBox = form.find('input[name="'+key+'"]');
                                    percentageInputBox.parents('.form-group').addClass('has-error');
                                    percentageInputBox.parents('.form-group').append('<span class="help-block">'+value[0]+'</span>')
                                });

                            }catch (ex){
                                console.log(ex);
                            }
                        }
                    }
                });
            });
            //When Delete Modal Is Shown
            $('#deleteSkillModal').on('shown.bs.modal',function(e){
                var relatedBtn = e.relatedTarget;
                var skillID = $(relatedBtn).parents('tr').attr('data-id');
                var modal = $(this);
                //Assign SkillID to hidden Field of Modal for later use.
                modal.find('#hiddenSkillID').val(skillID);

                $.ajax({
                    url:"{{url('admin/skill/edit')}}/"+skillID,
                    type:"GET",
                    dataType:'json',
                    success:function (data) {
                        //Assign value to the edit skill input box
                        modal.find('form').find('.modal-body p strong').text('"'+data.skill+'"')
                    }
                });
            });
            //Delete the Skill
            $('#deleteSkillBtn').on('click',function(){
                var form = $(this).parents('form');
                var skillID = form.find('#hiddenSkillID').val();
                $.ajax({
                    url:form.attr('action')+'/'+skillID,
                    type:form.attr('method'),
                    dataType:'json',
                    success:function(data){
                        if(data.type){
                            form.parents('.modal').modal('hide');
                            if(data.type === 'OK'){
                                //Update the Table As Well.
                                var skillsTable = $("#skillsList");
                                var selectedTR = skillsTable.find('tbody tr[data-id="'+skillID+'"]');
                                selectedTR.remove();


                                if(skillsTable.find('tbody tr').length === 0){
                                    var html = '<tr class="odd"><td valign="top" colspan="4" class="dataTables_empty">No data available in table</td></tr>';
                                    skillsTable.find('tbody').append(html);
                                }
                                Notification(data.box,data.message);
                            }
                        }//End of Main If Statement.
                    }
                })
            });
        });
    </script>
@endsection
