<!doctype html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/admin/estilo.css') }}">
    <title>Álbum</title>
    <style>
        body { padding: 20px; }
        .navbar { margin-bottom: 20px; }
        :root { --jumbotron-padding-y: 10px; }
        .jumbotron {
          padding-top: var(--jumbotron-padding-y);
          padding-bottom: var(--jumbotron-padding-y);
          margin-bottom: 0;
          background-color: #fff;
        }
        @media (min-width: 768px) {
          .jumbotron {
            padding-top: calc(var(--jumbotron-padding-y) * 2);
            padding-bottom: calc(var(--jumbotron-padding-y) * 2);
          }
        }
        .btn1 {
          font-size: 20px;
        }
        .jumbotron p:last-child { margin-bottom: 0; }
        .jumbotron-heading { font-weight: 300; }
        .jumbotron .container { max-width: 40rem; }
        .btn-card { margin: 4px; }
        .btn { margin-right: 5px; }
        footer { padding-top: 3rem; padding-bottom: 3rem; }
        footer p { margin-bottom: .25rem; }
    </style>
</head>
<body>
    <header>
      <div class="navbar navbar-dark bg-dark shadow-sm">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>FILMES</strong>
          </a>
      </div>
    </header>
    <div class="d-flex justify-content-between align-items-right">
      <section>
        <div class="btn-group">
          <a type="button" class="btn1 btn-sm btn-outline-primary" href="/formulario">Cadastrar um novo filme</a>
          <form action="{{route('foto.search')}}" method="POST">
            @csrf
            <div class="d-flex justify-content-between align-items-right">   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        
                <input type="text" name="busca" class="form-control" placeholder="Buscar por título"></input>
              <div class="col d.flex align-items-end">
                <button type="submit" class="btn btn-primary">Filtrar</button>
              </div>
            </div>
          </form>
        </div>
      </section>
    </div>
    <main class="main">
    <br>
        <div class="album py-5 bg-secondary">
        <div class="container">
          <div class="row">
            @foreach($foto as $foto)
                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    <img class="card-img-top figure-img img-fluid rounded" src="/storage/{{$foto->arquivo}}" class="showImg"></img>
                    <div class="card-body">
                      <p class="card-text"><strong>Título:</strong> {{$foto->nomeObra}}</p>
                      <p class="card-text"><strong>Lançamento:</strong> {{$foto->data}}</p>
                      <p class="card-text"><strong>Duração:</strong> {{$foto->duracao}}</p>
                      <p class="card-text"><strong>Sinopse:</strong> {{$foto->sinopse}}</p>
                      <p class="card-text"><strong>Elenco:</strong> {{$foto->elenco}}</p>
                      <p class="card-text"><strong>Produção:</strong> {{$foto->producao}}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                        <a type="button" class="btn btn-sm btn-outline-secondary" href="/filmes/{{$foto->id}}/edit">Editar</a>
                          <form method="POST" action="filmes/{{$foto->id}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Apagar</button>
                          </form>
                          <a type="button" class="btn btn-sm btn-outline-primary" href="/obra/{{$foto->id}}">Visualizar</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            @endforeach
          </div>
        </div>
      </div>
    </main>
    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">voltar</a>
        </p>
      </div>
    </footer>
</body>
</html>