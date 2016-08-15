<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Users List</title>

		<!-- Fonts -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

		<!-- Styles -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet"> 

		<style>
			body {
				font-family: 'Lato';
			}
			.fa-btn {
				margin-right: 6px;
			}
		</style>
	
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
			
				<div class="container">
					<div class="navbar-header">

						<!-- Branding Image -->
						<a class="navbar-brand" href="{{ url('/') }}">
							User List
						</a>
					</div>

				</div>
				
            </nav>
        </div>

        @yield('content')
		
		<!-- JavaScripts -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
		
		<script type="text/javascript">  

			$('.date').datepicker({  

			   format: 'yyyy-mm-dd'  

			 }); 

			$(".delete").on("submit", function(){
				return confirm("Do you want to delete this item?");
			});

		</script>  
		
    </body>
</html>