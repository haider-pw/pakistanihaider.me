@extends('layouts.backend')
@section('Title','Portfolio')

@section('pageHead')
    <h1>
        Portfolio
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
                <a href="{{route('addProject')}}" class="btn btn-block btn-primary btn-success">Add Project</a>
            </div>

            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Portfolio List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="portfolioList" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Cover Image</th>
                                <th>Title</th>
                                <th>Website</th>
                                <th>Tools</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data['portfolio'] as $portfolio)
                                <tr data-id="{{$portfolio->id}}">
                                    <td>{{$portfolio->id}}</td>
                                    <td>{{$portfolio->cover_image}}</td>
                                    <td>{{$portfolio->name}}</td>
                                    <td>{{$portfolio->title}}</td>
                                    <td>{{$portfolio->website}}</td>
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
                                <th>Cover Image</th>
                                <th>Title</th>
                                <th>Website</th>
                                <th>Tools</th>
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