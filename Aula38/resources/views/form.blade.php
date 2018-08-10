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

        @if(isset($sucesso) && $sucesso)
          Filme Adicionado com Sucesso!
        @endif
        <form id="adicionarFilme" name="adicionarFilme" method="POST" action="/form">
            @csrf
            <div class="form-group col-6 m-auto">
                <label for="title">Título</label>
                <input type="text" class="form-control" name="title" value="{{request()->get('title')}}" id="title"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="rating">Classificação</label>
                <input type="text" class="form-control" name="rating" value="{{request()->get('rating')}}"  id="rating"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="awards">Prêmios</label>
                <input type="text" class="form-control" name="awards" value="{{request()->get('awards')}}"  id="awards"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="length">Duração</label>
                <input type="text" class="form-control" name="length" value="{{request()->get('length')}}"  id="length"/>
            </div>
            <div class="form-group col-6 m-auto">
              <label>Data de Lançamento</label>
              <input type="date" class='form-control' name="data_lançamento" value='{{request()->get('data_lançamento')}}' id='data_lançamento'>
            </div>
            <br>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Adicionar Filme" name="submit" class="btn btn-primary"/>
            </div>
        </form>
    </body>
</html>
