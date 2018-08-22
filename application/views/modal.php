<style>
	/*Right*/
	.modal.right.fade .modal-dialog {
		right: -320px;
		-webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
    -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
   	-o-transition: opacity 0.3s linear, right 0.3s ease-out;
    transition: opacity 0.3s linear, right 0.3s ease-out;
	}
	
	.modal.right.fade.in .modal-dialog {
		right: 0;
	}
</style>

<!-- Modal -->
<div id="myModal" class="modal right fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create An Account</h4>
      </div>
      <div class="modal-body">
       	<div class="form-control">
       		<div class="wrap-input100">
						<input class="input100" type="text" name="fname" id="fname" placeholder="Full Name">
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="regemail" id="regemail" placeholder="Email">
					</div>
					
					
					<div class="wrap-input100">
						<input class="input100" type="password" name="regpass" id="regpass" placeholder="password">
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id = "sign">
							Sign up
						</button>
					</div>
      	</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="mbtnclose">Close</button>
      </div>
    </div>

  </div>
</div>

