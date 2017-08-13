
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
                        <input type="text" class="form-control" id="max_skills_groups_boxes" name="max_skills_groups_boxes">
                        <div class="input-group-addon">
                            <i class="fa fa-question" data-toggle="tooltip" title="Skills Boxes that will be shown on main site."></i>
                        </div>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->

                <!-- Date mm/dd/yyyy -->
                <div class="form-group">
                    <label>Show Blocks on Resume Page</label>
                    <div class="input-group col-lg-12">
                        <div class="checkbox">
                            <label class="col-lg-3 col-md-4">
                                <input type="checkbox" name="skills_boxes">
                                Skills Box
                            </label>
                            <label class="col-lg-3 col-md-4">
                                <input type="checkbox" name="what_i_do">
                                What I Do?
                            </label>
                            <label class="col-lg-3 col-md-4">
                                <input type="checkbox" name="portfolio">
                                Portfolio
                            </label>
                            <label class="col-lg-3 col-md-4">
                                <input type="checkbox" name="interests">
                                Interests
                            </label>
                            <label class="col-lg-3 col-md-4">
                                <input type="checkbox" name="experience">
                                Experience
                            </label>
                            <label class="col-lg-3 col-md-4">
                                <input type="checkbox" name="education">
                                Education
                            </label>
                            <label class="col-lg-3 col-md-4">
                                <input type="checkbox" name="blog">
                                Blog
                            </label>
                            <label class="col-lg-3 col-md-4">
                                <input type="checkbox" name="testimonials">
                                Testimonials
                            </label>
                            <label class="col-lg-3 col-md-4">
                                <input type="checkbox" name="client_images">
                                Client Images
                            </label>
                            <label class="col-lg-3 col-md-4">
                                <input type="checkbox" name="pricing">
                                Pricing
                            </label>
                            <label class="col-lg-3 col-md-4">
                                <input type="checkbox" name="contact">
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