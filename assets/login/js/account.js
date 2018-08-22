$(document).ready(function(){
	$("#usertype").trigger("change");
	var base_url = $("#base_url").val();
})




$(document).on("click","#sign",function(e){
	e.preventDefault();
	
	var fname = $("#fname").val();
	var regemail = $("#regemail").val();
	var regpass = $("#regpass").val();
	var emaiformat = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	if(fname == ""){
		swal("Oops","Full Name is Required!","warning");
	}else if(regemail == ""){
		swal("Oops","Email is Required!","warning");
	}else if(regpass == ""){
		swal("Oops","Password is Required!","warning");
	}else if(!regemail.match(emaiformat)){
		swal("Oops","Invalid Email Format","warning");
	}else{
		$.ajax({
			url : 'login/signup',
			dataType : 'JSON',
			type : 'POST',
			data : {'fname' : fname, 'regemail' : regemail, 'regpass' : regpass},
			beforesend : function(xhr){
				$("#signup").html('i class="fa fa-spinner faa-spin animated"></i> Saving..');
				$("#signup").attr("disabled",true);
			},
			success : function(data){
				$("#signup").html('SIGN UP');
				$("#signup").attr("disabled",false);
					swal(data.type,data.message,data.type);
					if(data.status == 0){
					
					}else{
						$("mbtnclose").trigger("click");
						$("#myModal").hide();
					}
			}
		})
	}
})

$(document).on("click","#logbtn",function(){
	var email = $("#email").val();
	var pass = $("#pass").val();
	$.ajax({
		url: 'login/userlogin',
		type:        'POST',
    dataType:    'JSON',
		data : {'email' : email, 'pass' : pass},
		beforeSend : function(xhr){
			$("#logbtn").html('<i class="fa fa-spinner faa-spin animated"></i> Logging in..');
			$("#logbtn").attr("disabled",true);
		},
		success : function(data){
			$("#logbtn").html('LOGIN');
			$("#logbtn").attr("disabled",false);
			swal(data.type,data.message,data.type);
				if(data.status == 0){
					
				}else{
					window.location.href = 'login/enter';
				}
			
		}
	})
})

$(document).on("click","#admin_logbtn",function(){
	var adminemail = $("#adminemail").val();
	var adminpass = $("#adminpass").val();
	$.ajax({
		url: 'login/adminlogin',
		type:        'POST',
    dataType:    'JSON',
		data : {'adminemail' : adminemail, 'adminpass' : adminpass},
		beforeSend : function(){
			$("#admin_logbtn").html('<i class="fa fa-spinner faa-spin animated"></i> Logging in..');
			$("#admin_logbtn").attr("disabled",true);
		},
		success : function(data){
			$("#admin_logbtn").html('LOGIN');
			$("#admin_logbtn").attr("disabled",false);
			swal(data.type,data.message,data.type);
				if(data.status == 0){
					
				}else{
					window.location.href = 'login/adminenter';
				}
			
		}
	})
})
$(document).ready(function(){
	history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };

})

$(document).on("change","#usertype",function(){
	var usertype = $("#usertype").val();

	if(usertype == 0){
		$(".login100-form").css('background-color','#000');
		$(".login100-form-title").css('color','#fff');
		$("#usertype").css({'background-color':'#000','color':'#fff','border' : 'none','outline':'0px'});
		$("#acct").hide();
		$("#cust_btn").hide();
		$("#customer_email").hide();
		$("#customer_pass").hide();
		$("#admin_email").show();
		$("#admin_pass").show();
		$("#admin_btn").show();
	}else{
		$(".login100-form").css('background-color','#f7f7f7');
		$(".login100-form-title").css('color','#333333');
		$("#usertype").css({'background-color':'#f7f7f7','color':'#000','border' : 'none','outline':'0px'});
		$("#acct").show();
		$("#customer_email").show();
		$("#customer_pass").show();
		$("#cust_btn").show();
		$("#admin_email").hide();
		$("#admin_pass").hide();
		$("#admin_btn").hide();
	}
})

$(document).onclick("#ckb1",function(){
    if($("#ckb1").prop('checked')){
    	$("#customer_pass").type = "text";
    }else{
    	$("#customer_pass").type = "password";
    }
})

