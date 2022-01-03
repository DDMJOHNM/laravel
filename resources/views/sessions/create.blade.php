<form method="POST" action="/sessions">
    @csrf
    <h1>Login</h1>

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
        <button type="submit">Login</button>
    </div>
</form>

