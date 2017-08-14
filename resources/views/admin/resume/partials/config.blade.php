<div class="col-md-6">
        <div class="box box-danger">
            <div class="box-header">
                <h3 class="box-title">Resume Configurations</h3>
            </div>
            <div class="box-body">
                <form action="{{URL('/')}}/admin/resume/basics/live-update" method="POST" id="resumeConfigForm">
                    {{csrf_field()}}
                <!-- Date dd/mm/yyyy -->
                <div class="form-group">
                    <label for="max_skills_groups_boxes">Max Skills Groups Boxes</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="max_skills_groups_boxes" name="max_skills_groups_boxes" value="{{isset($data['basics']->resume->max_skills_groups_boxes)?$data['basics']->resume->max_skills_groups_boxes:''}}">
                        <div class="input-group-addon">
                            <i class="fa fa-question" data-toggle="tooltip" title="Skills Boxes that will be shown on main site."></i>
                        </div>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <div class="form-group">
                    <label>Show Blocks on Resume Page</label>
                    <div class="input-group col-lg-12">
                        <div class="checkbox">
                            <label class="col-lg-3 col-md-4">
                                <input type="checkbox" name="skills_boxes" {{(isset($data['blocks']['skills_boxes']) and $data['blocks']['skills_boxes'] == '1')?'checked="checked"':''}}>
                                Skills Box
                            </label>
                            <label class="col-lg-3 col-md-4">
                                <input type="checkbox" name="what_i_do" {{(isset($data['blocks']['what_i_do']) and $data['blocks']['what_i_do'] == '1')?'checked="checked"':''}}>
                                What I Do?
                            </label>
                            <label class="col-lg-3 col-md-4">
                                <input type="checkbox" name="portfolio" {{(isset($data['blocks']['portfolio']) and $data['blocks']['portfolio'] == '1')?'checked="checked"':''}}>
                                Portfolio
                            </label>
                            <label class="col-lg-3 col-md-4">
                                <input type="checkbox" name="interests" {{(isset($data['blocks']['interests']) and $data['blocks']['interests'] == '1')?'checked="checked"':''}}>
                                Interests
                            </label>
                            <label class="col-lg-3 col-md-4">
                                <input type="checkbox" name="experience" {{(isset($data['blocks']['experience']) and $data['blocks']['experience'] == '1')?'checked="checked"':''}}>
                                Experience
                            </label>
                            <label class="col-lg-3 col-md-4">
                                <input type="checkbox" name="education" {{(isset($data['blocks']['education']) and $data['blocks']['education'] == '1')?'checked="checked"':''}}>
                                Education
                            </label>
                            <label class="col-lg-3 col-md-4">
                                <input type="checkbox" name="blog" {{(isset($data['blocks']['blog']) and $data['blocks']['blog'] == '1')?'checked="checked"':''}}>
                                Blog
                            </label>
                            <label class="col-lg-3 col-md-4">
                                <input type="checkbox" name="testimonials" {{(isset($data['blocks']['testimonials']) and $data['blocks']['testimonials'] == '1')?'checked="checked"':''}}>
                                Testimonials
                            </label>
                            <label class="col-lg-3 col-md-4">
                                <input type="checkbox" name="client_images" {{(isset($data['blocks']['client_images']) and $data['blocks']['client_images'] == '1')?'checked="checked"':''}}>
                                Client Images
                            </label>
                            <label class="col-lg-3 col-md-4">
                                <input type="checkbox" name="pricing" {{(isset($data['blocks']['pricing']) and $data['blocks']['pricing'] == '1')?'checked="checked"':''}}>
                                Pricing
                            </label>
                            <label class="col-lg-3 col-md-4">
                                <input type="checkbox" name="contact" {{(isset($data['blocks']['contact']) and $data['blocks']['contact'] == '1')?'checked="checked"':''}}>
                                Contact
                            </label>
                        </div>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->
                </form>
                <!-- /.form -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>