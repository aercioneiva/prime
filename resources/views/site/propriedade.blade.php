<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W76JRRC');</script>
    <meta charset="utf-8">   
    <title>Silvio Iwata Prime - {{$imovel->titulo}}</title>
    <meta name="description" content="{{strip_tags($imovel->descricao)}}">    
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{route('propriedade', ['id' => $imovel->id])}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:url" content="{{route('propriedade', ['id' => $imovel->id])}}" />
    <meta property="og:title" content="Silvio Iwata Prime - {{$imovel->titulo}}" />
    <meta property="og:image" content="logo.png" />
    <meta property="og:description" content="{{strip_tags($imovel->descricao)}}" />
    <meta name="theme-color" content="#174d29">
    <meta property="business:contact_data:country_name" content="Brasil" />
    <meta property="business:contact_data:website" content="{{route('propriedade', ['id' => $imovel->id])}}" />
    <meta property="business:contact_data:region" content="PR" />
    <meta property="business:contact_data:email" content="imobiliaria@silvioiwataprime.com.br" />
    <meta property="business:contact_data:phone_number" content="(44) 4009-8981" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="{{strip_tags($imovel->descricao)}}"/>
    <meta name="twitter:title" content="Silvio Iwata Prime - {{$imovel->titulo}}" />
    <meta name="twitter:image" content="logo.png" />
    <meta name="geo.placename" content="-23.4220448710953, -51.94120016560046" />
    <meta name="geo.region" content="BR" />  
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="pt_BR" />
    <meta name="format-detection" content="telephone=no">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Silvio Iwata Prime",
      "url": "https://silvioiwataprime.com.br",
      "logo": {
      "@type": "ImageObject",
      "url": "https://silvioiwataprime.com.br/logo.png",
      "height": 600,
      "width": 260
      }
    }
    </script>
    @include('site.templates.css')  
    <style>
      @media only screen and (max-width: 600px) {
        .bg-white {text-align: center;}
      }
    </style>  
  </head>
  <body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W76JRRC"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
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
    <!-- <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <a style="color:#4e7b68;font-size:1.4em;font-weight:600;" href="#" class="mr-3"><span style="font-size:1.6em;margin-top: 5px;" class=" icon-phone"></span> <span class="d-none d-md-inline-block ml-2">(44) 4009-8981</span></a>
              <a style="color:#4e7b68;font-size:1.4em;font-weight:600;margin-left: 40px;" href="#"><span style="font-size:1.6em;margin-top: 5px;" class=" icon-whatsapp"></span> <span class="d-none d-md-inline-block ml-2">(44) 9 9999-9999</span></a>
            </p>  
          </div>
          <div class="col-6 col-md-6 text-right">
            <a href="https://www.facebook.com/silvioiwataprime/" target="_blank" class="mr-3"><span style="color:#4e7a68;font-size: 2em;margin:8px 40px 0 0" class=" icon-facebook"></span></a>
              
            <a href="https://www.instagram.com/silvioiwataprime/" target="_blank" class="mr-0"><span style="color:#4e7a68;font-size: 2em;margin:8px 0 0 0" class="icon-instagram"></span></a>
          </div>
        </div>
      </div>
      
    </div> -->
    @include('site.templates.nav')
    </div>
    <style>
    @media only screen and (max-width: 600px) {
  .site-blocks-cover, .overlay {
    background-size: auto 862px;
    }
    }
    @media only screen and (min-width: 600px) {
  .site-blocks-cover, .overlay {
    background-size: cover;
    }
    }

    </style>
    <div class="site-blocks-cover overlay" style="background-image: url({{asset('storage/'.$imovel->nome_imagem)}});">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">

            <span style="color:#f7c66c" class="d-inline-block  px-3 mb-3 property-offer-type rounded">Detalhes da propriedade</span>
            <!-- Título da propriedade-->
            <h1 style="color:#f7c66c"  class="mb-2">{{$imovel->titulo}}</h1>
            <p  class="mb-5"><strong style="color:#f7c66c ; font-size: 1.5em;" class="h2  font-weight-bold">{{$imovel->tipo == 'lm' ? 'Consulte' : 'R$'.number_format($imovel->valor,2,",",".")}}</strong></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" style="margin-top: -150px;">
            <div class="mb-5">
            <style>
              .slide-one-item.home-slider .owl-nav {  
              position: absolute !important;
              top: 50% !important;
              bottom: auto !important;
              width: 100%;
              box-shadow: 0px 1px #6c9864;
              }
             </style>
              <div class="slide-one-item home-slider owl-carousel">
                @foreach ($imovel->imagens as $imagen)
                  @if($imagen->tipo == 's')
                    <div><img src="{{asset('storage/'.$imagen->nome_imagem)}}" alt="Image" class="img-fluid"></div>
                  @endif
                @endforeach 
              </div>
            </div>
            <div class="bg-white">
              <div class="row mb-5">
                <div class="col-md-6">
                  <strong  style="color: #184d29; font-size:2.3em" class=" h1 mb-3">{{$imovel->tipo == 'lm' ? 'Consulte' : 'R$'.number_format($imovel->valor,2,",",".")}}</strong>
                </div>
                <div class="col-md-6">
                  <ul style="text-align: center;" class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                    <li>
                    <span class="property-specs">Área Total</span>
                    <span class="property-specs-number">{{$imovel->area}}m2 </span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Dormitório(s)</span>
                    <span class="property-specs-number">{{$imovel->dormitorios}} </span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Bwc(s)</span>
                    <span class="property-specs-number">{{$imovel->bwc}}</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Vaga(s)</span>
                    <span class="property-specs-number">{{$imovel->vagas}}</span>
                    
                  </li>
                </ul>
                </div>
              </div>
             
              <h2 style="color: #184d29;" class="h4">Descrição</h2>
             <p>
             {!!$imovel->descricao!!}
            </p>

              <div class="row mt-5">
                <div class="col-12">
                <h2 style="color: #184d29;" class="h4  mb-3">Galeria de fotos</h2>
                </div>
                @foreach ($imovel->imagens as $imagen)
                  @if($imagen->tipo == 'g')
                  <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                  <a href="{{asset('storage/'.$imagen->nome_imagem)}}" class="image-popup gal-item"><img src="{{asset('storage/'.$imagen->nome_imagem)}}" alt="Image" class="img-fluid"></a>
                  </div>
                  @endif
                @endforeach
              </div>
            </div>
          </div>
          <div class="col">

          <a  class="btn btn-success" data-toggle="" href="#collapseproposta" role="button" aria-expanded="false" aria-controls="collapseproposta">
            Enviar Proposta
            </a>
          <div id="collapseproposta"  class="collapse bg-white widget border rounded">
          @include('alertas.alerts')
            <h3  style="color: #184d29;" class="h4  widget-title mb-3">Suas informações:</h3>
            <span id="fechar">X</span>
            <form action="{{route('proposta.create')}}" method="POST" class="form-contact-agent" autocomplete="off">
              @csrf
              <input type="hidden" name="ref" value="{{$imovel->ref}}">
              <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" id="name" class="form-control" name="nome" required value="{{old('nome')}}">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" name="email" required value="{{old('email')}}">
              </div>
              <div class="form-group">
                <label for="phone">Telefone</label>
                <input type="text" id="phone" class="form-control" name="telefone" required value="{{old('telefone')}}">
              </div>
                <div class="form-group">
                <label for="mensagem">Mensagem</label>
                <textarea style="min-height: 160px;"  type="text-area" id="mensagem" class="form-control" name="mensagem">{{old('mensagem')}}</textarea>
              </div>
              <div class="form-group">
                <input style="background-color: #184d29;color: #fff;" type="submit" id="phone" class="btn " value="Enviar">
              </div>
            </form>
          </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="site-section-title mb-5 text-center">
              <h2>Veja também</h2>
            </div>
          </div>
        </div>
      
        <div class="row mb-5">
          @foreach ($imoveis as $imv)
            <div class="col-md-6 col-lg-4 mb-4">
              <a  href="{{route('propriedade', ['id' => $imv->id])}}" class="prop-entry d-block">
                <figure>
                  <img src="{{asset('storage/'.$imv->nome_imagem)}}" alt="Image" class="img-fluid">
                </figure>
                <div class="prop-text">
                  <div class="inner">
                    <span class="price rounded">{{$imv->tipo == 'lm' ? 'Consulte' : 'R$'.number_format($imv->valor,2,",",".")}}</span>
                    <h3 class="title">{{$imv->titulo}}</h3>
                    <p class="location">{{$imv->endereco}}</p>
                  </div>
                  <div style="text-align:center;" class="prop-more-info">
                    <div class="inner d-flex">
                      <div class="col">
                        <span>Área Total:</span>
                        <strong>{{$imv->area}}m2</strong><sup>2</sup>
                      </div>
                      <div class="col">
                        <span>Dormitório(s):</span>
                        <strong>{{$imv->dormitorios}}</strong>
                      </div>
                      <div class="col">
                        <span>Bwc(s):</span>
                        <strong>{{$imv->bwc}}</strong>
                      </div>
                      <div class="col">
                        <span>Vaga(s):</span>
                        <strong>{{$imv->vagas}}</strong>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          @endforeach
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center mb-5">
            <div class="site-section-title">
              <h2>Acessos rápidos</h2>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-3 mb-6 acessos">
            <a href="{{route('venda.residencial')}}" class="service text-center border rounded">
              <img style="margin-top:22px;" alt="Venda Residencial - Casas e Apartamentos à Venda em Maringá e Região" src="{{asset('site/images/venda-residencia.png')}}" class="icon">
              <h2 class="service-heading">Venda Residencial</h2>
              <p><span class="read-more">Casas e Apartamentos à Venda em Maringá e Região</span></p>
            </a>
          </div>
          <br>
          <div class="col-md-6 col-lg-3 mb-6 acessos">
            <a href="{{route('condominio.fechado')}}" class="service text-center border rounded">
              <img style="margin-top:22px;" alt="Venda Residencial - Casas e Apartamentos à Venda em Maringá e Região" src="{{asset('site/images/condominio-fechado.png')}}" class="icon">
              <h2 class="service-heading">Condomínio Fechado</h2>
              <p><span class="read-more">Imóveis à Venda em Condomínio Fechado</span></p>
            </a>
          </div>
          <br>
          <div class="col-md-6 col-lg-3 mb-6 acessos">
            <a href="{{route('venda.comercial')}}" class="service text-center border rounded">
              <img style="margin-top:22px;" alt="Venda Comercial - Lojas, Salões, Barracões e Pontos Comerciais à Venda em Maringá e Região" src="{{asset('site/images/venda-comercial.png')}}" class="icon">
              <h2 class="service-heading">Venda Comercial</h2>
              <p><span class="read-more">Lojas, Barracões e Salas Comerciais à Venda</span></p>
            </a>
          </div>
          <br>
          <div class="col-md-6 col-lg-3 mb-6 acessos">
            <a href="{{route('locacao.comercial')}}" class="service text-center border rounded">
              <img style="margin-top:22px;" alt="Venda Comercial - Lojas, Salões, Barracões e Pontos Comerciais Para Locação em Maringá e Região" src="{{asset('site/images/locacao-comercial.png')}}" class="icon">
              <h2 class="service-heading">Locação Comercial</h2>
              <p><span class="read-more">Lojas, Barracões e Salas Comerciais Para Locação</span></p>
            </a>
          </div>
          <br>
          <div class="col-md-6 col-lg-3 mb-6 acessos">
            <a href="{{route('lancamentos')}}" class="service text-center border rounded">
              <img alt="Apartamentos na planta, em obras e prontos para morar em Maringá e Região" src="{{asset('site/images/apartamentos-lancamentos.png')}}" class="icon">
              <h2 class="service-heading">Lançamentos</h2>
              <p><span class="read-more">Apartamentos na planta, em obras e prontos para morar</span></p>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div style="background-color:#1f1f1f;padding:15px;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h2 class="text-white">Seja Prime</h2>
            <p class="lead text-white">Possui imóvel para alugar ou vender? </p>
          </div>
          <div class="col-md-4 text-center">
            <a href="{{route('seja.prime')}}" class="btn btn-outline-primary btn-block py-3 btn-lg">Quero ser Prime</a>
          </div>
        </div>
      </div>
    </div>
    @include('site.templates.footer')
  </div>
  @include('site.templates.js')
  <script>
    //Get the button:
      mybutton = document.getElementById("myBtn");

      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
      }


      $(".btn-success").click(function () {
          $(".btn-success").css("display", "none");
          $("#collapseproposta").css("display", "block");
      });


      $("#fechar").click(function () {
        $("#collapseproposta").css("display", "none");
          $(".btn-success").css("display", "block");
      });

      $(document).ready(function(){
          $("#phone").mask("(99) 9999-99999")
                    .on("blur",function (event) {  
                        var target, phone, element;  
                        target = (event.currentTarget) ? event.currentTarget : event.srcElement;  
                        phone = target.value.replace(/\D/g, '');
                        element = $(target);  
                        element.unmask();  
                        if(phone.length > 10) {  
                            element.mask("(99) 99999-9999");  
                        } else {  
                            element.mask("(99) 9999-9999");  
                        }  
                    });
        });
  </script>
  </body>
</html>