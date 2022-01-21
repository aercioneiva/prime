<div class="site-navbar">
    <div class="container py-1">
        <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">        
                <a href="{{route('home')}}" >
                <img class="logo" src="{{asset('site/images/logo.png')}}"> </a>     
            </div>
            <div class="col-4 col-md-4 col-lg-8">
                <nav class="site-navigation text-right text-md-right" role="navigation">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a style="border:none;color:#1e553a;" href="#" class="site-menu-toggle js-menu-toggle "><span class="icon-menu h2"></span></a></div>
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                        <li class="{{($ativo) == 'home' ? 'active': ''}}">
                            <a alt="Destaques de Venda e Locação de Imóveis Comerciais e Residenciais em Maringá e Região" href="{{route('home')}}">Destaques</a>
                        </li>
                        <li class="has-children {{(substr($ativo,0,6)) == 'imovel' ? 'active': ''}}" >
                            <a data-toggle="collapse" alt="Lista de imóveis comerciais e residenciais Venda e Locação" data-target="#collapseItem0" aria-expanded="false" href="#">Imóveis</a>
                            <ul class="dropdown">
                                <li class="{{($ativo) == 'imovel|lm' ? 'active retirabarra': ''}}"><a alt="Lançamentos de Imóveis em Maringá - Apartamentos Prontos Para Morar, Em Obras e Na Planta." href="{{route('lancamentos')}}">Lançamentos</a></li>
                                <li class="{{($ativo) == 'imovel|vr' ? 'active retirabarra': ''}}"><a alt="Imóveis à Venda em Maringa - Casas e Apartamentos à Venda" href="{{route('venda.residencial')}}">Venda Residencial</a></li>
                                <li class="{{($ativo) == 'imovel|cf' ? 'active retirabarra': ''}}"><a alt="Imóveis à Venda em condomínio fechado em Maringa - Casas e Apartamentos à Venda" href="{{route('condominio.fechado')}}">Imóveis em Condomínio Fechado</a></li>
                                <li class="{{($ativo) == 'imovel|vc' ? 'active retirabarra': ''}}"><a alt="Sala, Salão, Sobreloja, Barracão e Pontos comerciais à Venda em Maringá e Região" href="{{route('venda.comercial')}}">Venda Comercial</a></li>
                                <li class="{{($ativo) == 'imovel|lc' ? 'active retirabarra': ''}}"><a alt="Sala, Salão, Sobreloja, Barracão e Pontos comerciais Para Locação em Maringá e Região" href="{{route('locacao.comercial')}}">Locação Comercial</a></li>
                                <li class="{{($ativo) == 'imovel|pr' ? 'active retirabarra': ''}}"><a alt="Quer vender ou aluguar o seu imóvel?" href="{{route('seja.prime')}}"> <span class="estrelaesquerda icon-star"></span>
Quero ser Prime<span class="estreladireita icon-star"></span></a></li>                          
                            </ul>
                        </li>
                        <li class="{{($ativo) == 'empresa' ? 'active' : ''}}"><a lt="Silvio Iwata Prime empresa especializada em venda e locação de imóveis comerciais e residenciais" href="{{route('empresa')}}">Nossa Empresa</a></li>                 
                        <li class="{{($ativo) == 'contato' ? 'active' : ''}}"><a alt="Deseja comprar ou alugar um imóvel comercial ou residencial entre em contato com nossa equipe" href="{{route('contato')}}">Contato</a></li>
                        <li><span class="fonemenu">  <img src="{{asset('site/images/fone.png')}}"><a href="tel:+55-44-3226-4632">&nbsp;44 3226-4632</a>
                        @if(($ativo) == 'home')
                        <br><br> <h1 class="tituloini">Venda e Locação De Imóveis Comerciais e Residenciais <br> </h1>
                        @endif
                            </span></li>  
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
