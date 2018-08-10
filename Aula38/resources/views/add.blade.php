<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Adicionar Filme</title>
    </head>
    <body>
        <h1 align="center">Formulário</h1>
        @if (count($errors) > 0)
         <div class="alert alert-danger">
         <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
         </ul>
         </div>
        @endif
        <form id="adicionarFilme" name="adicionarFilme" method="POST" action="/actors/add">
            {{ csrf_field() }}
            <div class="form-group col-6 m-auto">
                <label for="first_name">Nome</label>
                <input type="text" class="form-control" name="first_name" value="{{request()->get('first_name')}}" id="title"/>
            </div>
            <div class="form-group col-6 m-auto">
              <label for="last_name">Sobrenome</label>
              <input type="text" class="form-control" name="last_name" value="{{request()->get('last_name')}}"  id="awards"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="rating">Classificação</label>
                <input type="text" class="form-control" name="rating" value="{{request()->get('rating')}}"  id="rating"/>
            </div>
            <label for='filme'>Filme Favorito</label>
            <select name='filme' class="form-group col-6 m-auto">
              <option value="null">Selecione seu Filme Favorito</option>
              @foreach ($filmes as $filme)
                <option value="{{$filme->id}}">{{$filme->title}}</option>
              @endforeach
              <option value=""></option>
            </select>
            <br>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Adicionar Filme" name="submit" class="btn btn-primary"/>
            </div>
        </form>
    </body>
</html>
