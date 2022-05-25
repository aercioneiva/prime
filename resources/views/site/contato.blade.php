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
    <meta charset="utf-8">
    <title>Silvio Iwata Prime - Entre em contato</title>
    <meta name="robots" content="index, follow">      
    <link rel="canonical" href="{{route('contato')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:url" content="{{route('contato')}}" />
    <meta property="og:title" content="Silvio Iwata Prime - Entre em Contato Conosco." />
    <meta property="og:image" content="logo.png" />
    <meta property="og:description" content="Envie uma mensagem através do formulário ou ligue para (44) 4009-8981." />
    <meta name="theme-color" content="#174d29">
    <meta property="business:contact_data:country_name" content="Brasil" />
    <meta property="business:contact_data:website" content="{{route('contato')}}" />
    <meta property="business:contact_data:region" content="PR" />
    <meta property="business:contact_data:email" content="imobiliaria@silvioiwataprime.com.br" />
    <meta property="business:contact_data:phone_number" content="(44) 4009-8981" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="Envie uma mensagem através do formulário ou ligue para (44) 4009-8981."/>
    <meta name="twitter:title" content="Silvio Iwata Prime - Entre em Contato Conosco." />
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
    <!--
    <div class="border-bottom bg-white top-bar">
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

    <div id="sitebg" class="site-blocks-cover inner-page-cover " data-stellar-background-ratio="0.1">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
           <div style="margin-top: 298px; color:green; font-size:0.8em"><a href="{{route('home')}}">Início&nbsp;</a><strong>> Contato</strong></div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          @include('alertas.alerts')
            <form action="{{route('contato.create')}}" method="POST" class="p-5 bg-white border" autocomplete="off">
              @csrf
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label style="color:#1d5539" class="font-weight-bold" for="fullname">Nome</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Informe o seu nome." name="nome" required value="{{old('nome')}}">
                </div>
              </div>
               <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label style="color:#1d5539" class="font-weight-bold" for="fone">Telefone</label>
                  <input type="text" id="fone" class="form-control" placeholder="Informe o seu telefone." name="telefone" required value="{{old('telefone')}}">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label style="color:#1d5539" class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="Informe o email de contato." name="email" required value="{{old('email')}}">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label style="color:#1d5539" class="font-weight-bold" for="email">Assunto</label>
                  <input type="text" id="subject" class="form-control" placeholder="Informe o assunto." name="assunto" required value="{{old('assunto')}}">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                <label style="color:#1d5539" class="font-weight-bold" for="message">Mensagem</label> 
                  <textarea id="mensagem" cols="30" rows="5" class="form-control" placeholder="Digite sua mensagem aqui" name="mensagem"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                <input style="background-color:#194d29;color:#fff;" type="submit" value="Enviar mensagem" class="btn py-2 px-4 rounded-0">
                </div>
              </div>
               <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">*Não compartilhamos suas informações. *Mensagem criptografada. </label>                  
                </div>
              </div>
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 style="color:#1d5539" class="h6  mb-3 text-uppercase">Informações de contato</h3>
              <p style="color:#1d5539" class="mb-0 font-weight-bold">Endereço</p>
              <p class="mb-4">Av. Dr. Gastão Vidigal, 851  Zona 08, Maringá - PR</p>
              <p style="color:#1d5539" class="mb-0 font-weight-bold">Telefone</p>
              <p class="mb-4">(44) 4009-8981</p>
              <p style="color:#1d5539" class="mb-0 font-weight-bold">Email</p>
              <p class="mb-0">imobiliaria@silvioiwataprime.com.br</p>
            </div>  
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
    <script type="text/javascript">
        var currentTime = new Date().getHours();
        if (document.body) {
            if (7 <= currentTime && currentTime < 18) {
            document.getElementById('sitebg').style.backgroundImage="url({{asset('site/images/background-maringa.jpeg')}})";
            
            }
            else {
                document.getElementById('sitebg').style.backgroundImage="url({{asset('site/images/background-maringa-noite.jpeg')}})";
            }
        }

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

        $(document).ready(function(){
          $("#fone").mask("(99) 9999-99999")
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