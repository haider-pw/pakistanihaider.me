<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active treeview">
        <a href="#">
            <i class="fa fa-users"></i> <span>Manage</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="active"><a href="{{url('admin/users')}}"><i class="fa fa-circle-o"></i>Users</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i>Groups</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-book"></i>
            <span>Resume</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{url('admin/resume/basics')}}"><i class="fa fa-circle-o"></i> Basic </a></li>
            <li><a href="{{route('skills')}}"><i class="fa fa-circle-o"></i> Skills </a></li>
            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> What I Do?</a></li>
            <li><a href="{{url('admin/portfolio')}}"><i class="fa fa-circle-o"></i> Portfolio</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Interests</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Experience</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Education</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Testimonials</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Pricing</a></li>
            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Contact</a></li>
        </ul>
    </li>
    <li>
        <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Blog</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">All</small>
              <small class="label pull-right bg-green">Add New Blog</small>
            </span>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-cogs"></i>
            <span>Configuration</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{route('sysConfiguration')}}"><i class="fa fa-circle-o"></i> System </a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> User </a></li>
            <li><a href="{{route('sysSkills')}}"><i class="fa fa-circle-o"></i> Skills </a></li>
            <li><a href="{{route('sysSkillsGroups')}}"><i class="fa fa-circle-o"></i> Skills Groups</a></li>
        </ul>
    </li>
    <li>
        <a href="pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
        </a>
    </li>
</ul>
