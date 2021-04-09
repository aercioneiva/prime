<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Silvio Iwata Prime</title>
    @include('site.templates.css')
  </head>


  <body>  
  <style> body, html{margin: 0; height: 100%; overflow: hidden;}</style>  
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W76JRRC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div id="paginainicial">
  <div class="site-loader"></div>
  
  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    

<!--

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <a style="color:#4e7b68;font-size:1.4em;font-weight:600;" href="#" class="mr-3"><span style="font-size:1.6em;margin-top: 5px;" class=" icon-phone"></span> <span class="d-none d-md-inline-block ml-2">(44) 3226-4632</span></a>
              <a style="color:#4e7b68;font-size:1.4em;font-weight:600;margin-left: 40px;" href="#"><span style="font-size:1.6em;margin-top: 5px;" class=" icon-whatsapp"></span> <span class="d-none d-md-inline-block ml-2">(44) 9 9999-9999</span></a>
            </p>  
          </div>
          <div class="col-6 col-md-6 text-right">
            <a href="https://www.facebook.com/silvioiwataprime/" target="_blank" class="mr-3"><span style="color:#4e7a68;font-size: 2em;margin:8px 40px 0 0" class=" icon-facebook"></span></a>
              
            <a href="https://www.instagram.com/silvioiwataprime/" target="_blank" class="mr-0"><span style="color:#4e7a68;font-size: 2em;margin:8px 0 0 0" class="icon-instagram"></span></a>
          </div>
        </div>
      </div>      
    </div>
-->

      @include('site.templates.nav')
    </div>
    <div class="slide-one-item home-slider owl-carousel">
      @foreach ($imoveis as $imovel)
        <div class="site-blocks-cover" style="background-image: url({{asset('storage/'.$imovel->nome_imagem)}});" data-aos="fade">
          <div class="text">
            <h2>{{$imovel->titulo}}</h2>
            <p class="location"><span class="property-icon icon-room"></span>{{$imovel->endereco}} </p>             
            <p class="preco-inicio"><strong>R${{number_format($imovel->valor,2,",",".")}}</strong></p>     
            <div class="detalhes-inicio"> 
              <h3><span style="color:#f2d16b;font-size: 1em;" class="icon-star"></span>{{$imovel->area}}m2</h3>
              <h3><span style="color:#f2d16b;font-size: 1em;" class="icon-star"></span>{{$imovel->dormitorios}} Domirtório(s)</h3>
              <h3><span style="color:#f2d16b;font-size: 1em;" class="icon-star"></span>{{$imovel->vagas}} Vagas</h3>
            </div> 
            
            <p class="mb-0"><a href="{{route('propriedade', ['id' => $imovel->id])}}" class="text-uppercase small letter-spacing-1 font-weight-bold maisdetalhes">Mais Detalhes</a></p>          
          </div>        
        </div>
      @endforeach 
    </div>
    </div>
    @include('site.templates.js')
  </body>
</html>