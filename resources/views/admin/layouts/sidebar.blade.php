<div class="navigation-menu-group">
    <div class="open" id="dashboards">
        <ul>
         <li class="navigation-divider">Dashboard</li>
         <li>
            <a  href="{{route('admin.index')}}" data-toggle="tooltip" data-placement="right" title="Dashboard"
           data-nav-target="#dashboards">
           <i class="fa fa-home"></i> &nbsp;Dashboard</a>
        </li>

        <li class="navigation-divider">Menu</li>
        <li>
            <a  href="" data-toggle="tooltip" data-placement="right" title="Manage Menus"
           data-nav-target="#dashboards">
            <i class="fa fa-file"></i>&nbsp; 
            Manage Menu</a>
            <ul>
                <li><a href="{{route('admin.menu.index')}}"> Manage Menu</a></li>
            </ul>
        </li>
        <li class="navigation-divider">Pages</li>
               <li>
               <a  href="" data-toggle="tooltip" data-placement="right" title="Manage Pages"
               data-nav-target="#dashboards">
                <i class="fa fa-user"></i> &nbsp; About-Us Pages
                </a>
                <ul>
                    <li><a href="{{route('admin.PagesEdit', encrypt(1))}}">About-Us Pages</a></li>
              </ul>
        </li>
     


       
      
         <li>
            <a  href="" data-toggle="tooltip" data-placement="right" title="Manage Blogs"
               data-nav-target="#dashboards">
                <i class="fa fa-newspaper-o"></i>&nbsp; Manage Blog</a>
                <ul>
                      <li><a href="{{route('admin.BlogsCreate')}}">Post Blog</a></li>
                      <li><a href="{{route('admin.blogs.index')}}">Manage Blog</a></li>
                </ul>
        </li>  
        <li>
            <a  href="" data-toggle="tooltip" data-placement="right" title="Manage Blogs"
               data-nav-target="#dashboards">
                <i class="fa fa-picture-o"></i>&nbsp; Manage Galleries</a>
                <ul>
                      <li><a href="{{route('admin.galleries.index')}}">Manage Galleries</a></li>
                      <li><a href="{{route('admin.galleries.create')}}">Create Gallery</a></li>
                </ul>
        </li>  
        <li>
            <a  href="" data-toggle="tooltip" data-placement="right" title="Manage Blogs"
               data-nav-target="#dashboards">
                <i class="fa fa-users"></i>&nbsp; Manage Teams</a>
                <ul>
                      <li><a href="{{route('admin.teams.index')}}">Manage team</a></li>
                      <li><a href="{{route('admin.teams.create')}}">Add team</a></li>
                </ul>
        </li>  
     
     
        
        
        <li class="navigation-divider">Settings</li>
        <li>
            <a  href="" data-toggle="tooltip" data-placement="right" title="Manage Settings"
               data-nav-target="#dashboards">
                <i class="fa fa-globe"></i>&nbsp; Wesbite Settings</a>
                <ul>
                      <li><a href="{{route('admin.settings.index')}}">Manage Contents</a></li>
                </ul>
        </li> 
        <li>
            <a  href="" data-toggle="tooltip" data-placement="right" title="Manage Admin"
               data-nav-target="#dashboards">
                <i class="fa fa-users"></i>&nbsp; Manage Admin</a>
                <ul>
                      <li><a href="{{route('admin.userAccount')}}">Manage Admin</a></li>
                </ul>
        </li>  

         
        </ul>
    </div>
</div>