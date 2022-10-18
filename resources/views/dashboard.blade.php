<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- HTML  -->
<body class="container" >    
    <header>
            <div >
                <div class="upperHead">
                  <div>
                     <p>
                      <a href="principal.html">Lumière</a>
                    </p>
                  </div>
                    <form action="#" method="post">
                        <input type="text" placeholder="Pesquisar">
                    </form>
                    <div class="logosHeader">
                    <x-app-layout>
                        <x-slot name="header">
                            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                {{ __('Dashboard') }}
                            </h2>
                        </x-slot>
                        <div class="py-12">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                                    <x-jet-welcome />
                                </div>
                            </div>
                        </div>
                    </x-app-layout>
                    </div>
                </div>
                <div class="tags">
                    <ul>
                        <li>
                            <a href="Acao.html">Ação</a>
                        </li>
                        <li>
                            <a href="Comedia.html">Comedia</a>
                        </li>
                        <li>
                            <a href="Sliceoflife.html">Slice of life</a>
                        </li>
                        <li>
                            <a href="Terror.html">Terror</a>
                        </li>
                        <li>
                            <a href="Scifi.html">Sci - fi</a>
                        </li>
                        <li>
                            <a href="">Mais</a>
                        </li>
                    </ul>
                </div>
            </div>
      
            <main>   
               <div class="delimitando">
                  <div class="Destaques" style="margin-top: 10px;">
                   <div class="Quadradododestaques" style="max-height: 500px; "tabindex="0";>
                       <div class="posicaodoquadradododestaques" style="position: relative; top: 2%; right: 0;" dir="ltr";>
                       <div class="objetosdoquadrado">
                           <aside class="obejtosdentrodoquadrado">
                               <div class="letrasenumerosdosquadrados">
                                  <br>
                                  <div class="caraiododestaque">
                                 <h2>Destaques</h2>
                              </div>
                                 <br>
                                   <article class="primeirofilme">
                                       <a href="https://www.amazon.com.br/Heartstopper-Dois-garotos-encontro-vol/dp/8555341612">
                                       <div class="imagem">
                                           <img src="../../images/ursinhopooh.png" alt="Ursinho Pooh">
                                       </div>
                                           <div class="data">
                                               <h3 >Ursinho Pooh</h3 >
                                               <span class="datadelancamento">2011</span>
                                               <span class="extra">
                                                   <b>
                                                       <i class="estrelinha">
                                                       </i>
                                                       10
                                                   </b>
                                               </span>
                                           </div>
                                       </a>
                                   </article>
                                   <article class="primeirofilme">
                                    <a href="https://www.amazon.com.br/Heartstopper-Dois-garotos-encontro-vol/dp/8555341612">
                                    <div class="imagem">
                                        <img src="../../images/heartstopper.png" alt="Heartstopper">
                                    </div>
                                        <div class="data">
                                            <h3 >Heartstopper</h3 >
                                            <span class="datadelancamento">2011</span>
                                            <span class="extra">
                                                <b>
                                                    <i class="estrelinha">
                                                    </i>
                                                    8.1
                                                </b>
                                            </span>
                                        </div>
                                    </a>
                                </article>
                                <article class="primeirofilme">
                                 <a href="https://www.amazon.com.br/Heartstopper-Dois-garotos-encontro-vol/dp/8555341612">
                                 <div class="imagem">
                                     <img src="../../images/luluzinha.png" alt="Luluzinha">
                                 </div>
                                     <div class="data" style="max-width: none;">
                                         <h3 style="margin-left: 10px;">Luluzinha</h3 >
                                         <span class="datadelancamento" style="margin-left: 10px;">2011</span>
                                         <span class="extra">
                                             <b>
                                                 <i class="estrelinha">
                                                 </i>
                                                 10
                                             </b>
                                         </span>
                                     </div>
                                     <br>
                                        <a href="pricipiodenovo.html">Mostrar Mais</a>
                                 </a>
                             </article>
                               </div>
                           </aside>
                       </div>
                   </div>
                </div>
                </div>
               </div>
               </div>

               <div class="delimitando">
               <div class="Comunidades" style="margin-top: 30px;">
                  <div class="Quadradodocomunidades" style="max-height: 500px; "tabindex="0";>
                      <div class="posicaodoquadradocomunidades" style="position: relative; top: 1%; right: 0;" dir="ltr";>
                      <div class="objetoscomunidades">
                          <aside class="obejtosdentrodoquadradocomunidades">
                              <div class="letrasenumerosdosquadradodacomunidades">
                                 <br>
                                 <div class="caraiododoquadradosdacomunidades">
                                <h2>Comunidades em Destaques</h2>
                             </div>
                                <br>
                                  <article class="primeiracomunidade">
                                      <a href="https://www.amazon.com.br/Heartstopper-Dois-garotos-encontro-vol/dp/8555341612">
                                      <div class="imagem">
                                          <img src="../../images/Harrypotter.png" alt="Heartstopper">
                                      </div>
                                          <div class="cdata">
                                              <h3 >Harry Potter</h3 >
                                              <span class="datadelancamento">Para os fãs da saga!</span>
                                              <br>
                                              <span class="extra"> 500.000 membros</span>
                                          </div>
                                      </a>
                                  </article>
                              </div>
                          </aside>
                          <aside class="obejtosdentrodoquadradocomunidades">
                            <div class="letrasenumerosdosquadradodacomunidades">
                               <div class="caraiododoquadradosdacomunidades">
                           </div>
                                <article class="primeiracomunidade">
                                    <a href="https://www.amazon.com.br/Heartstopper-Dois-garotos-encontro-vol/dp/8555341612">
                                    <div class="imagem">
                                        <img src="../../images/Onepiece.png" alt="Heartstopper">
                                    </div>
                                        <div class="cdata">
                                            <h3 style="margin-left: 10px;" >One Piece</h3>
                                            <span class="datadelancamento" style="margin-left: 10px;">Para os fãs da saga!</span>
                                            <br>
                                            <span class="extra" style="margin-left: 10px;"> 150.000 membros</span>
                                        </div>
                                        <br>
                                        <div>
                                            <a href="pricipiodenovo.html" style="cursor: pointer;">Mostrar Mais</a>
                                        </div>
                                        
                                    </a>
                                </article>
                            </div>
                        </aside>
                      </div>
                  </div>
               </div>
                  </div>
              </div>
              </div>
           </main>
    </body>
</html>


<!-- css  -->

<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            border: none;
        }
        .container {
            background-color: #112027;
        }
        /* Header */
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
        main .delimitando {
        max-width: 1800px;
        max-height: 750px;
        margin-left: 50px;
        }
        main .posicaodoquadradododestaques{
        position: relative;
        left: 72%;
        right: 1.7%;
        top: 10%;
        bottom: 100%;
        background: #2A363D;
        border-radius: 21px;
        width: 500px;
        }
        main .letrasenumerosdosquadrados{
        color: white;
        margin-left: 5%;
        }
        
        main .data {
        color: white;
        margin-right: 40%;
        text-align: left;
        }
        main .caraiododestaque{
        text-align: center;
        }
        main .posicaodoquadradocomunidades{
        position: relative;
        left: 72%;
        right: 1.7%;
        top: 5%;
        bottom: 100%;
        background: #2A363D;
        border-radius: 21px;
        width: 500px;
            }
        main .letrasenumerosdosquadradodacomunidades{
        color: white;
        margin-left: 5%;
        }
            
        main .cdata {
        color: white;
        margin-right: 50%;
        text-align: left;
        }
        main .caraiododoquadradosdacomunidades{
        text-align: center;
        }
        main .imagem.cimagem {
            position: right;
            margin-left: 15px;
        }
    </style>