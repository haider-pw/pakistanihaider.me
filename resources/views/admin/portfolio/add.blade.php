@extends('layouts.backend')
@section('Title','Add Project')
@section('pageHead')
    <h1>
        Portfolio
        <small>Add Project</small>
    </h1>
@endsection

@section('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('assets/admin/plugins/datatables/dataTables.bootstrap.css')}}">
@endsection

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <form action="http://esicdirectory.tk/esic/Esic/EditSave" method="post" class="form" enctype="multipart/form-data">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Add Project Details</h3>
                            <div class="add-New-container pull-right">
                                <a href="{{URL::previous()}}" class="btn btn-sm btn-primary">Back</a>
                                <a href="{{URL('admin/portfolio')}}" class="btn btn-sm btn-primary">Listing</a>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <input type="hidden" id="hiddenListID" value="">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="projectTitle">Project Title</label>
                                        <input type="text" name="title" id="projectTitle" class="form-control">
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="projectCompany">Developed Under Company</label>
                                            <input type="text" name="company" id="projectCompany" class="form-control">
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <label for="projectWebsite">Website</label>
                                            <input type="text" name="website" id="projectWebsite" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="address_street_number">Tools Used to Build this Project</label>
                                            <input type="text" name="address_street_number" id="address_street_number" value="56" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="address_street_number">Cover Image</label>
                                            <input type="text" name="address_street_number" id="address_street_number" value="56" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="projectDescription">Description</label>
                                        <input type="text" name="description" id="projectDescription" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="KeywordsBox">Keywords</label>
                                        <input type="text" name="keywords" id="KeywordsBox" value="" class="form-control">
                                    </div>
                                </div>
                        </div> <!-- /.box-body -->
                        </div>
                        <div class="box-footer">
                            <div class="button-container action-button-sticky-bar">
                                <input type="hidden" name="id" value="2">
                                <input type="submit" class="btn btn-primary" value="Add">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection