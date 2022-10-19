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
</head>

<body class="fundo">
   <header>
            <div >
                <div class="upperHead">
                  <div>
                     <p>
                      <a href="">Lumière</a>
                    </p>
                  </div>
                    <form action="#" method="post">
                        <input type="text" placeholder="Pesquisar">
                    </form>
                    <div class="logosHeader">
                        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                     </div>
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
         </header>
         <main>
        <div class="swiffy-slider">
            <ul class="slider-container">
                <li><img src="../../images/strangerT.png" alt="hotd"></li>
                <li><img src="../../images/pizza.jpg" alt="pizza"></li>
                <li><img src="../../images/image25.png" alt="it"></li>
            </ul>
            <button type="button" class="slider-nav"></button>
            <button type="button" class="slider-nav slider-nav-next"></button>
            <div class="slider-indicators">
                <button class="active"></button>
                <button></button>
                <button></button>
            </div>
        </div>
        <div class="quadros">
            <div class="quadradodestaques">
                <div class="quadradodonomedestasques">
                    <h1>Destaques</h1>
                </div>
                <article class="primeirofilme">
                    <a href="obra/3">
                        <div class="imagem">
                        <img src="../../imagens/casa.jpg">
                        </div>
                        <div class="data">
                            <h3>A Casa do Dragão<br> (2022)</h3>
                        </div>
                    </a>
                </article>
                <article class="primeirofilme">
                    <a href="/obra/1">
                        <div class="imagem">
                            <img src="../../images/heartstopper.png" alt="Luluzinha">
                        </div>
                        <div class="data">
                            <h3>Adoráveis Mulheres <br> (2019)</h3>
                        </div>
                    </a>
                    <div class="mostrarmais">
                        <a href="/mostrarmais" style="cursor: pointer;">Mostrar Mais</a>
                    </div>
                </article>
            </div>
            <div class="quadradocomunidades">
                <div class="quadradodascomunidades">
                    <h1>Comunidades</h1>
                </div>
                <article class="primeiracomunidade">
                    <a href="./comunidadeharrypotter.html">
                        <div class="imagem">
                            <img src="../../images/Harrypotter.png" alt="harry">
                        </div>
                        <div class="cdata">
                            <h3>Harry Potter</h3>
                            <span class="datadelancamento">Para os fãs da saga!</span>
                            <br>
                            <span class="extra"> 500.000 membros</span>
                        </div>
                    </a>
                </article>
                <br>
                <article class="primeiracomunidade">
                    <a href="./comunidadeonepiece.html">
                        <div class="imagem">
                        <img src="../../images/Onepiece.png" alt="onePiece">
                        </div>
                        <div class="cdata">
                            <h3>One Piece</h3>
                            <span>Para os fãs da saga!</span>
                            <br>
                            <span class="extra"> 150.000 membros</span>
                        </div>
                        <div class="mostrarmais">
                            <a href="Mostrarmais.html" style="cursor: pointer;">Mostrar Mais</a>
                        </div>
                    </a>
                </article>
            </div>
        </div>
   </main>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.5.3/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
        defer></script>

    <footer>
        <div class="rodape">
        </div>
    </footer>


        <body>
<style>
  * {
  margin: 0;
  padding: 0;
  outline: 0;
  box-sizing: border-box;
  max-width: 1950px;
  max-height: 100%;
}

h1 {
  text-align: center;
  margin: 1em 0;
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
 .fundo{
  background-color: black;
}
.swiffy-slider{
    margin-top: 30px;
    margin-left: 20px;
    position:relative;
    display:block;
    width:100%;
    height: 100%;
    --swiffy-slider-snap-align:center;
    --swiffy-slider-item-width:100%;
    --swiffy-slider-item-gap:1rem;
    --swiffy-slider-item-reveal:0rem;
    --swiffy-slider-item-ratio:2/1;
    --swiffy-slider-item-count:1;
    --swiffy-slider-nav-light:#fff;
    --swiffy-slider-nav-dark:#333;
    --swiffy-slider-nav-zoom:1;
    --swiffy-slider-track-opacity:0.1;
    --swiffy-slider-track-height:0;
    --swiffy-slider-nav-outside-size:3.5rem;
    --swiffy-slider-indicator-outside-size:1.5rem;
    --swiffy-slider-animation-duration:.75s;
    --swiffy-slider-animation-delay:0s;
    --swiffy-slider-animation-timing:ease-in-out}
    
    
    .swiffy-slider,.swiffy-slider::after,.swiffy-slider::before{box-sizing:border-box}.swiffy-slider ::-webkit-scrollbar{height:var(--swiffy-slider-track-height)}.swiffy-slider ::-webkit-scrollbar-track{background:rgba(0,0,0,var(--swiffy-slider-track-opacity))}.swiffy-slider ::-webkit-scrollbar-thumb{background:rgba(0,0,0,.4);border-radius:1rem}.swiffy-slider ::-webkit-scrollbar-thumb:hover{background:rgba(0,0,0,.6)}.slider-container{--swiffy-slider-item-gap-totalwidth:calc(var(--swiffy-slider-item-gap) * (var(--swiffy-slider-item-count) - 1));--swiffy-slider-item-width:calc((100% - var(--swiffy-slider-item-reveal) - var(--swiffy-slider-item-gap-totalwidth)) / var(--swiffy-slider-item-count));overflow-x:auto;-webkit-overflow-scrolling:touch;-ms-scroll-snap-type:x mandatory;scroll-snap-type:x mandatory;scroll-behavior:smooth;display:grid;align-items:center;height:100%;grid:auto/auto-flow -webkit-max-content;grid:auto/auto-flow max-content;grid-auto-rows:100%;grid-auto-columns:var(--swiffy-slider-item-width);grid-auto-flow:column;grid-gap:var(--swiffy-slider-item-gap);list-style:none;margin:0;padding:0;scrollbar-width:none;scrollbar-color:rgba(0,0,0,.4) rgba(0,0,0,var(--swiffy-slider-track-opacity));background-clip:padding-box}.slider-container>{scroll-snap-align:var(--swiffy-slider-snap-align);position:relative;width:100%;height:100%}.slider-item-helper .slider-container>{background-size:cover;background-color:#e1e1e1;background-position:50% 50%;display:flex;justify-content:center;align-items:center}.slider-item-helper:not(.slider-item-ratio) .slider-container>*{min-height:20rem}.slider-item-ratio 
.slider-container>>{position:absolute;top:0;left:0;width:100%;height:100%;-o-object-fit:cover;object-fit:cover}.slider-item-ratio-contain .slider-container>>{-o-object-fit:contain;object-fit:contain}.slider-item-ratio .slider-container>::after{display:block;padding-top:calc(100% / (var(--swiffy-slider-item-ratio)));content:""}.slider-item-ratio-32x9{--swiffy-slider-item-ratio:32/9}.slider-item-ratio-21x9{--swiffy-slider-item-ratio:21/9}.slider-item-ratio-16x9{--swiffy-slider-item-ratio:16/9}.slider-item-ratio-4x3{--swiffy-slider-item-ratio:4/3}.slider-item-ratio-2x1{--swiffy-slider-item-ratio:2/1}.slider-item-ratio-1x1{--swiffy-slider-item-ratio:1/1}.slider-item-ratio-3x4{--swiffy-slider-item-ratio:3/4}.slider-nav-scrollbar{--swiffy-slider-track-height:0.5rem}.slider-nav-scrollbar .slider-container{scrollbar-width:thin}.slider-nav-nodelay .slider-container{scroll-behavior:auto}.slider-indicators{position:absolute;right:2rem;bottom:0;left:2rem;display:flex;justify-content:center;padding:0;margin-bottom:1rem;list-style:none}.slider-nav-scrollbar .slider-indicators{margin-bottom:calc(1rem + var(--swiffy-slider-track-height))}.slider-indicators>.active{opacity:1}.swiffy-slider.slider-indicators-outside .slider-nav{margin-bottom:var(--swiffy-slider-indicator-outside-size)}.swiffy-slider.slider-indicators-outside{padding-bottom:var(--swiffy-slider-indicator-outside-size)}.swiffy-slider.slider-indicators-outside .slider-indicators,.swiffy-slider.slider-indicators-outside.slider-indicators{margin-bottom:0}.slider-indicators>{box-sizing:content-box;flex:0 1 auto;width:2rem;height:.2rem;padding:0;border:.4rem solid transparent;cursor:pointer;background-color:#fff;background-clip:padding-box;opacity:.5;transition:opacity .4s ease}.slider-indicators-square .slider-indicators>,.slider-indicators-square.slider-indicators>{width:.5rem;height:.5rem;border:.4rem solid transparent}.slider-indicators-round .slider-indicators>,.slider-indicators-round.slider-indicators>{width:.5rem;height:.5rem;border:.4rem solid transparent;border-radius:50%}.slider-indicators-highlight .slider-indicators>.active,.slider-indicators-highlight.slider-indicators>.active{border:.33rem solid transparent;padding:.07rem}.slider-nav{position:absolute;top:0;left:0;bottom:0;border:0;background-color:transparent;cursor:pointer;padding:0;visibility:hidden;opacity:.8;transition:visibility .1s,opacity .2s linear;margin-bottom:var(--swiffy-slider-track-height);display:flex;align-items:center;padding:0 .5rem;-webkit-filter:drop-shadow(0 0 .5rem rgba(0, 0, 0, .5));filter:drop-shadow(0 0 .5rem rgba(0, 0, 0, .5));transform:scale(var(--swiffy-slider-nav-zoom))}.slider-nav::before{position:absolute;content:"";padding:.5rem;width:3rem;height:3rem}.slider-nav::after{content:"";-webkit-mask:url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 16 16'><path fill-rule='evenodd' d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'></path></svg>");mask:url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 16 16'><path fill-rule='evenodd' d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'></path></svg>");-webkit-mask-size:cover;mask-size:cover;background-color:var(--swiffy-slider-nav-light);background-origin:content-box;width:3rem;height:3rem}.slider-nav-arrow .slider-nav::after{-webkit-mask:url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 16 16'><path fill-rule='evenodd' d='M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z'></path></svg>");mask:url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 16 16'><path fill-rule='evenodd' d='M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z'></path></svg>")}.slider-nav-chevron .slider-nav::after{-webkit-mask:url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 16 16'><path fill-rule='evenodd' d='M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z'></path></svg>");mask:url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 16 16'><path fill-rule='evenodd' d='M9.224 1.553a.5.5 0 0 1 .223.67L6.56 8l2.888 5.776a.5.5 0 1 1-.894.448l-3-6a.5.5 0 0 1 0-.448l3-6a.5.5 0 0 1 .67-.223z'></path></svg>")}.slider-nav-caret .slider-nav::after{-webkit-mask:url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 16 16'><path d='M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z'></path></svg>");mask:url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 16 16'><path d='M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z'></path></svg>")}.slider-nav-caretfill .slider-nav::after{-webkit-mask:url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 16 16'><path d='m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z'></path></svg>");mask:url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 16 16'><path d='m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z'></path></svg>")}.swiffy-slider:hover .slider-nav{visibility:visible}.swiffy-slider.slider-nav-autohide.slider-item-first-visible .slider-nav:not(.slider-nav-next){visibility:hidden}.swiffy-slider.slider-nav-autohide.slider-item-last-visible .slider-nav.slider-nav-next{visibility:hidden}.slider-nav-outside .slider-container{margin:0 var(--swiffy-slider-nav-outside-size)}.slider-nav-outside .slider-nav{padding:0}.swiffy-slider .slider-nav:hover{opacity:1}.slider-nav-square .slider-nav{padding:0}.slider-nav-round .slider-nav::before,.slider-nav-square .slider-nav::before{background-color:var(--swiffy-slider-nav-light)}.slider-nav-round .slider-nav::after,.slider-nav-square .slider-nav::after{background-color:var(--swiffy-slider-nav-dark);width:2rem;height:2rem;margin:.5rem}.slider-nav-round .slider-nav::before{border-radius:50%}.slider-nav-round .slider-nav::after{-webkit-mask:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' %3E%3Cpath fill-rule='evenodd' d='M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z'%3E%3C/path%3E%3C/svg%3E");mask:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' %3E%3Cpath fill-rule='evenodd' d='M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z'%3E%3C/path%3E%3C/svg%3E")}.slider-nav-dark .slider-nav::after{background-color:var(--swiffy-slider-nav-dark)}.slider-nav-dark.slider-nav-round .slider-nav::before,.slider-nav-dark.slider-nav-square .slider-nav::before{background-color:var(--swiffy-slider-nav-dark)}.slider-nav-dark.slider-nav-round .slider-nav::after,.slider-nav-dark.slider-nav-square .slider-nav::after{background-color:var(--swiffy-slider-nav-light)}.slider-nav-sm{--swiffy-slider-nav-zoom:.75;--swiffy-slider-nav-outside-size:2.5rem}.slider-nav.slider-nav-next::after{transform:rotate(180deg)}.slider-nav.slider-nav-next{right:0;left:unset}.slider-nav-visible .slider-nav{visibility:visible}.slider-nav-dark .slider-nav{opacity:.6}.slider-indicators-dark .slider-indicators>,.slider-indicators-dark.slider-indicators>{-webkit-filter:invert(1);filter:invert(1)}.slider-item-snapstart{--swiffy-slider-snap-align:start}.slider-item-nosnap{--swiffy-slider-snap-align:unset}.slider-item-nogap{--swiffy-slider-item-gap:0rem}.slider-item-reveal{--swiffy-slider-item-reveal:8rem}.slider-item-snapstart.slider-item-reveal{--swiffy-slider-item-reveal:4rem}.slider-item-show2{--swiffy-slider-item-count:2}.slider-item-show3{--swiffy-slider-item-count:3}.slider-item-show4{--swiffy-slider-item-count:4}.slider-item-show5{--swiffy-slider-item-count:5}.slider-item-show6{--swiffy-slider-item-count:6}.slider-nav-mousedrag .slider-container{cursor:-webkit-grab;cursor:grab}.slider-nav-mousedrag .slider-container.dragging{-ms-scroll-snap-type:unset;scroll-snap-type:unset;scroll-behavior:unset;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}@media (hover:hover){.slider-nav-mousedrag .slider-container::after{content:"";position:absolute;width:100%;height:100%}}@media (prefers-reduced-motion:no-preference){.slider-nav-animation.slider-nav-animation-fast{--swiffy-slider-animation-duration:.25s}.slider-nav-animation.slider-nav-animation-slow{--swiffy-slider-animation-duration:1.25s}.slider-nav-animation .slider-container>>{transition:opacity var(--swiffy-slider-animation-duration) var(--swiffy-slider-animation-timing),transform var(--swiffy-slider-animation-duration) var(--swiffy-slider-animation-timing);transition-delay:var(--swiffy-slider-animation-delay)}.slider-nav-animation .slider-container .slide-visible>{transition:opacity var(--swiffy-slider-animation-duration) var(--swiffy-slider-animation-timing),transform var(--swiffy-slider-animation-duration) var(--swiffy-slider-animation-timing);transition-delay:var(--swiffy-slider-animation-delay)}.slider-nav-animation.slider-nav-animation-fadein .slider-container>>{opacity:.5}.slider-nav-animation.slider-nav-animation-scale .slider-container>>{transform:scale(.9)}.slider-nav-animation.slider-nav-animation-appear .slider-container>>{opacity:.3;transform:scale(.9)}.slider-nav-animation.slider-nav-animation-scaleup .slider-container>>{transform:scale(.25)}.slider-nav-animation.slider-nav-animation-zoomout .slider-container>{overflow:hidden}.slider-nav-animation.slider-nav-animation-zoomout .slider-container>>{transform:scale(1.3)}.slider-nav-animation.slider-nav-animation-turn .slider-container>>{transform:rotateY(70deg)}.slider-nav-animation.slider-nav-animation-slideup .slider-container>>{transform:translateY(60%) scale(.99)}.slider-nav-animation.slider-nav-animation-slideup .slider-container{overflow-y:hidden}.slider-nav-animation .slider-container>.slide-visible>{opacity:1;transform:none}}@media (min-width:62rem){.slider-item-show2:not(.slider-item-snapstart) .slider-container>,.slider-item-show4:not(.slider-item-snapstart) .slider-container>,.slider-item-show6:not(.slider-item-snapstart) .slider-container>{scroll-snap-align:unset}.slider-item-show2:not(.slider-item-snapstart) .slider-container>::before,.slider-item-show4:not(.slider-item-snapstart) .slider-container>::before,.slider-item-show6:not(.slider-item-snapstart) .slider-container>::before{content:" ";display:block;position:absolute;left:calc((var(--swiffy-slider-item-gap)/2)-1);top:0;width:1px;height:1px;scroll-snap-align:var(--swiffy-slider-snap-align)}.slider-nav-outside-expand .slider-nav{margin-left:-4rem}.slider-nav-outside-expand .slider-nav.slider-nav-next{margin-right:-4rem}.slider-nav-sm.slider-nav-outside-expand .slider-nav{margin-left:-3.5rem}.slider-nav-sm.slider-nav-outside-expand .slider-nav.slider-nav-next{margin-right:-3.5rem}.slider-indicators-sm.slider-indicators{display:none}}@media (max-width:62rem){.swiffy-slider{--swiffy-slider-track-height:0rem;--swiffy-slider-item-reveal:0rem;--swiffy-slider-item-count:1;--swiffy-slider-nav-zoom:.875}.slider-item-reveal{--swiffy-slider-item-reveal:4rem}.slider-item-snapstart.slider-item-reveal{--swiffy-slider-item-reveal:2rem}.slider-item-show6 .slider-container{grid-auto-columns:calc(25% - (var(--swiffy-slider-item-gap)/ 4*3))}.slider-item-show6.slider-item-reveal .slider-container{grid-auto-columns:calc(25% - (var(--swiffy-slider-item-gap)/ 4*3) - .5rem)}.slider-item-show6.slider-item-reveal .slider-container>{scroll-snap-align:unset}.slider-item-show6.slider-item-reveal .slider-container>::before{content:" ";display:block;position:absolute;left:calc((var(--swiffy-slider-item-gap)/2)-1);top:0;width:1px;height:1px;scroll-snap-align:center}.slider-nav::after,.slider-nav::before{width:2rem;height:2rem;padding:.3rem}.slider-nav-round .slider-nav::after,.slider-nav-square .slider-nav::after{width:1.75rem;height:1.75rem;margin:.125rem}.slider-nav-outside .slider-container,.slider-nav-outside-expand .slider-container{margin:0 2rem}.slider-nav-outside-expand .slider-container{margin:0 var(--swiffy-slider-nav-outside-size)}.slider-nav-outside-expand .slider-nav{padding:0}.slider-indicators-round .slider-indicators>,.slider-indicators-round.slider-indicators>,.slider-indicators-square .slider-indicators>,.slider-indicators-square.slider-indicators>{width:.3rem;height:.3rem}.slider-indicators{margin-bottom:.5rem;display:none}.slider-nav-scrollbar .slider-indicators{margin-bottom:0}.slider-indicators>*{width:1rem;height:.125rem;border-width:.25rem}.slider-indicators-sm .slider-indicators,.slider-indicators-sm.slider-indicators{display:flex}}@media (max-width:48rem){.slider-item-show6 .slider-container{grid-auto-columns:calc(50% - (var(--swiffy-slider-item-gap)/ 2))}.slider-item-show6.slider-item-reveal .slider-container{grid-auto-columns:calc(50% - (var(--swiffy-slider-item-gap)/ 2) - 1.5rem)}}@media (hover:none){.swiffy-slider.slider-nav-touch .slider-nav{visibility:visible}.swiffy-slider:not(.slider-nav-touch).slider-nav-outside .slider-container,.swiffy-slider:not(.slider-nav-touch).slider-nav-outside-expand .slider-container{margin:0 0}.slider-item-nosnap-touch{--swiffy-slider-snap-align:unset}}
/*# sourceMappingURL=swiffy-slider.min.css.map */


.destaques{
    width: 400px;
    height: 500px;
    max-width: 100%;
    max-height: 100%;
}
.imagem{
    margin-left: 10px;

}

.quadradodestaques{
    background-color: #3B4A52;
    position: relative;
    border-radius: 5rem;
    margin-right: 50px;
    margin-left: 80px;
    margin-top: 30px;
    max-width: 600px;
    max-height: 650px;
    width: 500px;
    height: 400px;
    overflow: hidden;
    box-sizing: border-box;
}

.quadradodonomedestasques{
    width: 200px;
    margin-left: 30%;
    margin-top: 1%;
    color: white;
    
}

.objetosdentrododestaques1{
    width: 82px;
    height: 150px;
    margin-left: 50px;
    color: white;
    display: block;
}

.data{
    color: white;
    margin-right: 35%;
    text-align: left;
    width: 200px;
    height: 50px;
}





.comunidades{
    width: 400px;
    height: 500px;
    max-width: 100%;
    max-height: 100%;
}

.quadradocomunidades{
    background-color: #3B4A52;
    position: relative;
    border-radius: 5rem;
    margin-top: 0;
    margin-right: 50px;
    margin-left: 80px;
    margin-top: 30px;
    max-width: 600px;
    max-height: 650px;
    width: 500px;
    height: 310px;
    overflow: hidden;
    box-sizing: border-box;
}

.quadradodascomunidades{
    width: 200px;
    margin-left: 25%;
    margin-top: 1%;
    color: white;
    
}

.objetosdentrodascomunidades1{
    width: 82px;
    height: 150px;
    margin-left: 50px;
    color: white;
    display: block;
}

.cdata{
    color: white;
    margin-right: 39%;
    text-align: left;
    width: 200px;
    height: 50px;
}

.mostrarmais{
    cursor: pointer;
    margin-top: 10px;
    margin-left: 150px ;
}
.quadros{
    display: flex;
    flex-direction: column;
    
}


.rodape{
    background-color: #23353E;
    margin-top: 50px;
    height: 50px;
}

</style>