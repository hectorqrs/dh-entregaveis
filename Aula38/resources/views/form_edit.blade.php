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
        <form id="adicionarFilme" name="adicionarFilme" method="POST" action="/actor/edit/{{ $ator->id }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group col-6 m-auto">
                <label for="first_name">Nome</label>
                <input type="text" class="form-control" name="first_name" value="{{$ator->first_name}}" id="title"/>
            </div>
            <div class="form-group col-6 m-auto">
              <label for="last_name">Sobrenome</label>
              <input type="text" class="form-control" name="last_name" value="{{$ator->last_name}}"  id="awards"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="rating">Classificação</label>
                <input type="text" class="form-control" name="rating" value="{{$ator->rating}}"  id="rating"/>
            </div>
            <br>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Atualizar" name="submit" class="btn btn-primary"/>
            </div>
        </form>
        <form action="/actor/delete/{{ $ator->id }}" method="get" classes='row'>
          <input class='offset-5' type="submit" value="Apagar Usuário">
        </form>
    </body>
</html>
