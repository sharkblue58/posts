<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>posts</title>
</head>
<body style="padding: 20px;text-align: center">
<h1>Your Posts</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->body}}</td>
      <td>
      <a href="{{Route('post.edit',$post->id)}}" class="btn btn-primary " >edit</a>
      <a href="{{Route('post.delete',$post->id)}}" class="btn btn-danger " >delete</a>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
<label for="create">To create a new post press </label>
<a href="{{Route('post.create')}}" class="btn btn-success " >create</a><br><br>
<label for="create">To delete all posts press </label>
<a href="{{Route('post.delete.all')}}" class="btn btn-warning " >delete all</a><br><br>
<label for="create">To delete all posts permanently </label>
<a href="{{Route('post.delete.all.perminantly')}}" class="btn btn-danger " >delete all permanently</a>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>