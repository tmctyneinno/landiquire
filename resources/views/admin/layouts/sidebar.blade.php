<div class="navigation-menu-group">
    <div class="open" id="dashboards">
        <ul>
         <li class="navigation-divider">Dashboard</li>
         <li>
            <a  href="" data-toggle="tooltip" data-placement="right" title="Dashboard"
           data-nav-target="#dashboards">
           <i class="fa fa-home"></i> &nbsp;Dashboard</a>
        </li>

        <li class="navigation-divider">Menu</li>
        <li>
            <a  href="" data-toggle="tooltip" data-placement="right" title="Manage Menus"
           data-nav-target="#dashboards">
            <i class="fa fa-bars"></i>&nbsp;Header Menu</a>
            <ul>
                <li><a href="{{route('admin.menu.index')}}"> Manage Menu</a></li>
            </ul>
        </li>
        <li class="navigation-divider">Pages</li>
               <li>
               <a  href="" data-toggle="tooltip" data-placement="right" title="View and Manage Category"
               data-nav-target="#dashboards">
                <i class="fa fa-file"></i> &nbsp; Manage Pages
                </a>
                <ul>
                    <li><a href="{{route('admin.manage.pages')}}">Manage Pages</a></li>
                    <li><a href="{{route('admin.Pages.Create')}}">Create Page</a></li>
              </ul>
        </li>
           
            
         <li>
            <a  href="" data-toggle="tooltip" data-placement="right" title="View User's activities"
               data-nav-target="#dashboards">
                <i class="fa fa-newspaper-o"></i>&nbsp; Manage Blog</a>
                <ul>
                      <li><a href="{{route('admin.BlogsCreate')}}">Post Blog</a></li>
                      <li><a href="{{route('admin.blogs.index')}}">Manage Blog</a></li>
                </ul>
        </li>  
        
        <li>
            <a  href="" data-toggle="tooltip" data-placement="right" title="View User's activities"
               data-nav-target="#dashboards">
                <i class="fa fa-tasks"></i>&nbsp; Manage Jobs</a>
                <ul>
                      <li><a href="{{route('admin.JobsCreate')}}">Post Jobs</a></li>
                      <li><a href="{{route('admin.Jobs.index')}}">Manage Blog</a></li>
                </ul>
        </li>  
        </ul>
    </div>
</div>