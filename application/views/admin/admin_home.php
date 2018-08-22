
<body>
	<div class = "container-fullwidth" style="padding-right: 20px; padding-left: 20px;">
		<h3 class ="-sm text"> <i class="fa fa-home"></i> Dashboard</h3>
	</div>
	<div class="container-fluid" style="padding-right: 20px; padding-left: 20px;">
		<div class ="row">
			<!-- <div class="container-fluid"> -->
				<!-- <div class="row"> -->
					<div class="col-sm-3">
						<div class="-panel-stats">
							<div class="-text-stats">
								<div class="row">
									<div class="col-sm-5" style="border-right: #fff 1px solid">
										<i class="fa fa-users  faa-float animated-hover" style="font-size: 70pt"></i>
									</div>
									<div class="col-sm-7" style="text-align: left;">
										<p style="font-size: 20pt;">Customer</p><hr>
										<p style="font-size: 25pt; font-weight:bolder;" id ="count_customer">0</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- </div> -->
				<!-- <div class = "row" style="padding-top: 20px;"> -->
					<div class = "col-sm-3">
						<div class="-panel-stats">
							<div class="-text-stats">
								<div class="row">
									<div class="col-sm-5" style="border-right: #fff 1px solid">
										<i class="fa fa-users faa-float animated-hover" style="font-size: 70pt"></i>
									</div>
									<div class="col-sm-7" style="text-align: left">
										<p style="font-size: 20pt;">Admin</p><hr >
										<p style="font-size: 25pt; font-weight:bolder;" id="admin_customer">0</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- </div> -->
				<!-- <div class = "row" style="padding-top: 20px;"> -->
					<div class = "col-sm-3">
						<div class="-panel-stats">
							<div class="-text-stats">
								<div class="row">
									<div class="col-sm-5" style="border-right: #fff 1px solid">
										<i class="fa fa-plane  faa-float animated-hover" style="font-size: 70pt"></i>
									</div>
									<div class="col-sm-7" style="text-align: left">
										<p style="font-size: 20pt;"> Flights<span type= "link" class="badge danger" style="background-color:red; border-radius: 100%" data-toggle="modal" data-target="#new_Modal" id = "notif_flight"></span> </p><hr>
										<p style="font-size: 25pt; font-weight:bolder;" id="flightcounter">0</p>
									</div>

								</div>
							</div>
						</div>
					</div>
				<!-- </div> -->
				<!-- <div class = "row" style="padding-top: 20px;"> -->
					<div class = "col-sm-3">
						<div class="-panel-stats">
							<div class="-text-stats">
								<div class="row">
									<div class="col-sm-5" style="border-right: #fff 1px solid">
										<i class="fa fa-hotel faa-float animated-hover" style="font-size: 70pt"></i>
									</div>
									<div class="col-sm-7" style="text-align: left">
										<p style="font-size: 20pt;">Hotels</p><hr >
										<p style="font-size: 25pt; font-weight:bolder;">0</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class = "row" style="padding-top: 20px;">
					<div class = "col-sm-3">
						<div class="-panel-stats">
							<div class="-text-stats">
								<div class="row">
									<div class="col-sm-5" style="border-right: #fff 1px solid">
										<i class="fa fa-cutlery faa-float animated-hover" style="font-size: 70pt"></i>
									</div>
									<div class="col-sm-7" style="text-align: left">
										<p style="font-size: 20pt;">Services</p><hr >
										<p style="font-size: 25pt; font-weight:bolder;">0</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class = "col-sm-3">
						<div class="-panel-stats">
							<div class="-text-stats">
								<div class="row">
									<div class="col-sm-5" style="border-right: #fff 1px solid">
										<i class="fa fa-book faa-float animated-hover" style="font-size: 70pt"></i>
									</div>
									<div class="col-sm-7" style="text-align: left">
										<p style="font-size: 20pt;">bookings</p><hr >
										<p style="font-size: 25pt; font-weight:bolder;">0</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class = "col-sm-3">
						<div class="-panel-stats">
							<div class="-text-stats">
								<div class="row">
									<div class="col-sm-5" style="border-right: #fff 1px solid">
										<i class="fa fa-user faa-float animated-hover" style="font-size: 70pt"></i>
									</div>
									<div class="col-sm-7" style="text-align: left">
										<p style="font-size: 20pt;">Reservations</p><hr >
										<p style="font-size: 25pt; font-weight:bolder;">0</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- 	<div class ="col-sm-12" style="padding-top: 2%;">
					<div class ="-panel">
						<div class = " -header">
							<div class =" -title"><span style="font-size: 20pt;">Company Status</span></div>
						</div>
						<div class = " -body">
							<!-<center><span style="font-size: 20pt;">Company Status</span></center> -->
							<!-- <div id="bar-chart" style=" height: auto; width: 100%;"></div> -->
						<!-- </div> -->
					<!-- </div> -->
				<!-- </div>  -->
			</div>
		</div>
	</div>
</body>

<!-- Modal -->
<div id="new_Modal" class="modal fade" role="dialog modal-lg">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      	<span class="modal-title">New Flights</span>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      		<table  class = "table table-striped" id ="newflights"></table> 
      	<div class="modal-footer">
        	<button type="button" class="btn btn-default" data-dismiss="modal" id="mbtnclose">Close</button>
      	</div>
    	</div>

  	</div>
	</div>
</div>

