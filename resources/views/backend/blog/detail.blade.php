<a href="{{route('blog.index')}}">Back To List</a>
<table >
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Title</th>
        <th>Content</th>
        <th>Category</th>

    </tr>
    </thead>
    <tbody>

        <tr>
            <td>{{$blog->id}}</td>
            <td>{{$blog->name}}</td>
            <td>{{$blog->title}}</td>
            <td>{{$blog->content}}</td>
            <td>{{$blog->category->name}}</td>
        </tr>

    </tbody>
</table>
