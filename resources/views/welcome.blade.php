    <h1>welcome</h1>

    <form name="myform" method="post" action="{{route('post.insert')}}">
           @csrf
    title : <input name="title" type="text"></br></br>
    body  : <input name="body" type="text"></br></br>
    <input type="submit" value="submit">
    </form>
