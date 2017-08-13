@extends('layouts.backend')
@section('Title','Users List')

@section('pageHead')
    <h1>
        Resume
        <small>Basics</small>
    </h1>
@endsection

@section('styles')
<link rel="stylesheet" href="{{url('assets/admin/plugins/select2/select2.min.css')}}">
@endsection

@section('content')
    <section class="content">
    <div class="box box-default">
        <form id="basicsInformationForm" action="{{url('admin/resume/basics/update')}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="userID" value="{{$data['basics']->id}}">
        <div class="box-header with-border">
            <h3 class="box-title">Resume Basics Information</h3>
            <span><button  type="button" class="btn btn-success pull-right" id="updateBasicsInformationBtn">Update</button></span>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" name="name" value="{{$data['basics']->name}}">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>Position</label>
                        <input type="text" class="form-control" name="position" value="{{$data['basics']->resume->position}}">
                    </div>
                    <div class="form-group">
                        <label>Freelance</label>
                        <select name="freelance" class="form-control select2">
                            <option value="1" selected="selected">Available</option>
                            <option value="2">Not Available</option>
                        </select>
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" value="{{$data['basics']->address}}">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{$data['basics']->email}}">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{$data['basics']->phone}}">
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            Please Fill all the Required Fields.
        </div>
        </form>
    </div>
    <!-- /.box -->
<div class="row">
    @include('admin.resume.partials.social')
    @include('admin.resume.partials.config')
</div>
    </section>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(function () {
            $('#updateBasicsInformationBtn').on('click',function(e){
                e.preventDefault();
                $.ajax({
                    url:$(this).parents('form').attr('action'),
                    type:$(this).parents('form').attr('method'),
                    data: $(this).parents('form').serializeArray(),
                    success:function(output){
                        console.log(output);
                    }
                });
            });
        });
    </script>
@endsection
