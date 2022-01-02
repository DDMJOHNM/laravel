<form method="POST" action="/register">
    @csrf
    <h1>Register</h1>
    <div>
        <label for="username">Name</label>
        <input type="text"  name="name" id="name" />
    </div>
    <div>
        <label for="username">Username</label>
        <input type="text"  name="username" id="username" />
    </div>
    <div>
        <label for >Email</label>
        <input type="email"  name="email" id="email" />
    </div>
    <div>
        <label for >Password</label>
        <input type="password"  name="password" id="password" />
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
