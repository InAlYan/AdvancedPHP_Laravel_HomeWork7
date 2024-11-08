<html>

<body>
    <form method="post" action="/store-user">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" maxlength="50" required>
        </div>
        <div>
            <label for="surname">Surname</label>
            <input type="text" name="surname" id="surname" maxlength="50" required>
        </div>
        <br>
        <div>
            <label for="surname">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <br>
        <input type="submit" value="Send">
    </form>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>
