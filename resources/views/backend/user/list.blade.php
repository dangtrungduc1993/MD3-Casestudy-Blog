{{--<a href="{{route('blog.create')}}">Create</a>--}}
<a href="{{route('user.create')}}">Create</a>
<table >
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th colspan="3">Action</th>

    </tr>
    </thead>
    <tbody>
    @foreach($users as $key => $user)
        <tr>
            <td>{{$key +1}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td><a href="{{route('user.destroy',$user->id)}}" onclick="return confirm('Are you sure?')">Delete</a></td>
            <td><a href="{{route('user.edit',$user->id)}}">Update</a></td>
            <td><a href="{{route('user.show',$user->id)}}">Detail</a></td>

        </tr>
    @endforeach
    </tbody>
</table>
