

<div class = "container-fluid">
	<div class = "row -panel-form">
		<input type = "hidden" name="id" id="id">
		<div class = "col-sm-3">
			<input type = "text" class ="form-control" name ="from" id="from" placeholder="Enter Starting Location">
		</div>
		<div class = "col-sm-3">
			<input type = "text" class ="form-control" name ="to" id="to" placeholder="Enter Destination">
		</div>
		<div class = "col-sm-2">
			<select class = "form-control" name ="category" id ="category">
				<option value = "" disabled="true" selected="true">Flight Category</option>
				<option value = "international">International</option>
				<option value = "Domestic">Domestic</option>
			</select>
		</div>
		<div class = "col-sm-2">
			<input type = "number" min="0" class ="form-control" name ="price" id="price" placeholder="Price">
		</div>
		<div class = "col-sm-2">
			<button class ="btn btn-success" id="savebtn"><i class ="fa fa-save"></i> Save</button>
			<span id = "cancel"></span>
		</div>
	</div>
	<div class = "row">
		<div class ="col-sm-12" style="padding-top: 30px;">
			<div id="flight_tbl"></div>
		</div>
	</div>
</div>