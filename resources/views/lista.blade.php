<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

<div class="container">
    <!-- Button trigger modal -->
    <br><br><br>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Novo Usuario
</button>

    <h1>Lista de users</h1>

    @if(count($errors)>0)
    <div class="alert alert-success">
        <p>{{\Session::get('success')}}</p>
    </div>    
   @endif
    
        <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>

                

                @foreach($usuarios as $us)
                  <tr>
                    <th scope="row"> <p>{{ $us->id}} </p></th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                @endforeach  
                </tbody>
              </table>
  
</div>
    

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Novo Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <!-- Form -->
        <form action="{{ route('Usuario.store') }}"  method="POST">
        
                                   
                                   @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nome</label>
                                            <input type="text" class="form-control" name="nome">
                                            
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="">
                                            
                                            <label for="exampleInputEmail1" class="form-label">CPF/CNPJ</label>
                                            <input type="text" class="form-control" name="cpf">
                                            
                                            <label for="exampleInputEmail1" class="form-label">Telefone</label>
                                            <input type="text" class="form-control" name="telefone">
                                            
                                            <label for="exampleInputEmail1" class="form-label">Senha</label>
                                            <input type="password" class="form-control" name="senha">
                                            
                                            <label for="exampleInputEmail1" class="form-label">Data de nascimento</label>
                                            <input type="date" class="form-control" name="data">
                                            
                                        </div>
                                        
                                    
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div></form><!-- Fim Form -->
</div>
</div>
</div>
    
</body>
</html>