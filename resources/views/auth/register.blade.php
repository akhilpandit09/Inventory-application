<!-- resources/views/auth/register.blade.php -->

<form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Name</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
    </div>

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
    </div>

    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <label for="password_confirmation">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>
    <div>
        <label for="avatar">Avatar</label>
        <input id="avatar" type="file" name="avatar">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>
