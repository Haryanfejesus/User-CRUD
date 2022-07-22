<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zuri Laravel</title>

   </head>
<body>

@if(Session::has('success'))
<divclass="alert alert - success>
    {{Session::get('success')}}

    @endif
</div>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    
    
    
   <form action="/create" method="post">
   <h1> User Registration </h1>
      @csrf
        <form>
            <div class="form-group row">
                <label for="Name" class="col-sm-1-12 col-form-label"></label> Name
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="Name" id="Name" placeholder="User Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-1-12 col-form-label"></label> Email
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="email" id="email" placeholder="User Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-sm-1-12 col-form-label"></label> Phone
                <div class="col-sm-1-12">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="User Phone">
                </div>
            </div>
           
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

            <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
          <div class="row mt-5"><a href="/getusers" class="btn btn-info m-auto">View User</a></div>
        </form>
   </form>
</body>
</html>



<?php
// <form action=" " class="form">
//        <div class="row">
//         <label for="Name">Name
//             <input class="form-control" type="text">
//         </label>
//        </div> 
//     </form>
