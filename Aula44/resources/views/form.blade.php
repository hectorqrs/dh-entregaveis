<html>
    <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Adicionar Filme</title>
    </head>
    <body>
      @if (count($errors) > 0)
         <div class="alert alert-danger">
           <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
           @endforeach
          </ul>
         </div>
      @endif
        <h1 align="center">Formulário</h1>
        <form id="adicionarFilme" name="adicionarFilme" method="POST">
          @csrf
            <div class="form-group col-6 m-auto">
                <label for="title">Título</label>
                <input type="text" class="form-control" name="title" id="title" value={{old('title')}}/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="rating">Classificação</label>
                <input type="text" class="form-control" name="rating" id="rating" value={{old('rating')}}/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="awards">Prêmios</label>
                <input type="text" class="form-control" name="awards" id="awards" value={{old('awards')}}/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="length">Duração</label>
                <input type="text" class="form-control" name="length" id="length" value={{old('length')}}/>
            </div>
            <div class="form-group col-6 m-auto">
                <label>Data de estreia</label>
                <input type="date" class='form-control' name="release_date" value={{old('release_date')}}>
                </div>
            </div>
            <div class="form-group col-6 m-auto">
                <label>Genero</label>
                <select class="form-control" name="genre">
                  <option value="null">Selecione o gênero do seu filme</option>
                  @foreach ($generos as $genero)
                    <option value= {{$genero->id}}>{{$genero->name}}</option>
                  @endforeach
                </select>
                </div>
            </div>
            <br>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Adicionar Filme" name="submit" class="btn btn-primary"/>
            </div>
        </form>
    </body>
</html>
