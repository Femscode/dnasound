<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DNA Sound Studio</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://templates.iqonic.design/prox/html/assets/images/favicon.ico" />

    <link rel="stylesheet" href="{{url('producers/assets/backend.min.css')}}">
    <link rel="stylesheet" href="https://templates.iqonic.design/prox/html/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{url('producers/assets/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('producers/assets/remixicon.css')}}">
    <link rel="stylesheet" href="{{url('producers/assets/dripicons.css')}}">

    <link rel='stylesheet' href='https://templates.iqonic.design/prox/html/assets/vendor/fullcalendar/core/main.css' />
    <link rel='stylesheet' href='https://templates.iqonic.design/prox/html/assets/vendor/fullcalendar/daygrid/main.css' />
    <link rel='stylesheet' href='https://templates.iqonic.design/prox/html/assets/vendor/fullcalendar/timegrid/main.css' />
    <link rel='stylesheet' href='https://templates.iqonic.design/prox/html/assets/vendor/fullcalendar/list/main.css' />
    <link rel="stylesheet" href="https://templates.iqonic.design/prox/html/assets/vendor/mapbox/mapbox-gl.css">
    @yield('header')
</head>

<body class=" color-light ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">

        <div class="iq-sidebar  sidebar-default ">
            <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                <a href="index.html" class="header-logo">
                    <img src="https://templates.iqonic.design/prox/html/assets/images/logo.png" class="img-fluid rounded-normal" alt="logo">
                </a>
                <div class="iq-menu-bt-sidebar">
                    <i class="las la-bars wrapper-menu"></i>
                </div>
            </div>
            <div class="data-scrollbar" data-scroll="1">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li class=" ">
                            <a href="https://templates.iqonic.design/prox/html/backend/index.html" class="">
                                <i class="las la-home iq-arrow-left"></i><span>Dashboard</span>
                            </a>
                            <ul id="home" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#layouts" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="lab la-jira iq-arrow-left"></i><span>Layouts</span>
                                <i class="las la-plus iq-arrow-right arrow-active"></i>
                                <i class="las la-minus iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="layouts" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/layout-1.html">
                                        <i class="las la-hotel"></i><span>Layout 1</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/layout-2.html">
                                        <i class="las la-percent"></i><span>Layout 2</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/layout-3.html">
                                        <i class="las la-dumbbell"></i><span>Layout 3</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/layout-4.html">
                                        <i class="las la-magic"></i><span>Layout 4</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/layout-5.html">
                                        <i class="las la-coins"></i><span>Layout 5</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/layout-6.html">
                                        <i class="las la-utensils"></i><span>Layout 6</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/layout-7.html">
                                        <i class="las la-school"></i><span>Layout 7</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/layout-8.html">
                                        <i class="las la-home"></i><span>Layout 8</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/layout-9.html">
                                        <i class="las la-shopping-bag"></i><span>Layout 9</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/layout-10.html">
                                        <i class="lar la-credit-card"></i><span>Layout 10</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/layout-11.html">
                                        <i class="lar la-hospital"></i><span>Layout 11</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/layout-12.html">
                                        <i class="las la-cut"></i><span>Layout 12</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/layout-13.html">
                                        <i class="las la-shopping-cart"></i><span>Layout 13</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/layout-14.html">
                                        <i class="lar la-plus-square"></i><span>Layout 14</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/layout-15.html">
                                        <i class="las la-icons"></i><span>Layout 15</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/layout-16.html">
                                        <i class="las la-icons"></i><span>Layout 16</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#app" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="lab la-patreon iq-arrow-left"></i><span>App Design</span>
                                <i class="las la-plus iq-arrow-right arrow-active"></i>
                                <i class="las la-minus iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="app" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class=" ">
                                    <a href="#music" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="lab la-wpforms"></i><span>Music</span>
                                        <i class="las la-plus iq-arrow-right arrow-active"></i>
                                        <i class="las la-minus iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="music" class="iq-submenu collapse" data-parent="#app">
                                        <li class="active">
                                            <a href="music-home.html">
                                                <i class="las la-book"></i><span>Home</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="music-latest.html">
                                                <i class="las la-edit"></i><span>Latest</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="music-albums.html">
                                                <i class="las la-toggle-off"></i><span>Albums</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="#book" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="las la-book"></i><span>Books</span>
                                        <i class="las la-plus iq-arrow-right arrow-active"></i>
                                        <i class="las la-minus iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="book" class="iq-submenu collapse" data-parent="#app">
                                        <li class=" ">
                                            <a href="book-shop.html">
                                                <i class="las la-shopping-cart"></i><span>Shop</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="book-category.html">
                                                <i class="ri-function-line"></i><span>Category</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="bookpage.html">
                                                <i class="las la-book"></i><span>Book Page</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="#idrive" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="lab la-google-drive"></i><span>Storage Drive</span>
                                        <i class="las la-plus iq-arrow-right arrow-active"></i>
                                        <i class="las la-minus iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="idrive" class="iq-submenu collapse" data-parent="#app">
                                        <li class=" ">
                                            <a href="idrive-home1.html">
                                                <i class="lab la-stack-exchange"></i><span>Drive 1</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="idrive-home2.html">
                                                <i class="las la-memory"></i><span>Drive 2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="#crm" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="las la-chalkboard-teacher"></i><span>CRM</span>
                                        <i class="las la-plus iq-arrow-right arrow-active"></i>
                                        <i class="las la-minus iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="crm" class="iq-submenu collapse" data-parent="#app">
                                        <li class=" ">
                                            <a href="crm-dashboard.html">
                                                <i class="las la-poll"></i><span>Dashboard</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="crm-lead.html">
                                                <i class="las la-poll-h"></i><span>Lead</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="crm-schedule.html">
                                                <i class="las la-money-check"></i><span>Schedule</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="#user" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="las la-user"></i><span>User Managerment</span>
                                        <i class="las la-plus iq-arrow-right arrow-active"></i>
                                        <i class="las la-minus iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="user" class="iq-submenu collapse" data-parent="#app">
                                        <li class=" ">
                                            <a href="user-profile.html">
                                                <i class="las la-id-card"></i><span>User Profile</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="user-add.html">
                                                <i class="las la-user-plus"></i><span>User Add</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="user-list.html">
                                                <i class="las la-list-alt"></i><span>User List</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="#email" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="las la-envelope-open"></i><span>Mail</span>
                                        <i class="las la-plus iq-arrow-right arrow-active"></i>
                                        <i class="las la-minus iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="email" class="iq-submenu collapse" data-parent="#app">
                                        <li class=" ">
                                            <a href="email.html">
                                                <i class="las la-inbox"></i><span>Inbox</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="email-compose.html">
                                                <i class="las la-edit"></i><span>Email Compose</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="reporting-social-media.html">
                                        <i class="las la-passport"></i><span>reporting-social-media</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="server-monitoring.html">
                                        <i class="las la-server"></i><span>Server Monitoring</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="chat.html">
                                        <i class="lab la-rocketchat"></i><span>Chat</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="todo.html">
                                        <i class="las la-clipboard-check"></i><span>Todo</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#widget" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="las la-bullseye iq-arrow-left"></i><span>Widget</span>
                                <i class="las la-plus iq-arrow-right arrow-active"></i>
                                <i class="las la-minus iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="widget" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/widget-simple.html">
                                        <i class="las la-window-minimize"></i><span>widget simple</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/widget-chart.html">
                                        <i class="las la-chart-bar"></i><span>widget chart</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#ui" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="lab la-elementor iq-arrow-left"></i><span>UI Elements</span>
                                <i class="las la-plus iq-arrow-right arrow-active"></i>
                                <i class="las la-minus iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="ui" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-avatars.html">
                                        <i class="las la-user-circle"></i><span>Avatars</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-alerts.html">
                                        <i class="las la-tag"></i><span>Alerts</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-badges.html">
                                        <i class="lab la-atlassian"></i><span>Badges</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-breadcrumb.html">
                                        <i class="las la-bars"></i><span>Breadcrumb</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-buttons.html">
                                        <i class="las la-tablet"></i><span>Buttons</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-buttons-group.html">
                                        <i class="las la-eraser"></i><span>Buttons Group</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-boxshadow.html">
                                        <i class="las la-chess-board"></i><span>Box Shadow</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-colors.html">
                                        <i class="las la-palette"></i><span>Colors</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-cards.html">
                                        <i class="las la-credit-card"></i><span>Cards</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-carousel.html">
                                        <i class="las la-film"></i><span>Carousel</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-grid.html">
                                        <i class="las la-border-all"></i><span>Grid</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-helper-classes.html">
                                        <i class="las la-stream"></i><span>Helper classes</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-images.html">
                                        <i class="las la-images"></i><span>Images</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-list-group.html">
                                        <i class="las la-list"></i><span>list Group</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-media-object.html">
                                        <i class="las la-ad"></i><span>Media</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-modal.html">
                                        <i class="las la-columns"></i><span>Modal</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-notifications.html">
                                        <i class="las la-bell"></i><span>Notifications</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-pagination.html">
                                        <i class="las la-ellipsis-h"></i><span>Pagination</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-popovers.html">
                                        <i class="las la-eraser"></i><span>Popovers</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-progressbars.html">
                                        <i class="las la-hdd"></i><span>Progressbars</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-typography.html">
                                        <i class="las la-keyboard"></i><span>Typography</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-tabs.html">
                                        <i class="las la-database"></i><span>Tabs</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-tooltips.html">
                                        <i class="las la-magnet"></i><span>Tooltips</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/ui-embed-video.html">
                                        <i class="las la-video"></i><span>Video</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#plugin" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="las la-plug iq-arrow-left"></i><span>Plugins</span>
                                <i class="las la-plus iq-arrow-right arrow-active"></i>
                                <i class="las la-minus iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="plugin" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/plugin-rating.html">
                                        <i class="lar la-star"></i><span>Rating</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/plugin-tree-view.html">
                                        <i class="las la-tree"></i><span>Treeview</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/plugin-sweetalert.html">
                                        <i class="las la-tag"></i><span>Sweetalert</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/plugin-loader.html">
                                        <i class="las la-circle-notch"></i><span>Loader</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#form" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="lab la-wpforms iq-arrow-left"></i><span>Forms</span>
                                <i class="las la-plus iq-arrow-right arrow-active"></i>
                                <i class="las la-minus iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="form" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class=" ">
                                    <a href="#form-controls" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="lab la-wpforms"></i><span>Form Controls</span>
                                        <i class="las la-plus iq-arrow-right arrow-active"></i>
                                        <i class="las la-minus iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="form-controls" class="iq-submenu collapse" data-parent="#form">
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/form-layout.html">
                                                <i class="las la-book"></i><span>Form Elements</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/form-input-group.html">
                                                <i class="las la-keyboard"></i><span>Form Input</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/form-validation.html">
                                                <i class="las la-edit"></i><span>Form Validation</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/form-switch.html">
                                                <i class="las la-toggle-off"></i><span>Form Switch</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/form-chechbox.html">
                                                <i class="las la-check-square"></i><span>Form Checkbox</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/form-radio.html">
                                                <i class="las la-yin-yang"></i><span>Form Radio</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/form-textarea.html">
                                                <i class="las la-text-height"></i><span>Form Textarea</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="#form-widget" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="lab la-elementor"></i><span>Form Widget</span>
                                        <i class="las la-plus iq-arrow-right arrow-active"></i>
                                        <i class="las la-minus iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="form-widget" class="iq-submenu collapse" data-parent="#form">
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/form-datepicker.html">
                                                <i class="las la-calendar"></i><span>Datepicker</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/form-select.html">
                                                <i class="las la-object-group"></i><span>Select2</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/form-file-uploader.html">
                                                <i class="las la-cloud-download-alt"></i><span>File Upload</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/form-quill.html">
                                                <i class="las la-text-height"></i><span>Form quill</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="#form-wizard" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="las la-archive"></i><span>Forms Wizard</span>
                                        <i class="las la-plus iq-arrow-right arrow-active"></i>
                                        <i class="las la-minus iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="form-wizard" class="iq-submenu collapse" data-parent="#form">
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/form-wizard.html">
                                                <i class="las la-box"></i><span>Simple Wizard</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/form-wizard-validate.html">
                                                <i class="las la-inbox"></i><span>Validate Wizard</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/form-wizard-vertical.html">
                                                <i class="las la-file-archive"></i><span>Vertical Wizard</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#table" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="las la-table iq-arrow-left"></i><span>Table</span>
                                <i class="las la-plus iq-arrow-right arrow-active"></i>
                                <i class="las la-minus iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="table" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/tables-basic.html">
                                        <i class="las la-border-all"></i><span>Basic Tables</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/table-data.html">
                                        <i class="lab la-microsoft"></i><span>Data Table</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/table-editable.html">
                                        <i class="lab la-buromobelexperte"></i><span>Editable Table</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/table-tree.html">
                                        <i class="las la-tree"></i><span>Table Tree</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#icon" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="las la-list iq-arrow-left"></i><span>Icons</span>
                                <i class="las la-plus iq-arrow-right arrow-active"></i>
                                <i class="las la-minus iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="icon" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/icon-dripicons.html">
                                        <i class="las la-layer-group"></i><span>Dripicons</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/icon-fontawesome.html">
                                        <i class="lab la-facebook-f"></i><span>Font Awesome</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/icon-lineawesome.html">
                                        <i class="las la-grip-lines-vertical"></i><span>Line Awesome</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/icon-remixicon.html">
                                        <i class="lab la-creative-commons-remix"></i><span>Remixicon</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#gallery" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="las la-images iq-arrow-left"></i><span>Gallery</span>
                                <i class="las la-plus iq-arrow-right arrow-active"></i>
                                <i class="las la-minus iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="gallery" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/gallery-grid.html">
                                        <i class="las la-icons"></i><span>Gallery Grid</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/gallery-grid-desc.html">
                                        <i class="las la-file-image"></i><span>Gallery Grid Desc</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/gallery-masonry.html">
                                        <i class="las la-film"></i><span>Masonry Gallery</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/gallery-masonry-desc.html">
                                        <i class="las la-stream"></i><span>Masonry with Desc</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/gallery-hover-effect.html">
                                        <i class="las la-wallet"></i><span>Hover Effects</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#blog" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="lab la-blogger iq-arrow-left"></i><span>Blog</span>
                                <i class="las la-plus iq-arrow-right arrow-active"></i>
                                <i class="las la-minus iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="blog" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/blog-simple.html">
                                        <i class="las la-boxes"></i><span>Simple Blog</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/blog-grid.html">
                                        <i class="lab la-buromobelexperte"></i><span>Blog Grid</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/blog-list.html">
                                        <i class="las la-clipboard-list"></i><span>Blog List</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/blog-detail.html">
                                        <i class="las la-film"></i><span>Blog Details</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#chart" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="las la-chart-bar iq-arrow-left"></i><span>Charts</span>
                                <i class="las la-plus iq-arrow-right arrow-active"></i>
                                <i class="las la-minus iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="chart" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/chart-apex.html">
                                        <i class="las la-chart-area"></i><span>Apex Chart</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/chart-am.html">
                                        <i class="las la-project-diagram"></i><span>Am Chart</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/chart-morries.html">
                                        <i class="las la-chart-pie"></i><span>Morrish chart</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/chart-high.html">
                                        <i class="las la-chart-line"></i><span>High chart</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#map" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="las la-map-marker iq-arrow-left"></i><span>Map</span>
                                <i class="las la-plus iq-arrow-right arrow-active"></i>
                                <i class="las la-minus iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="map" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/map-google.html">
                                        <i class="las la-map-signs"></i><span>Google Map</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/map-vector.html">
                                        <i class="las la-globe-europe"></i><span>Vector Map</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#auth" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="las la-pager iq-arrow-left"></i><span>Authentication</span>
                                <i class="las la-plus iq-arrow-right arrow-active"></i>
                                <i class="las la-minus iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="auth" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/auth-sign-in.html">
                                        <i class="las la-sign-in-alt"></i><span>Login</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/auth-sign-up.html">
                                        <i class="las la-sign-out-alt"></i><span>Register</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/auth-recoverpw.html">
                                        <i class="las la-unlock-alt"></i><span>Recover Password</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/auth-confirm-mail.html">
                                        <i class="las la-envelope-open-text"></i><span>Confirm Mail</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/auth-lock-screen.html">
                                        <i class="las la-lock"></i><span>Lock Screen</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#pages" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <i class="lab la-readme iq-arrow-left"></i><span>Extra Pages</span>
                                <i class="las la-plus iq-arrow-right arrow-active"></i>
                                <i class="las la-minus iq-arrow-right arrow-hover"></i>
                            </a>
                            <ul id="pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class=" ">
                                    <a href="#contact" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="las la-address-book"></i><span>Contact</span>
                                        <i class="las la-plus iq-arrow-right arrow-active"></i>
                                        <i class="las la-minus iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="contact" class="iq-submenu collapse" data-parent="#pages">
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/contact-list.html">
                                                <i class="las la-file-alt"></i><span>Contact List</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/contact-detail.html">
                                                <i class="las la-address-card"></i><span>Contact Details</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="#timeline" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="las la-atom"></i><span>Timeline</span>
                                        <i class="las la-plus iq-arrow-right arrow-active"></i>
                                        <i class="las la-minus iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="timeline" class="iq-submenu collapse" data-parent="#pages">
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/timeline.html">
                                                <i class="las la-circle-notch"></i><span>Timeline 1</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/timeline-1.html">
                                                <i class="las la-compact-disc"></i><span>Timeline 2</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/timeline-2.html">
                                                <i class="las la-cog"></i><span>Timeline 3</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/timeline-3.html">
                                                <i class="las la-snowflake"></i><span>Timeline 4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="#pricing" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="lab la-paypal"></i><span>Pricing</span>
                                        <i class="las la-plus iq-arrow-right arrow-active"></i>
                                        <i class="las la-minus iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="pricing" class="iq-submenu collapse" data-parent="#pages">
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/pricing.html">
                                                <i class="las la-weight"></i><span>Pricing 1</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/pricing-1.html">
                                                <i class="las la-crutch"></i><span>Pricing 2</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/pricing-2.html">
                                                <i class="las la-tablets"></i><span>Pricing 3</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/pricing-3.html">
                                                <i class="las la-dna"></i><span>Pricing 4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="#pages-error" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="las la-exclamation-triangle"></i><span>Error</span>
                                        <i class="las la-plus iq-arrow-right arrow-active"></i>
                                        <i class="las la-minus iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="pages-error" class="iq-submenu collapse" data-parent="#pages">
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/pages-error.html">
                                                <i class="las la-exclamation-circle"></i><span>Error 404</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="https://templates.iqonic.design/prox/html/backend/pages-error-500.html">
                                                <i class="las la-bug"></i><span>Error 500</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/pages-invoice.html">
                                        <i class="las la-file-invoice"></i><span>Invoice</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/pages-subscribers.html">
                                        <i class="las la-sort"></i><span>Subscribers</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/pages-faq.html">
                                        <i class="las la-drafting-compass"></i><span>Faq</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/pages-blank-page.html">
                                        <i class="las la-folder-open"></i><span>Blank Page</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/pages-maintenance.html">
                                        <i class="las la-cogs"></i><span>Maintenance</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="https://templates.iqonic.design/prox/html/backend/pages-comingsoon.html">
                                        <i class="lab la-cc-mastercard"></i><span>Coming Soon</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="p-3"></div>
            </div>
        </div>
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                        <i class="ri-menu-line wrapper-menu"></i>
                        <a href="index.html" class="header-logo">
                            <img src="https://templates.iqonic.design/prox/html/assets/images/logo.png" class="img-fluid rounded-normal" alt="logo">
                        </a>
                    </div>
                    <div class="iq-search-bar device-search">
                        <form action="#" class="searchbox">
                            <input type="text" class="text search-input" placeholder="Type here to search...">
                            <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        </form>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="change-mode">
                            <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                                <div class="custom-switch-inner">
                                    <p class="mb-0"> </p>
                                    <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                                    <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                        <span class="switch-icon-left"><i class="a-left"></i></span>
                                        <span class="switch-icon-right"><i class="a-right"></i></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                            <i class="ri-menu-3-line"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                <li class="nav-item nav-icon search-content">
                                    <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-search-line"></i>
                                    </a>
                                    <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                        <form action="#" class="searchbox p-2">
                                            <div class="form-group mb-0 position-relative">
                                                <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                                <a href="#" class="search-link"><i class="las la-search"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="nav-item lang">
                                    <a class="search-toggle language-title dropdown-toggle" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span class="ripple rippleEffect" style="width: 98px; height: 98px; top: -15px; left: 56.2969px;"></span><img src="https://templates.iqonic.design/prox/html/assets/images/small/flag-01.png" alt="img-flaf" class="img-fluid mr-1" style="height: 16px; width: 16px; min-width: 16px;"> EN <i class="ri-arrow-down-s-line"></i></a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton4">
                                        <div class="p-3">
                                            <a class="iq-sub-card" href="#"><img src="https://templates.iqonic.design/prox/html/assets/images/small/flag-02.png" alt="img-flaf" class="img-fluid mr-2">French</a>
                                            <a class="iq-sub-card" href="#"><img src="https://templates.iqonic.design/prox/html/assets/images/small/flag-03.png" alt="img-flaf" class="img-fluid mr-2">Spanish</a>
                                            <a class="iq-sub-card" href="#"><img src="https://templates.iqonic.design/prox/html/assets/images/small/flag-04.png" alt="img-flaf" class="img-fluid mr-2">Italian</a>
                                            <a class="iq-sub-card" href="#"><img src="https://templates.iqonic.design/prox/html/assets/images/small/flag-05.png" alt="img-flaf" class="img-fluid mr-2">German</a>
                                            <a class="iq-sub-card" href="#"><img src="https://templates.iqonic.design/prox/html/assets/images/small/flag-06.png" alt="img-flaf" class="img-fluid mr-2">Japanese</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-mail-line"></i>
                                        <span class="bg-primary count-mail"></span>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body p-0 ">
                                                <div class="cust-title p-3">
                                                    <h5 class="mb-0">All Messages</h5>
                                                </div>
                                                <div class="p-3">
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded-small" src="https://templates.iqonic.design/prox/html/assets/images/user/01.jpg" alt="01">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Barry Emma Watson <small class="badge badge-success float-right">New</small></h6>
                                                                <small class="float-left font-size-12">12:00 PM</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded-small" src="https://templates.iqonic.design/prox/html/assets/images/user/02.jpg" alt="02">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                                <small class="float-left font-size-12">20 Apr</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded-small" src="https://templates.iqonic.design/prox/html/assets/images/user/03.jpg" alt="03">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">Why do we use it? <small class="badge badge-success float-right">New</small></h6>
                                                                <small class="float-left font-size-12">1:24 PM</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded-small" src="https://templates.iqonic.design/prox/html/assets/images/user/04.jpg" alt="04">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Variations Passages <small class="badge badge-success float-right">New</small></h6>
                                                                <small class="float-left font-size-12">5:45 PM</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded-small" src="https://templates.iqonic.design/prox/html/assets/images/user/05.jpg" alt="05">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                                <small class="float-left font-size-12">1 day ago</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <a class="right-ic btn btn-primary btn-block position-relative p-2" href="#" role="button">
                                                    <div class="dd-icon"><i class="las la-arrow-right mr-0"></i></div>
                                                    View All
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-notification-line"></i>
                                        <span class="bg-primary dots"></span>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body p-0 ">
                                                <div class="cust-title p-3">
                                                    <h5 class="mb-0">All Notifications</h5>
                                                </div>
                                                <div class="p-3">
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded-small" src="https://templates.iqonic.design/prox/html/assets/images/user/01.jpg" alt="01">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0">Emma Watson Barry <small class="badge badge-success float-right">New</small></h6>
                                                                <p class="mb-0">95 MB</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded-small" src="https://templates.iqonic.design/prox/html/assets/images/user/02.jpg" alt="02">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">New customer is join</h6>
                                                                <p class="mb-0">Cyst Barry</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded-small" src="https://templates.iqonic.design/prox/html/assets/images/user/03.jpg" alt="03">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">Two customer is left</h6>
                                                                <p class="mb-0">Cyst Barry</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="">
                                                                <img class="avatar-40 rounded-small" src="https://templates.iqonic.design/prox/html/assets/images/user/04.jpg" alt="04">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">New Mail from Fenny <small class="badge badge-success float-right">New</small></h6>
                                                                <p class="mb-0">Cyst Barry</p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <a class="right-ic btn btn-primary btn-block position-relative p-2" href="#" role="button">
                                                    <div class="dd-icon"><i class="las la-arrow-right mr-0"></i></div>
                                                    View All
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon dropdown">
                                    <a href="#" class="search-toggle rounded dropdown-toggle" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-shopping-cart-2-line"></i>
                                        <span class="badge badge-danger count-cart rounded">3</span>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body p-0 toggle-cart-info">
                                                <div class="cust-title d-flex align-items-center justify-content-between p-3">
                                                    <h5 class="mb-0">Your Cart</h5>
                                                    <h5 class="badge bg-primary-light text-primary p-2">Total: <strong>$214</strong></h5>
                                                </div>
                                                <div class="p-3">
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="crt-img">
                                                                <img class="rounded-small avatar-40" src="https://templates.iqonic.design/prox/html/assets/images/layouts/layout-9/05.png" alt="05">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">Night People book</h6>
                                                                <p class="mb-0">$32</p>
                                                            </div>
                                                            <div class="float-right font-size-24 text-danger"><i class="las la-trash-alt"></i></div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="crt-img">
                                                                <img class="rounded-small" src="https://templates.iqonic.design/prox/html/assets/images/layouts/layout-9/08.png" alt="08">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">The Sin Eater Book</h6>
                                                                <p class="mb-0">$40</p>
                                                            </div>
                                                            <div class="float-right font-size-24 text-danger"><i class="las la-trash-alt"></i></div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center">
                                                            <div class="crt-img">
                                                                <img class="rounded-small" src="https://templates.iqonic.design/prox/html/assets/images/layouts/layout-9/06.png" alt="06">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <h6 class="mb-0 ">the Orange Tree</h6>
                                                                <p class="mb-0">$30</p>
                                                            </div>
                                                            <div class="float-right font-size-24 text-danger"><i class="las la-trash-alt"></i></div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="d-flex align-items-center text-center">
                                                    <a class="right-ic btn btn-primary btn-block position-relative p-2" href="#" role="button">
                                                        <div class="dd-icon"><i class="las la-arrow-right mr-0"></i></div>
                                                        Checkout
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item iq-full-screen"><a href="#" class="" id="btnFullscreen"><i class="ri-fullscreen-line"></i></a></li>
                                <li class="caption-content">
                                    <a href="#" class="iq-user-toggle">
                                        <img src="https://templates.iqonic.design/prox/html/assets/images/user/1.jpg" class="img-fluid rounded" alt="user">
                                    </a>
                                    <div class="iq-user-dropdown">
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between align-items-center mb-0">
                                                <div class="header-title">
                                                    <h4 class="card-title mb-0">Profile</h4>
                                                </div>
                                                <div class="close-data text-right badge badge-primary cursor-pointer"><i class="ri-close-fill"></i></div>
                                            </div>
                                            <div class="data-scrollbar" data-scroll="2">
                                                <div class="card-body">
                                                    <div class="profile-header">
                                                        <div class="cover-container text-center">
                                                            <img src="https://templates.iqonic.design/prox/html/assets/images/user/1.jpg" alt="profile-bg" class="rounded img-fluid avatar-80">
                                                            <div class="profile-detail mt-3">
                                                                <h3>Barry Tech</h3>
                                                                <p class="mb-1">Web designer</p>
                                                            </div>
                                                            <a href="auth-sign-in.html" class="btn btn-primary">Sign Out</a>
                                                        </div>
                                                        <div class="profile-details my-4">
                                                            <a href="user-profile.html" class="iq-sub-card bg-primary-light rounded-small p-2">
                                                                <div class="media align-items-center">
                                                                    <div class="rounded iq-card-icon-small">
                                                                        <i class="ri-file-user-line"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0 ">My Profile</h6>
                                                                        <p class="mb-0 font-size-12">View personal profile details.</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="user-profile-edit.html" class="iq-sub-card bg-danger-light rounded-small p-2">
                                                                <div class="media align-items-center">
                                                                    <div class="rounded iq-card-icon-small">
                                                                        <i class="ri-profile-line"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0 ">Edit Profile</h6>
                                                                        <p class="mb-0 font-size-12">Modify your personal details.</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="user-account-setting.html" class="iq-sub-card bg-success-light rounded-small p-2">
                                                                <div class="media align-items-center">
                                                                    <div class="rounded iq-card-icon-small">
                                                                        <i class="ri-account-box-line"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0 ">Account settings</h6>
                                                                        <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            <a href="user-privacy-setting.html" class="iq-sub-card bg-info-light rounded-small p-2">
                                                                <div class="media align-items-center">
                                                                    <div class="rounded iq-card-icon-small">
                                                                        <i class="ri-lock-line"></i>
                                                                    </div>
                                                                    <div class="media-body ml-3">
                                                                        <h6 class="mb-0 ">Privacy Settings</h6>
                                                                        <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="personal-details">
                                                            <h5 class="card-title mb-3 mt-3">Personal Details</h5>
                                                            <div class="row align-items-center mb-2">
                                                                <div class="col-sm-6">
                                                                    <h6>Birthday</h6>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <p class="mb-0">3rd March</p>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mb-2">
                                                                <div class="col-sm-6">
                                                                    <h6>Address</h6>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <p class="mb-0">Landon</p>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mb-2">
                                                                <div class="col-sm-6">
                                                                    <h6>Phone</h6>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <p class="mb-0">(010)987 543 201</p>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mb-2">
                                                                <div class="col-sm-6">
                                                                    <h6>Email</h6>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <p class="mb-0">Barry@example.com</p>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mb-2">
                                                                <div class="col-sm-6">
                                                                    <h6>Twitter</h6>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <p class="mb-0">@Barry</p>
                                                                </div>
                                                            </div>
                                                            <div class="row align-items-center mb-2">
                                                                <div class="col-sm-6">
                                                                    <h6>Facebook</h6>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <p class="mb-0">@Barry_Tech</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="p-3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        @yield('content')
       
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="https://templates.iqonic.design/prox/html/backend/privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="https://templates.iqonic.design/prox/html/backend/terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    Copyright <span id="copyright">
                        <script>
                            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                        </script>
                    </span> @<a href="#">DNA Sound Studio</a> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- Backend Bundle JavaScript -->
    <script src="https://templates.iqonic.design/prox/html/assets/js/backend-bundle.min.js"></script>

    <!-- Flextree Javascript-->
    <script src="https://templates.iqonic.design/prox/html/assets/js/flex-tree.min.js"></script>
    <script src="https://templates.iqonic.design/prox/html/assets/js/tree.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="https://templates.iqonic.design/prox/html/assets/js/table-treeview.js"></script>

    <!-- Masonary Gallery Javascript -->
    <script src="https://templates.iqonic.design/prox/html/assets/js/masonry.pkgd.min.js"></script>
    <script src="https://templates.iqonic.design/prox/html/assets/js/imagesloaded.pkgd.min.js"></script>

    <!-- Mapbox Javascript -->
    <script src="https://templates.iqonic.design/prox/html/assets/js/mapbox-gl.js"></script>
    <script src="https://templates.iqonic.design/prox/html/assets/js/mapbox.js"></script>

    <!-- Fullcalender Javascript -->
    <script src='https://templates.iqonic.design/prox/html/assets/vendor/fullcalendar/core/main.js'></script>
    <script src='https://templates.iqonic.design/prox/html/assets/vendor/fullcalendar/daygrid/main.js'></script>
    <script src='https://templates.iqonic.design/prox/html/assets/vendor/fullcalendar/timegrid/main.js'></script>
    <script src='https://templates.iqonic.design/prox/html/assets/vendor/fullcalendar/list/main.js'></script>

    <!-- SweetAlert JavaScript -->
    <script src="https://templates.iqonic.design/prox/html/assets/js/sweetalert.js"></script>

    <!-- Vectoe Map JavaScript -->
    <script src="https://templates.iqonic.design/prox/html/assets/js/vector-map-custom.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="https://templates.iqonic.design/prox/html/assets/js/customizer.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="https://templates.iqonic.design/prox/html/assets/js/chart-custom.js"></script>

    <!-- slider JavaScript -->
    <script src="https://templates.iqonic.design/prox/html/assets/js/slider.js"></script>

    <!-- app JavaScript -->
    <script src="https://templates.iqonic.design/prox/html/assets/js/app.js"></script>

    @yield('script')
</body>

<!-- Mirrored from templates.iqonic.design/prox/html/app/music-home.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jul 2024 17:08:53 GMT -->

</html>