<h2>User Register</h2>

<form action="{{ route('register.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" required><br>

    <label>Email:</label>
    <input type="email" name="email" required><br>

    <label>Password:</label>
    <input type="password" name="password" required><br>

    <label>Confirm Password:</label>
    <input type="password" name="password_confirmation" required><br>

    <button type="submit">Register</button>
</form>