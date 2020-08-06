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
			  <a class= "btn btn-primary float-right " href = "{{url('/add-user')}}"> Add User</a> </span>
		   </div>
		   
		   <div class = "card-body">
		   
		      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Email Address</th>
      <th scope="col">Phone Number</th>
	   <th scope="col">Action</th>
	  
    </tr>
  </thead>
  <tbody> 
  @foreach($users as $user)
    <tr>
      <th scope="row">1</th>
      <td>{{$user->user_name}}</td>
      <td>{{$user->email_address}}</td>
      <td>{{$user->phone_number}}</td>
	  <td> <a href = "{{url('/user/edit/'.$user->id)}}" class= ""> Edit </a>
	  
	  <a href = "{{url('/user/delete/'.$user->id)}}" class= ""> Delete  </a>
	  </td>
    </tr>
    @endforeach
  </tbody>
</table>

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