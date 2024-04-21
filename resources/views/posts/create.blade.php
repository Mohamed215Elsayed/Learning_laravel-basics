<h>create new post </h>

<form action = "{{ route('posts.store') }}" method = "post">
@csrf
<input type = "text" name = "title" placeholder = "title"><br>
<input type = "text" name = "body" placeholder = "body"><br>
<input type = "submit">
</form>