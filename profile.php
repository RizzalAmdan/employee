	
	
	<div class="row" style="border:1px solid gray;border-radius:10px;padding:20px 20px 20px 20px;">
		<div class="row" align="center">
			<h4>Employee Profile</h4>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2">
				Fullname *
			</div>
			<div class="col-md-5" align="left">
				<Input type="text" name="fullname" id="fullname" class="form-control">
				<span id="a_fullname" style="font-size:9px;" class="btn btn-danger btn-sm"></span>
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2">
				Gender
			</div>
			<div class="col-md-6" align="left">
				<select id="gender" class="form-control" >
					<option>- Select One -</option>
					<option>Male</option>
					<option>Female</option>
				</select>
				
			</div>
			<div class="col-md-2">
				
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2">
				Marital Status 
			</div>
			<div class="col-md-6" align="left">
				<select id="marital"  name="marital2" onkeychange="load_marital()" class="form-control" >
					<option>- Select One -</option>
					
				</select>
				<span id="a_marital" style="font-size:9px;" class="btn btn-danger btn-sm"></span>
			</div>
			<div class="col-md-2"></div>
		</div>
		
		
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2">
				Phone No. 
			</div>
			<div class="col-md-5" align="left">
				<div class="row">
					<div class="col-md-3"><Input type="text" name="phone1" id="phone1" class="form-control"></div>
					<div class="col-md-6"><Input type="text" name="phone2" id="phone2" class="form-control"></div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2">
				Email *
			</div>
			<div class="col-md-6" align="left">
				<Input type="email" name="email" id="email" class="form-control">
				<span id="a_email" style="font-size:9px;" class="btn btn-danger btn-sm"></span>
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2">
				Address
			</div>
			<div class="col-md-6" align="left">
				<textarea id="address" class="form-control"></textarea>
				
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2">
				Date of birth *
			</div>
			<div class="col-md-6" align="left">
				<Input type="date" name="dob" id="dob" class="form-control">
				<span id="a_dob" style="font-size:9px;" class="btn btn-danger btn-sm"></span>
			</div>
			<div class="col-md-2">
				<label id="a_dob" class="badge badge-danger"></label>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2">
				Hire Date
			</div>
			<div class="col-md-6" align="left">
				<Input type="date" name="hired_date" id="hired_date" class="form-control">
				
			</div>
			<div class="col-md-2">
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2">
				Nationality *
			</div>
			<div class="col-md-6" align="left">
				<select id="nationality"  name="nationality2" onkeychange="load_nationality()" class="form-control" >
					<option>- Select One -</option>
					
				</select>
				<span id="a_nationality" style="font-size:9px;" class="btn btn-danger btn-sm"></span>
			</div>
			<div class="col-md-2">
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2">
				Department *
			</div>
			<div class="col-md-6" align="left">
				<select id="department"  name="department2" onkeychange="load_department()" class="form-control" >
					<option>- Select One -</option>
					
				</select>
				<span id="a_department" style="font-size:9px;" class="btn btn-danger btn-sm"></span>
			</div>
			<div class="col-md-2">
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-2">
				
			</div>
			<div class="col-md-6" align="right">
				<input type="button" id="save" name="save" value="Save" class="btn btn-success" onclick="save()">
				
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
	
	<script>
	$(document).ready(function() {
		load_marital();
		load_department();
		load_nationality();
		
		$('#a_fullname').hide();
		$('#a_email').hide();
		$('#a_department').hide();
		$('#a_nationality').hide();
		$('#a_marital').hide();
		$('#a_dob').hide();
	});
	
	function save()
	{
		alert("post data");
		
		var fullname 		= $('#fullname').val();
		var phone1 			= $('#phone1').val();
		var phone2 			= $('#phone2').val();
		var dob 			= $('#dob').val();
		var hired_date 		= $('#hired_date').val();
		var department 		= $('#department').val();
		var nationality 	= $('#nationality').val();
		var fullname		= $('#fullname').val();
		var address 		= $('#address').val();
		var email 			= $('#email').val();
		var gender 			= $('#gender').val();
		
		////////////////jscript validation//////////
		if (fullname=="") {
			$('#a_fullname').show();	
			$('#a_fullname').html("Error ! Please check Your Fullname Input");
		} else if (email=="") {
			$('#a_email').show();
			$('#a_email').html("Error ! Please check Your Email Input");
		} else if (dob=="") {
			$('#a_dob').show();
			$('#a_dob').html("Error ! Please check Your Date of Birth Input");
		} else if (nationality=="") {
			$('#a_nationality').show();
			$('#a_nationality').html("Error ! Please check Your nationality Input");
		} else if (department=="") {
			$('#a_department').show();
			$('#a_department').html("Error ! Please check Your Department Input");
		} else {
		
			$.ajax({
					url		: "ajax_restful_save_data_api.php",
					type	: "POST",
					data	: {
								fullname 	: fullname,
								phone1 		: phone1,
								phone2 		: phone2,
								dob 		: dob,
								hired_date 	: hired_date,
								department 	: department,
								nationality : nationality,
								address 	: address,
								email 		: email,
								gender 		: gender,
							},
					success: function (response) 
					{
						//alert("response=" + response);
						alert("Data saved !");
						
						var data = JSON.parse(response);

						var fullname 	  = data.fullname;
						var phone1 		  = data.phone1;
						var phone2 		  = data.phone2;
						var dob 		  = data.dob;
						var hired_date 	  = data.hired_date;
						var department 	  = data.department;
						var nationality   = data.nationality;
						var address 	  = data.address;
						var email 		  = data.email;
						var gender 		  = data.gender;
			
					},
					error: function(xhr, status, error) {
						var errorMessage = xhr.status	 + ': ' + xhr.statusText
						alert('Error : ' + errorMessage);
					}
				});	
		}
	}
	
	function load_marital()
	{
		 var response = '[{"id": "1","marital": "Single"},{"id": "2","marital": "Married"},{"id": "3","marital": "Divorced"},{"id": "4","marital": "Others"}]';
		 			
		//alert(response);
		var jsonobject = JSON.parse(response);
		var counter = 0;

		$('#marital').empty();
		$('#marital').val("");
		$("#marital").append("<option value=''>- Select One -</option>");
		
		$.each(jsonobject, function (index, element) 
		{
			var id				= jsonobject[index]['id'];
			var marital			= jsonobject[index]['marital'];
			
			$("#marital").append("<option value='" + id + "'>" + marital + "</option>");
		});
	}
	
	function load_department()
	{
		 var response = '[{"id": "1","department": "Human Resource"},{"id": "2","department": "Operation"},{"id": "3","department": "Technical"},{"id": "4","department": "Administration"}]';
		 			
		//alert(response);
		var jsonobject = JSON.parse(response);
		var counter = 0;

		$('#department').empty();
		$('#department').val("");
		$("#department").append("<option value=''>- Select One -</option>");
		
		$.each(jsonobject, function (index, element) 
		{
			var id				= jsonobject[index]['id'];
			var department		= jsonobject[index]['department'];
			
			$("#department").append("<option value='" + id + "'>" + department + "</option>");
		});
	}
	
	function load_nationality()
	{
		 var response = '[{"id": "1","nationality": "Malaysian"},{"id": "2","nationality": "Asian"},{"id": "3","nationality": "African"},{"id": "4","nationality": "Arabian"},{"id": "5","nationality": "American"},{"id": "4","nationality": "European"}]';
		 			
		//alert(response);
		var jsonobject = JSON.parse(response);
		var counter = 0;

		$('#nationality').empty();
		$('#nationality').val("");
		$("#nationality").append("<option value=''>- Select One -</option>");
		
		$.each(jsonobject, function (index, element) 
		{
			var id				= jsonobject[index]['id'];
			var nationality		= jsonobject[index]['nationality'];
			
			$("#nationality").append("<option value='" + id + "'>" + nationality + "</option>");
		});
	}
	
	function save_data()
	{
		
	}
	
	</script>	