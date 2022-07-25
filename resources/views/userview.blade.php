<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Details</title>
    <link rel="stylesheet" href="../assets/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
 <body>
 <style> body {
    background: blue;
}
</style>
 <form action="/update" method="post" style="padding-top: 5%; background-color: white; width: 50%; margin:5% auto">
      @csrf

    @if(Session::has('success'))

      <div class="alert alert-success">
            {{Session::get('success')}}
      </div>
      
      {{Session::forget('success')}}

    @endif
      
      <div class="form-group w-50" style="margin-left: 10%">
                <label for="id" class="col-sm-1-12 col-form-label"></label> ID
                <div class="col-sm-1-12">
                    <input type="text" name="id" class="form-control" value="{{$user ->id}}">
                </div>
         </div>
            <div class="form-group w-50" style="margin-left: 10%">
                <label for="Name" class="col-sm-1-12 col-form-label"></label> Name
                <div class="col-sm-1-12">
                    <input type="text"  name="Name" class="form-control" value="{{$user ->Name}}">
                </div>
            </div>
            <div class="form-group w-50" style="margin-left: 10%">
                <label for="email" class="col-sm-1-12 col-form-label"></label> Email
                <div class="col-sm-1-12">
                    <input type="text" name="email" class="form-control" value="{{$user ->email}}">
                </div>
            </div>
            <div class="form-group w-50" style="margin-left: 10%">
                <label for="phone" class="col-sm-1-12 col-form-label"></label> Phone
                <div class="col-sm-1-12">
                    <input type="text"  name="phone" class="form-control" value="{{$user ->phone}}">
                </div>
            </div>
            
            <div class="form-group w-10%">
                <div class="offset-sm-2 col-sm-10">
                    <button type="update" class="btn btn-primary" style="margin-left: 10%; margin-top: 10px">Update</button>
                </div>
            </div>
   </form>
 </body>