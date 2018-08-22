

$(document).ready(function(){
	allflights();
	$.ajax({
		url : 'adminhome/cust_counter',
		dataType : 'JSON',
		beforeSend : function(xhr){
			$("#count_customer").html("<i class='fa fa-spinner faa-spin-animated'></i>");
		},
		success:function(data){
			$("#count_customer").html(data);
		}
	})

	$.ajax({
		url : 'adminhome/admin_counter',
		dataType : 'JSON',
		beforeSend : function(xhr){
			$("#admin_customer").html("<i class='fa fa-spinner faa-spin-animated'></i>");
		},
		success:function(data){
			$("#admin_customer").html(data);
		}
	})

	$.ajax({
		url : 'adminhome/stats',
		dataType : 'JSON',
		success:function(data){
			graph(data);
		}
	})
	$.ajax({
		url : 'adminhome/flightcounter',
		dataType : 'JSON',
		beforeSend : function(xhr){
			$("#flightcounter").html("<i class='fa fa-spinner faa-spin-animated'></i>");
		},
		success:function(data){
			$("#flightcounter").html(data);
		}
	})
		$.ajax({
		url : 'flights/newflights',
		dataType : 'JSON',
		beforeSend : function(xhr){
			$("#notif_flight").html("<i class='fa fa-spinner faa-spin-animated'></i>");
		},
		success:function(data){
			if (data.count == 0){
				$("#notif_flight").hide();
			}else{
				$("#notif_flight").show();
			}
			$("#notif_flight").html(data.count);
					if(data.info != null){
					var	con = "";
						con += `
												<thead>
														<tr>
															<th>Flight From</th>
															<th>Destination</th>
															<th>Category</th>
															<th>Price</th>
														</tr>
												</thead>
												<tbody>`;
						for(var i=0;i<data.info.length; i++){
								con += `<tr>
														<td>`+data.info[i].from+`</td>
														<td>`+data.info[i].to+`</td>
														<td>`+data.info[i].cat+`</td>
														<td>`+data.info[i].price+`</td>
												</tr>`;
						}
						con += `</tbody>`;
					}
					$("#newflights").html(con);
				}
			})
})

function graph(data){
	customer = data.customer;
	admin = data.admin;
	flight = data.flight;
Morris.Donut({
	element: 'bar-chart',
	resize: true,
	hideHover: 'auto',
	data:[
    { label: 'Customer', value: customer},
    { label: 'Admin', value: admin},
    { label: 'Flights', value: flight},
    { label: 'Hotels', value: 0},
    { label: 'Services', value: 0},
    { label: 'bookings', value: 0},
    { label: 'Reservations', value: 0},
   ],
   colors: [
    '#1424b8',
    '#ff0033',
    '#00ff33',
    '#0099ff',
    '#098215',
    '#03393f',
    '#043567',
  ],
});
}

$(document).on("click","#savebtn",function(){
	var from = $("#from").val();
	var to = $("#to").val();
	var category = $("#category").val();
	var price = $("#price").val();
	var id = $("#id").val();
		// alert(from+" "+to+" "+category+" "+price)
	$.ajax({
		url : 'flights/flightscon',
		dataType : 'JSON',
		type : 'POST',
		data : {'from' : from, 'to' : to, 'category' : category, 'price' : price, 'id' :id},
		beforeSend : function(xhr){
			$("#savebtn").html("<i class='fa fa-spinner faa-spin-animated'></i> Saving..");
			$("#savebtn").attr("disabled",true);
		},
		success : function(data){
			$("#savebtn").html("<i class='fa fa-save'></i> Save");
			$("#savebtn").attr("disabled",false);
			swal(data.title,data.msg,data.type);
			if(data.status == 0){

			}else{
				allflights();
				$("#cancel").trigger("click");
			}
		}
	}) 
})

function allflights(){
	$("#cancel").hide();
	$.ajax({
		url : 'flights/allflights',
		dataType : 'JSON',
		type : 'POST',
		beforeSend : function(xhr){
			$("#flight_tbl").html("<h3><center><i class='fa fa-spinner faa-spin-animated'></i> Loading...</center></h3>");
		},
		success:function(data){
			var con = "";
			con += '<table class ="table table-striped dt-responsive table-hover table-condensed" id ="flight_tbl_dt">'+
								'<thead>'+
									'<tr>'+
										'<th>Flight From</th>'+
										'<th>Flight Destination</th>'+
										'<th>Flight Category</th>'+
										'<th>Flight Price</th>'+
										'<th>Action</th>'+
									'</tr>'+
								'</thead>'
							'<tbody>';
			if(data.flight != null){
				for(var i = 0; i < data.flight.length; i++){
					con += 
										'<tr>'+
											'<td>'+data.flight[i].from+'</td>'+
											'<td>'+data.flight[i].to+'</td>'+
											'<td>'+data.flight[i].cat+'</td>'+
											'<td>'+data.flight[i].price+'</td>'+
											'<td><div class="btn-group"><button class="btn btn-info edit" data-id='+data.flight[i].id+'><i class = "fa fa-edit"></i></button>'+ " "+
											'<button class="btn btn-danger delete"  data-id='+data.flight[i].id+'><i class = "fa fa-trash"></i></button></div></td>'+
										'</tr>';

									
				}
				con += '</tbody>'+
							'</table>';
				
				$("#flight_tbl").html(con);
				$("#flight_tbl_dt").DataTable({
					responsive: true
				});
			}
		}
	})
}

$(document).on('click', '.edit', function(){
	$("#cancel").show()
    var id = $(this).attr('data-id');
    $.ajax({
      url :        'flights/allflight',
      type:        'POST',
      data:        {'id' : id},
      dataType:    'JSON',

      success: function(data){
        if (data != null) {
          $("#from").val(data.from_w);
          $("#to").val(data.destination);
          $("#category").val(data.category);
          $("#price").val(data.price);
          $("#id").val(data.id);
          $("#cancel").html('<button class="btn btn-default" id="cancel">Cancel</button>');
        }
      }
    })
  });

$(document).on('click', '.delete', function(){
    var id = $(this).attr('data-id');
    swal({	
    title: "Delete \n",	
	  text: "Are you sure you want to delete this Flight?",		
	  type: "warning",	
	  showCancelButton: true,	
	  confirmButtonColor: "#DD6B55",	
	  confirmButtonText: "Yes",	
	  closeOnConfirm: false,	
    showLoaderOnConfirm: true,	
	}).then(function(){	
	 	$.ajax({
      url :        'flights/deleteflight',
      type:        'POST',
      data:        {'id' : id},
      dataType:    'JSON',
      success: function(data){
        swal(data.type, data.message, data.type);
        allflights();
      }
    })
  });
})

$(document).on("keydown","#search",function(){
	var search = $("#search").val();
	// alert(search);
	$.ajax({
		url : 'flights/search',
		dataType : 'JSON',
		type : 'POST',
		data : {'search' : search},
		beforeSend: function(){
     	$("#flight_tbl").html("<h3><center><i class='fa fa-spinner faa-spin-animated'></i> Loading...</center></h3>");
    },
		success :function(data){
			var con = "";
			if(search != ""){
				con += '<table class ="table table-striped" id ="flight_tbl_dt">'+
									'<thead>'+
										'<tr>'+
											'<th>Flight From</th>'+
											'<th>Flight Destination</th>'+
											'<th>Flight Category</th>'+
											'<th>Flight Price</th>'+
											'<th>Action</th>'+
										'</tr>'+
									'</thead>'
								'<tbody>';
				if(data.flight != null){
					for(var i = 0; i < data.flight.length; i++){
						con += 
											'<tr>'+
												'<td>'+data.flight[i].from+'</td>'+
												'<td>'+data.flight[i].to+'</td>'+
												'<td>'+data.flight[i].cat+'</td>'+
												'<td>'+data.flight[i].price+'</td>'+
												'<td><button class="btn btn-primary edit" data-id='+data.flight[i].id+'><i class = "fa fa-edit"></i></button>'+ " "+
												'<button class="btn btn-danger delete"  data-id='+data.flight[i].id+'><i class = "fa fa-remove"></i></button></td>'+
											'</tr>';

										
					}
					con += '</tbody>'+
								'</table>';
					
					$("#flight_tbl").html(con);
					$("#flight_tbl_dt").DataTable();
				}else{
					$("#flight_tbl").html("h3><center><i class ='fa fa-info-circle'></i> No Data Found !</center></h3>");
				}
			}else if(search == ""){
				allflights();
			}
		}
	})
})


$(document).on("click","#cancel",function(){
	$("#from").val("");
  $("#to").val("");
  $("#category").val("");
  $("#price").val("");
  $("#id").val("");
  $("#cancel").hide();
})
