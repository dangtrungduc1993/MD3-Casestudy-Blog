<form action="{{route('user.update',$user->id)}}"method="post">
    @csrf
    <input type="text"name="name"placeholder="name" value="{{$user->name}}">
    <input type="text"name="email"placeholder="Email" value="{{$user->email}}">
    <input type="text"name="password"placeholder="Password" value="{{$user->password}}">
    <button>Update</button>
</form>



