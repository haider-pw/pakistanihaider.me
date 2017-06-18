
    <form class="form-horizontal">
        {{--username--}}
        <div class="form-group">
            <label for="inputUsername" class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputUsername" placeholder="Username" value="{{$data['user']->username}}" readonly="readonly">
            </div>
        </div>
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" placeholder="Name" value="{{$data['user']->name}}">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="{{$data['user']->email}}">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAbout" class="col-sm-2 control-label">About me</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="inputAbout" placeholder="About me"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
            </div>
        </div>
{{--        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                    </label>
                </div>
            </div>
        </div>--}}
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </div>
    </form>