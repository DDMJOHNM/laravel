<h1> Manage Posts</h1>
<table>
   <tbody>
       @foreach($posts as $post)
        <tr>
            <td>
              <a href="/posts/{{ $post->id }}">{{$post->title}}</a>
            </td>
             <td>Publish</td>
            <td><a href="/admin/posts/{{$post->id}}/edit">Edit</a> </td>
            <td>
                <form method="POST" action="/admin/posts/{{$post->id}}/delete">
                   @csrf
                   @method('DELETE')
                   <button>Delete</button>

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
