    <form action="http://localhost/laravel/projet/laravel-gravatar/public/test/add/avatar" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit">Submit</button>
    </form>