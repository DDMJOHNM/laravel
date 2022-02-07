<form method="POST" action="/admin/posts/{{$post->id}}/update" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <h1>Admin|Edit Post {{$post->title}}</h1>
    <div>
        <label for="title">Title</label>
        <input type="text"  name="title" id="title" required value="{{$post->title}}" />
        @error('title')
            <p>{{$message}}</p>
        @enderror

    </div>
    <div>
        <label for="slug">Slug</label>
        <input type="text"  name="slug" id="slug" required value="{{ $post->slug }}"/>
        @error('slug')
            <p>{{$message}}</p>
        @enderror

    </div>
    <div>
        <label for="thumbnail">Thumbnail</label>
        <input type="file"  name="thumbnail" id="thumbnail" value="{{$post->thumbnail}}"/>
        @error('thumbnail')
            <p>{{$message}}</p>
        @enderror

        <image width="200px" src="/storage/{{$post->thumbnail}}" alt="image" />

    </div>
    <div>
        <label for="excerpt">Excerpt</label>
        <input type="text"  name="excerpt" id="excerpt" required value="{{ $post->excerpt }}" />
        @error('excerpt')
            <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="category">Category</label>
        <select
            name="category_id"
            id="category_id"
            value={{$post->category_id}}
            >
            @php
             $categories = \App\Models\Category::all();
            @endphp

            @foreach ($categories as $category)
            <option value="{{ $category->id }}"
            {{ old('category_id')  == $category->id ? 'selected' : '' }}>
                {{ ucwords($category->name) }}
            </option>
            @endforeach

        </select>
        @error('category')
            <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for >Body</label>
        <textarea name="body" id="body" required value="{{ $post->body }}">{{ $post->body }}</textarea>
        @error('body')
            <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <button type="submit">Save</button>
    </div>
</form>
