<?php
// Template Name: Home
?>
<?php get_header(); ?>

<div class="container">

  <div id="sobre" class="sobre row">
    <h2 class="subtitulo">A energia move o mundo, não deixe seu negócio parar! <span class="sep"></span></h2>
    <div class="content">
      <div class="conteudo">
        <p>A KVA Transformadores teve seu início em 1993, localizada na cidade de Concórdia-SC,
          onde encontra-se até hoje.
          Nossos principais ramos de atuação são a reforma, manutenção e comercialização de transformadores elétricos.</p>

        <p>Trabalhamos com responsabilidade, compromisso, prazo e agilidade e desde nossa
          fundação já foram mais de 25.000 unidades entregues aos mais diversos segmentos.
          Possuímos certificação da distribuidora de energia CELESC para a reforma de seus
          transformadores, e através deste ampliamos nossa rede de atuação.
        </p>

        <p>Nosso maior compromisso é oferecer um produto que atende as necessidades atuais,
          utilizando recursos pré-existentes, diminuindo assim a demanda por equipamentos
          novos ou adicionais. </p>

        <p>Com o nosso trabalho evitamos que recursos naturais sejam extraídos,
          e nos posicionamos como uma empresa que colabora com a economia sustentável.</p>
      </div>
      <div class="slider" data-slide>
        <div class="arrow-slide left" data-slide="left">
          <div class="arrow"></div>
        </div>
        <div class="imagem-slide" data-slideItem="1">
          <div class="content-image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/transformador.svg" alt="mais de 25.000 unidades entregues">
            <p class="description">Mais de <span class="destaque">25.000</span> <br>unidades entregues</p>
          </div>
        </div>
        <div class="imagem-slide" data-slideItem="2">
          <div class="content-image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/garantia.svg" alt="Oferecemos 12 meses de garantia">
            <p class="description">Oferecemos <span class="destaque">12 meses</span> <br>de garantia</p>
          </div>
        </div>
        <div class="imagem-slide" data-slideItem="3">
          <div class="content-image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/sustentavel.svg" alt="Colaboramos para um planeta mais sustentável">
            <p class="description">Colaboramos para <span class="destaque"><br>um planeta </span> <br>mais sustentável</p>
          </div>
        </div>
        <div class="arrow-slide right" data-slide="right">
          <div class="arrow"></div>
        </div>
      </div>
    </div>
  </div>

  <div id="produto" class="produto">
    <h2 class="subtitulo-two">Nosso produto</h2>
    <div class="row">
      <h3 class="subtitulo-three">Transformadores recondicionados</h3>
      <div class="produto-content">
        <div class="lista-itens-produto">
          <ul>
            <li>Fases: Trifásicos ou monofásicos</li>
            <li>Potências: de 05 a 2500 kVA</li>
            <li>Tensões de entrada: 6,6kV / 13,8kV / 23,1kV / 34,5kV</li>
            <li>Tensões de saída: 220V / 380V / 440V (outras sob consulta)</li>
            <li>Frequência: 50 ou 60Hz</li>
            <li>Isolação: imerso em óleo ou a seco</li>
            <li>Condutores em cobre ou alumínio</li>
          </ul>
        </div>
        <div class="produto-antes-depois">
          <div id="prods">
            <div class="img-p image-produto-one">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/foto-antes.jpg" alt="Foto de Transformador antes de ser reformado">
            </div>
            <div class="img-hand">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/icon-hand-energy.svg" alt="" aria-hidden="true">
            </div>
            <div class="img-p image-produto-two">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/foto-depois.jpg" alt="Foto de Transformador depois da reforma">
            </div>
          </div>
          <div class="arrow-curve" aria-hidden="true">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/icon-arrow-curve.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="servicos" class="servicos">
    <h2 class="subtitulo-two">Serviços</h2>
    <div class="row">
      <h3 class="subtitulo-three">Oferecemos a melhor qualidade em:</h3>

      <div class="lista-servicos">
        <div class="servicos-item" data-servico="1">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/foto-reforma-transformadores.jpg" alt="Reforma de Transformadores">
          <h4>Reforma de Transformadores</h4>
          <ul>
            <li>Projeto</li>
            <li>Fabricação</li>
            <li>Ensaios elétricos</li>
          </ul>
        </div>
        <div class="servicos-item" data-servico="2">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/foto-comercializacao-transformadores.jpg" alt="Comercialização de Transformadores">
          <h4>Comercialização de Transformadores</h4>
          <ul>
            <li>Venda</li>
            <li>Compra</li>
            <li>Locação</li>
          </ul>
        </div>
        <div class="servicos-item" data-servico="3">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/foto-manutencao-campo.jpg" alt="Manutenção em campo">
          <h4>Manutenção em campo</h4>
          <ul>
            <li>Correções de vazamento</li>
            <li>Instalação de acessórios</li>
            <li>Inspeções Técnicas</li>
            <li>Análise e tratamento de óleo isolante</li>
            <li>Limpezas de subestação</li>
          </ul>
        </div>
        <div class="servicos-item" data-servico="4">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/foto-servico-engenharia.jpg" alt="Serviço de Engenharia">
          <h4>Serviço de Engenharia</h4>
          <ul>
            <li>Medição de Grandezas</li>
            <li>Inspeção de laudos</li>
            <li>Emissão de laudos e ART</li>
            <li>Startup de Subestações</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div id="contato" class="contato">
    <h2 class="subtitulo-two sub-contato">Contato</h2>

    <div class="row">
      <div class="formulario-contato">
        <form action="<?php echo get_stylesheet_directory_uri(); ?>/enviar.php" method="post" name="form-contato">
          <fieldset>
            <legend>Solicite um orçamento conosco:</legend>
            <label for="i-nome">Nome:</label>
            <input type="text" name="name" id="i-nome">

            <label for="i-email">Email:</label>
            <input type="email" name="email" id="i-email">

            <label for="i-telefone">Telefone:</label>
            <input type="tel" name="phone" id="i-telefone">

            <label for="i-mensagem">Mensagem:</label>
            <textarea max="100" name="mensagem" id="i-mensagem"></textarea>

            <input type="submit" name="enviar" value="Enviar">
          </fieldset>
        </form>
      </div>

      <div class="infos-contato">
        <div class="mapa">
          <div class="faixada">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/foto-kva-faixada.jpg" alt="Foto da faixada da KVA Industria de Transformadores Ltda.">
          </div>
          <a href="https://www.google.com/maps/place/KVA+Ind%C3%BAstria+de+Transformadores+Ltda/@-27.2217949,-51.9518411,15z/data=!4m8!1m2!2m1!1sRua+Isidoro+Simioni,+620+%C3%81rea+Industrial,+Concordia%2FSC+CEP+89713-194!3m4!1s0x0:0x9752e3db9d0ce709!8m2!3d-27.2208389!4d-51.9452376" target="_blank" rel="noopener noreferrer">
            <div class="localizacao">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/foto-mapa.jpg" alt="Clique aqui para abrir o mapa">
            </div>
          </a>
        </div>

        <div class="infos">
          <div class="description idados">
            <ul>
              <li>
                <a href="mailto:kvaind@yahoo.com.br?subject=Or%C3%A7amento%20para%20Recondicionamento%20de%20Geradores%20(contato%20via%20site)&body=Ol%C3%A1%20equipe%20KVA%20Transformadores%2C%20gostaria%20de%20solicitar%20um%20or%C3%A7amento%20para%20os%20servi%C3%A7os%20que%20voc%C3%AAs%20oferecem%20no%20site%2C%20fico%20no%20aguardo%20do%20retorno." target="_self">
                  <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/icon-email.svg" alt="email: kvaind@yahoo.com.br">
                  <p class="dado">kvaind@yahoo.com.br</p>
                </a>
              </li>
              <li>
                <a href="tel:+5549999286641" target="_self">
                  <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/icon-phone.svg" alt="Telefone: (49) 9 9928-6641">
                  <p class="dado">(49) 9 9928-6641</p>
                </a>
              </li>
              <li>
                <a href="https://www.google.com/maps/place/KVA+Ind%C3%BAstria+de+Transformadores+Ltda/@-27.2217949,-51.9518411,15z/data=!4m8!1m2!2m1!1sRua+Isidoro+Simioni,+620+%C3%81rea+Industrial,+Concordia%2FSC+CEP+89713-194!3m4!1s0x0:0x9752e3db9d0ce709!8m2!3d-27.2208389!4d-51.9452376" target="_blank">
                  <img class="icon" src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/icon-location.svg" alt="Endereço: Rua Isidoro Simioni, 620 Área Industrial, Concordia/SC CEP 9713-194">
                  <p class="dado df">Rua Isidoro Simioni, 620
                    Área Industrial, Concordia/SC<br> CEP: 89713-194</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="description redes-sociais">
            <h5 class="tit">Solicite também um orçamento via WhatsApp, teremos o prazer em te atender:</h5>
            <ul>
              <li>
                <a class="icon-r" href="https://fb.com/kvatransformadores" target="_blank"><img class="facebook" src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/icon-facebook.svg" alt="Facebook"></a>
              </li>
              <li>
                <a class="icon-r" href="https://www.instagram.com/kvaconcordia" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/icon-instagram.svg" alt="Instagram"></a>
              </li>
              <li>
                <a class="icon-r" href="https://api.whatsapp.com/send?phone=5549999286641&text=Olá,%20gostaria%20de%20fazer%20um%20orçamento%20com%20vocês%20nos%20transformadores%20da%20minha%20empresa!" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/icon-whatsapp.svg" alt="WhatsApp"></a>
              </li>
            </ul>
          </div>
        </div>

        <p class="text-direitos">KVA Industria de Transformadores Ltda. © Todos os direitos reservados - <?php echo date("Y"); ?></p>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>