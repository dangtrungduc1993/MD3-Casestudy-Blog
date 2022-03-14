<a href="{{route('user.index')}}">Back To List</a>
<table >
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>


    </tr>
    </thead>
    <tbody>

        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>

        </tr>

    </tbody>
</table>
