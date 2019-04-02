    <form action="http://localhost/laravel/projet/laravel-gravatar/public/avatars/add" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit">Submit</button>
    </form>