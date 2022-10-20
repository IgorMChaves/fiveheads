<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>principal</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css'>
    <link rel='stylesheet' href='https://static.fontawesome.com/css/fontawesome-app.css'>
    <link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.2.0/css/all.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700'>

    <link rel="stylesheet" href="css/principal.css">
</head>

<body class="fundo">
    <header>
        <div>
            <div class="upperHead">
                <div>
                    <p>
                        <a href="/">Lumière</a>
                    </p>
                </div>
                <form action="#" method="post">
                    <input type="text" placeholder="Pesquisar">
                    <button type="submit" class="button" img="lupa 13.png"></button>
                </form>
                <div class="logosHeader">
                    <a href="usuario.html" class="button"> Usuário</a>
                    <img src="./images/perfil.png" />
                </div>
            </div>
            <div class="tags">
                <ul>
                <li>
                            <a href="/acao">Ação</a>
                        </li>
                        <li>
                            <a href="/comedia">Comedia</a>
                        </li>
                        <li>
                            <a href="/sci-fi">Sci-fi</a>
                        </li>
                        <li>
                            <a href="/drama">Drama</a>
                        </li>
                        <li>
                            <a href="/terror">Terror</a>
                        </li>
                        <li>
                            <a href="/fantasia">Fantasia</a>
                        </li>
                        <li>
                            <a href="/mostrarmais">Mais</a>
                        </li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <div class="quadradodasinopse">

            <div class="objetosdentrodasinopse">
                <div>
                    <div class="title">
                      <p class="nomezinho"><strong>{{$foto->nomeObra}}</strong> </p>
                    </div>
                </div>
            </div>
            
            <div class="imgsi">
            <div class="quadradodoquadrado">
               <div class="quadradoimg">
                <img class="showImg" src="/storage/{{$foto->arquivo}}"></img>
              </div>
            </div>
            </div>

            <div class="sisi">
            <div>
                        <p class="card-text"><strong>Lançamento:</strong> {{$foto->data}}</p>
                        <hr size="50">
                        <p class="card-text"><strong>Duração:</strong> {{$foto->duracao}}</p>
                        <hr size="50">
                        <p class="card-text"><strong>Sinopse:</strong> {{$foto->sinopse}}</p>
                        <hr size="50">
                        <p class="card-text"><strong>Elenco:</strong> {{$foto->elenco}}</p>
                        <hr size="50">
                        <p class="card-text"><strong>Produção:</strong> {{$foto->producao}}</p>
                        <hr size="50">
                        <p class="card-text"><strong>Categoria:</strong> {{$foto->categoria}}</p>
               </div>
            </div>
        </div>
        <div class="quadross">

            <div class="quadradoavaliacoes">
                <div class="quadradodoavaliacoes">
                    <h1>Avaliações</h1>
                </div>
                <div class="dataava">
                <p>Sua avaliação :</p>
                <ul class="avaliacao"> 
                    <li class="star-icon ativo" data-avaliacao="1"></li>
                    <li class="star-icon" data-avaliacao="2"></li>
                    <li class="star-icon" data-avaliacao="3"></li>
                    <li class="star-icon" data-avaliacao="4"></li>
                    <li class="star-icon" data-avaliacao="5"></li>
                  </ul>
                </div>

                <br>
            </div>            
            <div class="quadradocomentario">
                <div class="quadradodoquadradocomentario">
                    <h1>Comentários</h1>
                </div>
            </div>
                
        </div>
        
    </main>
    <footer>
        <div class="rodape">
        </div>
    </footer>
    <script src="./js/script.js"></script>

</body>

<style>
* {
  margin: 0;
  padding: 0;
  outline: 0;
  box-sizing: border-box;
  max-width: 100%;
  max-height: 100%;
}

h1 {
  text-align: center;
  margin: 0.5em 0.5m;
  font-family: sans-serif;
}

.upperHead {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: auto;
    background-color: #23353E;
    color: white;
    padding: 1rem;
}
.logosHeader{
    position: relative;
    left: 9px;
    right: 6px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    font-size: 1.5rem;
    font-family: sans-serif;
}
.iconPer{
    position: absolute;
    left: 79.15%;
    right: 17.34%;
    top: 1.81%;
    bottom: 91.75%;
}
.home {
    display: flex;
    align-items: center;
    justify-content: flex-start;
}

.logos {
    display: flex;
    justify-content: space-between;
    margin: auto;
}

main{
    display: grid;
    grid-template-columns: auto auto;
    padding: 30px;
}

h2 {
    font-family: sans-serif;
    font-size: 24;
    color: white;
}
div p a{
  -webkit-text-stroke-width: 2px;
  -webkit-text-stroke-color: #ffffff;
  font-size: 30px; color: #ffffff;
}

.usuario {
    margin-right: 2rem;
}

form input{
    position: relative;
    left: 10%;
    border-radius: 0.4rem;
    background: rgba(196, 196, 196, 0.5);
    border: 1px solid #969494;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    height: 30px;
    width: 505px;
  }
::placeholder{
    color: whitesmoke;
  }
.tags {
    display: flex;
    margin: auto;
    background-color: #3B4A52;
}

.title {
  color: white;
  font-size: 2rem;
  margin-top: 10px;
  width:500px;
}

.objetosdentrodasinopse{
  height:80px;
  padding:10px;
  max-width:500px;
}
.nomezinho{
    font-size: 32px;
    margin-left: 10px;
    width: 500px;
}


.tags ul {
    display: flex;
    justify-content: space-between;
    margin: auto;
    list-style-type: none;
    padding: 1rem;
}

.tags ul li {
    display: flex;
    justify-content: center;
    margin: auto;
    padding: 0 10px;
}

a {
    display: flex;
    font-family: 'Kulim Park', sans-serif;
    color: rgb(255, 255, 255);
    text-decoration: none;
    justify-content: space-between;
    align-items: center;
    padding: 7px;
}
 .fundo{
  background-color: black;
}

.imgsi{
  max-width:100%;
  align-items:center;
  padding:10px;
}

.quadradodasinopse{
  background-color: #3B4A52;
  margin-top: 30px;
  border-radius: 10px;
  height:800px;
  width: 800px;
  margin-left:10px;
  max-width: 100%;
  max-height: 100%;
  padding:20px;
  align-items: center;
}

.quadradodasinopse h2{
  margin-left: 10px;
  margin-top: 10px;
  color: white;
}

.title a{quadradoimg
  padding: 5px;
}

.showImg{
  width: 500px;
  height: 500px;
}


.quadradodoquadrado{
  width: 500px;
  align-items: center;
  margin-left: 100px;
  max-width:500px;
}

.quadradoimg{
  padding: 10px;
  width: 500px;
  height: 400px;
  
}

.sisi{
  margin-top: 50px;
  margin-left: 10px;
  margin-right: 10px;
  color: white;
  line-height: 1.5;
  font-size: 20px;
  padding:10px;
  max-height:100%;
}

.quadross{
  margin-top: 30px;
  display: flex;
  flex-direction: column;
  margin-left: 20px ;
  max-width: 1200px;
  height: 800px;
}
.quadradoavaliacoes{
  width: 1000px;
  height: 250px;
  padding:10px;
  background-color: #3B4A52;
  border-radius: 10px;
  color: white;
  max-width:100%;
  max-height:100%;
}

.dataava{
  margin-left: 20px;
  font-size: medium;
  margin-top: 20px;
  height: 50px;
  width: 400px;
  max-width: 200px;
}

.avaliacao{
  display: flex;
  flex-direction:row;
  width: 400px;
  float: left;
}

.avaliacao .p{
  display: flex;
  flex-direction: inline;
  width: 200px;
}

.star-icon{
  list-style-type: none;
  border: 1px solid #3B4A52;
  cursor: pointer;
  color: #ffe500;
  font-size: 40px;/* alterar o tamanho das estrelas */
}
.star-icon::before{
  content: "\2605";
}
.star-icon.ativo ~ .star-icon::before{
  content: "\2606";
}
.avaliacao:hover .star-icon::before{
  content: "\2605";
}
.star-icon:hover ~ .star-icon::before{
  content: "\2606";
}

.quadradodoavaliacoes{
  padding:10px;
  height:80px;
}

.quadradocomentario{
  width: 1000px;
  height: 600px;
  max-width:100%;
  max-height:100%;
  margin-top: 20px;
  background-color: #3B4A52;
  border-radius: 10px;
  color: white;
}
.quadradodoquadradocomentario{
  padding:10px;
} 

.rodape{
  background-color: #23353E;
  margin-top: 30px;
  height: 50px;
}