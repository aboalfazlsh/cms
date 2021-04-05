<?php
session_start();
include_once "../include/functions.php";
if(!isset($_SESSION['id']) ){
    header("location:index.php?login=first");

}
$connect=config();
$id=$_SESSION['id'];
$id = $id + 0 ;
$sql="SELECT * FROM admin_tbl WHERE id='$id'";
$res=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($res);
//var_dump($row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Inbox</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
        </div>
        <!--logo start-->
        <a href="#" class="logo">فلت<span>لب</span></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-tasks"></i>
                        <span class="badge bg-success">6</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">شما 6 برنامه در دست کار دارید</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">پنل مدیریت</div>
                                    <div class="percent">40%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">بروزرسانی دیتابیس</div>
                                    <div class="percent">60%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">برنامه نویسی  IPhone</div>
                                    <div class="percent">87%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                        <span class="sr-only">87% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">برنامه موبایل</div>
                                    <div class="percent">33%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                        <span class="sr-only">33% Complete (danger)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">پروفایل v1.3</div>
                                    <div class="percent">45%</div>
                                </div>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                        <span class="sr-only">45% Complete</span>
                                    </div>
                                </div>

                            </a>
                        </li>
                        <li class="external">
                            <a href="#">برنامه های بیشتر</a>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope-alt"></i>
                        <span class="badge bg-important">5</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-red"></div>
                        <li>
                            <p class="red">شما 5 پیام جدید دارید</p>
                        </li>
                        <li>
                            <a href="#">
                                    <span class="photo">
                                        <img alt="avatar" src="img/avatar-mini.jpg"></span>
                                <span class="subject">
                                        <span class="from"><?PHP echo $row['name'] ?></span>
                                        <span class="time">همین حالا</span>
                                    </span>
                                <span class="message">سلام،متن پیام نمایشی جهت تست
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                    <span class="photo">
                                        <img alt="avatar" src="img/avatar-mini2.jpg"></span>
                                <span class="subject">
                                        <span class="from">ایمان مدائنی</span>
                                        <span class="time">10 دقیقه قبل</span>
                                    </span>
                                <span class="message">سلام، چطوری شما؟
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                    <span class="photo">
                                        <img alt="avatar" src="img/avatar-mini3.jpg"></span>
                                <span class="subject">
                                        <span class="from">صبا ذاکر</span>
                                        <span class="time">3 ساعت قبل</span>
                                    </span>
                                <span class="message">چه پنل مدیریتی فوق العاده ایی
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                    <span class="photo">
                                        <img alt="avatar" src="img/avatar-mini4.jpg"></span>
                                <span class="subject">
                                        <span class="from">مسعود شریفی</span>
                                        <span class="time">همین حالا</span>
                                    </span>
                                <span class="message">سلام،متن پیام نمایشی جهت تست
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">نمایش تمامی پیام ها</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
                <!-- notification dropdown start-->
                <li id="header_notification_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="icon-bell-alt"></i>
                        <span class="badge bg-warning">7</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <div class="notify-arrow notify-arrow-yellow"></div>
                        <li>
                            <p class="yellow">شما 7 اعلام جدید دارید</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="icon-bolt"></i></span>
                                سرور شماره 3 توقف کرده

                                <span class="small italic">34 دقیقه قبل</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-warning"><i class="icon-bell"></i></span>
                                سرور شماره 4 بارگزاری نمی شود

                                <span class="small italic">1 ساعت قبل</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="icon-bolt"></i></span>
                                پنل مدیریت 24% پیشرفت داشته است

                                <span class="small italic">4 ساعت قبل</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-success"><i class="icon-plus"></i></span>
                                ثبت نام کاربر جدید

                                <span class="small italic">همین حالا</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                برنامه پیام خطا دارد

                                <span class="small italic">10 دقیقه قبل</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">نمایش تمامی اعلام ها</a>
                        </li>
                    </ul>
                </li>
                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-nav ">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder="Search">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="img/avatar1_small.jpg">
                        <span class="username"><?php echo $row["username"]; ?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="#"><i class=" icon-suitcase"></i>پروفایل</a></li>
                        <li><a href="#"><i class="icon-cog"></i>تنظیمات</a></li>
                        <li><a href="#"><i class="icon-bell-alt"></i>اعلام ها</a></li>
                        <li><a href="login.html"><i class="icon-key"></i>خروج</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="dashbord.php">
                        <i class="icon-dashboard"></i>
                        <span>صفحه اصلی</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon-book"></i>
                        <span>مدیریت منو ها</span>
                        <span class="arrow"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="general.html">ایست منو ها</a></li>
                        <li><a class="" href="buttons.html">افزودن منو جدید</a></li>

                    </ul>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--mail inbox start-->
            <div class="mail-box">
                <aside class="sm-side">
                    <div class="user-head">
                        <a href="javascript:;" class="inbox-avatar">
                            <img src="img/mail-avatar.jpg" alt="">
                        </a>
                        <div class="user-name">
                            <h5><a href="#">Jonathan Smith</a></h5>
                            <span><a href="#">jsmith@gmail.com</a></span>
                        </div>
                        <a href="javascript:;" class="mail-dropdown pull-right">
                            <i class="icon-chevron-down"></i>
                        </a>
                    </div>
                    <div class="inbox-body">
                        <a class="btn btn-compose" data-toggle="modal" href="#myModal">Compose
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Compose</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">To</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="inputEmail1" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Cc / Bcc</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="cc" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Subject</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="inputPassword1" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Message</label>
                                                <div class="col-lg-10">
                                                    <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-lg-offset-2 col-lg-10">
                                                        <span class="btn green fileinput-button">
                                                            <i class="icon-plus icon-white"></i>
                                                            <span>Attachment</span>
                                                            <input type="file" multiple="" name="files[]">
                                                        </span>
                                                    <button type="submit" class="btn btn-send">Send</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
                    <ul class="inbox-nav inbox-divider">
                        <li class="active">
                            <a href="#"><i class="icon-inbox"></i>Inbox <span class="label label-danger pull-right">2</span></a>

                        </li>
                        <li>
                            <a href="#"><i class="icon-envelope-alt"></i>Sent Mail</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-bookmark-empty"></i>Important</a>
                        </li>
                        <li>
                            <a href="#"><i class=" icon-external-link"></i>Drafts <span class="label label-info pull-right">30</span></a>
                        </li>
                        <li>
                            <a href="#"><i class=" icon-trash"></i>Trash</a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
                        <li>
                            <h4>Labels</h4>
                        </li>
                        <li><a href="#"><i class=" icon-sign-blank text-danger"></i>Work </a></li>
                        <li><a href="#"><i class=" icon-sign-blank text-success"></i>Design </a></li>
                        <li><a href="#"><i class=" icon-sign-blank text-info "></i>Family </a>
                        <li><a href="#"><i class=" icon-sign-blank text-warning "></i>Friends </a>
                        <li><a href="#"><i class=" icon-sign-blank text-primary "></i>Office </a>
                        </li>
                    </ul>
                    <ul class="nav nav-pills nav-stacked labels-info ">
                        <li>
                            <h4>Buddy online</h4>
                        </li>
                        <li><a href="#"><i class=" icon-circle text-success"></i>Jhone Doe
                                <p>I do not think</p>
                            </a></li>
                        <li><a href="#"><i class=" icon-circle text-danger"></i>Sumon
                                <p>Busy with coding</p>
                            </a></li>
                        <li><a href="#"><i class=" icon-circle text-muted "></i>Anjelina Joli
                                <p>I out of control</p>
                            </a>
                        <li><a href="#"><i class=" icon-circle text-muted "></i>Jonathan Smith
                                <p>I am not here</p>
                            </a>
                        <li><a href="#"><i class=" icon-circle text-muted "></i>Tawseef
                                <p>I do not think</p>
                            </a>
                        </li>
                    </ul>

                    <div class="inbox-body text-center">
                        <div class="btn-group">
                            <a href="javascript:;" class="btn mini btn-primary">
                                <i class="icon-plus"></i>
                            </a>
                        </div>
                        <div class="btn-group">
                            <a href="javascript:;" class="btn mini btn-success">
                                <i class="icon-phone"></i>
                            </a>
                        </div>
                        <div class="btn-group">
                            <a href="javascript:;" class="btn mini btn-info">
                                <i class="icon-cog"></i>
                            </a>
                        </div>
                    </div>

                </aside>
                <aside class="lg-side">
                    <div class="inbox-head">
                        <h3>Inbox</h3>
                        <form class="pull-right position" action="#">
                            <div class="input-append">
                                <input type="text" placeholder="Search Mail" class="sr-input">
                                <button type="button" class="btn sr-btn"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="inbox-body">
                        <div class="mail-option">
                            <div class="chk-all">
                                <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                                <div class="btn-group">
                                    <a class="btn mini all" href="#" data-toggle="dropdown">All

                                        <i class="icon-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">None</a></li>
                                        <li><a href="#">Read</a></li>
                                        <li><a href="#">Unread</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="btn-group">
                                <a class="btn mini tooltips" href="#" data-toggle="dropdown" data-placement="top" data-original-title="Refresh">
                                    <i class=" icon-refresh"></i>
                                </a>
                            </div>
                            <div class="btn-group hidden-phone">
                                <a class="btn mini blue" href="#" data-toggle="dropdown">More

                                    <i class="icon-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="icon-pencil"></i>Mark as Read</a></li>
                                    <li><a href="#"><i class="icon-ban-circle"></i>Spam</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-trash"></i>Delete</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <a class="btn mini blue" href="#" data-toggle="dropdown">Move to

                                    <i class="icon-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="icon-pencil"></i>Mark as Read</a></li>
                                    <li><a href="#"><i class="icon-ban-circle"></i>Spam</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-trash"></i>Delete</a></li>
                                </ul>
                            </div>

                            <ul class="unstyled inbox-pagination">
                                <li><span>1-50 of 234</span></li>
                                <li>
                                    <a href="#" class="np-btn"><i class="icon-angle-left  pagination-left"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="np-btn"><i class="icon-angle-right pagination-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <table class="table table-inbox table-hover">
                            <tbody>
                            <tr class="unread">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="icon-star"></i></td>
                                <td class="view-message  dont-show">Vector Lab</td>
                                <td class="view-message ">Lorem ipsum dolor imit set.</td>
                                <td class="view-message  inbox-small-cells"><i class="icon-paper-clip"></i></td>
                                <td class="view-message  text-right">9:27 AM</td>
                            </tr>
                            <tr class="unread">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="icon-star"></i></td>
                                <td class="view-message dont-show">Mosaddek Hossain</td>
                                <td class="view-message">Hi Bro, How are you?</td>
                                <td class="view-message inbox-small-cells"></td>
                                <td class="view-message text-right">March 15</td>
                            </tr>
                            <tr class="">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="icon-star"></i></td>
                                <td class="view-message dont-show">Dulal khan</td>
                                <td class="view-message">Lorem ipsum dolor sit amet</td>
                                <td class="view-message inbox-small-cells"></td>
                                <td class="view-message text-right">June 15</td>
                            </tr>
                            <tr class="">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="icon-star"></i></td>
                                <td class="view-message dont-show">Facebook</td>
                                <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                                <td class="view-message inbox-small-cells"></td>
                                <td class="view-message text-right">April 01</td>
                            </tr>
                            <tr class="">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="icon-star inbox-started"></i></td>
                                <td class="view-message dont-show">Mosaddek <span class="label label-danger pull-right">urgent</span></td>
                                <td class="view-message">Lorem ipsum dolor sit amet</td>
                                <td class="view-message inbox-small-cells"></td>
                                <td class="view-message text-right">May 23</td>
                            </tr>
                            <tr class="">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="icon-star inbox-started"></i></td>
                                <td class="view-message dont-show">Facebook</td>
                                <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                                <td class="view-message inbox-small-cells"><i class="icon-paper-clip"></i></td>
                                <td class="view-message text-right">March 14</td>
                            </tr>
                            <tr class="">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="icon-star inbox-started"></i></td>
                                <td class="view-message dont-show">Rafiq</td>
                                <td class="view-message">Lorem ipsum dolor sit amet</td>
                                <td class="view-message inbox-small-cells"><i class="icon-paper-clip"></i></td>
                                <td class="view-message text-right">January 19</td>
                            </tr>
                            <tr class="">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="icon-star"></i></td>
                                <td class="view-message dont-show">Facebook <span class="label label-success pull-right">megazine</span></td>
                                <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                                <td class="view-message inbox-small-cells"></td>
                                <td class="view-message text-right">March 04</td>
                            </tr>
                            <tr class="">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="icon-star"></i></td>
                                <td class="view-message dont-show">Mosaddek</td>
                                <td class="view-message view-message">Lorem ipsum dolor sit amet</td>
                                <td class="view-message inbox-small-cells"></td>
                                <td class="view-message text-right">June 13</td>
                            </tr>
                            <tr class="">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="icon-star"></i></td>
                                <td class="view-message dont-show">Facebook <span class="label label-info pull-right">family</span></td>
                                <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                                <td class="view-message inbox-small-cells"></td>
                                <td class="view-message text-right">March 24</td>
                            </tr>
                            <tr class="">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="icon-star inbox-started"></i></td>
                                <td class="view-message dont-show">Mosaddek</td>
                                <td class="view-message">Lorem ipsum dolor sit amet</td>
                                <td class="view-message inbox-small-cells"></td>
                                <td class="view-message text-right">March 09</td>
                            </tr>
                            <tr class="">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="icon-star inbox-started"></i></td>
                                <td class="dont-show">Facebook</td>
                                <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                                <td class="view-message inbox-small-cells"><i class="icon-paper-clip"></i></td>
                                <td class="view-message text-right">May 14</td>
                            </tr>
                            <tr class="">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="icon-star"></i></td>
                                <td class="view-message dont-show">Sumon</td>
                                <td class="view-message">Lorem ipsum dolor sit amet</td>
                                <td class="view-message inbox-small-cells"><i class="icon-paper-clip"></i></td>
                                <td class="view-message text-right">February 25</td>
                            </tr>
                            <tr class="">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="icon-star"></i></td>
                                <td class="dont-show">Facebook</td>
                                <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                                <td class="view-message inbox-small-cells"></td>
                                <td class="view-message text-right">March 14</td>
                            </tr>
                            <tr class="">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="icon-star"></i></td>
                                <td class="view-message dont-show">Dulal</td>
                                <td class="view-message">Lorem ipsum dolor sit amet</td>
                                <td class="view-message inbox-small-cells"></td>
                                <td class="view-message text-right">April 07</td>
                            </tr>
                            <tr class="">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="icon-star"></i></td>
                                <td class="view-message dont-show">Twitter</td>
                                <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                                <td class="view-message inbox-small-cells"></td>
                                <td class="view-message text-right">July 14</td>
                            </tr>
                            <tr class="">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="icon-star inbox-started"></i></td>
                                <td class="view-message dont-show">Sumon</td>
                                <td class="view-message">Lorem ipsum dolor sit amet</td>
                                <td class="view-message inbox-small-cells"></td>
                                <td class="view-message text-right">August 10</td>
                            </tr>
                            <tr class="">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="icon-star"></i></td>
                                <td class="view-message dont-show">Facebook</td>
                                <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                                <td class="view-message inbox-small-cells"><i class="icon-paper-clip"></i></td>
                                <td class="view-message text-right">April 14</td>
                            </tr>
                            <tr class="">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="icon-star"></i></td>
                                <td class="view-message dont-show">Mosaddek</td>
                                <td class="view-message">Lorem ipsum dolor sit amet</td>
                                <td class="view-message inbox-small-cells"><i class="icon-paper-clip"></i></td>
                                <td class="view-message text-right">June 16</td>
                            </tr>
                            <tr class="">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="icon-star inbox-started"></i></td>
                                <td class="view-message dont-show">Sumon</td>
                                <td class="view-message">Lorem ipsum dolor sit amet</td>
                                <td class="view-message inbox-small-cells"></td>
                                <td class="view-message text-right">August 10</td>
                            </tr>
                            <tr class="">
                                <td class="inbox-small-cells">
                                    <input type="checkbox" class="mail-checkbox">
                                </td>
                                <td class="inbox-small-cells"><i class="icon-star"></i></td>
                                <td class="view-message dont-show">Facebook</td>
                                <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                                <td class="view-message inbox-small-cells"><i class="icon-paper-clip"></i></td>
                                <td class="view-message text-right">April 14</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </aside>
            </div>
            <!--mail inbox end-->
        </section>
    </section>
    <!--main content end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>

<!-- BEGIN:File Upload Plugin JS files-->
<script src="assets/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="assets/jquery-file-upload/js/vendor/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="assets/jquery-file-upload/js/vendor/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="assets/jquery-file-upload/js/vendor/canvas-to-blob.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="assets/jquery-file-upload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="assets/jquery-file-upload/js/jquery.fileupload.js"></script>
<!-- The File Upload file processing plugin -->
<script src="assets/jquery-file-upload/js/jquery.fileupload-fp.js"></script>
<!-- The File Upload user interface plugin -->
<script src="assets/jquery-file-upload/js/jquery.fileupload-ui.js"></script>


<!--common script for all pages-->
<script src="js/common-scripts.js"></script>


</body>
</html>



























<!--mail inbox start-->
<div class="mail-box">
    <aside class="sm-side">
        <div class="user-head">
            <a href="javascript:;" class="inbox-avatar">
                <img src="img/mail-avatar.jpg" alt="">
            </a>
            <div class="user-name">
                <h5><a href="#">Jonathan Smith</a></h5>
                <span><a href="#">jsmith@gmail.com</a></span>
            </div>
            <a href="javascript:;" class="mail-dropdown pull-right">
                <i class="icon-chevron-down"></i>
            </a>
        </div>
        <div class="inbox-body">
            <a class="btn btn-compose" data-toggle="modal" href="#myModal">Compose
            </a>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Compose</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">To</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputEmail1" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Cc / Bcc</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="cc" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Subject</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="inputPassword1" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Message</label>
                                    <div class="col-lg-10">
                                        <textarea name="" id="" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <span class="btn green fileinput-button">
                                                            <i class="icon-plus icon-white"></i>
                                                            <span>Attachment</span>
                                                            <input type="file" multiple="" name="files[]">
                                                        </span>
                                        <button type="submit" class="btn btn-send">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div>
        <ul class="inbox-nav inbox-divider">
            <li class="active">
                <a href="#"><i class="icon-inbox"></i>Inbox <span class="label label-danger pull-right">2</span></a>

            </li>
            <li>
                <a href="#"><i class="icon-envelope-alt"></i>Sent Mail</a>
            </li>
            <li>
                <a href="#"><i class="icon-bookmark-empty"></i>Important</a>
            </li>
            <li>
                <a href="#"><i class=" icon-external-link"></i>Drafts <span class="label label-info pull-right">30</span></a>
            </li>
            <li>
                <a href="#"><i class=" icon-trash"></i>Trash</a>
            </li>
        </ul>
        <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
            <li>
                <h4>Labels</h4>
            </li>
            <li><a href="#"><i class=" icon-sign-blank text-danger"></i>Work </a></li>
            <li><a href="#"><i class=" icon-sign-blank text-success"></i>Design </a></li>
            <li><a href="#"><i class=" icon-sign-blank text-info "></i>Family </a>
            <li><a href="#"><i class=" icon-sign-blank text-warning "></i>Friends </a>
            <li><a href="#"><i class=" icon-sign-blank text-primary "></i>Office </a>
            </li>
        </ul>
        <ul class="nav nav-pills nav-stacked labels-info ">
            <li>
                <h4>Buddy online</h4>
            </li>
            <li><a href="#"><i class=" icon-circle text-success"></i>Jhone Doe
                    <p>I do not think</p>
                </a></li>
            <li><a href="#"><i class=" icon-circle text-danger"></i>Sumon
                    <p>Busy with coding</p>
                </a></li>
            <li><a href="#"><i class=" icon-circle text-muted "></i>Anjelina Joli
                    <p>I out of control</p>
                </a>
            <li><a href="#"><i class=" icon-circle text-muted "></i>Jonathan Smith
                    <p>I am not here</p>
                </a>
            <li><a href="#"><i class=" icon-circle text-muted "></i>Tawseef
                    <p>I do not think</p>
                </a>
            </li>
        </ul>

        <div class="inbox-body text-center">
            <div class="btn-group">
                <a href="javascript:;" class="btn mini btn-primary">
                    <i class="icon-plus"></i>
                </a>
            </div>
            <div class="btn-group">
                <a href="javascript:;" class="btn mini btn-success">
                    <i class="icon-phone"></i>
                </a>
            </div>
            <div class="btn-group">
                <a href="javascript:;" class="btn mini btn-info">
                    <i class="icon-cog"></i>
                </a>
            </div>
        </div>

    </aside>
    <aside class="lg-side">
        <div class="inbox-head">
            <h3>Inbox</h3>
            <form class="pull-right position" action="#">
                <div class="input-append">
                    <input type="text" placeholder="Search Mail" class="sr-input">
                    <button type="button" class="btn sr-btn"><i class="icon-search"></i></button>
                </div>
            </form>
        </div>
        <div class="inbox-body">
            <div class="mail-option">
                <div class="chk-all">
                    <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                    <div class="btn-group">
                        <a class="btn mini all" href="#" data-toggle="dropdown">All

                            <i class="icon-angle-down "></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">None</a></li>
                            <li><a href="#">Read</a></li>
                            <li><a href="#">Unread</a></li>
                        </ul>
                    </div>
                </div>

                <div class="btn-group">
                    <a class="btn mini tooltips" href="#" data-toggle="dropdown" data-placement="top" data-original-title="Refresh">
                        <i class=" icon-refresh"></i>
                    </a>
                </div>
                <div class="btn-group hidden-phone">
                    <a class="btn mini blue" href="#" data-toggle="dropdown">More

                        <i class="icon-angle-down "></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="icon-pencil"></i>Mark as Read</a></li>
                        <li><a href="#"><i class="icon-ban-circle"></i>Spam</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-trash"></i>Delete</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                    <a class="btn mini blue" href="#" data-toggle="dropdown">Move to

                        <i class="icon-angle-down "></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="icon-pencil"></i>Mark as Read</a></li>
                        <li><a href="#"><i class="icon-ban-circle"></i>Spam</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-trash"></i>Delete</a></li>
                    </ul>
                </div>

                <ul class="unstyled inbox-pagination">
                    <li><span>1-50 of 234</span></li>
                    <li>
                        <a href="#" class="np-btn"><i class="icon-angle-left  pagination-left"></i></a>
                    </li>
                    <li>
                        <a href="#" class="np-btn"><i class="icon-angle-right pagination-right"></i></a>
                    </li>
                </ul>
            </div>
            <table class="table table-inbox table-hover">
                <tbody>
                <tr class="unread">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="icon-star"></i></td>
                    <td class="view-message  dont-show">Vector Lab</td>
                    <td class="view-message ">Lorem ipsum dolor imit set.</td>
                    <td class="view-message  inbox-small-cells"><i class="icon-paper-clip"></i></td>
                    <td class="view-message  text-right">9:27 AM</td>
                </tr>
                <tr class="unread">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="icon-star"></i></td>
                    <td class="view-message dont-show">Mosaddek Hossain</td>
                    <td class="view-message">Hi Bro, How are you?</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">March 15</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="icon-star"></i></td>
                    <td class="view-message dont-show">Dulal khan</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">June 15</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="icon-star"></i></td>
                    <td class="view-message dont-show">Facebook</td>
                    <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">April 01</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="icon-star inbox-started"></i></td>
                    <td class="view-message dont-show">Mosaddek <span class="label label-danger pull-right">urgent</span></td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">May 23</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="icon-star inbox-started"></i></td>
                    <td class="view-message dont-show">Facebook</td>
                    <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                    <td class="view-message inbox-small-cells"><i class="icon-paper-clip"></i></td>
                    <td class="view-message text-right">March 14</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="icon-star inbox-started"></i></td>
                    <td class="view-message dont-show">Rafiq</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"><i class="icon-paper-clip"></i></td>
                    <td class="view-message text-right">January 19</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="icon-star"></i></td>
                    <td class="view-message dont-show">Facebook <span class="label label-success pull-right">megazine</span></td>
                    <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">March 04</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="icon-star"></i></td>
                    <td class="view-message dont-show">Mosaddek</td>
                    <td class="view-message view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">June 13</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="icon-star"></i></td>
                    <td class="view-message dont-show">Facebook <span class="label label-info pull-right">family</span></td>
                    <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">March 24</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="icon-star inbox-started"></i></td>
                    <td class="view-message dont-show">Mosaddek</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">March 09</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="icon-star inbox-started"></i></td>
                    <td class="dont-show">Facebook</td>
                    <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                    <td class="view-message inbox-small-cells"><i class="icon-paper-clip"></i></td>
                    <td class="view-message text-right">May 14</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="icon-star"></i></td>
                    <td class="view-message dont-show">Sumon</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"><i class="icon-paper-clip"></i></td>
                    <td class="view-message text-right">February 25</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="icon-star"></i></td>
                    <td class="dont-show">Facebook</td>
                    <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">March 14</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="icon-star"></i></td>
                    <td class="view-message dont-show">Dulal</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">April 07</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="icon-star"></i></td>
                    <td class="view-message dont-show">Twitter</td>
                    <td class="view-message">Dolor sit amet, consectetuer adipiscing</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">July 14</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="icon-star inbox-started"></i></td>
                    <td class="view-message dont-show">Sumon</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">August 10</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="icon-star"></i></td>
                    <td class="view-message dont-show">Facebook</td>
                    <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                    <td class="view-message inbox-small-cells"><i class="icon-paper-clip"></i></td>
                    <td class="view-message text-right">April 14</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="icon-star"></i></td>
                    <td class="view-message dont-show">Mosaddek</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"><i class="icon-paper-clip"></i></td>
                    <td class="view-message text-right">June 16</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="icon-star inbox-started"></i></td>
                    <td class="view-message dont-show">Sumon</td>
                    <td class="view-message">Lorem ipsum dolor sit amet</td>
                    <td class="view-message inbox-small-cells"></td>
                    <td class="view-message text-right">August 10</td>
                </tr>
                <tr class="">
                    <td class="inbox-small-cells">
                        <input type="checkbox" class="mail-checkbox">
                    </td>
                    <td class="inbox-small-cells"><i class="icon-star"></i></td>
                    <td class="view-message dont-show">Facebook</td>
                    <td class="view-message view-message">Dolor sit amet, consectetuer adipiscing</td>
                    <td class="view-message inbox-small-cells"><i class="icon-paper-clip"></i></td>
                    <td class="view-message text-right">April 14</td>
                </tr>
                </tbody>
            </table>
        </div>
    </aside>
</div>
<!--mail inbox end-->