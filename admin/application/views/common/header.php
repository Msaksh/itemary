<!-- Navbar-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript">

var base_url = "<?=base_url()?>";

</script>

<header class="main-header-top hidden-print">

    <a href="<?=base_url()?>" class="logo" style="margin-top: 1px;"><img style="margin-top: 8px;

    width: 128px !important" class="img-fluid able-logo" src="<?=base_url()?>assets/itemary-logo-wbg.png"

            alt="Theme-logo"></a>

    <nav class="navbar navbar-static-top">

        <!-- Sidebar toggle button-->

        <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>

        <ul class="top-nav lft-nav">

            <li class="dropdown pc-rheader-submenu message-notification search-toggle">

                <a href="#!" id="morphsearch-search" class="drop icon-circle txt-white">

                    <i class="ti-search"></i>

                </a>

            </li>

        </ul>

        <!-- Navbar Right Menu-->

        <div class="navbar-custom-menu f-right">

            <ul class="top-nav">



                <!--Notification Menu-->



                <!-- <li class="dropdown notification-menu">

                     <a href="#!" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">

                        <i class="icon-bell"></i>

                        <span class="badge badge-danger header-badge">9</span>

                     </a>

                     <ul class="dropdown-menu">

                        <li class="not-head">You have <b class="text-primary">4</b> new notifications.</li>

                        <li class="bell-notification">

                           <a href="javascript:;" class="media">

                              <span class="media-left media-icon">

                    <img class="img-circle" src="<?=base_url()?>assets/images/avatar-1.png" alt="User Image">

                  </span>

                     <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block-time">2min ago</span></div>

                           </a>

                        </li>

                        <li class="bell-notification">

                           <a href="javascript:;" class="media">

                              <span class="media-left media-icon">

                    <img class="img-circle" src="<?=base_url()?>assets/images/avatar-2.png" alt="User Image">

                  </span>

                              <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block-time">20min ago</span></div>

                           </a>

                        </li>

                        <li class="bell-notification">

                           <a href="javascript:;" class="media"><span class="media-left media-icon">

                    <img class="img-circle" src="<?=base_url()?>assets/images/avatar-3.png" alt="User Image">

                  </span>

                     <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block-time">3 hours ago</span></div></a>

                        </li>

                        <li class="not-footer">

                           <a href="#!">See all notifications.</a>

                        </li>

                     </ul>

                  </li> -->



                <!-- window screen -->

                <li class="pc-rheader-submenu">

                    <a href="#!" class="drop icon-circle" onclick="javascript:toggleFullScreen()">

                        <i class="icon-size-fullscreen"></i>

                    </a>



                </li>

                <!-- User Menu-->

                <li class="dropdown">

                    <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"

                        class="dropdown-toggle drop icon-circle drop-image">

                        <span><img class="img-circle " src="<?=base_url()?>assets/logo_file.png"

                                style="width: 34px; height: 32px;" alt="User Image"></span>

                        <span><?=$this->session->userdata('profile')['name']?> <i

                                class=" icofont icofont-simple-down"></i></span>



                    </a>

                    <ul class="dropdown-menu settings-menu">

                        <li><a href="<?=base_url('profile')?>"><i class="icon-user"></i> Profile</a></li>

                        <li><a href="<?=base_url('change-password')?>"><i class="icon-envelope-open"></i> Change

                                Password</a></li>

                        <li class="p-0">

                            <div class="dropdown-divider m-0"></div>

                        </li>

                        <li><a href="<?=base_url('profile/logout')?>"><i class="icon-logout"></i> Logout</a></li>



                    </ul>

                </li>

            </ul>

            <!-- search -->

            <div id="morphsearch" class="morphsearch">

                <form class="morphsearch-form">



                    <input class="morphsearch-input" type="search" placeholder="Search..." />



                    <button class="morphsearch-submit" type="submit">Search</button>



                </form>

                <div class="morphsearch-content">

                    <div class="dummy-column">

                        <h2>People</h2>

                        <a class="dummy-media-object" href="#!">

                            <img class="round"

                                src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&amp;d=identicon&amp;r=G"

                                alt="Sara Soueidan" />

                            <h3>Sara Soueidan</h3>

                        </a>



                        <a class="dummy-media-object" href="#!">

                            <img class="round"

                                src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&amp;d=identicon&amp;r=G"

                                alt="Shaun Dona" />

                            <h3>Shaun Dona</h3>

                        </a>

                    </div>

                    <div class="dummy-column">

                        <h2>Popular</h2>

                        <a class="dummy-media-object" href="#!">

                            <img src="<?=base_url()?>assets/images/avatar-1.png" alt="PagePreloadingEffect" />

                            <h3>Page Preloading Effect</h3>

                        </a>



                        <a class="dummy-media-object" href="#!">

                            <img src="<?=base_url()?>assets/images/avatar-1.png" alt="DraggableDualViewSlideshow" />

                            <h3>Draggable Dual-View Slideshow</h3>

                        </a>

                    </div>

                    <div class="dummy-column">

                        <h2>Recent</h2>

                        <a class="dummy-media-object" href="#!">

                            <img src="<?=base_url()?>assets/images/avatar-1.png" alt="TooltipStylesInspiration" />

                            <h3>Tooltip Styles Inspiration</h3>

                        </a>

                        <a class="dummy-media-object" href="#!">

                            <img src="<?=base_url()?>assets/images/avatar-1.png" alt="NotificationStyles" />

                            <h3>Notification Styles Inspiration</h3>

                        </a>

                    </div>

                </div>

                <!-- /morphsearch-content -->

                <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>

            </div>

            <!-- search end -->

        </div>

    </nav>

</header>

<!-- Side-Nav-->

<aside class="main-sidebar hidden-print ">

    <section class="sidebar" id="sidebar-scroll">

        <!-- Sidebar Menu-->

        <ul class="sidebar-menu">

            <li class="active treeview">

                <a class="waves-effect waves-dark" href="<?=base_url()?>">

                    <i class="icon-speedometer"></i><span> Dashboard</span>

                </a>

            </li>

            <li class="nav-level">--- Components</li>



            <li class="treeview">

                <a class="waves-effect waves-dark" href="<?=base_url('banner')?>">

                    <i class="icon-picture"></i><span> Banner Managment</span>

                </a>

            </li>

            <li class="treeview">

                <a class="waves-effect waves-dark" href="<?=base_url('product')?>">

                    <i class="icon-event"></i><span> Products</span>

                </a>

            </li>





            <li class="treeview">

                <a class="waves-effect waves-dark" href="<?=base_url('orders')?>">

                    <i class="icon-graph"></i><span>Customer Orders</span>

                </a>

            </li>
              <li class="treeview">

                <a class="waves-effect waves-dark" href="<?=base_url('Order_replace')?>">

                    <i class="icon-graph"></i><span>Order Replacement </span>

                </a>

            </li>



            <li class="treeview">

                <a class="waves-effect waves-dark" href="<?=base_url('testimonial')?>">

                    <i class="fa-quote-left"></i><span> Testimonial</span>

                </a>

            </li>

            <li class="treeview">

                <a class="waves-effect waves-dark" href="<?=base_url('item_units_category')?>">

                    <i class="icon-event"></i><span>Item Unites Category</span>

                </a>

            </li>



            <li class="treeview">

                <a class="waves-effect waves-dark" href="<?=base_url('pincode')?>">

                    <i class="icon-event"></i><span>Pincode</span>

                </a>

            </li>

            <li class="treeview">

                <a class="waves-effect waves-dark" href="<?=base_url('product-category')?>">

                    <i class="icon-event"></i><span>Product Category</span>

                </a>

            </li>



            <li class="nav-level">--- More</li>

            <li class="treeview">

                <a class="waves-effect waves-dark" href="<?=base_url('change-password')?>">

                    <i class="icon-key"></i><span> Change Password</span>

                </a>

            </li>

            <li class="treeview">

                <a class="waves-effect waves-dark" href="<?=base_url('profile/logout')?>">

                    <i class="icon-logout"></i><span> Logout</span>

                </a>

            </li>

        </ul>

    </section>

</aside>

<!-- Sidebar chat start -->