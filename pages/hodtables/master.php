<?php
include('../../config/hod/start.php');  

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Government Ploytechnic Mumbai</title>
	<link rel="icon" href="../../dist/img/card.png" type="image/gif">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="../../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	
	<style>
		.new
		{
			animation: newColor 3s alternate infinite; 
		}
		@keyframes newColor  {
			750%{color : hotpink}
			0%{color :red}
			100%{color :lime}
			25%{color :blue}
			50%{color :yellow}
		}
		.center{
			text-align:center;
			padding-top:150%
		}
		@media screen and (max-width: 640px) {
			table{
				overflow-x: auto;
			}
		}
		@media print 
		{
			
			p,table,tr,td,th,ul,li,#labelDept{
				color: black;
				background-color: white;
			}
			html,body,table,tr,td,th{
				margin-left: -0.5%;
				padding-left:-1px
			}
			table,tr,th,td,ul,li{
				font-size:95%
			}
			
		}
		@page{
			margin:-0.8%
		}
		p{
			color:white;
		}
		#labelDept2{
			font-size:15px;
			font-family: verdana;
		}
		.border{
		  border : 1px solid black;
		 border-collapse: collapse;
		  animation: border 14s alternate infinite; 
		}
		@keyframes border  {
			0%{border :1px solid black}
			25%{border :1px solid red}
			50%{border :1px solid lime}
			75%{border :1px solid blue}
			100%{border :1px solid yellow}
		}
		.current
		{
			animation: currentColor 14s alternate infinite; 
		}
		@keyframes currentColor  {
			100%{background-color : hotpink}
			75%{background-color :red}
			50%{background-color :lime}
			25%{background-color :blue}
			0%{background-color :yellow}
		}
	</style>
  </head>
  <body class="skin-blue sidebar-collapse fixed">
    <div class="wrapper">
      
      <header class="main-header">
        <a href="../../hod.php" class="logo"><b> GP </b>Mumbai</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
            <div class="navbar-custom-menu" >
					<ul class="nav navbar-nav">
						<!-- User Account: style can be found in drop2down.less -->
						<li class="drop2down user user-menu">
							<a>
								<i class="ion ion-person"></i>
								<span class="hidden-xs"><?php echo $hodName;?></span>
							</a>
						</li>
					    <li class="drop2down notifications-menu">
							<a href="#" class="drop2down-toggle">
								<form method="post" style="margin-top:-55%;padding-top:39%"> 
									<button type="submit" name="logout" style="background-color:transparent" ><i class="fa fa-bell-o"></i></button>
								</form>
							</a>    
						</li>
					</ul>
				</div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
         				<ul class="sidebar-menu">
						<li class="treeview">
							<a href="#">
								<i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="../../hod.php"><i class="fa fa-circle-o"></i>Home</a></li>
							</ul>
						</li>
						<li class="treeview">
							<a href="#">
								<i class="fa fa-edit"></i> <span>Forms</span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="../hodforms/teacherform.php"><i class="fa fa-circle-o"></i> Teacher </a></li>
								<li><a href="../hodforms/subjectform.php"><i class="fa fa-circle-o"></i> Subject </a></li>
								<li><a href="../hodforms/roomfrom.php"><i class="fa fa-circle-o"></i> Room </a></li>
							</ul>
						</li>
						<li class="treeview active">
							<a href="#">
								<i class="fa fa-table"></i> <span>Time Table</span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu">
								<li><a href="simple.php"><i class="fa fa-circle-o"></i> Simple</a></li>
								<li class="active"><a href="#"><i class="fa fa-circle-o"></i> Master</a></li>
							</ul>
						</li>
							<li class="treeview">
							<a href="#">
								<i class="fa fa-database"></i> <span>Data Table</span>
								<i class="fa fa-angle-left pull-right"></i>
							</a>
							<ul class="treeview-menu ">
								<li>
									<a href="../hodforms/teachersubject.php"><i class="fa fa-circle-o"></i>Teacher</a>
								</li>
								<li>
									<a href="../hodforms/assignsubject.php"><i class="fa fa-circle-o"></i>Subject</a>
								</li>         
							</ul>
						</li>
				</ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Master Table
            <small style="color:black;font-size:20px" id="labelDept"><?php echo $department;?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="../../hod.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="../../hod.php">Time Table</a></li>
            <li class="active">Master Table</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
       

              <div class="box" style="overflow-x: auto;">
                <div id="hide" class="box-header">
                  <h3 class="box-title">Select Data &nbsp; &nbsp; </h3>
					<select id="teacher" onchange="master()">
				        <option value="default">Teacher</option>
                    </select> 
					<select id="room" onchange="master()">
				        <option value="default">Room</option>
                    </select>
					<select id="sem" onchange="master()">
				        <option value="odd">Odd</option>
						<option value="even">Even</option>
                    </select>
					<button onclick="master()" class="pull-right btn bg-blue"><span class="glyphicon glyphicon-refresh"></span> &nbsp Refresh</button>&nbsp; &nbsp; &nbsp;
					<button onclick="takePrint()" class="pull-right btn bg-blue" style="margin-right:5px"><span class="glyphicon glyphicon-print"></span> &nbsp; Print</i></button>
					</br>
					<center><h4 class="box-title">&nbsp; <span id="labelTeacher"></span>&nbsp; <span id="labelRoom"></span> </h4></center>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table" style="background-color:black;color:white">
                    <thead>
						<tr class="border">
							<th class="border" colspan=13><center><small id="labelDept2"><?php echo "Department Of ".$department;?></small></center></th>
						</tr>
						<tr class="border">
							<th class="border" colspan=4><span id="labelTeacher"></span></th>
							<th class="border" colspan=7>
								<center><h8><span id="labelYear"></span>&nbsp; <span id="labelShift"></span>&nbsp; <span id="labelRoom"></span> </h8></center>
							</th>
							<th class="border" colspan=2> <center>LOAD : <span id="total">0</span> ( TH=<span id="totalTH">0</span>,PR=<span id="totalPR">0</span> )</center></th>
						</tr>
                      <tr class="border">
                        <th class="border" colspan=3 rowspan=2>DAY/TIME</th>
						<th class="border" rowspan=2>8 To 9 AM</th>
						<th class="border" rowspan=2>9 To 10 AM</th>
						<th class="border" rowspan=2>10 To 11 AM</th>
						<th class="border" rowspan=2>11 To 12 PM</th>
						<th class="border">12:30 To 1:30</th>
						<th class="border">1:30 To 2:30</th>
						<th class="border" rowspan=2 >2:30 To 3:30 PM</th> 
						<th class="border" rowspan=2>3:30 To 4:30 PM</th>
						<th class="border" rowspan=2>4:30 To 5:30 PM</th>
						<th class="border" rowspan=2>5:30 To 6:30 PM</th>
                      </tr>
					  <tr class="border">
						<th class="border">12 To 1 PM</th>
						<th class="border">1 To 2 PM</th>
					  </tr>
                    </thead>
                    <tbody class="tbody border">
							<tr class="borderRED">
								<th class="border" class="center" id="dayid" rowspan=6  style="background-color:red;color:white"><p>M</br>O</br>N</br>D</br>A</br>Y</p></th>
								<th class="border" class="center" rowspan=3 style="background-color:orange;color:white">FS</th>
								<th class="border" style="background-color:lime">FY</th>
								<td class="border" class="scale" id="fyfsmon8" ondrop="drop2(event,'fy','fs','mon',8)" ondragstart="drag2(event,'fy','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsmon9" ondrop="drop2(event,'fy','fs','mon',9)" ondragstart="drag2(event,'fy','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsmon10" ondrop="drop2(event,'fy','fs','mon',10)" ondragstart="drag2(event,'fy','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsmon11" ondrop="drop2(event,'fy','fs','mon',11)" ondragstart="drag2(event,'fy','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsmon12" ondrop="drop2(event,'fy','fs','mon',12)" ondragstart="drag2(event,'fy','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsmon13" ondrop="drop2(event,'fy','fs','mon',13)" ondragstart="drag2(event,'fy','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsmon14" ondrop="drop2(event,'fy','fs','mon',14)" ondragstart="drag2(event,'fy','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsmon15" ondrop="drop2(event,'fy','fs','mon',15)" ondragstart="drag2(event,'fy','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true" ></td>
								<td class="border" class="scale" id="fyfsmon16" ondrop="drop2(event,'fy','fs','mon',16)" ondragstart="drag2(event,'fy','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsmon17" ondrop="drop2(event,'fy','fs','mon',16)" ondragstart="drag2(event,'fy','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="borderRED">
								<th class="border" style="background-color:yellow">SY</th>
								<td class="border" class="scale" id="syfsmon8" ondrop="drop2(event,'sy','fs','mon',8)" ondragstart="drag2(event,'sy','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsmon9" ondrop="drop2(event,'sy','fs','mon',9)" ondragstart="drag2(event,'sy','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsmon10" ondrop="drop2(event,'sy','fs','mon',10)" ondragstart="drag2(event,'sy','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsmon11" ondrop="drop2(event,'sy','fs','mon',11)" ondragstart="drag2(event,'sy','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsmon12" ondrop="drop2(event,'sy','fs','mon',12)" ondragstart="drag2(event,'sy','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsmon13" ondrop="drop2(event,'sy','fs','mon',13)" ondragstart="drag2(event,'sy','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsmon14" ondrop="drop2(event,'sy','fs','mon',14)" ondragstart="drag2(event,'sy','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsmon15" ondrop="drop2(event,'sy','fs','mon',15)" ondragstart="drag2(event,'sy','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsmon16" ondrop="drop2(event,'sy','fs','mon',16)" ondragstart="drag2(event,'sy','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsmon17" ondrop="drop2(event,'sy','fs','mon',17)" ondragstart="drag2(event,'sy','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:cyan">TY</th>
								<td class="border" class="scale" id="tyfsmon8" ondrop="drop2(event,'ty','fs','mon',8)" ondragstart="drag2(event,'ty','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsmon9" ondrop="drop2(event,'ty','fs','mon',9)" ondragstart="drag2(event,'ty','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsmon10" ondrop="drop2(event,'ty','fs','mon',10)" ondragstart="drag2(event,'ty','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsmon11" ondrop="drop2(event,'ty','fs','mon',11)" ondragstart="drag2(event,'ty','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsmon12" ondrop="drop2(event,'ty','fs','mon',12)" ondragstart="drag2(event,'ty','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsmon13" ondrop="drop2(event,'ty','fs','mon',13)" ondragstart="drag2(event,'ty','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsmon14" ondrop="drop2(event,'ty','fs','mon',14)" ondragstart="drag2(event,'ty','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsmon15" ondrop="drop2(event,'ty','fs','mon',15)" ondragstart="drag2(event,'ty','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsmon16" ondrop="drop2(event,'ty','fs','mon',16)" ondragstart="drag2(event,'ty','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale"id="tyfsmon17" ondrop="drop2(event,'ty','fs','mon',17)" ondragstart="drag2(event,'ty','fs','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" class="center" rowspan=3 style="background-color:blue;color:white">SS</th>
								<th class="border" style="background-color:lime">FY</th>
								<td class="border" class="scale" id="fyssmon8" ondrop="drop2(event,'fy','ss','mon',8)" ondragstart="drag2(event,'fy','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssmon9" ondrop="drop2(event,'fy','ss','mon',9)" ondragstart="drag2(event,'fy','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssmon10" ondrop="drop2(event,'fy','ss','mon',10)" ondragstart="drag2(event,'fy','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssmon11" ondrop="drop2(event,'fy','ss','mon',11)" ondragstart="drag2(event,'fy','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssmon12" ondrop="drop2(event,'fy','ss','mon',12)" ondragstart="drag2(event,'fy','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssmon13" ondrop="drop2(event,'fy','ss','mon',13)" ondragstart="drag2(event,'fy','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssmon14" ondrop="drop2(event,'fy','ss','mon',14)" ondragstart="drag2(event,'fy','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssmon15" ondrop="drop2(event,'fy','ss','mon',15)" ondragstart="drag2(event,'fy','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssmon16" ondrop="drop2(event,'fy','ss','mon',16)" ondragstart="drag2(event,'fy','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssmon17" ondrop="drop2(event,'fy','ss','mon',17)" ondragstart="drag2(event,'fy','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:yellow">SY</th>
								<td class="border" class="scale" id="syssmon8" ondrop="drop2(event,'sy','ss','mon',8)" ondragstart="drag2(event,'sy','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssmon9" ondrop="drop2(event,'sy','ss','mon',9)" ondragstart="drag2(event,'sy','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssmon10" ondrop="drop2(event,'sy','ss','mon',10)" ondragstart="drag2(event,'sy','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssmon11" ondrop="drop2(event,'sy','ss','mon',11)" ondragstart="drag2(event,'sy','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssmon12" ondrop="drop2(event,'sy','ss','mon',12)" ondragstart="drag2(event,'sy','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssmon13" ondrop="drop2(event,'sy','ss','mon',13)" ondragstart="drag2(event,'sy','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssmon14" ondrop="drop2(event,'sy','ss','mon',14)" ondragstart="drag2(event,'sy','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssmon15" ondrop="drop2(event,'sy','ss','mon',15)" ondragstart="drag2(event,'sy','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssmon16" ondrop="drop2(event,'sy','ss','mon',16)" ondragstart="drag2(event,'sy','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssmon17" ondrop="drop2(event,'sy','ss','mon',17)" ondragstart="drag2(event,'sy','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:cyan">TY</th>
								<td class="border" class="scale" id="tyssmon8" ondrop="drop2(event,'ty','ss','mon',8)" ondragstart="drag2(event,'ty','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssmon9" ondrop="drop2(event,'ty','ss','mon',9)" ondragstart="drag2(event,'ty','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssmon10" ondrop="drop2(event,'ty','ss','mon',10)" ondragstart="drag2(event,'ty','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssmon11" ondrop="drop2(event,'ty','ss','mon',11)" ondragstart="drag2(event,'ty','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssmon12" ondrop="drop2(event,'ty','ss','mon',12)" ondragstart="drag2(event,'ty','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssmon13" ondrop="drop2(event,'ty','ss','mon',13)" ondragstart="drag2(event,'ty','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssmon14" ondrop="drop2(event,'ty','ss','mon',14)" ondragstart="drag2(event,'ty','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssmon15" ondrop="drop2(event,'ty','ss','mon',15)" ondragstart="drag2(event,'ty','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssmon16" ondrop="drop2(event,'ty','ss','mon',16)" ondragstart="drag2(event,'ty','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssmon17" ondrop="drop2(event,'ty','ss','mon',17)" ondragstart="drag2(event,'ty','ss','mon')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
<!------tuesday---------->
							<tr class="border">
								<th class="border" class="center" id="dayid" rowspan=6  style="background-color:red;color:white"><p>T</br>U</br>E</br>S</br>D</br>A</br>Y</p></th>
								<th class="border" class="center" rowspan=3 style="background-color:orange;color:white">FS</th>
								<th class="border" style="background-color:lime">FY</th>
								<td class="border" class="scale" id="fyfstue8" ondrop="drop2(event,'fy','fs','tue',8)" ondragstart="drag2(event,'fy','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfstue9" ondrop="drop2(event,'fy','fs','tue',9)" ondragstart="drag2(event,'fy','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfstue10" ondrop="drop2(event,'fy','fs','tue',10)" ondragstart="drag2(event,'fy','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfstue11" ondrop="drop2(event,'fy','fs','tue',11)" ondragstart="drag2(event,'fy','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfstue12" ondrop="drop2(event,'fy','fs','tue',12)" ondragstart="drag2(event,'fy','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfstue13" ondrop="drop2(event,'fy','fs','tue',13)" ondragstart="drag2(event,'fy','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfstue14" ondrop="drop2(event,'fy','fs','tue',14)" ondragstart="drag2(event,'fy','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfstue15" ondrop="drop2(event,'fy','fs','tue',15)" ondragstart="drag2(event,'fy','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true" ></td>
								<td class="border" class="scale" id="fyfstue16" ondrop="drop2(event,'fy','fs','tue',16)" ondragstart="drag2(event,'fy','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfstue17" ondrop="drop2(event,'fy','fs','tue',16)" ondragstart="drag2(event,'fy','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:yellow">SY</th>
								<td class="border" class="scale" id="syfstue8" ondrop="drop2(event,'sy','fs','tue',8)" ondragstart="drag2(event,'sy','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfstue9" ondrop="drop2(event,'sy','fs','tue',9)" ondragstart="drag2(event,'sy','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfstue10" ondrop="drop2(event,'sy','fs','tue',10)" ondragstart="drag2(event,'sy','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfstue11" ondrop="drop2(event,'sy','fs','tue',11)" ondragstart="drag2(event,'sy','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfstue12" ondrop="drop2(event,'sy','fs','tue',12)" ondragstart="drag2(event,'sy','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfstue13" ondrop="drop2(event,'sy','fs','tue',13)" ondragstart="drag2(event,'sy','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfstue14" ondrop="drop2(event,'sy','fs','tue',14)" ondragstart="drag2(event,'sy','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfstue15" ondrop="drop2(event,'sy','fs','tue',15)" ondragstart="drag2(event,'sy','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfstue16" ondrop="drop2(event,'sy','fs','tue',16)" ondragstart="drag2(event,'sy','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfstue17" ondrop="drop2(event,'sy','fs','tue',17)" ondragstart="drag2(event,'sy','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:cyan">TY</th>
								<td class="border" class="scale" id="tyfstue8" ondrop="drop2(event,'ty','fs','tue',8)" ondragstart="drag2(event,'ty','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfstue9" ondrop="drop2(event,'ty','fs','tue',9)" ondragstart="drag2(event,'ty','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfstue10" ondrop="drop2(event,'ty','fs','tue',10)" ondragstart="drag2(event,'ty','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfstue11" ondrop="drop2(event,'ty','fs','tue',11)" ondragstart="drag2(event,'ty','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfstue12" ondrop="drop2(event,'ty','fs','tue',12)" ondragstart="drag2(event,'ty','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfstue13" ondrop="drop2(event,'ty','fs','tue',13)" ondragstart="drag2(event,'ty','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfstue14" ondrop="drop2(event,'ty','fs','tue',14)" ondragstart="drag2(event,'ty','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfstue15" ondrop="drop2(event,'ty','fs','tue',15)" ondragstart="drag2(event,'ty','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfstue16" ondrop="drop2(event,'ty','fs','tue',16)" ondragstart="drag2(event,'ty','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale"id="tyfstue17" ondrop="drop2(event,'ty','fs','tue',17)" ondragstart="drag2(event,'ty','fs','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" class="center" rowspan=3 style="background-color:blue;color:white">SS</th>
								<th class="border" style="background-color:lime">FY</th>
								<td class="border" class="scale" id="fysstue8" ondrop="drop2(event,'fy','ss','tue',8)" ondragstart="drag2(event,'fy','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysstue9" ondrop="drop2(event,'fy','ss','tue',9)" ondragstart="drag2(event,'fy','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysstue10" ondrop="drop2(event,'fy','ss','tue',10)" ondragstart="drag2(event,'fy','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysstue11" ondrop="drop2(event,'fy','ss','tue',11)" ondragstart="drag2(event,'fy','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysstue12" ondrop="drop2(event,'fy','ss','tue',12)" ondragstart="drag2(event,'fy','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysstue13" ondrop="drop2(event,'fy','ss','tue',13)" ondragstart="drag2(event,'fy','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysstue14" ondrop="drop2(event,'fy','ss','tue',14)" ondragstart="drag2(event,'fy','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysstue15" ondrop="drop2(event,'fy','ss','tue',15)" ondragstart="drag2(event,'fy','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysstue16" ondrop="drop2(event,'fy','ss','tue',16)" ondragstart="drag2(event,'fy','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysstue17" ondrop="drop2(event,'fy','ss','tue',17)" ondragstart="drag2(event,'fy','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:yellow">SY</th>
								<td class="border" class="scale" id="sysstue8" ondrop="drop2(event,'sy','ss','tue',8)" ondragstart="drag2(event,'sy','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysstue9" ondrop="drop2(event,'sy','ss','tue',9)" ondragstart="drag2(event,'sy','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysstue10" ondrop="drop2(event,'sy','ss','tue',10)" ondragstart="drag2(event,'sy','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysstue11" ondrop="drop2(event,'sy','ss','tue',11)" ondragstart="drag2(event,'sy','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysstue12" ondrop="drop2(event,'sy','ss','tue',12)" ondragstart="drag2(event,'sy','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysstue13" ondrop="drop2(event,'sy','ss','tue',13)" ondragstart="drag2(event,'sy','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysstue14" ondrop="drop2(event,'sy','ss','tue',14)" ondragstart="drag2(event,'sy','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysstue15" ondrop="drop2(event,'sy','ss','tue',15)" ondragstart="drag2(event,'sy','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysstue16" ondrop="drop2(event,'sy','ss','tue',16)" ondragstart="drag2(event,'sy','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysstue17" ondrop="drop2(event,'sy','ss','tue',17)" ondragstart="drag2(event,'sy','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:cyan">TY</th>
								<td class="border" class="scale" id="tysstue8" ondrop="drop2(event,'ty','ss','tue',8)" ondragstart="drag2(event,'ty','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysstue9" ondrop="drop2(event,'ty','ss','tue',9)" ondragstart="drag2(event,'ty','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysstue10" ondrop="drop2(event,'ty','ss','tue',10)" ondragstart="drag2(event,'ty','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysstue11" ondrop="drop2(event,'ty','ss','tue',11)" ondragstart="drag2(event,'ty','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysstue12" ondrop="drop2(event,'ty','ss','tue',12)" ondragstart="drag2(event,'ty','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysstue13" ondrop="drop2(event,'ty','ss','tue',13)" ondragstart="drag2(event,'ty','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysstue14" ondrop="drop2(event,'ty','ss','tue',14)" ondragstart="drag2(event,'ty','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysstue15" ondrop="drop2(event,'ty','ss','tue',15)" ondragstart="drag2(event,'ty','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysstue16" ondrop="drop2(event,'ty','ss','tue',16)" ondragstart="drag2(event,'ty','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysstue17" ondrop="drop2(event,'ty','ss','tue',17)" ondragstart="drag2(event,'ty','ss','tue')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
<!-------wednesday---------->
							<tr class="border">
								<th class="border" class="center" id="dayid" rowspan=6  style="background-color:red;color:white"><p>W</br>E</br>D</br>N</br>E</br>S</br>D</br>A</br>Y</p></th>
								<th class="border" class="center" rowspan=3 style="background-color:orange;color:white">FS</th>
								<th class="border" style="background-color:lime">FY</th>
								<td class="border" class="scale" id="fyfswed8" ondrop="drop2(event,'fy','fs','wed',8)" ondragstart="drag2(event,'fy','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfswed9" ondrop="drop2(event,'fy','fs','wed',9)" ondragstart="drag2(event,'fy','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfswed10" ondrop="drop2(event,'fy','fs','wed',10)" ondragstart="drag2(event,'fy','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfswed11" ondrop="drop2(event,'fy','fs','wed',11)" ondragstart="drag2(event,'fy','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfswed12" ondrop="drop2(event,'fy','fs','wed',12)" ondragstart="drag2(event,'fy','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfswed13" ondrop="drop2(event,'fy','fs','wed',13)" ondragstart="drag2(event,'fy','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfswed14" ondrop="drop2(event,'fy','fs','wed',14)" ondragstart="drag2(event,'fy','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfswed15" ondrop="drop2(event,'fy','fs','wed',15)" ondragstart="drag2(event,'fy','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true" ></td>
								<td class="border" class="scale" id="fyfswed16" ondrop="drop2(event,'fy','fs','wed',16)" ondragstart="drag2(event,'fy','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfswed17" ondrop="drop2(event,'fy','fs','wed',16)" ondragstart="drag2(event,'fy','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:yellow">SY</th>
								<td class="border" class="scale" id="syfswed8" ondrop="drop2(event,'sy','fs','wed',8)" ondragstart="drag2(event,'sy','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfswed9" ondrop="drop2(event,'sy','fs','wed',9)" ondragstart="drag2(event,'sy','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfswed10" ondrop="drop2(event,'sy','fs','wed',10)" ondragstart="drag2(event,'sy','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfswed11" ondrop="drop2(event,'sy','fs','wed',11)" ondragstart="drag2(event,'sy','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfswed12" ondrop="drop2(event,'sy','fs','wed',12)" ondragstart="drag2(event,'sy','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfswed13" ondrop="drop2(event,'sy','fs','wed',13)" ondragstart="drag2(event,'sy','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfswed14" ondrop="drop2(event,'sy','fs','wed',14)" ondragstart="drag2(event,'sy','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfswed15" ondrop="drop2(event,'sy','fs','wed',15)" ondragstart="drag2(event,'sy','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfswed16" ondrop="drop2(event,'sy','fs','wed',16)" ondragstart="drag2(event,'sy','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfswed17" ondrop="drop2(event,'sy','fs','wed',17)" ondragstart="drag2(event,'sy','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:cyan">TY</th>
								<td class="border" class="scale" id="tyfswed8" ondrop="drop2(event,'ty','fs','wed',8)" ondragstart="drag2(event,'ty','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfswed9" ondrop="drop2(event,'ty','fs','wed',9)" ondragstart="drag2(event,'ty','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfswed10" ondrop="drop2(event,'ty','fs','wed',10)" ondragstart="drag2(event,'ty','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfswed11" ondrop="drop2(event,'ty','fs','wed',11)" ondragstart="drag2(event,'ty','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfswed12" ondrop="drop2(event,'ty','fs','wed',12)" ondragstart="drag2(event,'ty','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfswed13" ondrop="drop2(event,'ty','fs','wed',13)" ondragstart="drag2(event,'ty','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfswed14" ondrop="drop2(event,'ty','fs','wed',14)" ondragstart="drag2(event,'ty','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfswed15" ondrop="drop2(event,'ty','fs','wed',15)" ondragstart="drag2(event,'ty','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfswed16" ondrop="drop2(event,'ty','fs','wed',16)" ondragstart="drag2(event,'ty','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale"id="tyfswed17" ondrop="drop2(event,'ty','fs','wed',17)" ondragstart="drag2(event,'ty','fs','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" class="center" rowspan=3 style="background-color:blue;color:white">SS</th>
								<th class="border" style="background-color:lime">FY</th>
								<td class="border" class="scale" id="fysswed8" ondrop="drop2(event,'fy','ss','wed',8)" ondragstart="drag2(event,'fy','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysswed9" ondrop="drop2(event,'fy','ss','wed',9)" ondragstart="drag2(event,'fy','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysswed10" ondrop="drop2(event,'fy','ss','wed',10)" ondragstart="drag2(event,'fy','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysswed11" ondrop="drop2(event,'fy','ss','wed',11)" ondragstart="drag2(event,'fy','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysswed12" ondrop="drop2(event,'fy','ss','wed',12)" ondragstart="drag2(event,'fy','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysswed13" ondrop="drop2(event,'fy','ss','wed',13)" ondragstart="drag2(event,'fy','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysswed14" ondrop="drop2(event,'fy','ss','wed',14)" ondragstart="drag2(event,'fy','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysswed15" ondrop="drop2(event,'fy','ss','wed',15)" ondragstart="drag2(event,'fy','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysswed16" ondrop="drop2(event,'fy','ss','wed',16)" ondragstart="drag2(event,'fy','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysswed17" ondrop="drop2(event,'fy','ss','wed',17)" ondragstart="drag2(event,'fy','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:yellow">SY</th>
								<td class="border" class="scale" id="sysswed8" ondrop="drop2(event,'sy','ss','wed',8)" ondragstart="drag2(event,'sy','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysswed9" ondrop="drop2(event,'sy','ss','wed',9)" ondragstart="drag2(event,'sy','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysswed10" ondrop="drop2(event,'sy','ss','wed',10)" ondragstart="drag2(event,'sy','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysswed11" ondrop="drop2(event,'sy','ss','wed',11)" ondragstart="drag2(event,'sy','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysswed12" ondrop="drop2(event,'sy','ss','wed',12)" ondragstart="drag2(event,'sy','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysswed13" ondrop="drop2(event,'sy','ss','wed',13)" ondragstart="drag2(event,'sy','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysswed14" ondrop="drop2(event,'sy','ss','wed',14)" ondragstart="drag2(event,'sy','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysswed15" ondrop="drop2(event,'sy','ss','wed',15)" ondragstart="drag2(event,'sy','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysswed16" ondrop="drop2(event,'sy','ss','wed',16)" ondragstart="drag2(event,'sy','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysswed17" ondrop="drop2(event,'sy','ss','wed',17)" ondragstart="drag2(event,'sy','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:cyan">TY</th>
								<td class="border" class="scale" id="tysswed8" ondrop="drop2(event,'ty','ss','wed',8)" ondragstart="drag2(event,'ty','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysswed9" ondrop="drop2(event,'ty','ss','wed',9)" ondragstart="drag2(event,'ty','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysswed10" ondrop="drop2(event,'ty','ss','wed',10)" ondragstart="drag2(event,'ty','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysswed11" ondrop="drop2(event,'ty','ss','wed',11)" ondragstart="drag2(event,'ty','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysswed12" ondrop="drop2(event,'ty','ss','wed',12)" ondragstart="drag2(event,'ty','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysswed13" ondrop="drop2(event,'ty','ss','wed',13)" ondragstart="drag2(event,'ty','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysswed14" ondrop="drop2(event,'ty','ss','wed',14)" ondragstart="drag2(event,'ty','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysswed15" ondrop="drop2(event,'ty','ss','wed',15)" ondragstart="drag2(event,'ty','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysswed16" ondrop="drop2(event,'ty','ss','wed',16)" ondragstart="drag2(event,'ty','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysswed17" ondrop="drop2(event,'ty','ss','wed',17)" ondragstart="drag2(event,'ty','ss','wed')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
<!------thursday-------->
							<tr class="border">
								<th class="border" class="center" id="dayid" rowspan=6  style="background-color:red;color:white"><p>T</br>H</br>U</br>R</br>S</br>D</br>A</br>Y</p></th>
								<th class="border" class="center" rowspan=3 style="background-color:orange;color:white">FS</th>
								<th class="border" style="background-color:lime">FY</th>
								<td class="border" class="scale" id="fyfsthu8" ondrop="drop2(event,'fy','fs','thu',8)" ondragstart="drag2(event,'fy','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsthu9" ondrop="drop2(event,'fy','fs','thu',9)" ondragstart="drag2(event,'fy','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsthu10" ondrop="drop2(event,'fy','fs','thu',10)" ondragstart="drag2(event,'fy','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsthu11" ondrop="drop2(event,'fy','fs','thu',11)" ondragstart="drag2(event,'fy','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsthu12" ondrop="drop2(event,'fy','fs','thu',12)" ondragstart="drag2(event,'fy','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsthu13" ondrop="drop2(event,'fy','fs','thu',13)" ondragstart="drag2(event,'fy','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsthu14" ondrop="drop2(event,'fy','fs','thu',14)" ondragstart="drag2(event,'fy','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsthu15" ondrop="drop2(event,'fy','fs','thu',15)" ondragstart="drag2(event,'fy','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true" ></td>
								<td class="border" class="scale" id="fyfsthu16" ondrop="drop2(event,'fy','fs','thu',16)" ondragstart="drag2(event,'fy','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsthu17" ondrop="drop2(event,'fy','fs','thu',16)" ondragstart="drag2(event,'fy','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:yellow">SY</th>
								<td class="border" class="scale" id="syfsthu8" ondrop="drop2(event,'sy','fs','thu',8)" ondragstart="drag2(event,'sy','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsthu9" ondrop="drop2(event,'sy','fs','thu',9)" ondragstart="drag2(event,'sy','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsthu10" ondrop="drop2(event,'sy','fs','thu',10)" ondragstart="drag2(event,'sy','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsthu11" ondrop="drop2(event,'sy','fs','thu',11)" ondragstart="drag2(event,'sy','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsthu12" ondrop="drop2(event,'sy','fs','thu',12)" ondragstart="drag2(event,'sy','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsthu13" ondrop="drop2(event,'sy','fs','thu',13)" ondragstart="drag2(event,'sy','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsthu14" ondrop="drop2(event,'sy','fs','thu',14)" ondragstart="drag2(event,'sy','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsthu15" ondrop="drop2(event,'sy','fs','thu',15)" ondragstart="drag2(event,'sy','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsthu16" ondrop="drop2(event,'sy','fs','thu',16)" ondragstart="drag2(event,'sy','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsthu17" ondrop="drop2(event,'sy','fs','thu',17)" ondragstart="drag2(event,'sy','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:cyan">TY</th>
								<td class="border" class="scale" id="tyfsthu8" ondrop="drop2(event,'ty','fs','thu',8)" ondragstart="drag2(event,'ty','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsthu9" ondrop="drop2(event,'ty','fs','thu',9)" ondragstart="drag2(event,'ty','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsthu10" ondrop="drop2(event,'ty','fs','thu',10)" ondragstart="drag2(event,'ty','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsthu11" ondrop="drop2(event,'ty','fs','thu',11)" ondragstart="drag2(event,'ty','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsthu12" ondrop="drop2(event,'ty','fs','thu',12)" ondragstart="drag2(event,'ty','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsthu13" ondrop="drop2(event,'ty','fs','thu',13)" ondragstart="drag2(event,'ty','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsthu14" ondrop="drop2(event,'ty','fs','thu',14)" ondragstart="drag2(event,'ty','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsthu15" ondrop="drop2(event,'ty','fs','thu',15)" ondragstart="drag2(event,'ty','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsthu16" ondrop="drop2(event,'ty','fs','thu',16)" ondragstart="drag2(event,'ty','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale"id="tyfsthu17" ondrop="drop2(event,'ty','fs','thu',17)" ondragstart="drag2(event,'ty','fs','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" class="center" rowspan=3 style="background-color:blue;color:white">SS</th>
								<th class="border" style="background-color:lime">FY</th>
								<td class="border" class="scale" id="fyssthu8" ondrop="drop2(event,'fy','ss','thu',8)" ondragstart="drag2(event,'fy','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssthu9" ondrop="drop2(event,'fy','ss','thu',9)" ondragstart="drag2(event,'fy','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssthu10" ondrop="drop2(event,'fy','ss','thu',10)" ondragstart="drag2(event,'fy','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssthu11" ondrop="drop2(event,'fy','ss','thu',11)" ondragstart="drag2(event,'fy','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssthu12" ondrop="drop2(event,'fy','ss','thu',12)" ondragstart="drag2(event,'fy','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssthu13" ondrop="drop2(event,'fy','ss','thu',13)" ondragstart="drag2(event,'fy','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssthu14" ondrop="drop2(event,'fy','ss','thu',14)" ondragstart="drag2(event,'fy','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssthu15" ondrop="drop2(event,'fy','ss','thu',15)" ondragstart="drag2(event,'fy','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssthu16" ondrop="drop2(event,'fy','ss','thu',16)" ondragstart="drag2(event,'fy','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssthu17" ondrop="drop2(event,'fy','ss','thu',17)" ondragstart="drag2(event,'fy','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:yellow">SY</th>
								<td class="border" class="scale" id="syssthu8" ondrop="drop2(event,'sy','ss','thu',8)" ondragstart="drag2(event,'sy','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssthu9" ondrop="drop2(event,'sy','ss','thu',9)" ondragstart="drag2(event,'sy','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssthu10" ondrop="drop2(event,'sy','ss','thu',10)" ondragstart="drag2(event,'sy','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssthu11" ondrop="drop2(event,'sy','ss','thu',11)" ondragstart="drag2(event,'sy','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssthu12" ondrop="drop2(event,'sy','ss','thu',12)" ondragstart="drag2(event,'sy','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssthu13" ondrop="drop2(event,'sy','ss','thu',13)" ondragstart="drag2(event,'sy','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssthu14" ondrop="drop2(event,'sy','ss','thu',14)" ondragstart="drag2(event,'sy','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssthu15" ondrop="drop2(event,'sy','ss','thu',15)" ondragstart="drag2(event,'sy','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssthu16" ondrop="drop2(event,'sy','ss','thu',16)" ondragstart="drag2(event,'sy','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssthu17" ondrop="drop2(event,'sy','ss','thu',17)" ondragstart="drag2(event,'sy','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:cyan">TY</th>
								<td class="border" class="scale" id="tyssthu8" ondrop="drop2(event,'ty','ss','thu',8)" ondragstart="drag2(event,'ty','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssthu9" ondrop="drop2(event,'ty','ss','thu',9)" ondragstart="drag2(event,'ty','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssthu10" ondrop="drop2(event,'ty','ss','thu',10)" ondragstart="drag2(event,'ty','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssthu11" ondrop="drop2(event,'ty','ss','thu',11)" ondragstart="drag2(event,'ty','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssthu12" ondrop="drop2(event,'ty','ss','thu',12)" ondragstart="drag2(event,'ty','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssthu13" ondrop="drop2(event,'ty','ss','thu',13)" ondragstart="drag2(event,'ty','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssthu14" ondrop="drop2(event,'ty','ss','thu',14)" ondragstart="drag2(event,'ty','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssthu15" ondrop="drop2(event,'ty','ss','thu',15)" ondragstart="drag2(event,'ty','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssthu16" ondrop="drop2(event,'ty','ss','thu',16)" ondragstart="drag2(event,'ty','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssthu17" ondrop="drop2(event,'ty','ss','thu',17)" ondragstart="drag2(event,'ty','ss','thu')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
	<!----friday--------->
							<tr class="border">
								<th class="border" class="center" rowspan=6  style="background-color:red;color:white"><p>F</br>R</br>I</br>D</br>A</br>Y</p></th>
								<th class="border" class="center" rowspan=3 style="background-color:orange;color:white">FS</th>
								<th class="border" style="background-color:lime">FY</th>
								<td class="border" class="scale" id="fyfsfri8" ondrop="drop2(event,'fy','fs','fri',8)" ondragstart="drag2(event,'fy','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsfri9" ondrop="drop2(event,'fy','fs','fri',9)" ondragstart="drag2(event,'fy','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsfri10" ondrop="drop2(event,'fy','fs','fri',10)" ondragstart="drag2(event,'fy','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsfri11" ondrop="drop2(event,'fy','fs','fri',11)" ondragstart="drag2(event,'fy','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsfri12" ondrop="drop2(event,'fy','fs','fri',12)" ondragstart="drag2(event,'fy','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsfri13" ondrop="drop2(event,'fy','fs','fri',13)" ondragstart="drag2(event,'fy','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsfri14" ondrop="drop2(event,'fy','fs','fri',14)" ondragstart="drag2(event,'fy','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsfri15" ondrop="drop2(event,'fy','fs','fri',15)" ondragstart="drag2(event,'fy','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true" ></td>
								<td class="border" class="scale" id="fyfsfri16" ondrop="drop2(event,'fy','fs','fri',16)" ondragstart="drag2(event,'fy','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfsfri17" ondrop="drop2(event,'fy','fs','fri',16)" ondragstart="drag2(event,'fy','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:yellow">SY</th>
								<td class="border" class="scale" id="syfsfri8" ondrop="drop2(event,'sy','fs','fri',8)" ondragstart="drag2(event,'sy','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsfri9" ondrop="drop2(event,'sy','fs','fri',9)" ondragstart="drag2(event,'sy','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsfri10" ondrop="drop2(event,'sy','fs','fri',10)" ondragstart="drag2(event,'sy','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsfri11" ondrop="drop2(event,'sy','fs','fri',11)" ondragstart="drag2(event,'sy','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsfri12" ondrop="drop2(event,'sy','fs','fri',12)" ondragstart="drag2(event,'sy','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsfri13" ondrop="drop2(event,'sy','fs','fri',13)" ondragstart="drag2(event,'sy','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsfri14" ondrop="drop2(event,'sy','fs','fri',14)" ondragstart="drag2(event,'sy','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsfri15" ondrop="drop2(event,'sy','fs','fri',15)" ondragstart="drag2(event,'sy','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsfri16" ondrop="drop2(event,'sy','fs','fri',16)" ondragstart="drag2(event,'sy','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfsfri17" ondrop="drop2(event,'sy','fs','fri',17)" ondragstart="drag2(event,'sy','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:cyan">TY</th>
								<td class="border" class="scale" id="tyfsfri8" ondrop="drop2(event,'ty','fs','fri',8)" ondragstart="drag2(event,'ty','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsfri9" ondrop="drop2(event,'ty','fs','fri',9)" ondragstart="drag2(event,'ty','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsfri10" ondrop="drop2(event,'ty','fs','fri',10)" ondragstart="drag2(event,'ty','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsfri11" ondrop="drop2(event,'ty','fs','fri',11)" ondragstart="drag2(event,'ty','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsfri12" ondrop="drop2(event,'ty','fs','fri',12)" ondragstart="drag2(event,'ty','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsfri13" ondrop="drop2(event,'ty','fs','fri',13)" ondragstart="drag2(event,'ty','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsfri14" ondrop="drop2(event,'ty','fs','fri',14)" ondragstart="drag2(event,'ty','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsfri15" ondrop="drop2(event,'ty','fs','fri',15)" ondragstart="drag2(event,'ty','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfsfri16" ondrop="drop2(event,'ty','fs','fri',16)" ondragstart="drag2(event,'ty','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale"id="tyfsfri17" ondrop="drop2(event,'ty','fs','fri',17)" ondragstart="drag2(event,'ty','fs','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" class="center" rowspan=3 style="background-color:blue;color:white">SS</th>
								<th class="border" style="background-color:lime">FY</th>
								<td class="border" class="scale" id="fyssfri8" ondrop="drop2(event,'fy','ss','fri',8)" ondragstart="drag2(event,'fy','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssfri9" ondrop="drop2(event,'fy','ss','fri',9)" ondragstart="drag2(event,'fy','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssfri10" ondrop="drop2(event,'fy','ss','fri',10)" ondragstart="drag2(event,'fy','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssfri11" ondrop="drop2(event,'fy','ss','fri',11)" ondragstart="drag2(event,'fy','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssfri12" ondrop="drop2(event,'fy','ss','fri',12)" ondragstart="drag2(event,'fy','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssfri13" ondrop="drop2(event,'fy','ss','fri',13)" ondragstart="drag2(event,'fy','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssfri14" ondrop="drop2(event,'fy','ss','fri',14)" ondragstart="drag2(event,'fy','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssfri15" ondrop="drop2(event,'fy','ss','fri',15)" ondragstart="drag2(event,'fy','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssfri16" ondrop="drop2(event,'fy','ss','fri',16)" ondragstart="drag2(event,'fy','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyssfri17" ondrop="drop2(event,'fy','ss','fri',17)" ondragstart="drag2(event,'fy','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:yellow">SY</th>
								<td class="border" class="scale" id="syssfri8" ondrop="drop2(event,'sy','ss','fri',8)" ondragstart="drag2(event,'sy','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssfri9" ondrop="drop2(event,'sy','ss','fri',9)" ondragstart="drag2(event,'sy','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssfri10" ondrop="drop2(event,'sy','ss','fri',10)" ondragstart="drag2(event,'sy','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssfri11" ondrop="drop2(event,'sy','ss','fri',11)" ondragstart="drag2(event,'sy','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssfri12" ondrop="drop2(event,'sy','ss','fri',12)" ondragstart="drag2(event,'sy','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssfri13" ondrop="drop2(event,'sy','ss','fri',13)" ondragstart="drag2(event,'sy','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssfri14" ondrop="drop2(event,'sy','ss','fri',14)" ondragstart="drag2(event,'sy','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssfri15" ondrop="drop2(event,'sy','ss','fri',15)" ondragstart="drag2(event,'sy','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssfri16" ondrop="drop2(event,'sy','ss','fri',16)" ondragstart="drag2(event,'sy','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syssfri17" ondrop="drop2(event,'sy','ss','fri',17)" ondragstart="drag2(event,'sy','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:cyan">TY</th>
								<td class="border" class="scale" id="tyssfri8" ondrop="drop2(event,'ty','ss','fri',8)" ondragstart="drag2(event,'ty','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssfri9" ondrop="drop2(event,'ty','ss','fri',9)" ondragstart="drag2(event,'ty','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssfri10" ondrop="drop2(event,'ty','ss','fri',10)" ondragstart="drag2(event,'ty','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssfri11" ondrop="drop2(event,'ty','ss','fri',11)" ondragstart="drag2(event,'ty','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssfri12" ondrop="drop2(event,'ty','ss','fri',12)" ondragstart="drag2(event,'ty','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssfri13" ondrop="drop2(event,'ty','ss','fri',13)" ondragstart="drag2(event,'ty','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssfri14" ondrop="drop2(event,'ty','ss','fri',14)" ondragstart="drag2(event,'ty','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssfri15" ondrop="drop2(event,'ty','ss','fri',15)" ondragstart="drag2(event,'ty','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssfri16" ondrop="drop2(event,'ty','ss','fri',16)" ondragstart="drag2(event,'ty','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyssfri17" ondrop="drop2(event,'ty','ss','fri',17)" ondragstart="drag2(event,'ty','ss','fri')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
	<!------saturday------->
							<tr class="border">
								<th class="border" class="center" id="dayid" rowspan=6  style="background-color:red;color:white"><p>S</br>A</br>T</br>U</br>R</br>D</br>A</br>Y</p></th>
								<th class="border" class="center" rowspan=3 style="background-color:orange;color:white">FS</th>
								<th class="border" style="background-color:lime">FY</th>
								<td class="border" class="scale" id="fyfssat8" ondrop="drop2(event,'fy','fs','sat',8)" ondragstart="drag2(event,'fy','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfssat9" ondrop="drop2(event,'fy','fs','sat',9)" ondragstart="drag2(event,'fy','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfssat10" ondrop="drop2(event,'fy','fs','sat',10)" ondragstart="drag2(event,'fy','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfssat11" ondrop="drop2(event,'fy','fs','sat',11)" ondragstart="drag2(event,'fy','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfssat12" ondrop="drop2(event,'fy','fs','sat',12)" ondragstart="drag2(event,'fy','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfssat13" ondrop="drop2(event,'fy','fs','sat',13)" ondragstart="drag2(event,'fy','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfssat14" ondrop="drop2(event,'fy','fs','sat',14)" ondragstart="drag2(event,'fy','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfssat15" ondrop="drop2(event,'fy','fs','sat',15)" ondragstart="drag2(event,'fy','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true" ></td>
								<td class="border" class="scale" id="fyfssat16" ondrop="drop2(event,'fy','fs','sat',16)" ondragstart="drag2(event,'fy','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fyfssat17" ondrop="drop2(event,'fy','fs','sat',16)" ondragstart="drag2(event,'fy','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:yellow">SY</th>
								<td class="border" class="scale" id="syfssat8" ondrop="drop2(event,'sy','fs','sat',8)" ondragstart="drag2(event,'sy','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfssat9" ondrop="drop2(event,'sy','fs','sat',9)" ondragstart="drag2(event,'sy','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfssat10" ondrop="drop2(event,'sy','fs','sat',10)" ondragstart="drag2(event,'sy','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfssat11" ondrop="drop2(event,'sy','fs','sat',11)" ondragstart="drag2(event,'sy','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfssat12" ondrop="drop2(event,'sy','fs','sat',12)" ondragstart="drag2(event,'sy','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfssat13" ondrop="drop2(event,'sy','fs','sat',13)" ondragstart="drag2(event,'sy','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfssat14" ondrop="drop2(event,'sy','fs','sat',14)" ondragstart="drag2(event,'sy','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfssat15" ondrop="drop2(event,'sy','fs','sat',15)" ondragstart="drag2(event,'sy','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfssat16" ondrop="drop2(event,'sy','fs','sat',16)" ondragstart="drag2(event,'sy','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="syfssat17" ondrop="drop2(event,'sy','fs','sat',17)" ondragstart="drag2(event,'sy','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:cyan">TY</th>
								<td class="border" class="scale" id="tyfssat8" ondrop="drop2(event,'ty','fs','sat',8)" ondragstart="drag2(event,'ty','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfssat9" ondrop="drop2(event,'ty','fs','sat',9)" ondragstart="drag2(event,'ty','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfssat10" ondrop="drop2(event,'ty','fs','sat',10)" ondragstart="drag2(event,'ty','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfssat11" ondrop="drop2(event,'ty','fs','sat',11)" ondragstart="drag2(event,'ty','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfssat12" ondrop="drop2(event,'ty','fs','sat',12)" ondragstart="drag2(event,'ty','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfssat13" ondrop="drop2(event,'ty','fs','sat',13)" ondragstart="drag2(event,'ty','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfssat14" ondrop="drop2(event,'ty','fs','sat',14)" ondragstart="drag2(event,'ty','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfssat15" ondrop="drop2(event,'ty','fs','sat',15)" ondragstart="drag2(event,'ty','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tyfssat16" ondrop="drop2(event,'ty','fs','sat',16)" ondragstart="drag2(event,'ty','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale"id="tyfssat17" ondrop="drop2(event,'ty','fs','sat',17)" ondragstart="drag2(event,'ty','fs','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" class="center" rowspan=3 style="background-color:blue;color:white">SS</th>
								<th class="border" style="background-color:lime">FY</th>
								<td class="border" class="scale" id="fysssat8" ondrop="drop2(event,'fy','ss','sat',8)" ondragstart="drag2(event,'fy','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysssat9" ondrop="drop2(event,'fy','ss','sat',9)" ondragstart="drag2(event,'fy','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysssat10" ondrop="drop2(event,'fy','ss','sat',10)" ondragstart="drag2(event,'fy','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysssat11" ondrop="drop2(event,'fy','ss','sat',11)" ondragstart="drag2(event,'fy','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysssat12" ondrop="drop2(event,'fy','ss','sat',12)" ondragstart="drag2(event,'fy','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysssat13" ondrop="drop2(event,'fy','ss','sat',13)" ondragstart="drag2(event,'fy','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysssat14" ondrop="drop2(event,'fy','ss','sat',14)" ondragstart="drag2(event,'fy','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysssat15" ondrop="drop2(event,'fy','ss','sat',15)" ondragstart="drag2(event,'fy','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysssat16" ondrop="drop2(event,'fy','ss','sat',16)" ondragstart="drag2(event,'fy','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="fysssat17" ondrop="drop2(event,'fy','ss','sat',17)" ondragstart="drag2(event,'fy','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:yellow">SY</th>
								<td class="border" class="scale" id="sysssat8" ondrop="drop2(event,'sy','ss','sat',8)" ondragstart="drag2(event,'sy','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysssat9" ondrop="drop2(event,'sy','ss','sat',9)" ondragstart="drag2(event,'sy','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysssat10" ondrop="drop2(event,'sy','ss','sat',10)" ondragstart="drag2(event,'sy','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysssat11" ondrop="drop2(event,'sy','ss','sat',11)" ondragstart="drag2(event,'sy','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysssat12" ondrop="drop2(event,'sy','ss','sat',12)" ondragstart="drag2(event,'sy','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysssat13" ondrop="drop2(event,'sy','ss','sat',13)" ondragstart="drag2(event,'sy','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysssat14" ondrop="drop2(event,'sy','ss','sat',14)" ondragstart="drag2(event,'sy','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysssat15" ondrop="drop2(event,'sy','ss','sat',15)" ondragstart="drag2(event,'sy','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysssat16" ondrop="drop2(event,'sy','ss','sat',16)" ondragstart="drag2(event,'sy','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="sysssat17" ondrop="drop2(event,'sy','ss','sat',17)" ondragstart="drag2(event,'sy','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th class="border" style="background-color:cyan">TY</th>
								<td class="border" class="scale" id="tysssat8" ondrop="drop2(event,'ty','ss','sat',8)" ondragstart="drag2(event,'ty','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysssat9" ondrop="drop2(event,'ty','ss','sat',9)" ondragstart="drag2(event,'ty','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysssat10" ondrop="drop2(event,'ty','ss','sat',10)" ondragstart="drag2(event,'ty','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysssat11" ondrop="drop2(event,'ty','ss','sat',11)" ondragstart="drag2(event,'ty','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysssat12" ondrop="drop2(event,'ty','ss','sat',12)" ondragstart="drag2(event,'ty','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysssat13" ondrop="drop2(event,'ty','ss','sat',13)" ondragstart="drag2(event,'ty','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysssat14" ondrop="drop2(event,'ty','ss','sat',14)" ondragstart="drag2(event,'ty','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysssat15" ondrop="drop2(event,'ty','ss','sat',15)" ondragstart="drag2(event,'ty','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysssat16" ondrop="drop2(event,'ty','ss','sat',16)" ondragstart="drag2(event,'ty','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
								<td class="border" class="scale" id="tysssat17" ondrop="drop2(event,'ty','ss','sat',17)" ondragstart="drag2(event,'ty','ss','sat')" ondragover="allowDrop(event)" ondragleave="dragLeave(event)" draggable="true"></td>
							</tr>
							<tr class="border">
								<th colspan=13>
									<div class="box-body">
										<div class="container">
											<div class="row">
												<div class="col-sm-4"><p class="pull-left">Time Table Incharge</div>
												<div class="col-sm-4"><center><p>Head Of Department</p></center></div>
												<div class="col-sm-4"><center><p>Principal</p></center></div>
											</div>
											<div class="row">
												<div class="col-sm-4"><p class="pull-left contentVal" id="incharge" contenteditable></p></div>
												<div class="col-sm-4"><center><p class="contentVal" id="hod" contenteditable></p></center></div>
												<div class="col-sm-4"><center><p class="contentVal" id="principal" contenteditable></p></center></div>
											</div>
										</div>
									</div>
								</th>
							</tr>
                  </table>
                </div><!-- /.box-body -->

              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>IF</b> GPM
        </div>
        <strong>Copyright &copy; 2017-2018, <a href="">Manish Kumar Yadav & Team</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="../../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="../../plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js" type="text/javascript"></script>
	 <!-- Time Table -->
    <script src="../../plugins/timetable/timetable.js" type="text/javascript"></script>
    <!-- page script -->
	<script src="../../dist/js/allpages.js" type="text/javascript"></script>
	<script>
	currentDate();
	semester();
	search2();
	contentFetch();
	function deptVal()
	{
		return '<?php echo $dept; ?>';
	}
	
	var myear,mshift;
	function drag2(ev,y,s,day) {
		id1=ev.target.id;
		day1= day;
		myear=y;
		mshift=s;
		time1= id1.substring(7,9);
		//alert("day="+day1+" time="+time1+" my="+myear+" ms="+mshift+" id1="+id1)
		document.getElementById(id1).style.backgroundColor = "red";
		document.getElementById(id1).style.color = "white";
		ev.dataTransfer.setData("text", ev.target.id);
	}
	//-------------------------------
	function drop2(ev,y,s,day,time) {
		
		time2=time;
		day2=day;
		id2=y+""+s+""+day+""+time;
		//alert("my="+myear+" ms="+mshift+" y="+y+" s="+s);
		document.getElementById(id1).style.color = "white";
		document.getElementById(id1).style.backgroundColor = "black";
		document.getElementById(id2).style.color = "white";
		document.getElementById(id2).style.backgroundColor = "black";
		if(myear == y && mshift == s)
		{
			swap2(s,y,'master');
		}
	}
	//----------------------------
	function swap2(shift,year,type)
	{
		if(day1!=day2 || time1!=time2)
		{
			var con = confirm("Do you want remove lecture? ");
			if (con == true)
			{
				dept = deptVal();
				teacher = document.getElementById("teacher").value;
				room = document.getElementById("room").value;
				//alert(" dept"+dept+" room="+room+" teacher"+teacher);
				xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function()
				{
					if (this.readyState == 4 && this.status == 200)
					{
						alert(this.responseText);
						if(type=='simple')
							timeTable();
						else
							master();
					}
				};
				xhttp.open("GET", "../../plugins/timetable/swap.php?swap_button=1&&dept="+dept+"&&year="+year+"&&shift="+shift+"&&time1="+time1+"&&time2="+time2+"&&day1="+day1+"&&day2="+day2+"&&teacher="+teacher+"&&room="+room, true);
				xhttp.send(); 
			}
		}
	}

var mon;
function currentDate()
{
	var today = new Date();    
	var month = new Array(12);
    month[0] = "Jan";
    month[1] = "Feb";
    month[2] = "Mar";
    month[3] = "Apr";
    month[4] = "May";
    month[5] = "Jun";
    month[6] = "Jul";
	month[7] = "Aug";
	month[8] = "Sep";
	month[9] = "Oct";
	month[10] = "Nov";
	month[11] = "Dec";
	var m = month[today.getMonth()];
	var mon=today.getMonth();
  // document.getElementById("totalTH").innerHTML = mon;
    //dd = today.getDate();
	//dd = dd<10? "0"+dd:dd;
	 var weekday = new Array(7);            // for check weekday
	   weekday[0] = "sun";
	   weekday[1] = "mon";
	   weekday[2] = "tue";
	   weekday[3] = "wed";
	   weekday[4] = "thu";
	   weekday[5] = "fri";
	   weekday[6] = "sat";
     var day = weekday[today.getDay()];
	 var hour = today.getHours(); 
		if(hour==18)
		{
			hour=17;
		}
	nextid=day+""+hour;
	if(hour>7 && hour<18)
	{
		document.getElementById("fyfs"+nextid).className = "current";
		document.getElementById("fyss"+nextid).className = "current";
		document.getElementById("syfs"+nextid).className = "current";
		document.getElementById("syss"+nextid).className = "current";
		document.getElementById("tyfs"+nextid).className = "current";
		document.getElementById("tyss"+nextid).className = "current";
	}
}
function semester()
{
	if((mon>=0 && mon<5) || mon>9)
	{
		document.getElementById("sem").selectedIndex = 1;
	}
	else
	{
		document.getElementById("sem").selectedIndex = 0;
	}
	
}

function contentFetch()
{
	//alert(); 
	document.getElementById("incharge").innerHTML = "<?php echo $incharge;?>";
	document.getElementById("hod").innerHTML = "<?php echo $hodName;?>";
	document.getElementById("principal").innerHTML = "<?php echo $prinName;?>";
}
	</script>
  </body>
</html>
