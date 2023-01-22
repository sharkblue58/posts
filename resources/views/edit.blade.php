    <h1>welcome</h1>

    <form name="form" action="{{Route('post.update',$post->id)}}" method="post">
         @csrf
         @method('PUT')
     edit title : <input name="title" type="text" value="{{$post->title}}"></br></br>
     edit body  : <input name="body" type="text"  value="{{$post->body}}"></br></br>
    <input type="submit" value="submit">
    </form>
