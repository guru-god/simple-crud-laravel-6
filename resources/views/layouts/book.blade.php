@extends('layouts.main')

@section('css')
    <!-- Libs -->
    <link rel="stylesheet" href="{{asset('assets/libs/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/libs/datatables/datatables.css')}}">
@endsection

@section('content')
    <!-- [ Layout container ] Start -->
    <div class="layout-container">
        <!-- [ Layout navbar ( Header ) ] Start -->
        <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-dark container-p-x" id="layout-navbar">

            <!-- Brand demo (see assets/css/demo/demo.css) -->
            <a href="index.html" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
                        <span class="app-brand-logo demo">
                            <img src="{{asset('assets/img/logo-dark.png')}}" alt="Brand Logo" class="img-fluid">
                        </span>
                <span class="app-brand-text demo font-weight-normal ml-2">Empire</span>
            </a>

            <!-- Sidenav toggle (see assets/css/demo/demo.css) -->
            <div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
                <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:">
                    <i class="ion ion-md-menu text-large align-middle"></i>
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="layout-navbar-collapse">
                <!-- Divider -->
                <hr class="d-lg-none w-100 my-2">

                <div class="navbar-nav align-items-lg-center">
                    <!-- Search -->
                    <label class="nav-item navbar-text navbar-search-box p-0 active">
                        <i class="feather icon-search navbar-icon align-middle"></i>
                        <span class="navbar-search-input pl-2">
                                    <input type="text" class="form-control navbar-text mx-2" placeholder="Search...">
                                </span>
                    </label>
                </div>

                <div class="navbar-nav align-items-lg-center ml-auto">
                    <div class="demo-navbar-notifications nav-item dropdown mr-lg-3">
                        <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                            <i class="feather icon-bell navbar-icon align-middle"></i>
                            <span class="badge badge-danger badge-dot indicator"></span>
                            <span class="d-lg-none align-middle">&nbsp; Notifications</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="bg-primary text-center text-white font-weight-bold p-3">
                                4 New Notifications
                            </div>
                            <div class="list-group list-group-flush">
                                <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <div class="ui-icon ui-icon-sm feather icon-home bg-secondary border-0 text-white"></div>
                                    <div class="media-body line-height-condenced ml-3">
                                        <div class="text-dark">Login from 192.168.1.1</div>
                                        <div class="text-light small mt-1">
                                            Aliquam ex eros, imperdiet vulputate hendrerit et.
                                        </div>
                                        <div class="text-light small mt-1">12h ago</div>
                                    </div>
                                </a>

                                <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <div class="ui-icon ui-icon-sm feather icon-user-plus bg-primary border-0 text-white"></div>
                                    <div class="media-body line-height-condenced ml-3">
                                        <div class="text-dark">You have
                                            <strong>4</strong> new followers</div>
                                        <div class="text-light small mt-1">
                                            Phasellus nunc nisl, posuere cursus pretium nec, dictum vehicula tellus.
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <div class="ui-icon ui-icon-sm feather icon-power bg-danger border-0 text-white"></div>
                                    <div class="media-body line-height-condenced ml-3">
                                        <div class="text-dark">Server restarted</div>
                                        <div class="text-light small mt-1">
                                            19h ago
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <div class="ui-icon ui-icon-sm feather icon-alert-triangle bg-warning border-0 text-dark"></div>
                                    <div class="media-body line-height-condenced ml-3">
                                        <div class="text-dark">99% server load</div>
                                        <div class="text-light small mt-1">
                                            Etiam nec fringilla magna. Donec mi metus.
                                        </div>
                                        <div class="text-light small mt-1">
                                            20h ago
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all notifications</a>
                        </div>
                    </div>

                    <div class="demo-navbar-messages nav-item dropdown mr-lg-3">
                        <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                            <i class="feather icon-mail navbar-icon align-middle"></i>
                            <span class="badge badge-success badge-dot indicator"></span>
                            <span class="d-lg-none align-middle">&nbsp; Messages</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="bg-primary text-center text-white font-weight-bold p-3">
                                4 New Messages
                            </div>
                            <div class="list-group list-group-flush">
                                <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <img src="{{asset('assets/img/avatars/6-small.png')}}" class="d-block ui-w-40 rounded-circle" alt>
                                    <div class="media-body ml-3">
                                        <div class="text-dark line-height-condenced">Lorem ipsum dolor consectetuer elit.</div>
                                        <div class="text-light small mt-1">
                                            Josephin Doe &nbsp;·&nbsp; 58m ago
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <img src="{{asset('assets/img/avatars/4-small.png')}}" class="d-block ui-w-40 rounded-circle" alt>
                                    <div class="media-body ml-3">
                                        <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet, consectetuer.</div>
                                        <div class="text-light small mt-1">
                                            Lary Doe &nbsp;·&nbsp; 1h ago
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <img src="{{asset('assets/img/avatars/5-small.png')}}" class="d-block ui-w-40 rounded-circle" alt>
                                    <div class="media-body ml-3">

                                        <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet elit.</div>
                                        <div class="text-light small mt-1">
                                            Alice &nbsp;·&nbsp; 2h ago
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <img src="{{asset('assets/img/avatars/11-small.png')}}" class="d-block ui-w-40 rounded-circle" alt>
                                    <div class="media-body ml-3">
                                        <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet consectetuer amet elit dolor sit.</div>
                                        <div class="text-light small mt-1">
                                            Suzen &nbsp;·&nbsp; 5h ago
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all messages</a>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
                    <div class="demo-navbar-user nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                    <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                                        <img src="{{asset('assets/img/avatars/1.png')}}" alt class="d-block ui-w-30 rounded-circle">
                                        <span class="px-1 mr-lg-2 ml-2 ml-lg-0">{{Auth::user()->nickname}}</span>
                                    </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:" class="dropdown-item">
                                <i class="feather icon-user text-muted"></i> &nbsp; My profile</a>
                            <a href="javascript:" class="dropdown-item">
                                <i class="feather icon-mail text-muted"></i> &nbsp; Messages</a>
                            <a href="javascript:" class="dropdown-item">
                                <i class="feather icon-settings text-muted"></i> &nbsp; Account settings</a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                                <i class="feather icon-power text-danger"></i> &nbsp; Log Out</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- [ Layout navbar ( Header ) ] End -->
        <!-- [ Layout content ] Start -->
        <div class="layout-content">
            <!-- [ content ] Start -->
            <div class="container-fluid flex-grow-1 container-p-y">
                <h4 class="font-weight-bold py-3 mb-0">Book</h4>
                <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">School</a></li>
                        <li class="breadcrumb-item active"><a href="#!">Book</a></li>
                    </ol>
                </div>
                <div class="row">
                    <!-- subscribe start -->
                    @yield('book-content')
                    <!-- subscribe end -->
                </div>
            </div>
            <!-- [ content ] End -->
            <!-- [ Layout footer ] Start -->
            <nav class="layout-footer footer footer-light">
                <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
                    <div class="pt-3">
                        <span class="float-md-right d-none d-lg-block">&copy; Exclusive on Themeforest | Hand-crafted &amp; Made with <i class="fas fa-heart text-danger mr-2"></i></span>
                    </div>
                    <div>
                        <a href="javascript:" class="footer-link pt-3">About Us</a>
                        <a href="javascript:" class="footer-link pt-3 ml-4">Help</a>
                        <a href="javascript:" class="footer-link pt-3 ml-4">Contact</a>
                        <a href="javascript:" class="footer-link pt-3 ml-4">Terms &amp; Conditions</a>
                    </div>
                </div>
            </nav>
            <!-- [ Layout footer ] End -->
        </div>
        <!-- [ Layout content ] Start -->
    </div>
    <!-- [ Layout container ] End -->
@endsection

@section('js')
    <!-- Libs -->
    <script src="{{asset('assets/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assets/libs/datatables/datatables.js')}}"></script>
    <!-- Demo -->
    <script src="{{asset('assets/js/demo.js')}}"></script>
    <script>
        // DataTable start
        $('#report-table').DataTable();
        // DataTable end
    </script>
@endsection