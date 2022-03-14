<form action="{{route('register')}}"method="post">
    @csrf
    <input type="text"name="name"placeholder="User Name">
    <input type="text"name="email"placeholder="Email">
    <input type="password"name="password"placeholder="Password">
    <input type="password"name="confirmPassword"placeholder="Confirm Password">
    @if(\Illuminate\Support\Facades\Session::has('message'))
        <p style="color: red">{{\Illuminate\Support\Facades\Session::get('message')}}</p>
    @endif
    <button type="submit">Register</button>
</form>
