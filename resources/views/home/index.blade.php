
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vitrine Tech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;800&display=swap');

        .l-cards {
  display: grid;
  grid-gap: 30px;
  grid-template-columns: repeat(1);
  justify-content: center;
  justify-items: center;
  padding: 30px;
  }
*{font-family: 'Nunito', sans-serif;
    }

@media(max-width:600px){
  .div1{
    display:none;
  }
}


    </style>

</head>
<body>
  <header class="header" id="header">
		<div class="header-container">
			<a class="logo" href="#">Vitrine Tech</a>
			<nav id="nav">
				<button id="btn-mobile" aria-controls="menu" aria-expanded="false" aria-haspopup="true" aria-label="Abrir Menu">
					<span id="hamburger"></span>
				</button>
				<ul class="menu" id="menu">
					<li><a href="#home">Home</a></li>
					<li><a href="#sobre">Sobre</a></li>
					<li><a href="#produtos">Produtos</a></li>
          			<li><a href="#contato">Contato</a></li>
				</ul>
			</nav>
		</div>
	</header>
  <main>
		<div class="main-container">
			<div class="home" id="home">
				<div class="main-info">
					<div class="main-info-item">
						<p>olá, somos a</p>
						<h1 class="typing-animation">Vitrine</h1>
						<h2>Produtos Tech.</h2>
					</div>
				</div>
				<img loading="lazy" class="bg" src="{{asset('images/Notifications_Monochromatic.png')}}" width="600" height="auto" alt="img background">
			</div>

<div class="card-body">



</div>
            <section class="experiencia " >
                <div class="d-flex justify-content-center">
                </div>
            </section>
	<section class="experiencia " id="sobre">
	<div class="d-flex justify-content-center">

					<div class="col col-sm-9">
					<h2>Sobre</h2>
					<p class="col col-sm-9">2022</p>
                        <p class="card-body text-white bg-dark col-6 border rounded">
                            “TecSolutions é uma empresa que foi criada em 2021, no momento crítico de uma pandemia chamada de corona vírus aonde as remessas por tecnologias foram aumentando e criando diversas dúvidas. Com isso nossa equipe decidiu criar a solução, somos uma empresa nova no mercado de softwares, mas com gigantescas propostas e ideias para os melhores produtos e informações para nossos clientes. Com o intuito de se tornar umas das principais empresas de tecnologia do mundo um dia. Nosso atual projeto é a vitrinesTech que tem como o objetivo de ajudar as pessoas, com a indicações de computadores e peças para suas maquinas facilitando a vida de nossos clientes e usuários. Temos certeza que com esse nosso novo projeto diversas pessoas com falta de informações em questão de tecnologia, vão gostar muito de nossa vitrineTech pois a maioria de suas duvidas serão tiradas em nosso site, e sempre estaremos em crescimento e atualização porque para seus problemas a TecSolutions sempre terá a solução”(Victor TecSolutions, 2022)"
                        </p>

					</div>
	</div>
	</section>
			<section class="experiencia " id="produtos">


					<div class="d-flex justify-content-center">

						<div class=" col-10">
						<h2>Produtos Tech</h2>
						<p class="col col-sm-9">---------2022---------</p>

							<div class="row">
						  <div class="col-sm-9">
						    <div class="card col">
						      <div class="card-body text-white bg-dark ">
						        <h5 class="card-title">Descrição</h5>
								<table class="table table-bordered text-white">
	<thead>
		<tr>

			<th>Nome</th>
			<th>Preço</th>
			<th>Tipo</th>
			<th>Detalhes</th>
		</tr>
	</thead>
	<tbody>
    <!-----pegando em looping os dados da tabela de produtos e inserindo em uma Table no front --->
		@foreach ($produtos as $item)
		<tr>
			<td>{{ $item->name }}</td>
			<td>{{ $item->price }}</td>
			<td>{{ $item->type }}</td>
			<td>
                <button type="" data-toggle="modal" :data-target="'#modal-info' +$item.id" class="btn btn-primary d-inline btn-sm">
                    <i class="fa fa-info"></i> Informações
                </button>
			</td>
            <div :id="'modal-info' +item.id" tabindex="1" role="dialog" aria-labelledby="modal-info" aria-hidden="true" class="modal fade">
                <div role="document" class="modal-dialog modal- modal-dialog-centered modal-sm">
                    <div class="modal-content" style="width: 80vw;">
                        <div class="modal-header dp-flex flex-direction-column">
                            <h3 id="modal-title-default" class="modal-title">
                                <i class="fa fa-info"></i> Informações</h3>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
		</tr>
		@endforeach
	</tbody>
</table>



                              </div>
                            </div>
                          </div>

                            </div>
                        </div>
                    </div>
			</section>

  		<section class="contato" id="contato">
				<div class="contato-container">
					<h2>👋 Entre em Contato</h2>
					<h2>contato@gmail.com</h2>
				</div>
					</section>
					<footer>
						<div class="footer-container">
							<div class="footer-info">
								<p>@ 2022 - Vitrine Tech</p>
							</div>
						</div>
						<img class="scroll" src="./src/icons/scroll-top.svg" alt="icone scroll" onclick="subirTopo()">
				</footer>
			</div>
		</main>

                     <!---<li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">CARALKHOOOO</a>
                       <div class="dropdown-menu">
                         <a class="dropdown-item" href="#">Action</a>
                         <a class="dropdown-item" href="#">Another action</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                         <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="#">Separated link</a>
                       </div>
                     </li>
                    --->








                <!---             <div class="d-flex flex-wrap align-items-center d-flex  justify-content-between justify-content-around">
                                <div>
                                  <div class="card col-9 col-md-8 mb" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('images/logoHome.png') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
                  </div>

                  </div>
                  --->




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>


</html>
