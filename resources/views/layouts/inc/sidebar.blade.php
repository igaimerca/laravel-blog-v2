 <div class="sidebar" id="sidebar">

     <div class="sidebar-header">
         <div class="sidebar-logo">
             <a href="/">
                 <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid logo" alt="">
             </a>
             <a href="/">
                 <img src="{{ asset('assets/img/logo-small.png') }}" class="img-fluid logo-small" alt="">
             </a>
         </div>
     </div>
     <div class="sidebar-inner slimscroll">
         <div id="sidebar-menu" class="sidebar-menu">
             <!-- Content (CMS) -->
             <ul>
                 <li class="menu-title"><span>Content (CMS)</span></li>
                 <li class="submenu">
                     <a href="#"><i class="fe fe-book"></i> <span> Blog</span> <span
                             class="menu-arrow"></span></a>
                     <ul>
                         <li><a class="{{ request()->is('posts') ? 'active' : '' }}" href="/posts">Posts</a></li>
                         <li>
                             <a class="{{ request()->is('posts/edit*') ? 'active' : '' }}"
                                 href="{{ route('posts.edit') }}">
                                 {{ request()->is('posts/edit/*') ? 'Edit' : 'Create' }} Post
                             </a>
                         </li>


                     </ul>
                 </li>
             </ul>
             <!-- /Content (CMS) -->

         </div>
     </div>
 </div>
