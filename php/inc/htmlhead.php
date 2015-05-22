	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSS -->
    <link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../bsgallery/css/blueimp-gallery.min.css">
	<link href="../css/style.css" rel="stylesheet">

	
	<!-- jQuery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.js"></script>
	<script src="../Bootstrap/js/bootstrap.min.js"></script>
	<script src="../bsgallery/js/blueimp-gallery.min.js"></script>


	
	
	<script type="text/javascript">
	$(document).ready(function(){
		var mybodyid = $('body').attr('id');
		var mynavid = '#nav' + mybodyid;
		$(mynavid).attr('class','active'); <!--Function used with the css to show the user in which page he is on-->
		
		var validation= $("#myForm").validate({
			rules:{
				client: {required:true, minlength:3},
				email: {required:true, email:true},
				phone: {number:true, minlength:8},
				message: {required:true}
			},
			messages:{
				client:{ 
					required:"Favor poner su nombre",
					minlength: "Favor de poner su nombre completo"
				},
				email:{
					required:"Favor de poner su correo",
					email: "Favor de poner un correo electrónico valido"
				},
				phone:{
					number: "Favor de ingresar número solamente",
					minlength: "Favor de poner su teléfono"
				},
				message:{
					required: "Favor de ingresar el motivo para contactarnos"
				}
			}
		})<!--Functions that will validate that the info is well written on the form, as well as validating that the information is not missing-->
		
		$("#links").click(function() {
			event = event || window.event;
			var target = event.target || event.srcElement,
			link = target.src ? target.parentNode : target,
			options = {index: link, event: event},
			links = this.getElementsByTagName('a');
			blueimp.Gallery(links, options);
		});
		
		
	});
	
	</script>