@extends('layout')
@section('content')
<div class="container row">
    <div class="col-7">
        
        <h2> {{$post->title}} </h2>
        <p> {{$post->content}} </p>
        <h3> {{$post->auther->author}} </h3>
        <h4>{{$post->created_at }}</h4>
    </div></div>

  

    
      
      @foreach ($post->comment  as $comment)
    <h2>Rédigé par  {{$comment->pseudo}} </h2>
    <p> {{$comment->comment}} </p>
        @endforeach
     
    </div>



      <form method="POST" action="/add_comment">
       <div class="form-group">
         <input type="hidden" class="form-control" id="id_post" name='id_post' value="<?= $post['id'] ?>">
         <label for="pseudo">pseudo</label>
         <input type="text" class="form-control" id="pseudo" name='pseudo'>

       </div>
      <div class="form-group">
        <label for="comment">Commentaire</label>
        <textarea class="form-control" id="comment" name='comment' rows="3"></textarea>
      </div>

    <button type="submit" class="btn btn-primary">Ajouter</button>
    <button type="reset" class="btn btn-primary">Annuler</button>
    </form>
   

@endsection