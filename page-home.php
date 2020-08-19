<?php
// Template Name: Home
?>
<?php get_header(); ?>

<div class="container">
  <h2>A energia move o mundo, não deixe seu negócio parar!</h2>

  <div class="sobre">
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

      <p>Desta forma evitamos que recursos naturais sejam extraídos,
        e nos posicionamos como uma empresa que colabora com a economia sustentável.</p>
    </div>
    <div class="slide">
      <div class="arrow-slide left"></div>
      <div class="images">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/transformador.svg" alt="mais de 25.000 unidades entregues">
      </div>
      <div class="arrow-slide right"></div>
    </div>
  </div>

  <div class="produto">
    <h2>Nosso produto</h2>
    <h3>Transformadores recondicionados</h3>

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
      <div>
        <div class="image-produto-one">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/foto-antes.jpg" alt="Foto de Transformador antes de ser reformado">
        </div>
        <div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/icon-hand-energy.svg" alt="" aria-hidden="true">
        </div>
        <div class="image-produto-two">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/foto-depois.jpg" alt="Foto de Transformador depois da reforma">
        </div>
      </div>
      <div aria-hidden="true">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/icon-arrow-curve.svg" alt="">
      </div>
    </div>
  </div>

  <div class="servicos">
    <h2>Serviços</h2>
    <h3>Oferecemos a melhor qualidade em:</h3>

    <div class="lista-servicos">
      <div class="sevicos-item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/foto-reforma-transformadores.jpg" alt="Reforma de Transformadores">
        <h4>Reforma de Transformadores</h4>
        <ul>
          <li>Projeto</li>
          <li>Fabricação</li>
          <li>Ensaios elétricos</li>
        </ul>
      </div>
      <div class="sevicos-item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/foto-comercializacao-transformadores.jpg" alt="Comercialização de Transformadores">
        <h4>Comercialização de Transformadores</h4>
        <ul>
          <li>Venda</li>
          <li>Compra</li>
          <li>Locação</li>
        </ul>
      </div>
      <div class="sevicos-item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/foto-manutencao-campo.jpg" alt="Manutenção em campo">
        <h4>Manutenção em campo</h4>
        <ul>
          <li>Correções de vazamento</li>
          <li>Instalação de acessórios</li>
          <li>Reaperto de conexões</li>
          <li>Limpezas</li>
        </ul>
      </div>
      <div class="sevicos-item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/foto-servico-engenharia.jpg" alt="Serviço de Engenharia">
        <h4>Serviço de Engenharia</h4>
        <ul>
          <li>Medição de Grandezas</li>
          <li>Inspeção de laudos</li>
          <li>Emissão de laudos</li>
          <li>ART</li>
          <li>Startup de Subestações</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="contato">
    <h2>Contato</h2>

    <div class="formulario-contato">
      <form action="">
        <fieldset>
          <legend>Solicite um orçamento conosco:</legend>
          <label for="i-nome">Nome:</label>
          <input type="text" name="" id="i-nome">

          <label for="i-email">Email:</label>
          <input type="email" name="" id="i-email">

          <label for="i-telefone">Telefone:</label>
          <input type="tel" name="" id="i-telefone">

          <label for="i-mensagem">Telefone:</label>
          <input type="textarea" max="100" name="" id="i-mensagem">

          <input type="submit" value="Enviar">
        </fieldset>
      </form>
    </div>

    <div class="infos-contato">
      <div class="mapa">
        <div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/foto-kva-faixada.jpg" alt="Foto da faixada da KVA Industria de Transformadores Ltda.">
        </div>
        <div>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/foto-mapa.jpg" alt="Clique aqui para abrir o mapa">
        </div>
      </div>

      <div class="infos">
        <div>
          <ul>
            <li>
              <a href="mailto:kvaind@yahoo.com.br?subject=Or%C3%A7amento%20para%20Recondicionamento%20de%20Geradores%20(contato%20via%20site)&body=Ol%C3%A1%20equipe%20KVA%20Transformadores%2C%20gostaria%20de%20solicitar%20um%20or%C3%A7amento%20para%20os%20servi%C3%A7os%20que%20voc%C3%AAs%20oferecem%20no%20site%2C%20fico%20no%20aguardo%20do%20retorno." target="_self">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/icon-email.svg" alt="email: kvaind@yahoo.com.br">
                <p>kvaind@yahoo.com.br</p>
              </a>
            </li>
            <li>
              <a href="tel:+5549999286641" target="_self">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/icon-phone.svg" alt="Telefone: (49) 9 9928-6641">
                <p>(49) 9 9928-6641</p>
              </a>
            </li>
            <li>
              <a href="https://www.google.com/maps/place/KVA+Ind%C3%BAstria+de+Transformadores+Ltda/@-27.2217949,-51.9518411,15z/data=!4m8!1m2!2m1!1sRua+Isidoro+Simioni,+620+%C3%81rea+Industrial,+Concordia%2FSC+CEP+89713-194!3m4!1s0x0:0x9752e3db9d0ce709!8m2!3d-27.2208389!4d-51.9452376" target="_blank">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/icon-location.svg" alt="Endereço: Rua Isidoro Simioni, 620 Área Industrial, Concordia/SC CEP 9713-194">
                <p>Rua Isidoro Simioni, 620
                  Área Industrial, Concordia/SC
                  CEP 89713-194</p>
              </a>
            </li>
          </ul>
        </div>
        <div>
          <ul>
            <li>
              <a href="https://fb.com/kvatransformadores" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/icon-facebook.svg" alt="Facebook"></a>
            </li>
            <li>
              <a href="https://www.instagram.com/kvaconcordia" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/icon-instagram.svg" alt="Instagram"></a>
            </li>
            <li>
              <a href="https://api.whatsapp.com/send?phone=5549999286641&text=Olá,%20gostaria%20de%20fazer%20um%20orçamento%20com%20vocês%20nos%20transformadores%20da%20minha%20empresa!" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/public/imgs/icon-whatsapp.svg" alt="WhatsApp"></a>
            </li>
          </ul>
          <a href="https://fb.com/kvatransformadores" target="_blank">fb.com/kvatransformadores</a>
          <a href="https://www.instagram.com/kvaconcordia" target="_blank">instagram.com/kvaconcordia</a>
          <p>KVA Industria de Transformadores Ltda. © Todos os direitos reservados - <?php echo date("Y"); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>