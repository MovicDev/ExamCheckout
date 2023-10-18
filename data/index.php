<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Examlord - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="dist/bootstrap.min.css" type="text/css" media="all">
<link href="dist/jquery.bootgrid.css" rel="stylesheet" />
<script src="dist/jquery-1.11.1.min.js"></script>
<script src="dist/bootstrap.min.js"></script>
<script src="dist/jquery.bootgrid.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v2.2.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style type="text/css">
#header{
background:#ffffff;
width:100%;
height:70px;
	
}
</style>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="#"><font color="red">EXAMLORD</font></a></h1>
		
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
	
    </div>
	  
  </header><!-- End Header -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</head>
<body>
	<div class="container">
      <div class="row">
       
        <div class="col-sm-8">
		<div class="well clearfix">
			<div class="pull-right"></div></div>
		<table id="ject_grid" class="table table-condensed table-hover table-striped" width="60%" cellspacing="0" data-toggle="bootgrid">
			<thead>
				<tr>
					<th data-column-id="s" data-type="numeric" data-identifier="true">Empid</th>
					<th data-column-id="id">ID</th>
					<th data-column-id="name">Name</th>
					<th data-column-id="email">Email</th>
					<th data-column-id="tele">Telephone</th>
					<th data-column-id="course">course</th>
					<th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
				</tr>
			</thead>
		</table>
    </div>
      </div>
    </div>
	
<div id="edit_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit client</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="frm_edit">
				<input type="hidden" value="edit" name="action" id="action">
				<input type="hidden" value="0" name="edit_s" id="edit_s">
					<div class="form-group">
                    <label for="id" class="control-label">ID:</label>
                    <input type="text" class="form-control" id="edit_id" name="edit_id"/>
                  </div>
                  <div class="form-group">
                    <label for="name" class="control-label">Name:</label>
                    <input type="text" class="form-control" id="edit_name" name="edit_name"/>
                  </div>
                  <div class="form-group">
                    <label for="email" class="control-label">Email:</label>
                    <input type="text" class="form-control" id="edit_email" name="edit_email"/>
                  </div>
				  <div class="form-group">
                    <label for="tele" class="control-label">Telephone:</label>
                    <input type="text" class="form-control" id="edit_tele" name="edit_tele"/>
                  </div>
					<div class="form-group">
                    <label for="course" class="control-label">Course:</label>
                    <input type="text" class="form-control" id="edit_course" name="edit_course"/>
                  </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btn_edit" class="btn btn-primary">Save</button>
            </div>
			</form>
        </div>
    </div>
</div>
	<center>
		<a href="../updateform.php"><button class="btn btn-danger" type="submit" name="submit"  style="margin-bottom: 20px; color: aliceblue;">update password</button></a>
	
		<a href="../fileform.php"><button class="btn btn-danger" type="submit" name="button"  style="margin-bottom: 20px; color: aliceblue;">Answer upload</button></a>
		
			<a href="../index.php"><button class="btn btn-danger" type="submit" name="button"  style="margin-bottom: 20px; color: aliceblue;">Log-out</button></a>
			</center>
</body>
</html>

<script type="text/javascript">
$( document ).ready(function() {
	var grid = $("#ject_grid").bootgrid({
		ajax: true,
		rowSelect: true,
		post: function ()
		{
			/* To accumulate custom parameter with the request object */
			return {
				id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
			};
		},
		
		url: "response.php",
		formatters: {
		        "commands": function(column, row)
		        {
		            return "<button type=\"button\" class=\"btn btn-xs btn-default command-delete\" data-row-s=\"" + row.s + "\"><span class=\"glyphicon glyphicon-trash\"></span></button> "
		        }
		    }
   }).on("loaded.rs.jquery.bootgrid", function()
{
    /* Executes after data is loaded and rendered */
    grid.find(".command-edit").on("click", function(e)
    {
        //alert("You pressed edit on row: " + $(this).data("row-id"));
			var ele =$(this).parent();
			var g_s = $(this).parent().siblings(':first').html();
            var g_name = $(this).parent().siblings(':nth-of-type(2)').html();
console.log(g_s);
                    console.log(g_name);

		//console.log(grid.data());//
		$('#edit_model').modal('show');
					if($(this).data("row-s") >0) {
							
                                // collect the data
                                $('#edit_s').val(ele.siblings(':first').html()); // in case we're changing the key
						$('#edit_id').val(ele.siblings(':nth-of-type(2)').html());
						$('#edit_name').val(ele.siblings(':nth-of-type(3)').html());
                                $('#edit_email').val(ele.siblings(':nth-of-type(4)').html());
                                $('#edit_tele').val(ele.siblings(':nth-of-type(5)').html());
                                $('#edit_course').val(ele.siblings(':nth-of-type(6)').html());
					} else {
					 alert('Now row selected! First select row, then click edit button');
					}
    }).end().find(".command-delete").on("click", function(e)
    {
	
		var conf = confirm('Delete ' + $(this).data("row-s") + ' items?');
					alert(conf);
                    if(conf){
                                $.post('response.php', { s: $(this).data("row-s"), action:'delete'}
                                    , function(){
                                        // when ajax returns (callback), 
										$("#ject_grid").bootgrid('reload');
                                }); 
								//$(this).parent('tr').remove();
								//$("#vote_grid").bootgrid('remove', $(this).data("row-id"))
                    }
    });
});

function ajaxAction(action) {
				data = $("#frm_"+action).serializeArray();
				$.ajax({
				  type: "POST",  
				  url: "response.php",  
				  data: data,
				  dataType: "json",       
				  success: function(response)  
				  {
					$('#'+action+'_model').modal('hide');
					$("#ject_grid").bootgrid('reload');
				  }   
				});
			}
			
			$( "#command-add" ).click(function() {
			  $('#add_model').modal('show');
			});
			$( "#btn_add" ).click(function() {
			  ajaxAction('add');
			});
			$( "#btn_edit" ).click(function() {
			  ajaxAction('edit');
			});
});
</script>
