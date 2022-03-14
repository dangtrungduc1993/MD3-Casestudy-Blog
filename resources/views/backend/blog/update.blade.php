<form action="{{route('blog.update',$blog->id)}}"method="post">
    @csrf
    <input type="text"name="name"placeholder="name" value="{{$blog->name}}">
    <input type="text"name="title"placeholder="Title" value="{{$blog->title}}">
    <input type="text"name="content"placeholder="Content" value="{{$blog->content}}">
    <select name="category_id">
        @foreach($categories as $category)
            <option {{($blog->category_id == $category->id)?'selected':''}} value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    <button>Update</button>
</form>



