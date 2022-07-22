
 <form action="/update" method="post">
         <h1> User View </h1>
      @csrf

    @if(Session::has('success'))

      <div class="alert alert-success">
            {{Session::get('success')}}
      </div>
      
      {{Session::forget('success')}}

    @endif
        <div class="form-group row">
                <label for="id" class="col-sm-1-12 col-form-label"></label> ID
                <div class="col-sm-1-12">
                    <input type="text" name="id" class="form-control" value="{{$user ->id}}">
                </div>
         </div>
            <div class="form-group row">
                <label for="Name" class="col-sm-1-12 col-form-label"></label> Name
                <div class="col-sm-1-12">
                    <input type="text"  name="Name" class="form-control" value="{{$user ->Name}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-1-12 col-form-label"></label> Email
                <div class="col-sm-1-12">
                    <input type="text" name="email" class="form-control" value="{{$user ->email}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-sm-1-12 col-form-label"></label> Phone
                <div class="col-sm-1-12">
                    <input type="text"  name="phone" class="form-control" value="{{$user ->phone}}">
                </div>
            </div>
            
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="update" class="btn btn-primary">Update</button>
                </div>
            </div>
   </form>