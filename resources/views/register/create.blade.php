<form method="POST" action="/register">
    @csrf
    <h1>Register</h1>
    <div>
        <label for="username">Name</label>
        <input type="text"  name="name" id="name" value="{{ old('name')}}" />
        @error('name')
            <p>{{$message}}</p>
        @enderror

    </div>
    <div>
        <label for="username">Username</label>
        <input type="text"  name="username" id="username" value="{{old('username')}}"/>
        @error('username')
            <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for >Email</label>
        <input type="email"  name="email" id="email" value="{{ old('email') }}"/>
        @error('email')
            <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for >Password</label>
        <input type="password"  name="password" id="password" />
        @error('password')
            <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>

