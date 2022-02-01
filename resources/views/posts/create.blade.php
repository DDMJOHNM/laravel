<form method="POST" action="/admin/posts">
    @csrf
    <h1>Admin|Add Post</h1>
    <div>
        <label for="title">Title</label>
        <input type="text"  name="title" id="title" required value="{{ old('title') }}" />
        @error('title')
            <p>{{$message}}</p>
        @enderror

    </div>
    <div>
        <label for="slug">Slug</label>
        <input type="text"  name="slug" id="slug" required value="{{ old('slug') }}"/>
        @error('slug')
            <p>{{$message}}</p>
        @enderror

    </div>
    <div>
        <label for="excerpt">Excerpt</label>
        <input type="text"  name="excerpt" id="excerpt" required value="{{ old('excerpt') }}" />
        @error('excerpt')
            <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="category">Category</label>
        <select
            name="category_id"
            id="category_id"
            >
            @php
             $categories = \App\Models\Category::all();
            @endphp

            @foreach ($categories as $category)
            <option value="{{ $category->id }}"  {{ old('category_id')  == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach

        </select>
        @error('category')
            <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for >Body</label>
        <textarea name="body" id="body" required value="{{ old('body') }}"></textarea>
        @error('body')
            <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <button type="submit">Save</button>
    </div>
</form>
