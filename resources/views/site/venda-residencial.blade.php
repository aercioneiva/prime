<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W76JRRC');</script>
    <!-- End Google Tag Manager -->
    <title>Silvio Iwata Prime - Imóveis Residenciais à Venda em Maringá e Região.</title>
    <meta name="description" content="Silvio Iwata Prime - Vendas Especiais. Imóveis Residenciais à Venda em Maringá e Região. Veja a Lista De Imóveis Selecionados.">
    <meta charset="utf-8">
    <meta name="robots" content="index, follow">      
    <link rel="canonical" href="{{route('venda.residencial')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <meta property="og:url" content="{{route('venda.residencial')}}" />
    <meta property="og:title" content="Silvio Iwata Prime - Imóveis Residenciais à Venda em Maringá e Região." />
    <meta property="og:image" content="logo.png" />
    <meta property="og:description" content="Silvio Iwata Prime - Vendas Especiais. Imóveis Residenciais à Venda em Maringá e Região. Veja a Lista De Imóveis Selecionados." />
    <meta name="theme-color" content="#174d29">
    <meta property="business:contact_data:country_name" content="Brasil" />
    <meta property="business:contact_data:website" content="{{route('venda.residencial')}}" />
    <meta property="business:contact_data:region" content="PR" />
    <meta property="business:contact_data:email" content="imobiliaria@silvioiwataprime.com.br" />
    <meta property="business:contact_data:phone_number" content="(44) 4009-8981" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="Silvio Iwata Prime - Vendas Especiais. Imóveis Residenciais à Venda em Maringá e Região. Veja a Lista De Imóveis Selecionados."/>
    <meta name="twitter:title" content="Silvio Iwata Prime - Imóveis Residenciais à Venda em Maringá e Região." />
    <meta name="twitter:image" content="logo.png" />
    <meta name="geo.placename" content="-23.4220448710953, -51.94120016560046" />
    <meta name="geo.region" content="BR" />  
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="pt_BR" />
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <meta name="adopt-website-id" content="5b571b37-c22d-49d2-acce-800ec98e624d" />
    <script src="//tag.goadopt.io/injector.js?website_code=5b571b37-c22d-49d2-acce-800ec98e624d" class="adopt-injector"></script>
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
          
        </div>
    -->
    @include('site.templates.nav')
    </div>

    <div class="site-section site-section-sm bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <div class="site-section-title">
            <h1 style="color:#1d5539;text-align: center;font-size: 1.3em;">Imóveis Residenciais à Venda Selecionados Para Você</h1>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          @foreach ($imoveis as $imovel)
            <div class="col-md-6 col-lg-4 mb-4">
              <a href="{{route('propriedade', ['id' => $imovel->id, 'slug' => $imovel->slug])}}" class="prop-entry d-block">
                <figure>
                  <img src="{{asset('storage/'.$imovel->nome_imagem)}}" alt="Image" class="img-fluid">
                </figure>
                <div class="prop-text">
                  <div class="inner">
                    <span class="price rounded">R${{number_format($imovel->valor,2,",",".")}}</span>
                    <h3 class="title">{{$imovel->titulo}}</h3>
                    <p class="location">{{$imovel->endereco}}</p>
                  </div>
                  <div style="text-align:center;" class="prop-more-info">
                    <div class="inner d-flex">
                      <div class="col">
                        <span>Área Total:</span>
                        <strong>{{$imovel->area}}m<sup>2</sup></strong>
                      </div>
                      <div class="col">
                        <span>Dormitório(s):</span>
                        <strong>{{$imovel->dormitorios}}</strong>
                      </div>
                      <div class="col">
                        <span>Bwc(s):</span>
                        <strong>{{$imovel->bwc}}</strong>
                      </div>
                      <div class="col">
                        <span>Vaga(s):</span>
                        <strong>{{$imovel->vagas}}</strong>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          @endforeach 
        </div>
        @if($imoveis->lastPage() > 1)
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="site-pagination">
              @for ($i = 1; $i <= $imoveis->lastPage(); $i++)
                <a href="{{route('venda.residencial')}}?page={{$i}}" class="{{$imoveis->currentPage() == $i ? 'active' : ''}}" >{{$i}}</a>
              @endfor
            </div>
          </div>  
        </div>
        @endif
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
            <a href="https://www.silvioiwata.com.br/imoveis/locacao/comerciais-ou-industriais" target="_blank" class="service text-center border rounded">
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
    </script>
  </body>
</html>