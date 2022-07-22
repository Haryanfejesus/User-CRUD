

<table Class="table table-striped">
    <h1> User Details</h1>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Action</th>
</tr>
@foreach($users as $user)
    <tr>
        <td>{{$user -> id}}</td>
        <td>{{$user -> Name}}</td>
        <td>{{$user -> email}}</td>
        <td>{{$user -> phone}}</td>
        <td><a href="/delete/{{$user ->id}}" class="btn btn-danger">Delete</a></td>
        <td><a href="/view/{{$user ->id}}" class="btn btn-info">View</a></td>
    </tr>
   @endforeach
</table>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
<script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>

          <div class="row mt-5"><a href="/users" class="btn btn-info m-auto">Create User</a></div>

