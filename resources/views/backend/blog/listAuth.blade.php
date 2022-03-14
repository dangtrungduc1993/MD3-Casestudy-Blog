{{--<a href="{{route('blog.create')}}">Create</a>--}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<a href="{{route('blog.create')}}">Create</a>
<a href="{{route('logout')}}">Log Out</a>



<div>
    <table >
        <thead style="text-align: center">
        <tr class="table-active">
            <th>STT</th>
            <th>Name</th>
            <th>Title</th>
            <th>Content</th>
            <th>Category</th>
            <th colspan="3">Action</th>

        </tr>
        </thead>
        <tbody>
        @foreach($blogs as $key => $blog)
            <tr>
                <td class="table-active">{{$key +1}}</td>
                <td class="table-primary">{{$blog->name}}</td>
                <td class="table-secondary">{{$blog->title}}</td>
                <td class="table-success">{{$blog->content}}</td>
                <td class="table-danger">{{$blog->category->name}}</td>
                <td class="table-warning"><a href="{{route('blog.destroy',$blog->id)}}" onclick="return confirm('Are you sure?')">Delete</a></td>
                <td class="table-info"><a href="{{route('blog.edit',$blog->id)}}">Update</a></td>
                <td class="table-light"><a href="{{route('blog.show',$blog->id)}}">Detail</a></td>

            </tr>
        @endforeach
        </tbody>
    </table>

</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
