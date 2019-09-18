<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Posts</title>
</head>
<body>
   <h1>Postovi</h1>
   <table>
   @foreach ($posts as $post)
   <th>
       <tr>
           <td>
               <h1>{{$post->title}}</h1>
       </td>
       <tr>
       <td>
           <textarea>
               {{$post->content}}
           </textarea>
       </td>
       </th>
  
   
       <td><a href="edit/{{$post->id}}"><button>Edit</button></a></td>
       <td><a href="delete/{{$post->id}}"><button> Delete </button>
       </a></td>
       <td><a href="posts/{{$post->id}}/like"><button type="submit">Like[{{$post->likes}}]</button></a></td>
   </tr>
@endforeach
   <td><a href="/createPost"><button>Napravi Post</button></a></td>
   </table>
</body>
</html>