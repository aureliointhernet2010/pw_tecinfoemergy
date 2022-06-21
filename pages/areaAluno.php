<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Bibloteca PBL</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/aluno.css" type="text/css">


</head>

<body class="everyone">
    <!--cabeçalho-->
    <div class="cabecario">
        <div class="logo">

            <img src="../img/pbl.png" alt="" width="100px">

        <a style="color: orange; ">BIBLIOTECA </a>

            <a style="color: WHITE; text-decoration:none;  ">PBL</a>
        </b></div>

        </div>
        
    </div>

    



    <!--menu-->


    <section>
    <div class="template-root">

        <aside class="menu-open">

            <div class="aside-menu">

            </div>


            <div class="aside-menu-content">
         
                <nav class="menu-nav">
                    <a class="menu-item" href="pages" style=" padding: 25px; background-color: rgba(47, 145, 121, 0.719);">
                        <i class="fa-solid fa-house">
                        </i>
                        Início
                    </a>
                    <a class="menu-item" href="pages/dadospessoais.php">
                        <i class="fa-solid fa-user-large"></i>
                        Dados Pessoais
                    </a>
                    <a class="menu-item" href="pages/prazo.php">
                        <i class="fa-solid fa-clock"></i>
                        Prazo
                    </a>
                    <a class="menu-item" href="pages/favoritos.php">
                        <i class="fa-solid fa-star"></i>
                        Favoritos
                    </a>
                    <a class="menu-item" href="pages/historico.php">
                        <i class="fa-solid fa-hourglass"></i>
                        Historico
                    </a>
                    <a class="menu-item" href="pages/reserva.php">
                        <i class="fa-solid fa-circle-check"></i>
                        Reserva
                    </a>
                    <a class="menu-item" href="#">
                        <i class="fa-solid fa-door-open"></i>
                        Sair
                    </a>
                </nav>
            </div>
</section>
            <!--fim do menu-->



            <!--slideshow-->
    <main class="main">
    
  <section class="slideshow">
    <div class="slide fade is-active">
      <span class="slide-number">1 / 3</span>
      <figure class="slide-image">
        <img
          src="https://2.bp.blogspot.com/-tcz3cPVg_6Q/V5vTIhwFT6I/AAAAAAAAXaI/FXVp49WmITgMHD3bTrBd3tA136fg3J1_ACLcB/s640/quando-acontece-algo-incrivel-livro-leitor-sentimentos-rea%25C3%25A7oes-mademoisellelovesbooks.gif"
          alt="Mountain"
        />
        <figcaption>Um bom livro desperta a felicidade</figcaption>
      </figure>
    </div>

    <div class="slide fade">
      <span class="slide-number">2 / 3</span>
      <figure class="slide-image">
        <img
          src="../img/harrypotter.jpg"
          alt="Snow" width="200px" height="400px"
        />
        <figcaption>Harry Potter</figcaption>
      </figure>
    </div>

    <div class="slide fade">
      <span class="slide-number">3 / 3</span>
      <figure class="slide-image">
        <img
          class="slide2"
          src="../img/aselecao.jpg"
          alt="Snow" width="200px" height="400px" 
        />
        <figcaption>A Seleção</figcaption>
      </figure>
    </div>

    <div class="controls">
      <button class="prev">&#10094;</button>
      <button class="next">&#10095;</button>
    </div>

    <div class="dots-container">
      <span class="dot is-active" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
  </section>
</main>
<!-- fim do slideshow-->

<!--rodapé-->

    
            <footer class="footer-1">
		<p class="footer__copyright"><b>SOBRE: </b>Este site é uma parceira com a Biblioteca da PBL
</p>
    <br>
            <p>
            <b>Analisata e Gerente:</b> Yris e Pedro Henrique.
</p> <br>
            <p>
			<b>Desenvolvedores Back-end e Front-end: </b>Aurélio, Raul.
              </p>
			<br>
			 
		<p>
            <a href="https://www.instagram.com/eppbloficial/">Acesse o instragram da escola<img src="http://www.stickpng.com/img/download/580b57fcd9996e24bc43c521/image" alt="" width="100px" height="100px"></a>
        </p>
	</footer>

    <script>
        const prevBtn = document.querySelector(".prev");
const nextBtn = document.querySelector(".next");
const dots = Array.from(document.querySelectorAll(".dot"));

let slideIndex = 1;

function plusSlides(e) {
  let num;

  if (e.target === prevBtn) num = -1;
  if (e.target === nextBtn) num = 1;

  showSlides((slideIndex += num));
}

function currentSlide(e) {
  if (e.target === dots[0]) showSlides((slideIndex = 1));
  if (e.target === dots[1]) showSlides((slideIndex = 2));
  if (e.target === dots[2]) showSlides((slideIndex = 3));
}

function showSlides(n) {
  const slides = Array.from(document.querySelectorAll(".slide"));

  if (n > slides.length) slideIndex = 1;
  if (n < 1) slideIndex = slides.length;

  slides.forEach((slide) => slide.classList.remove("is-active"));
  dots.forEach((dot) => dot.classList.remove("is-active"));

  slides[slideIndex - 1].classList.add("is-active");
  dots[slideIndex - 1].classList.add("is-active");
}

prevBtn.addEventListener("click", plusSlides);
nextBtn.addEventListener("click", plusSlides);
dots.forEach((dot) => dot.addEventListener("click", currentSlide));

    </script>


        
            
</body>

</html>