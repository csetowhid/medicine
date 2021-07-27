<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Medjestic</title>
    <!-- Iconic Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backend/vendors/iconic-fonts/flat-icons/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/iconic-fonts/cryptocoins/cryptocoins.css')}}">
    <link rel="stylesheet" href="{{asset('backend/vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- jQuery UI -->
    <link href="{{asset('backend/assets/css/jquery-ui.min.css')}}" rel="stylesheet">
    <!-- Page Specific CSS (Slick Slider.css) -->
    <link href="{{asset('backend/assets/css/slick.css')}}" rel="stylesheet">
    <!-- medjestic styles -->
    <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet">

    <!-- Page Specific CSS (Morris Charts.css) -->
    <link href="{{asset('backend/assets/css/morris.css')}}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
<!-- Setting Panel -->
<div class="ms-toggler ms-settings-toggle ms-d-block-lg">
    <i class="flaticon-gear"></i>
</div>
<div class="ms-settings-panel ms-d-block-lg">
    <div class="row">
        <div class="col-xl-4 col-md-4">
            <h4 class="section-title">Customize</h4>
            <div>
                <label class="ms-switch">
                    <input type="checkbox" id="dark-mode">
                    <span class="ms-switch-slider round"></span>
                </label>
                <span> Dark Mode </span>
            </div>

        </div>
        <div class="col-xl-4 col-md-4">
            <h4 class="section-title">Keyboard Shortcuts</h4>
            <p class="ms-directions mb-0"><code>Esc</code> Close Quick Bar</p>
            <p class="ms-directions mb-0"><code>Alt + (1 -> 6)</code> Open Quick Bar Tab</p>
            <p class="ms-directions mb-0"><code>Alt + Q</code> Enable Quick Bar Configure Mode</p>
        </div>
    </div>
</div>
<!-- Preloader -->
<div id="preloader-wrap">
    <div class="spinner spinner-8">
        <div class="ms-circle1 ms-child"></div>
        <div class="ms-circle2 ms-child"></div>
        <div class="ms-circle3 ms-child"></div>
        <div class="ms-circle4 ms-child"></div>
        <div class="ms-circle5 ms-child"></div>
        <div class="ms-circle6 ms-child"></div>
        <div class="ms-circle7 ms-child"></div>
        <div class="ms-circle8 ms-child"></div>
        <div class="ms-circle9 ms-child"></div>
        <div class="ms-circle10 ms-child"></div>
        <div class="ms-circle11 ms-child"></div>
        <div class="ms-circle12 ms-child"></div>
    </div>
</div>
<!-- Overlays -->
<div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
<div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
<!-- Sidebar Navigation Left -->
<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
        <a class="pl-0 ml-0 text-center" href="index-2.html"> <img src="{{asset('backend/assets/img/medjestic-logo-216x62.png')}}" alt="logo"> </a>
        <a href="#" class="text-center ms-logo-img-link"> <img src="{{asset('backend/assets/img/dashboard/doctor-3.jpg')}}" alt="logo"></a>
        <h5 class="text-center text-white mt-2">Dr.Samuel</h5>
        <h6 class="text-center text-white mb-3">Admin</h6>
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
            </a>
            <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
                <li> <a href="index-2.html">Medjestic</a> </li>
            </ul>
        </li>
        <!-- /Dashboard -->
        <!-- Doctor -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#doctor" aria-expanded="false" aria-controls="doctor">
                <span><i class="fas fa-stethoscope"></i>Doctor</span>
            </a>
            <ul id="doctor" class="collapse" aria-labelledby="doctor" data-parent="#side-nav-accordion">
                <li> <a href="pages/doctor/add-doctor.html">Add Doctor</a> </li>
                <li> <a href="pages/doctor/doctor-list.html">Doctor List</a> </li>
            </ul>
        </li>
        <!-- Doctor -->
        <!-- Patient -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#patient" aria-expanded="false" aria-controls="patient">
                <span><i class="fas fa-user"></i>Patient</span>
            </a>
            <ul id="patient" class="collapse" aria-labelledby="patient" data-parent="#side-nav-accordion">
                <li> <a href="pages/patient/add-patient.html">Add Patient</a> </li>
                <li> <a href="pages/patient/patient-list.html">Patient List</a> </li>
            </ul>
        </li>
        <!-- /Patient -->
        <!-- Department -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#department" aria-expanded="false" aria-controls="department">
                <span><i class="fas fa-sitemap"></i>Department</span>
            </a>
            <ul id="department" class="collapse" aria-labelledby="department" data-parent="#side-nav-accordion">
                <li> <a href="pages/department/add-department.html">Add Department</a> </li>
                <li> <a href="pages/department/department-list.html">Department List</a> </li>
            </ul>
        </li>
        <!-- /Department -->
        <!-- Schedule -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#schedule" aria-expanded="false" aria-controls="schedule">
                <span><i class="fas fa-list-alt"></i>Doctor Schedule</span>
            </a>
            <ul id="schedule" class="collapse" aria-labelledby="schedule" data-parent="#side-nav-accordion">
                <li> <a href="pages/doctor-schedule/add-schedule.html">Add Schedule</a> </li>
                <li> <a href="pages/doctor-schedule/schedule-list.html">Schedule List</a> </li>
            </ul>
        </li>
        <!-- /Schedule -->
        <!-- Appointment -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#appointment" aria-expanded="false" aria-controls="appointment">
                <span><i class="far fa-check-square"></i>Appointment</span>
            </a>
            <ul id="appointment" class="collapse" aria-labelledby="appointment" data-parent="#side-nav-accordion">
                <li> <a href="pages/appointment/add-appointment.html">Add Appointment</a> </li>
                <li> <a href="pages/appointment/appointment-list.html">Appointment List</a> </li>
            </ul>
        </li>
        <!-- /Appointment -->
        <!-- Payment -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#payment" aria-expanded="false" aria-controls="payment">
                <span><i class="fas fa-credit-card"></i>Payment</span>
            </a>
            <ul id="payment" class="collapse" aria-labelledby="payment" data-parent="#side-nav-accordion">
                <li> <a href="pages/payment/add-payment.html">Add Payment</a> </li>
                <li> <a href="pages/payment/payment-list.html">Payment List</a> </li>
                <li> <a href="pages/payment/payment-invoice.html">Payment Invoice</a> </li>
            </ul>
        </li>
        <!-- /Payment -->
        <!-- Report -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#report" aria-expanded="false" aria-controls="report">
                <span><i class="fas fa-file-alt"></i>Report</span>
            </a>
            <ul id="report" class="collapse" aria-labelledby="report" data-parent="#side-nav-accordion">
                <li> <a href="pages/report/patient-report.html">Patient Wise Report</a> </li>
                <li> <a href="pages/report/doctor-report.html">Doctor Wise Report</a> </li>
                <li> <a href="pages/report/total-report.html">Total Report</a> </li>
            </ul>
        </li>
        <!-- /Report -->
        <!-- Human Resource -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#human-resource" aria-expanded="false" aria-controls="human-resource">
                <span><i class="far fa-user-circle"></i>Human Resource</span>
            </a>
            <ul id="human-resource" class="collapse" aria-labelledby="human-resource" data-parent="#side-nav-accordion">
                <li> <a href="pages/human-resource/add-employee.html">Add Employee</a> </li>
                <li> <a href="pages/human-resource/employee-list.html">Employee List</a> </li>
                <li> <a href="pages/human-resource/add-nurse.html">Add Nurse</a> </li>
                <li> <a href="pages/human-resource/nurse-list.html">Nurse List</a> </li>
                <li> <a href="pages/human-resource/add-pharmacist.html">Add Pharmacist</a> </li>
                <li> <a href="pages/human-resource/pharmacist-list.html">Pharmacist List</a> </li>
                <li> <a href="pages/human-resource/add-representative.html">Add Representative</a> </li>
                <li> <a href="pages/human-resource/representative-list.html">Representative List</a> </li>
            </ul>
        </li>
        <!-- /Human Resource -->
        <!-- Bed -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#bed" aria-expanded="false" aria-controls="bed">
                <span><i class="fas fa-bed"></i>Bed Manager</span>
            </a>
            <ul id="bed" class="collapse" aria-labelledby="bed" data-parent="#side-nav-accordion">
                <li> <a href="pages/bed-manager/add-bed.html">Add Bed</a> </li>
                <li> <a href="pages/bed-manager/bed-list.html">Bed List</a> </li>
            </ul>
        </li>
        <!-- /Bed-->
        <!-- Notice -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#notice" aria-expanded="false" aria-controls="notice">
                <span><i class="far fa-file-alt"></i>Notice</span>
            </a>
            <ul id="notice" class="collapse" aria-labelledby="notice" data-parent="#side-nav-accordion">
                <li> <a href="pages/notice/add-notice.html">Add Notice</a> </li>
                <li> <a href="pages/notice/notice-list.html">Notice List</a> </li>
            </ul>
        </li>
        <!-- /Notice -->
        <li class="menu-item">
            <a href="pages/widgets.html">
                <span><i class="material-icons fs-16">widgets</i>Widgets</span>
            </a>
        </li>
        <!-- Basic UI Elements -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#basic-elements" aria-expanded="false" aria-controls="basic-elements">
                <span><i class="material-icons fs-16">filter_list</i>Basic UI Elements</span>
            </a>
            <ul id="basic-elements" class="collapse" aria-labelledby="basic-elements" data-parent="#side-nav-accordion">
                <li> <a href="pages/ui-basic/accordions.html">Accordions</a> </li>
                <li> <a href="pages/ui-basic/alerts.html">Alerts</a> </li>
                <li> <a href="pages/ui-basic/buttons.html">Buttons</a> </li>
                <li> <a href="pages/ui-basic/breadcrumbs.html">Breadcrumbs</a> </li>
                <li> <a href="pages/ui-basic/badges.html">Badges</a> </li>
                <li> <a href="pages/ui-basic/cards.html">Cards</a> </li>
                <li> <a href="pages/ui-basic/progress-bars.html">Progress Bars</a> </li>
                <li> <a href="pages/ui-basic/preloaders.html">Pre-loaders</a> </li>
                <li> <a href="pages/ui-basic/pagination.html">Pagination</a> </li>
                <li> <a href="pages/ui-basic/tabs.html">Tabs</a> </li>
                <li> <a href="pages/ui-basic/typography.html">Typography</a> </li>
            </ul>
        </li>
        <!-- /Basic UI Elements -->
        <!-- Advanced UI Elements -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#advanced-elements" aria-expanded="false" aria-controls="advanced-elements">
                <span><i class="material-icons fs-16">code</i>Advanced UI Elements</span>
            </a>
            <ul id="advanced-elements" class="collapse" aria-labelledby="advanced-elements" data-parent="#side-nav-accordion">
                <li> <a href="pages/ui-advanced/draggables.html">Draggables</a> </li>
                <li> <a href="pages/ui-advanced/sliders.html">Sliders</a> </li>
                <li> <a href="pages/ui-advanced/modals.html">Modals</a> </li>
                <li> <a href="pages/ui-advanced/rating.html">Rating</a> </li>
                <li> <a href="pages/ui-advanced/tour.html">Tour</a> </li>
                <li> <a href="pages/ui-advanced/cropper.html">Cropper</a> </li>
                <li> <a href="pages/ui-advanced/range-slider.html">Range Slider</a> </li>
            </ul>
        </li>
        <!-- /Advanced UI Elements -->
        <li class="menu-item">
            <a href="pages/animation.html">
                <span><i class="material-icons fs-16">format_paint</i>Animations</span>
            </a>
        </li>
        <!-- Form Elements -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <span><i class="material-icons fs-16">input</i>Form Elements</span>
            </a>
            <ul id="form-elements" class="collapse" aria-labelledby="form-elements" data-parent="#side-nav-accordion">
                <li> <a href="pages/form/form-elements.html">Form Elements</a> </li>
                <li> <a href="pages/form/form-layout.html">Form Layouts</a> </li>
                <li> <a href="pages/form/form-validation.html">Form Validation</a> </li>
                <li> <a href="pages/form/form-wizard.html">Form Wizard</a> </li>
            </ul>
        </li>
        <!-- /Form Elements -->
        <!-- Charts -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#charts" aria-expanded="false" aria-controls="charts">
                <span><i class="material-icons fs-16">equalizer</i>Charts</span>
            </a>
            <ul id="charts" class="collapse" aria-labelledby="charts" data-parent="#side-nav-accordion">
                <li> <a href="pages/charts/chartjs.html">Chart JS</a> </li>
                <li> <a href="pages/charts/morris-charts.html">Morris Chart</a> </li>
            </ul>
        </li>
        <!-- /Charts -->
        <!-- Tables -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#tables" aria-expanded="false" aria-controls="tables">
                <span><i class="material-icons fs-16">tune</i>Tables</span>
            </a>
            <ul id="tables" class="collapse" aria-labelledby="tables" data-parent="#side-nav-accordion">
                <li> <a href="pages/tables/basic-tables.html">Basic Tables</a> </li>
                <li> <a href="pages/tables/data-tables.html">Data tables</a> </li>
            </ul>
        </li>
        <!-- /Tables -->
        <!-- Popups -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#popups" aria-expanded="false" aria-controls="popups">
                <span><i class="material-icons fs-16">message</i>Popups</span>
            </a>
            <ul id="popups" class="collapse" aria-labelledby="popups" data-parent="#side-nav-accordion">
                <li> <a href="pages/popups/sweet-alerts.html">Sweet Alerts</a> </li>
                <li> <a href="pages/popups/toast.html">Toast</a> </li>
            </ul>
        </li>
        <!-- /Popups -->
        <!-- Icons -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#icons" aria-expanded="false" aria-controls="icons">
                <span><i class="material-icons fs-16">border_color</i>Icons</span>
            </a>
            <ul id="icons" class="collapse" aria-labelledby="icons" data-parent="#side-nav-accordion">
                <li> <a href="pages/icons/fontawesome.html">Fontawesome</a> </li>
                <li> <a href="pages/icons/flaticons.html">Flaticons</a> </li>
                <li> <a href="pages/icons/materialize.html">Materialize</a> </li>
            </ul>
        </li>
        <!-- /Icons -->
        <!-- Maps -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#maps" aria-expanded="false" aria-controls="maps">
                <span><i class="material-icons fs-16">map</i>Maps</span>
            </a>
            <ul id="maps" class="collapse" aria-labelledby="maps" data-parent="#side-nav-accordion">
                <li> <a href="pages/maps/google-maps.html">Google Maps</a> </li>
                <li> <a href="pages/maps/vector-maps.html">Vector Maps</a> </li>
            </ul>
        </li>
        <!-- /Maps -->
        <!-- Pages -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages">
                <span><i class="material-icons fs-16">insert_drive_file</i>Pages</span>
            </a>
            <ul id="pages" class="collapse" aria-labelledby="pages" data-parent="#side-nav-accordion">
                <li class="menu-item">
                    <a href="#" class="has-chevron" data-toggle="collapse" data-target="#authentication" aria-expanded="false" aria-controls="authentication">Authentication</a>
                    <ul id="authentication" class="collapse" aria-labelledby="authentication" data-parent="#pages">
                        <li> <a href="pages/prebuilt-pages/default-login.html">Default Login</a> </li>
                        <li> <a href="pages/prebuilt-pages/modal-login.html">Modal Login</a> </li>
                        <li> <a href="pages/prebuilt-pages/default-register.html">Default Registration</a> </li>
                        <li> <a href="pages/prebuilt-pages/modal-register.html">Modal Registration</a> </li>
                        <li> <a href="pages/prebuilt-pages/lock-screen.html">Lock Screen</a> </li>
                    </ul>
                </li>
                <li> <a href="pages/prebuilt-pages/coming-soon.html">Coming Soon</a> </li>
                <li> <a href="pages/prebuilt-pages/error.html">Error Page</a> </li>
                <li class="menu-item"> <a href="pages/prebuilt-pages/faq.html"> FAQ </a> </li>
                <li class="menu-item"> <a href="pages/prebuilt-pages/portfolio.html"> Portfolio </a> </li>
                <li class="menu-item"> <a href="pages/prebuilt-pages/user-profile.html"> User Profile </a> </li>
                <li class="menu-item"> <a href="pages/prebuilt-pages/invoice.html"> Invoice </a> </li>
            </ul>
        </li>
        <!-- /Pages -->
        <!-- Bonus Pages -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#bonus" aria-expanded="false">
                <span><i class="material-icons fs-16">dashboard</i>Bonus Pages </span>
            </a>
            <ul id="bonus" class="collapse" data-parent="#side-nav-accordion">
                <li> <a href="pages/dashboard/web-analytics.html"> Web Analytics </a> </li>
                <li> <a href="pages/dashboard/social-media.html">Social Media Management</a> </li>
                <li> <a href="pages/dashboard/project-management.html">Department Management</a> </li>
                <li> <a href="pages/dashboard/client-management.html">Patient Management</a> </li>
            </ul>
        </li>
        <!-- /Bonus Pages -->
        <!-- Apps -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#apps" aria-expanded="false" aria-controls="apps">
                <span><i class="material-icons fs-16">phone_iphone</i>Apps</span>
            </a>
            <ul id="apps" class="collapse" aria-labelledby="apps" data-parent="#side-nav-accordion">
                <li> <a href="pages/apps/chat.html">Chat</a> </li>
                <li> <a href="pages/apps/email.html">Email</a> </li>
                <li> <a href="pages/apps/to-do-list.html">To-do List</a> </li>
            </ul>
        </li>
        <!-- /Apps -->
    </ul>
</aside>
<!-- Sidebar Right -->
<aside id="ms-recent-activity" class="side-nav fixed ms-aside-right ms-scrollable">
    <div class="ms-aside-header">
        <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-3" role="tablist">
            <li role="presentation" class="fs-12"><a href="#activityLog" aria-controls="activityLog" class="active" role="tab" data-toggle="tab"> Activity Log</a></li>
            <li role="presentation" class="fs-12"><a href="#recentPosts" aria-controls="recentPosts" role="tab" data-toggle="tab"> Settings </a></li>
            <li><button type="button" class="close ms-toggler text-center" data-target="#ms-recent-activity" data-toggle="slideRight"><span aria-hidden="true">&times;</span></button></li>
        </ul>
    </div>
    <div class="ms-aside-body">
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active fade show" id="activityLog">
                <ul class="ms-activity-log">
                    <li>
                        <div class="ms-btn-icon btn-pill icon btn-light">
                            <i class="flaticon-gear"></i>
                        </div>
                        <h6>Update 1.0.0 Pushed</h6>
                        <span> <i class="material-icons">event</i>1 January, 2019</span>
                        <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                    </li>
                    <li>
                        <div class="ms-btn-icon btn-pill icon btn-success">
                            <i class="flaticon-tick-inside-circle"></i>
                        </div>
                        <h6>Profile Updated</h6>
                        <span> <i class="material-icons">event</i>4 March, 2018</span>
                        <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                    </li>
                    <li>
                        <div class="ms-btn-icon btn-pill icon btn-warning">
                            <i class="flaticon-alert-1"></i>
                        </div>
                        <h6>Your payment is due</h6>
                        <span> <i class="material-icons">event</i>1 January, 2019</span>
                        <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                    </li>
                    <li>
                        <div class="ms-btn-icon btn-pill icon btn-danger">
                            <i class="flaticon-alert"></i>
                        </div>
                        <h6>Database Error</h6>
                        <span> <i class="material-icons">event</i>4 March, 2018</span>
                        <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                    </li>
                    <li>
                        <div class="ms-btn-icon btn-pill icon btn-info">
                            <i class="flaticon-information"></i>
                        </div>
                        <h6>Checkout what's Trending</h6>
                        <span> <i class="material-icons">event</i>1 January, 2019</span>
                        <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                    </li>
                    <li>
                        <div class="ms-btn-icon btn-pill icon btn-secondary">
                            <i class="flaticon-diamond"></i>
                        </div>
                        <h6>Your Dashboard is ready</h6>
                        <span> <i class="material-icons">event</i>4 March, 2018</span>
                        <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                    </li>
                </ul>
                <a href="#" class="btn btn-primary d-block"> View All </a>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="recentPosts">
                <h6>General Settings</h6>
                <div class="ms-form-group">
                    <span class="ms-option-name fs-14">Location Tracking</span>
                    <label class="ms-switch float-right">
                        <input type="checkbox">
                        <span class="ms-switch-slider round"></span>
                    </label>
                </div>
                <div class="ms-form-group">
                    <span class="ms-option-name fs-14">Allow Notifications</span>
                    <label class="ms-switch float-right">
                        <input type="checkbox">
                        <span class="ms-switch-slider round"></span>
                    </label>
                </div>
                <div class="ms-form-group">
                    <span class="ms-option-name fs-14">Allow Popups</span>
                    <label class="ms-switch float-right">
                        <input type="checkbox" checked>
                        <span class="ms-switch-slider round"></span>
                    </label>
                </div>
                <h6>Log Settings</h6>
                <div class="ms-form-group">
                    <span class="ms-option-name fs-14">Enable Logging</span>
                    <label class="ms-switch float-right">
                        <input type="checkbox" checked>
                        <span class="ms-switch-slider round"></span>
                    </label>
                </div>
                <div class="ms-form-group">
                    <span class="ms-option-name fs-14">Audit Logs</span>
                    <label class="ms-switch float-right">
                        <input type="checkbox">
                        <span class="ms-switch-slider round"></span>
                    </label>
                </div>
                <div class="ms-form-group">
                    <span class="ms-option-name fs-14">Error Logs</span>
                    <label class="ms-switch float-right">
                        <input type="checkbox" checked>
                        <span class="ms-switch-slider round"></span>
                    </label>
                </div>
                <h6>Advanced Settings</h6>
                <div class="ms-form-group">
                    <span class="ms-option-name fs-14">Enable Logging</span>
                    <label class="ms-switch float-right">
                        <input type="checkbox" checked>
                        <span class="ms-switch-slider round"></span>
                    </label>
                </div>
                <div class="ms-form-group">
                    <span class="ms-option-name fs-14">Audit Logs</span>
                    <label class="ms-switch float-right">
                        <input type="checkbox">
                        <span class="ms-switch-slider round"></span>
                    </label>
                </div>
                <div class="ms-form-group">
                    <span class="ms-option-name fs-14">Error Logs</span>
                    <label class="ms-switch float-right">
                        <input type="checkbox" checked>
                        <span class="ms-switch-slider round"></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</aside>
<!-- Main Content -->
<main class="body-content">
    <!-- Navigation Bar -->
    <nav class="navbar ms-navbar">
        <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
            <span class="ms-toggler-bar bg-white"></span>
            <span class="ms-toggler-bar bg-white"></span>
            <span class="ms-toggler-bar bg-white"></span>
        </div>
        <div class="logo-sn logo-sm ms-d-block-sm">
            <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index-2.html"><img src="{{asset('backend/assets/img/medjestic-logo-84x41.png')}}" alt="logo"> </a>
        </div>
        <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">

            <li class="ms-nav-item  ms-d-none">
                <a href="#mymodal" class="text-white" data-toggle="modal"><i class="flaticon-spreadsheet mr-2"></i> Make an appointment</a>
            </li>

            <li class="ms-nav-item ms-d-none">
                <a href="#prescription" class="text-white" data-toggle="modal"><i class="flaticon-pencil mr-2"></i> Write a prescription</a>
            </li>

            <li class="ms-nav-item ms-d-none">
                <a href="#report1" class="text-white" data-toggle="modal"><i class="flaticon-list mr-2"></i> Generate Report</a>
            </li>

            <li class="ms-nav-item dropdown">
                <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-bell"></i></a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationDropdown">
                    <li class="dropdown-menu-header">
                        <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Notifications</span></h6>
                        <span class="badge badge-pill badge-info">4 New</span>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="ms-scrollable ms-dropdown-list">
                        <a class="media p-2" href="#">
                            <div class="media-body">
                                <span>12 ways to improve your crypto dashboard</span>
                                <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 30 seconds ago</p>
                            </div>
                        </a>
                        <a class="media p-2" href="#">
                            <div class="media-body">
                                <span>You have newly registered users</span>
                                <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 45 minutes ago</p>
                            </div>
                        </a>
                        <a class="media p-2" href="#">
                            <div class="media-body">
                                <span>Your account was logged in from an unauthorized IP</span>
                                <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 2 hours ago</p>
                            </div>
                        </a>
                        <a class="media p-2" href="#">
                            <div class="media-body">
                                <span>An application form has been submitted</span>
                                <p class="fs-10 my-1 text-disabled"><i class="material-icons">access_time</i> 1 day ago</p>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-menu-footer text-center">
                        <a href="#">View all Notifications</a>
                    </li>
                </ul>
            </li>
            <li class="ms-nav-item ms-nav-user dropdown">
                <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="ms-user-img ms-img-round float-right" src="{{asset('backend/assets/img/dashboard/doctor-3.jpg')}}" alt="people"> </a>
                <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
                    <li class="dropdown-menu-header">
                        <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome, Dr Samuel Deo</span></h6>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="ms-dropdown-list">
                        <a class="media fs-14 p-2" href="pages/prebuilt-pages/user-profile.html"> <span><i class="flaticon-user mr-2"></i> Profile</span> </a>
                        <a class="media fs-14 p-2" href="pages/apps/email.html"> <span><i class="flaticon-mail mr-2"></i> Inbox</span> <span class="badge badge-pill badge-info">3</span> </a>
                        <a class="media fs-14 p-2" href="pages/prebuilt-pages/user-profile.html"> <span><i class="flaticon-gear mr-2"></i> Account Settings</span> </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-menu-footer">
                        <a class="media fs-14 p-2" href="pages/prebuilt-pages/lock-screen.html"> <span><i class="flaticon-security mr-2"></i> Lock</span> </a>
                    </li>
                    <!------------Logout--------------->
                    <li class="dropdown-menu-footer">
                        <a class="media fs-14 p-2" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span> </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                    <!------------Logout--------------->
                </ul>
            </li>
        </ul>
        <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
            <span class="ms-toggler-bar bg-white"></span>
            <span class="ms-toggler-bar bg-white"></span>
            <span class="ms-toggler-bar bg-white"></span>
        </div>
    </nav>
    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
        <div class="row">
            <!-- Notifications Widgets -->

            <div class="col-xl-3 col-md-6 col-sm-6">
                <a href="#">
                    <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6>Doctors</h6>
                                <p class="ms-card-change"> 4567</p>
                            </div>
                        </div>
                        <i class="fas fa-stethoscope ms-icon-mr"></i>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
                <a href="#">
                    <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6>Nurses</h6>
                                <p class="ms-card-change"> 4567</p>
                            </div>
                        </div>
                        <i class="fas fa-user-plus ms-icon-mr"></i>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
                <a href="#">
                    <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6 class="bold">Patients</h6>
                                <p class="ms-card-change"> 4567</p>
                            </div>
                        </div>
                        <i class="fa fa-wheelchair ms-icon-mr"></i>
                    </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6">
                <a href="#">
                    <div class="ms-card card-gradient-custom ms-widget ms-infographics-widget ms-p-relative">
                        <div class="ms-card-body media">
                            <div class="media-body">
                                <h6 class="bold">Pharmacists</h6>
                                <p class="ms-card-change"> 4567</p>
                            </div>
                        </div>
                        <i class="fas fa-briefcase-medical ms-icon-mr"></i>
                    </div>
                </a>
            </div>


            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
                    <div class="ms-card-body media">
                        <div class="media-body">
                            <h6 class="bold">Appointments</h6>
                            <h3><strong>3,973</strong></h3>
                        </div>
                    </div>
                    <canvas id="line-chart-2"></canvas>
                </div>

                <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
                    <div class="ms-card-body media">
                        <div class="media-body">
                            <h6>New Patients</h6>
                            <h3><strong>593</strong></h3>
                        </div>
                    </div>
                    <canvas id="line-chart-3"></canvas>
                </div>

                <div class="ms-card ms-widget has-graph-full-width ms-infographics-widget">
                    <div class="ms-card-body media">
                        <div class="media-body">
                            <h6 class="bold">Hospital Earning</h6>
                            <h3><strong>3,973</strong></h3>
                        </div>
                    </div>
                    <canvas id="line-chart-4"></canvas>
                </div>

            </div>

            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="ms-panel ms-panel-fh">
                    <div class="ms-panel-body calendar-wedgit">
                        <div id="calendar"></div>
                    </div>

                </div>
            </div>

            <div class="col-xl-4 col-md-12">

                <div class="ms-card ms-widget ms-profile-widget ms-card-fh br-0">
                    <div class="ms-card-img">
                        <img src="{{asset('backend/assets/img/portfolio/gallery-4-760x260.jpg')}}" alt="card_img">
                    </div>
                    <img src="{{asset('backend/assets/img/dashboard/doctor-1.jpg')}}" class="ms-img-large ms-img-round ms-user-img" alt="people">
                    <div class="ms-card-body">
                        <h2>Anny Farisha</h2>
                        <span>Doctor</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <button type="button" class="btn btn-primary btn-sm" name="button"><i class="material-icons">person_add</i> Assign</button>
                        <ul class="ms-profile-stats">
                            <li>
                                <h3 class="ms-count">5790</h3>
                                <span>Operations</span>
                            </li>
                            <li>
                                <h3 class="ms-count">4.8</h3>
                                <span>Medical Rating</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="col-xl-6 col-lg-12">
                <div class="ms-panel ms-device-sessions ms-quick-mic">
                    <div class="ms-panel-header">
                        <h6>Hospital Birth & Death Analytics</h6>
                    </div>
                    <div class="ms-panel-body">
                        <div class="row">
                            <div class="col-xl-4 col-md-4 col-sm-4 col-6 ms-device">
                                <i class="material-icons">airline_seat_flat</i>
                                <h4>Birth</h4>
                                <p class="ms-text-primary">45.07%</p>
                                <span class="ms-text-primary">201,434</span>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-4 col-6 ms-device">
                                <i class="material-icons">airline_seat_individual_suite</i>
                                <h4>Death</h4>
                                <p class="ms-text-danger">29.05%</p>
                                <span class="ms-text-danger">134,693</span>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-4 col-6 ms-device">
                                <i class="material-icons">accessible</i>
                                <h4>Accidents</h4>
                                <p class="ms-text-warning">18.43%</p>
                                <span class="ms-text-warning">81,525</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 45.07%" aria-valuenow="45.07" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 29.05%" aria-valuenow="29.05" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 25.48%" aria-valuenow="25.48" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="ms-panel">
                    <div class="ms-panel-header d-flex justify-content-between">
                        <h6>Hospital Staff</h6>
                        <div class="ms-slider-arrow">
                            <a href="#" class="prev-item">
                                <i class="far fa-caret-square-left"></i>
                            </a>
                            <a href="#" class="next-item">
                                <i class="far fa-caret-square-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ms-panel-body p-0 ms-medical-overview-slider">
                        <div class="ms-crypto-overview">
                            <a href="#" class="ms-profile">
                                <img src="{{asset('backend/assets/img/dashboard/doctor-1.jpg')}}" class="ms-img-large ms-img-round ms-user-img mx-auto d-block" alt="people">
                                <div class="ms-card-body">
                                    <h5>Anny</h5>
                                    <span>Doctor</span>
                                </div>
                            </a>
                        </div>
                        <div class="ms-crypto-overview">
                            <a href="#" class="ms-profile">
                                <img src="{{asset('backend/assets/img/dashboard/doctor-2.jpg')}}" class="ms-img-large ms-img-round ms-user-img mx-auto d-block" alt="people">
                                <div class="ms-card-body">
                                    <h5>Jude</h5>
                                    <span>Surgeon</span>
                                </div>
                            </a>
                        </div>
                        <div class="ms-crypto-overview">
                            <a href="#" class="ms-profile">
                                <img src="{{asset('backend/assets/img/dashboard/doctor-3.jpg')}}" class="ms-img-large ms-img-round ms-user-img mx-auto d-block" alt="people">
                                <div class="ms-card-body">
                                    <h5>Jordan</h5>
                                    <span>Doctor</span>
                                </div>
                            </a>
                        </div>
                        <div class="ms-crypto-overview">
                            <a href="#" class="ms-profile">
                                <img src="{{asset('backend/assets/img/dashboard/doctor-4.jpg')}}" class="ms-img-large ms-img-round ms-user-img mx-auto d-block" alt="people">
                                <div class="ms-card-body">
                                    <h5>Micheal</h5>
                                    <span>Nurse</span>
                                </div>
                            </a>
                        </div>
                        <div class="ms-crypto-overview">
                            <a href="#" class="ms-profile">
                                <img src="{{asset('backend/assets/img/dashboard/doctor-2.jpg')}}" class="ms-img-large ms-img-round ms-user-img mx-auto d-block" alt="people">
                                <div class="ms-card-body">
                                    <h5>Rouge</h5>
                                    <span>Doctor</span>
                                </div>
                            </a>
                        </div>
                        <div class="ms-crypto-overview">
                            <a href="#" class="ms-profile">
                                <img src="{{asset('backend/assets/img/dashboard/doctor-1.jpg')}}" class="ms-img-large ms-img-round ms-user-img mx-auto d-block" alt="people">
                                <div class="ms-card-body">
                                    <h5>Lilly</h5>
                                    <span>Surgeon</span>
                                </div>
                            </a>
                        </div>
                        <div class="ms-crypto-overview">
                            <a href="#" class="ms-profile">
                                <img src="{{asset('backend/assets/img/dashboard/doctor-3.jpg')}}" class="ms-img-large ms-img-round ms-user-img mx-auto d-block" alt="people">
                                <div class="ms-card-body">
                                    <h5>Sameul</h5>
                                    <span>Surgeon</span>
                                </div>
                            </a>
                        </div>
                        <div class="ms-crypto-overview">
                            <a href="#" class="ms-profile">
                                <img src="{{asset('backend/assets/img/dashboard/doctor-4.jpg')}}" class="ms-img-large ms-img-round ms-user-img mx-auto d-block" alt="people">
                                <div class="ms-card-body">
                                    <h5>Ricky</h5>
                                    <span>Doctor</span>
                                </div>
                            </a>
                        </div>
                        <div class="ms-crypto-overview">
                            <a href="#" class="ms-profile">
                                <img src="{{asset('backend/assets/img/dashboard/doctor-1.jpg')}}" class="ms-img-large ms-img-round ms-user-img mx-auto d-block" alt="people">
                                <div class="ms-card-body">
                                    <h5>Venus</h5>
                                    <span>Doctor</span>
                                </div>
                            </a>
                        </div>
                        <div class="ms-crypto-overview">
                            <a href="#" class="ms-profile">
                                <img src="{{asset('backend/assets/img/dashboard/doctor-3.jpg')}}" class="ms-img-large ms-img-round ms-user-img mx-auto d-block" alt="people">
                                <div class="ms-card-body">
                                    <h5>Johan</h5>
                                    <span>Nurse</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-12">
                <div class="ms-panel">
                    <div class="ms-panel-header">
                        <h6>Patient Total</h6>
                    </div>
                    <div class="ms-panel-body">
                        <canvas id="line-chart"></canvas>
                    </div>
                </div>
            </div>


            <div class="col-xl-6 col-md-12">
                <div class="ms-panel">
                    <div class="ms-panel-header">
                        <h6>Patient In</h6>
                    </div>
                    <div class="ms-panel-body">
                        <canvas id="bar-chart-grouped"></canvas>
                    </div>
                </div>
            </div>


            <div class="col-xl-8 col-md-12">
                <div class="ms-panel">
                    <div class="ms-panel-header">
                        <h6>Upcoming Appointments</h6>
                    </div>
                    <div class="ms-panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover thead-primary">
                                <thead>
                                <tr>
                                    <th scope="col">Patient</th>
                                    <th scope="col">Doctor</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Timing</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="ms-table-f-w"> <img src="{{asset('backend/assets/img/dashboard/patient-1.jpg')}}" alt="people"> Bernardo Galaviz </td>
                                    <td>Dr. Cristina Groves</td>
                                    <td>01 Dec 2019</td>
                                    <td>5:00 PM</td>
                                    <td>+01-789-654-123</td>
                                    <td><label class="ms-switch">
                                            <input type="checkbox" checked="">
                                            <span class="ms-switch-slider ms-switch-success round"></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-table-f-w"> <img src="{{asset('backend/assets/img/dashboard/patient-5.jpg')}}" alt="people"> Jenni </td>
                                    <td>Dr. Richard Miles</td>
                                    <td>01 Dec 2019</td>
                                    <td>8:00 AM</td>
                                    <td>+10-654-654-991</td>
                                    <td><label class="ms-switch">
                                            <input type="checkbox" checked="">
                                            <span class="ms-switch-slider ms-switch-success round"></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-table-f-w"> <img src="{{asset('backend/assets/img/dashboard/patient-6.jpg')}}" alt="people"> John Doe </td>
                                    <td>Dr. Andrew </td>
                                    <td>01 Dec 2019</td>
                                    <td>10:00 AM</td>
                                    <td>+10-709-254-445</td>
                                    <td><label class="ms-switch">
                                            <input type="checkbox">
                                            <span class="ms-switch-slider ms-switch-success round"></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-table-f-w"> <img src="{{asset('backend/assets/img/dashboard/patient-8.jpg')}}" alt="people"> Alesdro Guitto </td>
                                    <td>Dr. Robert </td>
                                    <td>01 Dec 2019</td>
                                    <td>2:00 PM</td>
                                    <td>+10-102-225-333</td>
                                    <td><label class="ms-switch">
                                            <input type="checkbox" checked="">
                                            <span class="ms-switch-slider ms-switch-success round"></span>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ms-table-f-w"> <img src="{{asset('backend/assets/img/dashboard/patient-1.jpg')}}" alt="people"> Richard </td>
                                    <td>Dr. Adwerd</td>
                                    <td>07 Dec 2019</td>
                                    <td>5:00 PM</td>
                                    <td>+01-222-111-356</td>
                                    <td><label class="ms-switch">
                                            <input type="checkbox">
                                            <span class="ms-switch-slider ms-switch-success round"></span>
                                        </label>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-4 col-md-12">
                <div class="ms-panel ms-panel-fh ms-widget">
                    <div class="ms-panel-header ms-panel-custome">
                        <h6>Doctors List</h6>
                    </div>
                    <div class="ms-panel-body p-0">
                        <ul class="ms-followers ms-list ms-scrollable">
                            <li class="ms-list-item media">
                                <img src="{{asset('backend/assets/img/dashboard/doctor-1.jpg')}}" class="ms-img-small ms-img-round" alt="people">
                                <div class="media-body mt-1">
                                    <h4>Micheal</h4>
                                    <span class="fs-12">MBBS, MD</span>
                                </div>
                                <button type="button" class="ms-btn-icon btn-success" name="button"><i class="material-icons">check</i> </button>
                            </li>
                            <li class="ms-list-item media">
                                <img src="{{asset('backend/assets/img/dashboard/doctor-2.jpg')}}" class="ms-img-small ms-img-round" alt="people">
                                <div class="media-body mt-1">
                                    <h4>Jennifer</h4>
                                    <span class="fs-12">MD</span>
                                </div>
                                <button type="button" class="ms-btn-icon btn-info" name="button"><i class="material-icons">person_add</i> </button>
                            </li>
                            <li class="ms-list-item media">
                                <img src="{{asset('backend/assets/img/dashboard/doctor-3.jpg')}}" class="ms-img-small ms-img-round" alt="people">
                                <div class="media-body mt-1">
                                    <h4>Adwerd </h4>
                                    <span class="fs-12">BMBS</span>
                                </div>
                                <button type="button" class="ms-btn-icon btn-info" name="button"><i class="material-icons">person_add</i> </button>
                            </li>
                            <li class="ms-list-item media">
                                <img src="{{asset('backend/assets/img/dashboard/doctor-4.jpg')}}" class="ms-img-small ms-img-round" alt="people">
                                <div class="media-body mt-1">
                                    <h4>John Doe</h4>
                                    <span class="fs-12">MS, MD</span>
                                </div>
                                <button type="button" class="ms-btn-icon btn-success" name="button"><i class="material-icons">check</i> </button>
                            </li>
                            <li class="ms-list-item media">
                                <img src="{{asset('backend/assets/img/dashboard/doctor-5.jpg')}}" class="ms-img-small ms-img-round" alt="people">
                                <div class="media-body mt-1">
                                    <h4>Jordan</h4>
                                    <span class="fs-12">MBBS</span>
                                </div>
                                <button type="button" class="ms-btn-icon btn-info" name="button"><i class="material-icons">person_add</i> </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-xl-6 col-lg-12">
                <div class="ms-panel ms-panel-fh ms-facebook-engagements">
                    <div class="ms-panel-header">
                        <h6>Doctor Engagements</h6>
                    </div>
                    <div class="ms-panel-body p-0">
                        <div class="ms-facebook-page-selection">
                            <p class="ms-text-dark">Jan 25, 2020 to Feb 02, 2020</p>
                            <p>Jan 18, 2020 to Feb 24, 2020 (Prev)</p>

                            <div class="dropdown">
                                <a href="#" class="has-chevron" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctor Name here</a>
                                <ul class="dropdown-menu">
                                    <li class="ms-dropdown-list">
                                        <a class="media p-2" href="#">
                                            <div class="media-body">
                                                <span>Doctor 1</span>
                                            </div>
                                        </a>
                                        <a class="media p-2" href="#">
                                            <div class="media-body">
                                                <span>Doctor 2</span>
                                            </div>
                                        </a>
                                        <a class="media p-2" href="#">
                                            <div class="media-body">
                                                <span>Doctor 3</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="ms-list clearfix">
                            <li class="ms-list-item">
                                <div class="d-flex justify-content-between align-items-end">
                                    <div class="ms-graph-meta">
                                        <h2>Weekday Engagement</h2>
                                        <p class="ms-text-dark">45.07%</p>
                                        <p class="ms-text-success">+28.44%</p>
                                        <p>VS 66.68% (Prev)</p>
                                    </div>
                                    <div class="ms-graph-canvas">
                                        <canvas id="engaged-users"></canvas>
                                    </div>
                                </div>
                            </li>
                            <li class="ms-list-item">
                                <div class="d-flex justify-content-between align-items-end">
                                    <div class="ms-graph-meta">
                                        <h2>Weekend Engagement</h2>
                                        <p class="ms-text-dark">45.07%</p>
                                        <p class="ms-text-success">+28.44%</p>
                                        <p>VS 66.68% (Prev)</p>
                                    </div>
                                    <div class="ms-graph-canvas">
                                        <canvas id="page-impressions"></canvas>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-xl-6 col-lg-12">
                <div class="ms-panel ms-panel-fh">
                    <div class="ms-panel-header">
                        <h6>Patient Timeline</h6>
                    </div>
                    <div class="ms-panel-body">
                        <ul class="ms-activity-log">
                            <li>
                                <div class="ms-btn-icon btn-pill icon btn-info">
                                    <i class="fa fa-wheelchair"></i>
                                </div>
                                <h6>Patient Admission</h6>
                                <span> <i class="material-icons">event</i>1 January, 2020</span>
                                <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                            </li>
                            <li>
                                <div class="ms-btn-icon btn-pill icon btn-primary">
                                    <i class="fa fa-user-md"></i>
                                </div>
                                <h6>Treatment Starts</h6>
                                <span> <i class="material-icons">event</i>5 January, 2020</span>
                                <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                            </li>
                            <li>
                                <div class="ms-btn-icon btn-pill icon btn-success">
                                    <i class="fa fa-check"></i>
                                </div>
                                <h6>Patient Discharge</h6>
                                <span> <i class="material-icons">event</i>15 March, 2020</span>
                                <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-xl-8 col-md-12">
                <div class="ms-panel">
                    <div class="ms-panel-header">
                        <h6>New Patients</h6>
                    </div>
                    <div class="ms-panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover  thead-primary">
                                <thead>
                                <tr>
                                    <th scope="col">Patient</th>
                                    <th scope="col">E-mail Id</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Disease</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="ms-table-f-w"> <img src="{{asset('backend/assets/img/dashboard/patient-3.jpg')}}" alt="people"> Richard </td>
                                    <td>Richard288@gmail.com</td>
                                    <td>+1-202-555-0875</td>
                                    <td>Fever</td>
                                </tr>
                                <tr>
                                    <td class="ms-table-f-w"> <img src="{{asset('backend/assets/img/dashboard/patient-2.jpg')}}" alt="people"> William </td>
                                    <td>William434@gmail.com</td>
                                    <td>+1-202-534-0112</td>
                                    <td>Eye</td>
                                </tr>
                                <tr>
                                    <td class="ms-table-f-w"> <img src="{{asset('backend/assets/img/dashboard/patient-4.jpg')}}" alt="people"> John Doe </td>
                                    <td>johndeo652@gmail.com</td>
                                    <td>+1-202-182-0132</td>
                                    <td>Typhoid</td>
                                </tr>
                                <tr>
                                    <td class="ms-table-f-w"> <img src="{{asset('backend/assets/img/dashboard/patient-5.jpg')}}" alt="people"> Martin </td>
                                    <td>Martin876@gmail.com</td>
                                    <td>+1-202-998-2341</td>
                                    <td>Cancer</td>
                                </tr>
                                <tr>
                                    <td class="ms-table-f-w"> <img src="{{asset('backend/assets/img/dashboard/patient-1.jpg')}}" alt="people"> Robert </td>
                                    <td>Robert082@gmail.com</td>
                                    <td>+1-202-455-1431</td>
                                    <td>Diabetes</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-4 col-md-12">
                <div class="ms-panel ms-panel-fh ms-widget">
                    <div class="ms-panel-header ms-panel-custome">
                        <h6>Latest Reports</h6>
                    </div>
                    <div class="ms-panel-body p-0">
                        <ul class="ms-followers ms-list ms-scrollable">
                            <li class="ms-list-item media">

                                <div class="media-body mt-1">
                                    <h4>Ultrasound-2.pdf</h4>
                                    <a href="#"><span class="fs-12">View Report</span></a>
                                </div>
                                <button type="button" class="btn btn-success btn-sm" name="button">Download </button>
                            </li>
                            <li class="ms-list-item media">

                                <div class="media-body mt-1">
                                    <h4>Hypothermia.pdf</h4>
                                    <a href="#"><span class="fs-12">View Report</span></a>
                                </div>
                                <button type="button" class="btn btn-danger btn-sm" name="button">On Hold </button>
                            </li>
                            <li class="ms-list-item media">

                                <div class="media-body mt-1">
                                    <h4>Ultrasound.pdf</h4>
                                    <a href="#"><span class="fs-12">View Report</span></a>
                                </div>
                                <button type="button" class="btn btn-success btn-sm" name="button">Download </button>
                            </li>
                            <li class="ms-list-item media">

                                <div class="media-body mt-1">
                                    <h4>Heart-ECG.pdf</h4>
                                    <a href="#"><span class="fs-12">View Report</span></a>
                                </div>
                                <button type="button" class="btn btn-success btn-sm" name="button">Download</button>
                            </li>
                            <li class="ms-list-item media">

                                <div class="media-body mt-1">
                                    <h4>X-ray.pdf</h4>
                                    <a href="#"><span class="fs-12">View Report</span></a>
                                </div>
                                <button type="button" class="btn btn-danger btn-sm" name="button">On Hold </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- MODALS -->
<!-- Reminder Modal -->
<div class="modal fade" id="reminder-modal" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-secondary">
                <h5 class="modal-title has-icon text-white"> New Reminder</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="ms-form-group">
                        <label>Remind me about</label>
                        <textarea class="form-control" name="reminder"></textarea>
                    </div>
                    <div class="ms-form-group">
                        <span class="ms-option-name fs-14">Repeat Daily</span>
                        <label class="ms-switch float-right">
                            <input type="checkbox">
                            <span class="ms-switch-slider round"></span>
                        </label>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ms-form-group">
                                <input type="text" class="form-control datepicker" name="reminder-date" value="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ms-form-group">
                                <select class="form-control" name="reminder-time">
                                    <option value="">12:00 pm</option>
                                    <option value="">1:00 pm</option>
                                    <option value="">2:00 pm</option>
                                    <option value="">3:00 pm</option>
                                    <option value="">4:00 pm</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Reminder</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Notes Modal -->
<div class="modal fade" id="notes-modal" tabindex="-1" role="dialog" aria-labelledby="notes-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-secondary">
                <h5 class="modal-title has-icon text-white" id="NoteModal">New Note</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="ms-form-group">
                        <label>Note Title</label>
                        <input type="text" class="form-control" name="note-title" value="">
                    </div>
                    <div class="ms-form-group">
                        <label>Note Description</label>
                        <textarea class="form-control" name="note-description"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Note</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog ms-modal-dialog-width">
        <div class="modal-content ms-modal-content-width">
            <div class="modal-header  ms-modal-header-radius-0">
                <h4 class="modal-title text-white">Make An Appointment</h4>
                <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">x</button>

            </div>
            <div class="modal-body p-0 text-left">
                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel ms-panel-bshadow-none">
                        <div class="ms-panel-header">
                            <h6>Patient Information</h6>
                        </div>
                        <div class="ms-panel-body">
                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom01">Patient Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="Enter Name" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom02">Date Of Birth</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="validationCustom02" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom03">Disease</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom03" placeholder="Disease" required>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-2">
                                        <label for="validationCustom04">Address</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom04" placeholder="Add Address" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom05">Phone no.</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom05" placeholder="Enter Phone No." required>

                                        </div>

                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom06">Department Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom06" placeholder="Enter Department Name" required>

                                        </div>
                                    </div>
                                </div>



                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom07">Appointment With</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom07" placeholder="Enter Doctor Name" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom08">Appointment Date</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom08" placeholder="Enter Appointment Date" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label>Sex</label>
                                        <ul class="ms-list d-flex">
                                            <li class="ms-list-item pl-0">
                                                <label class="ms-checkbox-wrap">
                                                    <input type="radio" name="radioExample" value="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                                <span> Male </span>
                                            </li>
                                            <li class="ms-list-item">
                                                <label class="ms-checkbox-wrap">
                                                    <input type="radio" name="radioExample" value="" checked="">
                                                    <i class="ms-checkbox-check"></i>
                                                </label>
                                                <span> Female </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Reset</button>
                                <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Add Appointment</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="prescription" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog ms-modal-dialog-width">
        <div class="modal-content ms-modal-content-width">
            <div class="modal-header  ms-modal-header-radius-0">
                <h4 class="modal-title text-white">Make a prescription</h4>
                <button type="button" class="close  text-white" data-dismiss="modal" aria-hidden="true">x</button>

            </div>
            <div class="modal-body p-0 text-left">
                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel ms-panel-bshadow-none">
                        <div class="ms-panel-header">
                            <h6>Patient Information</h6>
                        </div>
                        <div class="ms-panel-body">
                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom09">Patient Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom09" placeholder="Enter Name" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom10">Date Of Birth</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="validationCustom10" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="validationCustom11">Address</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom11" placeholder="Add Address" required>

                                        </div>
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom12">Phone no.</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom12" placeholder="Enter Phone No." required>

                                        </div>

                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom13">Medication</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom13" placeholder="Acetaminophen" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom14">Period Of medication</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="validationCustom14" placeholder="" required>

                                        </div>
                                    </div>
                                </div>



                                <div class="form-row">

                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom15">Appointment With</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom15" placeholder="Enter Doctor Name" required>

                                        </div>
                                    </div>

                                </div>
                                <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Save Prescription</button>
                                <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Save & Print</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="report1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog ms-modal-dialog-width">
        <div class="modal-content ms-modal-content-width">
            <div class="modal-header  ms-modal-header-radius-0">
                <h4 class="modal-title text-white">Generate report</h4>
                <button type="button" class="close  text-white" data-dismiss="modal" aria-hidden="true">x</button>

            </div>
            <div class="modal-body p-0 text-left">
                <div class="col-xl-12 col-md-12">
                    <div class="ms-panel ms-panel-bshadow-none">
                        <div class="ms-panel-header">
                            <h6>Patient Information</h6>
                        </div>
                        <div class="ms-panel-body">
                            <form class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom16">Patient Name</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom16" placeholder="Enter Name" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom17">Date Of Birth</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="validationCustom17" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label for="validationCustom22">Address</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom22" placeholder="Add Address" required>

                                        </div>
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom18">Phone no.</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom18" placeholder="Enter Phone No." required>

                                        </div>

                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom19">Report Type</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom19" placeholder="Diseases Report" required>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom23">Report Period</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="validationCustom23" placeholder="" required>

                                        </div>
                                    </div>
                                </div>



                                <div class="form-row">

                                    <div class="col-md-4 mb-3">
                                        <label for="validationCustom20">Appointment With</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="validationCustom20" placeholder="Enter Doctor Name" required>

                                        </div>
                                    </div>

                                </div>
                                <button class="btn btn-warning mt-4 d-inline w-20" type="submit">Generate Report</button>
                                <button class="btn btn-primary mt-4 d-inline w-20" type="submit">Generate & Print</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- SCRIPTS -->
<!-- Global Required Scripts Start -->
<script src="{{asset('backend/assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('backend/assets/js/popper.min.js')}}"></script>
<script src="{{asset('backend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/assets/js/perfect-scrollbar.js')}}"> </script>
<script src="{{asset('backend/assets/js/jquery-ui.min.js')}}"> </script>

<!-- Global Required Scripts End -->
<script src="{{asset('backend/assets/js/d3.v3.min.js')}}"> </script>
<script src="{{asset('backend/assets/js/topojson.v1.min.js')}}"> </script>
<script src="{{asset('backend/assets/js/datamaps.all.min.js')}}"> </script>


<!-- Page Specific Scripts Start -->
<script src="{{asset('backend/assets/js/slick.min.js')}}"> </script>
<script src="{{asset('backend/assets/js/moment.js')}}"> </script>
<script src="{{asset('backend/assets/js/jquery.webticker.min.js')}}"> </script>
<script src="{{asset('backend/assets/js/Chart.bundle.min.js')}}"> </script>
<script src="{{asset('backend/assets/js/index-chart.js')}}"> </script>

<!-- Page Specific Scripts Finish -->
<script src="{{asset('backend/assets/js/calendar.js')}}"></script>
<!-- medjestic core JavaScript -->
<script src="{{asset('backend/assets/js/framework.js')}}"></script>
<!-- Settings -->
<script src="{{asset('backend/assets/js/settings.js')}}"></script>
</body>

</html>

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    {{ __('You are logged in!') }}--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
