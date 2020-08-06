<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   <div class = "container">
   
        <div class = "row">
		
		
		<div class = "offset-2 col-md-8 mt-5">
		
		<div class= "card">
		
		   <div class = "card-header">
		   
		    <span class = "h4">  Welcome user 			  
			  
		   </div>
		   
		   <div class = "card-body">
		   
                  <form method = "post" action = "{{ url('/add-user')}}">
				  @csrf
	<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control"  name = "user_name" id="user_name" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name = "email_address" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone Number</label>
    <input type="text" class="form-control" name= "phone_number" id="phonenumber">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

		   </div>
		</div>
		</div>
		</div>
   
   
   </div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>