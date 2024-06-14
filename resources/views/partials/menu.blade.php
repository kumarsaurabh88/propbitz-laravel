<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ url("/") }}" target="_blank" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    Website
                </a>
            </li>
            
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            
      
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-unlock-alt nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-briefcase nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <i class="fa-fw fas fa-user nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    </ul>
                </li>
         
            
             <!-- @can('slider_manage')
                <li class="nav-item">
                <a href="{{ route('admin.slider.index') }}" class="nav-link {{ request()->is('admin/slider') || request()->is('admin/slider/*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-fw fa-sitemap">

                    </i>
                   Slider
                </a>
            </li>
                @endcan -->
           
            
            <li class="nav-item nav-dropdown">
           
            <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                         Blog Management
                    </a>
      
           <ul class="nav-dropdown-items">
               <li class="nav-item">
                <a href="{{ route('admin.blog.index') }}" class="nav-link {{ request()->is('admin/blog') || request()->is('admin/blog/*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-fw fa-sitemap">

                    </i>
                   Blogs
                </a>
            </li>
       


          
          
          
           {{-- @can('categories_manage')
         <li class="nav-item">
                <a href="{{ route('admin.categories.index') }}" class="nav-link {{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-fw fa-sitemap">

                    </i>
                   Categories
                </a>
            </li>
            @endcan
            
             @can('tag_manage')
            <li class="nav-item">
                <a href="{{ route('admin.tags.index') }}" class="nav-link {{ request()->is('admin/tags') || request()->is('admin/tags/*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-fw fa-sitemap">

                    </i>
                    Tags
                </a>
            </li>
            @endcan --}}
         
            <li class="nav-item">
                <a href="{{ route('admin.author.index') }}" class="nav-link {{ request()->is('admin/author') || request()->is('admin/author/*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-fw fa-sitemap">

                    </i>
                    Author
                </a>
            </li>
         
        </ul>
            </li>

            
                <li class="nav-item">
                <a href="{{ route('admin.news.index') }}" class="nav-link {{ request()->is('admin/news') || request()->is('admin/news/*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-fw fa-book">

                    </i>
                   News Management
                </a>
            </li>
                {{-- @endcan --}}

                <li class="nav-item nav-dropdown">
           
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                                <i class="fa-fw fas fa-users nav-icon">
        
                                </i>
                                 Manage Projects
                            </a>
                {{-- @can('blog_manage') --}}
                   <ul class="nav-dropdown-items">
                       <li class="nav-item">
                        <a href="{{ route('admin.project.index') }}" class="nav-link {{ request()->is('admin/project') || request()->is('admin/project/*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-fw fa-sitemap">
        
                            </i>
                           Projects
                        </a>
                    </li>
                  {{-- @endcan --}}
        
        
                  
                  
                  
                   {{-- @can('categories_manage') --}}
                 <li class="nav-item">
                        <a href="{{ route('admin.categories.index') }}" class="nav-link {{ request()->is('admin/categories') || request()->is('admin/categories/*') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-fw fa-sitemap">
        
                            </i>
                           Project Category
                        </a>
                    </li>
                    {{-- @endcan --}}
                    
                    
                </ul>
                    </li>
              
              
            {{-- @can('contact_manage') --}}
             <li class="nav-item">
                <a href="{{ route('admin.contact.index') }}" class="nav-link {{ request()->is('admin/contact') || request()->is('admin/contact/*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-fw fa-sitemap">

                    </i>
                   Contact Us
                </a>
            </li>
            {{-- @endcan --}}
            
            
            
            <li class="nav-item">
                <a href="{{ route('admin.seos.index') }}" class="nav-link {{ request()->is('admin/seos') || request()->is('admin/seos/*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-fw fa-chart-pie">

                    </i>
                    Manage SEO 
                </a>
            </li>

           
            
            <li class="nav-item">
                <a href="{{ route('auth.change_password') }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-key">

                    </i>
                    Change Password
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>