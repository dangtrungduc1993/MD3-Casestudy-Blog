<form action=""method="post">
    @csrf
    <input type="text"name="name"placeholder="name">
    <input type="text"name="title"placeholder="Title">
    <input type="text"name="content"placeholder="Content">
    <select name="category_id">
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>
    <button>Create</button>
</form>



