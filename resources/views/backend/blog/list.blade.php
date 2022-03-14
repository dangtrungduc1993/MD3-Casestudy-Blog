{{--<a href="{{route('blog.create')}}">Create</a>--}}
<a href="{{route('login')}}">Login</a>
<a href="{{route('register')}}">Register</a>
<table >
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Title</th>
{{--        <th>Content</th>--}}
{{--        <th colspan="3">Action</th>--}}

    </tr>
    </thead>
    <tbody>
    @foreach($blogs as $key => $blog)
        <tr>
            <td>{{$key +1}}</td>
            <td>{{$blog->name}}</td>
            <td>{{$blog->title}}</td>
{{--            <td>{{$blog->content}}</td>--}}
{{--            <td><a href="{{route('blog.destroy',$blog->id)}}" onclick="return confirm('Are you sure?')">Delete</a></td>--}}
{{--            <td><a href="{{route('blog.edit',$blog->id)}}">Update</a></td>--}}
            <td><a href="{{route('blog.show',$blog->id)}}">Detail</a></td>

        </tr>
    @endforeach
    </tbody>
</table>
