<!DOCTYPE html>
<html lang="pt-br">

<!-- -=-=-=-=-=-=-=-=-=-=-=- HEAD -=-=-=-=-=-=-=-=-=-=- -->

<head>
  <meta charset="UTF-8"/>
  <meta http-equiv=Content-Type content="text/html; charset=windows-1252">
  <meta name=Generator content="Microsoft Word 14 (filtered)">
  <title>Fique por dentro dos melhores eventos</title>
  <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
  <link rel="shortcut icon" href="_imagens/symbora-laranja.ico" type="image/x-icon" />
  <link rel="stylesheet" href="_css/blog.css">
</head>

<script src="_javascript/funcoes.js"></script>

<!-- -=-=-=-=-=-=-=-=-=-=-=- BODY -=-=-=-=-=-=-=-=-=-=- -->

<body>
  <header id="top_bar">
    <h1>PRECISANDO DE UM  HELP EM SEUS EVENTOS? </h1>
    <button class="button_top_bar">   Symbora te ajuda!! </button>
  </header>

  <header id="cabecalho">
    <img id="header-1" src="_imagens/header-1.png"/>
    <img id="header-2" src="_imagens/symbora-branco-laranja.png"/>
    <img id="header-3" src="_imagens/header-2.png"/>
  </header>
  
  <nav id="menu">
    <ul>
      <li><a id="sym" href="index.html">SYMBORA</a></li>
      <li><a id="blog" href="fotos.html">Blog</a></li>
      <li><a id="mat" href="./downloads.html">Materiais Gratuitos</a></li>
      <li><a id="eve" href="index.html">Eventos</a></li>
    </ul>
  </nav>

  <div id="interface">
    <article id="noticia-principal">      
      <figure class="foto-legenda">
        <img src="_imagens/paolo-nicolello-1151838-unsplash.jpg">
        <figcaption>
          <h1>Encontre seu evento muito mais rápido!</h1>
          <p>Não vai querer ficar de fora, né...?</p>
        </figcaption>
      </figure>
    
      <div class=WordSection1>

      <?php
          require('./conexao.php');

          $PARAN = $_GET['p'];

          

        $query="SELECT * FROM surviveposts WHERE paran_post LIKE '$PARAN'";
        
          $result = mysqli_query($con, $query);

          while ($row=mysqli_fetch_row($result)){

              echo $row[1];
              echo $row[3];


          }

      
          mysqli_close($con);
      ?>
<!--
        <h1 id="titulo">Torne sua busca por eventos MUITO mais simples!</h1>

        <p class=MsoNormal style='margin-bottom:10.0pt;text-align:justify'>Com o avanço
        da tecnologia, tudo que queremos ter ou fazer está a um click de distância.
        Além disso, a facilidade de divulgação das informações faz com que você precise
        se destacar para ser percebido na multidão.</p>
        
        <p class=MsoNormal style='margin-bottom:10.0pt;text-align:justify'>Mais
        especificamente para os produtores de eventos, o mundo virtual pode ser um
        ambiente competitivo para ser percebido e para atrair um grande público para um
        determinado evento. Então, o que fazer para divulgar seu evento de forma
        eficiente e se destacar na multidão?</p>
        
        <h2 style='margin: 20px 30px 10px 20px;text-align:justify; font-size: 16pt;background-color: white; margin-left: 20px; margin-right: 30px'> Como começar a divulgação de eventos?</h2>
        
        <p class=MsoNormal style='margin-bottom:10.0pt;text-align:justify'>Antes de
        divulgar o evento, o primeiro passo é realizar algumas definições. Antes de
        qualquer coisa, defina seu público-alvo, pois, a partir disso, você poderá
        escolher a melhor estratégia de divulgação.</p>
        
        <p class=MsoNormal style='margin-bottom:10.0pt;text-align:justify'>Lembre-se
        que cada público tem suas características específicas. Assim, é preciso
        identificar e compreender como se comunicam, quais redes sociais são as mais
        utilizadas, quais ferramentas de busca utilizam e assim pro diante.</p>
        
        <h2 style='margin: 20px 30px 10px 20px;text-align:justify; font-size: 16pt;background-color: white;'>Qual é o melhor meio de divulgação para cada público?</h2>
        
        <h3 style='margin: 30px 30px 20px 50px;text-align:justify; font-size: 16pt;background-color: white; color: rgba(0, 0, 0, 0.8); font-weight: bold'>Divulgação via 
          Facebook</h3>
        
        <p class=MsoNormal style='margin-bottom:10.0pt;text-align:justify'>Por meio do
        Facebook, você pode alcançar diversas faixas etárias e diversos tipos de
        interesse. Pensando no seu público-alvo, os eventos divulgados via Facebook
        podem ter grande abrangência, já que a ferramenta possui funcionalidades
        práticas, como a criação de páginas específicas para o evento, por exemplo.</p>
        
        <p class=MsoNormal style='margin-bottom:10.0pt;text-align:justify'>Isso permite
        que você tenha uma prévia de público e possibilita ao próprio usuário
        compartilhá-lo junto à sua rede de contatos. Além disso, é possível direcionar
        anúncios pagos por perfil de público, gerando mais alcance e impulsionando a
        visualização da postagem.</p>
        
        <h3 style='margin: 30px 30px 20px 50px;text-align:justify; font-size: 16pt;background-color: white; color: rgba(0, 0, 0, 0.8); font-weight: bold'>Divulgação
        via Instagram</h3>
        
        <p class=MsoNormal style='margin-bottom:10.0pt;text-align:justify'>Já para a
        divulgação via Instagram, o produtor precisa ser um pouco mais estratégico em
        suas ações. Pelo fato de ser uma rede com conteúdo mais visual, é preciso usar
        a criatividade para se destacar:</p>
        
        <p class=MsoNormal style='margin-top:20px;margin-right:0cm;margin-bottom:10.0pt;
        margin-left:50.0pt;text-align:justify;text-indent:-18.0pt'>&#9679;<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
        </span>Seja o mais direcionado possível na escolha das hashtags;</p>
        
        <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;
        margin-left:50.0pt;text-align:justify;text-indent:-18.0pt'>&#9679;<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
        </span>Use e abuse dos stories;</p>
        
        <p class=MsoNormal style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;
        margin-left:50.0pt;text-align:justify;text-indent:-18.0pt'>&#9679;<span
        style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span>Invista na
        divulgação em parceria com influencers.</p>
        
        <h3 style='margin: 30px 30px 20px 50px;text-align:justify; font-size: 16pt;background-color: white; color: rgba(0, 0, 0, 0.8); font-weight: bold'>Divulgação
        em outras redes sociais</h3>
        
        <p class=MsoNormal style='margin-bottom:10.0pt;text-align:justify'>Redes como o
        LinkedIn são utilizadas por um público mais específico. Dessa forma, caso o seu
        evento seja corporativo ou mesmo mais formal, vale a pena investir na
        divulgação por meio deste canal. De novo, o segredo é saber exatamente por onde
        seu público ideal se comunica.</p>
        
        <h3 style='margin: 30px 30px 20px 50px;text-align:justify; font-size: 16pt;background-color: white; color: rgba(0, 0, 0, 0.8); font-weight: bold'>Ferramentas
        de buscas</h3>
        
        <p class=MsoNormal style='margin-bottom:10.0pt;text-align:justify'>Além de
        todas as possibilidades apresentadas, você pode utilizar plataformas de
        divulgação e gestão de eventos que contam com diversos pacotes personalizáveis.
        Você pode criar e organizar seu evento, além de poder vender e distribuir os
        ingressos. Dessa forma, você pode escalar o ganho com seu eventos, tornando-os
        maiores e muito mais organizados.</p>
        
        <p class=MsoNormal style='margin-bottom:10.0pt;text-align:justify'>Após todo o
        planejamento e todos os esforços de divulgação, é hora de colocar as ideias em
        prática e realizar o melhor evento para seu público. Então, se liga no nosso
        conteúdo <b><i><a href=""> 5 dicas para o seu evento bombar</a></i></b> e se torne um destaque
        no mundo dos eventos.</p>
-->
        <div class="last" style="margin-top:20px;">
          <a href="index.html"> <button class="baixar" style="width:500px; height: 80px;font-size: 22pt">BAIXE AQUI...</button></a>
        </div>
      </div>
    

      <!-- <video id="vid01" controls  poster="../../curso-html5-pacote01/projeto-glass-html5/     _imagens/video-mini01.jpg">
        <source type="video/mp4" src="../../curso-html5-pacote02/_media/one-day.mp4"/>
      </video> -->

    </article>

    <aside id="lateral">
      <div class="rel">
        <a href="index.html"><button class="premio">Ganhe uma Consultoria Grátis</button></a>
        <img id="carn" src="_imagens/carna-azul.png" alt="Ilustração de carnaval"/>
        <a href="index.html"><button class="premio">Ganhe uma Consultoria Grátis</button></a>
        <a href=""><img id="carn" src="_imagens/lista-bloquinhos.png" alt="lista de blocos, bloquinhos de rua de belo horizonte"/></a> 
        <img id="carn" src="_imagens/locais.png" alt="Ilustração de carnaval"/>
        <a href="index.html"><button class="premio">Ganhe uma Consultoria Grátis</button></a>
        <img id="carn" src="_imagens/ebook.png" alt="Ilustração de carnaval"/>
      </div>
    </aside>

  </div>

  <footer id="rodape">
    <div id="footdiv">
      <img id="footerlogo" src="_imagens/symboratrans.png">
      <table id="tablerodape">
        <tr>
          <th class="h">TÍTULO</th>
          <th class="h">TÍTULO</th>
          <th class="h">TÍTULO</th>
          <th class="h">TÍTULO</th>
          <th class="h">TÍTULO</th>
        </tr>

        <tr>
          <td class="i">itens</td>
          <td class="i">itens</td>
          <td class="i">itens</td>
          <td class="i">itens</td>
          <td class="i">itens</td>
        </tr>

        <tr>
          <td class="i">itens</td>
          <td class="i">itens</td>
          <td class="i">itens</td>
          <td class="i">itens</td>
          <td class="i">itens</td>
        </tr>

        <tr>
          <td class="i">itens</td>
          <td class="i">itens</td>
          <td class="i">itens</td>
          <td class="i">itens</td>
          <td class="i">itens</td>
        </tr>
      </table>
    </div>

    <div class="linediv">
      <p> FEITO PELOS #SURVIVERS <br/>
      <figure class="linkedin-twitter">
        <a href="https://www.facebook.com/blogsymbora" target="_blank">
        <img id="logoface" src="_imagens/logoface.png"> </a>
          &nbsp;
        <a href="https://www.instagram.com/blogsymbora" target="_blank">
        <img id="logoinsta" src="_imagens/Instagram_icon.png"> </a>
      </figure>
      </p>
    </div>
  </footer>
</body>
</html>

<?php mysqli_close($conect);?>