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
        <form id="adicionarFilme" name="adicionarFilme" method="POST" action='edit/{{Auth::user()->id}}'>
          @csrf
          {{method_field('PUT')}}
            <div class="form-group col-6 m-auto">
                <label for="name">Nome</label>
                <input type="text" class="form-control" name="name" id="name" value={{Auth::user()->name}}/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email" value={{Auth::user()->email}}/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="phone">Telefone</label>
                <input type="text" class="form-control" name="phone" id="phone" value={{Auth::user()->phone}}/>
            </div>
            </div>
            <br>
            <div class="form-group col-6 m-auto">
              <input type="submit" value="Adicionar Filme" name="submit" class="btn btn-primary"/>
            </div>
        </form>
    </body>
</html>
