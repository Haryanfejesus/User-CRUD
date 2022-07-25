<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style.css">
   </head>
<body>
  <div class="all">
            <!-- Image and text -->
        <nav class="navbar navbar-expand-lg navbar-light " style="margin-left: 30%">
            <a class="navbar-brand" href="/index"><h2>USER PORTAL</h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
 </div>
      </nav>

@if(Session::has('success'))
<divclass="alert alert - success style="margin-left: 30%" >
    {{Session::get('success')}}

    @endif
</div>
   <form class="form-control w-50 width: 50%;" action="/users" method="post" style="margin-left: 20%">
      @csrf

      <div class="form-row flex justify-content-center">
        <form>
        <div class="form-row flex justify-content-center">
            <div class="form-group">
                <label for="Name" class="col-sm-1-12 col-form-label"></label> Name
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="Name" id="Name" placeholder="User Name">
                </div>
            </div>
            <div class="form-row flex justify-content-center">
                <label for="email" class="col-sm-1-12 col-form-label"></label> Email
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="email" id="email" placeholder="User Email">
                </div>
            </div>
            <div class="form-row flex justify-content-center">
                <label for="phone" class="col-sm-1-12 col-form-label"></label> Phone
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="User Phone">
                </div>
            </div>
           
             <div class="form-row flex justify-content-center">
                    <button type="submit" class="btn btn-primary" name="register">Register</button>
                    <a href="/getusers" style="margin-left: 10%">View User</a>
             </div>
         </form>
    </div>
   </form>
</body>
</html>
