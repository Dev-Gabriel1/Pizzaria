<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Maricota
</title>
<link rel="icon" 
      type="image/jpg" 
      href="icon-pizza.png" />
</head>
    <link href="css.css" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<header>
<div class="container-fluid bg-black">
  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4 d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none text-warning"><a href="index.php"><img class ="logo " src="logo.jpg"></a>Maricota Pizzaria e Hamburgueria</span>
      <ul class="nav">
        <li class="nav-item"><a href="#cardapio" class="nav-link text-warning">Cardápio</a></li>
        <li class="nav-item"><a href="#slide" class="nav-link text-warning">Promoções</a></li>
        <li class="nav-item"><a href="#contatos" class="nav-link text-warning" >Contatos</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-warning">Login</a></li>
        <li class="nav-item"><a href="#" class="nav-link text-warning">Cadastrar</a></li>
      </ul>
      <a href="index.php"><img class="carrinho" src="fotos\Carrinho.png" alt=""></a>
</div>
<header>
  <div id="slide">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
          <img  src="fotos\promocao1.JPG" class="d-block promocao" alt="...">
        </div>
      <div class="carousel-item ">
          <img  src="fotos\promocao.JPG" class="d-block promocao" alt="...">
      </div>
      <div class="carousel-item">
          <img  src="fotos\promocao2.JPG" class="d-block promocao" alt="...">
      </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
</div>
</div>
<main id="cardapio" class="corpo">
<div class="album py-5 bg-light">
  <div class="container">
  <h2>Hamburguers</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <div class="col">
        <div class="card shadow-sm">
          <img width="100%" height="225" src="fotos\xsalada.jpg">

          <div class="card-body">
            <p class="card-text">XSalada, Pão bola, Salada, Carne artezanal de 140 gramas.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Adicinonar ao Carrinho</button>
              </div>
              <small class="valor" >R$ 39,99</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
        <img width="100%" height="225" src="fotos\xbacon.jpg">
          <div class="card-body">
            <p class="card-text">xbacon, Pão bola, Salada, Carne artezanal de 140 gramas, Bacon.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Adicinonar ao Carrinho</button>
              </div>
              <small class="valor">R$ 39,99</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm">
        <img width="100%" height="225" src="fotos\xtudo.jpg">

          <div class="card-body">
            <p class="card-text">Xtudo, Pão bola, Salada, Carne Artezanal de 240 gramas, Queijo Mussarel, Bacon, Calabresa, Queijo chedda.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Adicinonar ao Carrinho</button>
              </div>
              <small class="valor">R$ 39,99</small>
            </div>
          </div>
        </div>
      </div>
      <h2>Pizza</h2>
      <div class="col item1">
        <div class="card shadow-sm">
        <img width="100%" height="225" src="fotos\pizza-calabresa.jpg">

          <div class="card-body">
            <p class="card-text">Pizza de Calabresa, oregano, Verduras e etc.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Adicinonar ao Carrinho</button>
              </div>
              <small class="valor">R$ 39,99</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col item2">
        <div class="card shadow-sm">
        <img width="100%" height="225" src="fotos\pizza-charque.jpg">

          <div class="card-body">
            <p class="card-text">Pizza de Charque, Oregano, Verduras e etc.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Adicinonar ao Carrinho</button>
              </div>
              <small class="valor">R$ 39,99</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col item3">
        <div class="card shadow-sm">
        <img width="100%" height="225" src="fotos\pizza-camarao.jpg">

          <div class="card-body">
            <p class="card-text">Pizza de Camarão, oregano, Verduras, Creme Chesse.</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Adicinonar ao Carrinho</button>
              </div>
              <small class="valor">R$ 39,99</small>
            </div>
          </div>
        </div>
      </div>
      <h2>Refrigerantes</h2>
      <div class="col item1">
        <div class="card shadow-sm">
        <img width="100%" height="225" src="fotos\lata.png">
          <div class="card-body">
            <p class="card-text">Coca-Cola lata 350ml</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Adicinonar ao Carrinho</button>
              </div>
              <small class="valor">R$ 4,00</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col item2">
        <div class="card shadow-sm">
        <img width="100%" height="225" src="fotos\guarana.jpg">

          <div class="card-body">
            <p class="card-text">Antarctica de 1lt</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Adicinonar ao Carrinho</button>
              </div>
              <small class="valor">R$ 6,00</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col item3">
        <div class="card shadow-sm">
        <img width="100%" height="225" src="fotos\coca-cola.jpg">
          <div class="card-body">
            <p class="card-text">Coca-Cola de 2lt</p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Comprar</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Adicinonar ao Carrinho</button>
              </div>
              <small class="valor">R$ 12,00</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
<div class="b-example-divider"></div>

<div class="container-fluid bg-black">
  <footer id="contatos" class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom border-warning pb-3 mb-3">
      <li class="nav-item"><a href="https://web.whatsapp.com/send?phone=5581988058818" target="_blank" class="nav-link px-2 text-warning">WhatsApp</a></li>
      <li class="nav-item"><a href="https://www.instagram.com/maricotabp/" target="_blank" class="nav-link px-2 text-warning">Instagram</a></li>
      <li class="nav-item"><a href="tel:5581988058818" class="nav-link px-2 text-warning" target="_blank">Telefone</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-warning" target="_blank">99 Food</a></li>
      <li class="nav-item"><a href="https://www.ifood.com.br/delivery/abreu-e-lima-pe/maricota-burgueria-e-pizzaria-centro/4cfdf70e-d90f-4273-b1f5-776c8573039d" target="_blank" class="nav-link px-2 text-warning">Ifood</a></li>
    </ul>
    <p class="text-center text-warning">&copy; 2021 Company, Inc</p>
  </footer>
</div>
</html>