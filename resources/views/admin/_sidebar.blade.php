<!-- Sidebar  -->
<nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="{{ asset('assets') }}/admin/images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="{{ asset('assets') }}/admin/images/layout_img/user_img.jpg" alt="#" /></div>
                        <div class="user_info">

                           <h6>{{Auth::user()->name}}</h6>
                           <a href="/logoutuser" class="text-uppercase">Logout</a>
                        </div>
                     </div>
                  </div>
               </div>

                     <li><a href="/admin"><i class="fa fa-home"></i> <span>Dashboard</span></a></li><br>
                     <li><a href="/admin/category"><i class="fa fa-table purple_color2"></i> <span>Categories</span></a></li><br>
                     <li><a href="/admin/user"><i class="fa fa-user"></i> <span>Users</span></a></li><br>
                     <li><a href="{{route('admin.comment.index')}}"><i class="fa fa-comments"></i> <span>Comments</span></a></li><br>
                     <li><a href="/admin/place"><i class="fa fa-thumb-tack"></i> <span>Place</span></a></li><br>
                     <li><a href="{{route('admin.faq.index')}}"><i class="fa fa-question"></i> <span>Faq</span></a></li><br>
                     <li><a href="{{route('admin.message.index')}}"><i class="fa fa-envelope-o"></i> <span>Messages</span></a></li><br>
                     <li><a href="/admin/setting"><i class="fa fa-wrench"></i> <span>Settings</span></a></li>


                     <!-- <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Settings</span></a></li> -->

               </div>
            </nav>
            <!-- end sidebar -->
