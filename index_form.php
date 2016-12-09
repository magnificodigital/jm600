<?
$mktime = mktime();
$para	 = "infoa@ekoarq.com.br";
$headers = "Content-Type: text/plain; charset=utf-8\n";
$headers.= "From: infoa@ekoarq.com.br <infoa@ekoarq.com.br>\n";
$subject = "FORMULÁRIO DE CONTATO - JM600";

$msg = "FORMULÁRIO DE CONTATO - JM600 - 
Data do ENVIO: ".date("d/m/y h:i",$mktime)."\n\n";

$msg .= "Nome: $nome\n";
$msg .= "DDD: $ddd\n";
$msg .= "Telefone: $telefone\n";
$msg .= "Email: $email\n";
$msg .= "Mensagem: $mensagem\n";

$msg .= "Quer receber as novidades da EKO? $checkbox\n";

#### Envia valores acima por email ##############################
if ($Submit) {			 
			mail($para,$subject,$msg,$headers);
			header("Location: ");
		}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JM600 - Onde tudo se une. O primeiro e único complexo empresarial de Arujá</title>

<link type="text/css" rel="stylesheet" href="css/reset.css" />
<link type="text/css" rel="stylesheet" href="css/style_jm600.css" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>

<script src="js/prettyCheckboxes.js" type="text/javascript" charset="utf-8"></script>
<link type="text/css" rel="stylesheet" href="prettyCheckboxes.css"/>

<script type="text/javascript" src="js/mosaic.1.0.1.js"></script>

<script src="js/jquery.lettering-0.6.1.min.js"></script>
<script src="js/jquery.scrollorama.js"></script>

<script src="jquery.colorbox.js"></script>
<link rel="stylesheet" href="colorbox.css" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

 <!-- CSS for slidesjs.com example -->
  <link rel="stylesheet" href="css/slide.css">
  <!-- End CSS for slidesjs.com example -->

  <!-- SlidesJS Optional: If you'd like to use this design -->
  <style>
    #slides,
    #slides2,
    #slides3 {
      display: none;
     }
		
		#slides2 {
		width:245px;
		height:190px;
		}

    .slidesjs-navigation {
      margin-top:3px;
    }

    .slidesjs-previous {
      margin-right: 5px;
      float: left;
    }

    .slidesjs-next {
      margin-right: 5px;
      float: left;
    }

    .slidesjs-pagination {
      margin: -38px 0 0;
      float: right;
      list-style: none;
			position:absolute;
			z-index:9999;
			right:59px;
    }
		
		  .slidesjs-pagination2 {
      margin: -33px 65px 0;
      float: right;
      list-style: none;
			position:absolute;
			z-index:9999;
    }

    .slidesjs-pagination li {
      float: left;
      margin: 0 5px;
    }

    .slidesjs-pagination li a {
      display: block;
      width: 13px;
      height: 0;
      padding-top: 13px;
      background-image: url(_imgs/pagination.png);
      background-position: 0 0;
      float: left;
      overflow: hidden;
    }

    .slidesjs-pagination li a.active,
    .slidesjs-pagination li a:hover.active {
      background-position: 0 -13px
    }

    .slidesjs-pagination li a:hover {
      background-position: 0 -26px
    }
		
		.slidesjs-pagination2 li {
      float: left;
      margin: 0 5px;
    }

    .slidesjs-pagination2 li a {
      display: block;
      width: 13px;
      height: 0;
      padding-top: 13px;
      background-image: url(_imgs/pagination.png);
      background-position: 0 0;
      float: left;
      overflow: hidden;
    }

    .slidesjs-pagination2 li a.active,
    .slidesjs-pagination2 li a:hover.active {
      background-position: 0 -13px
    }

    .slidesjs-pagination2 li a:hover {
      background-position: 0 -26px
    }
		  </style>

</head>

<body onload="javascript:verificaMenu()">

<div id="menu02_background" class="floater">
<div id="menu02">
<ul class="menu02" id="flutuante">
<li class="current"><a href="#topo" id="btHome">HOME</a></li>
<li><a href="#jm600" id="btJm600">O JM600</a></li>
<li><a href="#localizacao" id="btLocalizacao">LOCALIZAÇÃO ESTRATÉGICA</a></li>
<li><a href="#plantas_bg" id="btPlantas">PLANTAS</a></li>
<li><a href="#background_diferenciais" id="btDiferenciais">DIFERENCIAIS</a></li>
<li><a href="#background_contato" id="btContato">CONTATO</a></li>
</ul>
<div id="btcorretor"><a href="javascript:void(window.open('http://login.zupot.com/client.php?locale=pt&c=NzRfNjk2MjI=','','width=590,height=610,left=0,top=0,resizable=yes,menubar=no,location=yes,status=yes,scrollbars=yes'))" class="corretor">
<img src="_imgs/jm600_fale_com_corretor.png" alt="Fale com um Corretor" /></a></div>
</div>
</div>

<div id="topo">
<div id="menu01_content">
<div id="menu01">
<ul class="menu">
<li><a href="#jm600" id="btJm600">O JM600</a></li>
<li><a href="#localizacao" id="btLocalizacao">LOCALIZAÇÃO ESTRATÉGICA</a></li>
<li><a href="#plantas_bg" id="btPlantas">PLANTAS</a></li>
<li><a href="#background_diferenciais" id="btDiferenciais">DIFERENCIAIS</a></li>
<li><a href="#background_contato" id="btContato">CONTATO</a></li>
</ul>
</div>
</div>
</div>

<div id="une">
<div id="une_content">
<h1>Onde tudo se une.</h1>
O primeiro e único complexo empresarial de Arujá.
</div>
</div>

<div id="bg_jm600">
<div id="jm600">
<div id="jm600_01">
<div id="jm600_01_video"><a href="video.html" class="youtube"><img src="_imgs/jm600_thumb_video.jpg" width="490" height="345" /></a></div>
<div id="jm600_01_02">
<ul>
<li>Salas Comerciais</li>
<li>Centro de Convenções</li>
<li>Lojas</li>
<li>Boulevard de conveniências</li>
</ul>
</div>
</div>
<div id="jm600_02">

<div id="jm600_02_01">
<p>O JM600 é o empreendimento que chega à cidade de Arujá oferecendo o que há de mais moderno e sofisticado para os negócios da região. </p>
<p>Seguindo a tendência mundial de integração de espaços, o JM600 possui espaço para até 240 salas comerciais, salas para reuniões, um centro de convenções para palestras, cursos e muito networking no auditório com capacidade de 100 pessoas, além de um boulevard para até 20 lojas e serviços de conveniência, com projetos para restaurantes, agências bancárias, livrarias e entre outros.</p>
<p>Um complexo único na região, oferencendo tudo o que você precisa para a prosperidade dos seu negócios.</p>
</div>

<div id="jm600_02_02">
<div class="container">
    
    <div id="slides">
      <img src="_imgs/jm600_galeriadefotos01.jpg" alt="LOBBY COM PÉ DIREITO DUPLO">
      <img src="_imgs/jm600_galeriadefotos02.jpg" alt="MALL PARA LOJAS E SERVIÇOS">
      <img src="_imgs/jm600_galeriadefotos03.jpg" alt="PERSPECTIVA ARTÍSTICA DA FACHADA">
      <img src="_imgs/jm600_galeriadefotos04.jpg" alt="ENTRADA PRINCIPAL">
      <img src="_imgs/jm600_galeriadefotos05.jpg" alt="DECORADO: ESCRITÓRIO">
      <img src="_imgs/jm600_galeriadefotos06.jpg" alt="DECORADO: ESCRITÓRIO">
      <img src="_imgs/jm600_galeriadefotos07.jpg" alt="DECORADO: CONSULTÓRIO">
      </div>
      </div>
</div>

</div>

</div>
</div>

<div id="localizacao">
<div id="localizacao_content">

<div id="localizacao_content_01">
<h1>Sua empresa localizada no ponto mais estratégico para os seus negócios</h1>
<p>O JM600 está localizado no centro de Arujá, a poucos metros da Rodoviária e na mesma avenida da futura ligação com o Aeroporto de Guarulhos. É a cidade que mais cresce na região e em breve receberá o Trecho Leste e Norte do Rodoanel.</p>
<h2>AV. JOÃO MANOEL, 600 - CENTRO - ARUJÁ/SP</h2>

<div id="localizacao_content_01_botao"><a href="_imgs/jm600_mapadelocalizacao.jpg" class="group2"><img src="_imgs/jm600_localizacao_botao.jpg" width="155" height="100" /></a> </div>

</div>

<div id="localizacao_content_02"><img src="_imgs/jm600_localizacao_mapa.jpg" width="490" height="345" /></div>

<div id="localizacao_content_03">
<div id="localizacao_content_03_carrossel">
  <div class="container">
		<div id="slides2">
      <img src="_imgs/jm600_localizacao_carrossel_01.jpg" alt="20 minutos do Aeroporto de Guarulhos">
      <img src="_imgs/jm600_localizacao_carrossel_02.jpg" alt="Às margens da rodovia Dutra, com rápido acesso à Ayrton Senna, Fernão Dias e futuro Rodoanel">
      <img src="_imgs/jm600_localizacao_carrossel_03.jpg" alt="30 minutos da cidade de São Paulo">
      <img src="_imgs/jm600_localizacao_carrossel_04.jpg" alt="120 km do Porto de Santos">
      <img src="_imgs/jm600_localizacao_carrossel_05.jpg" alt="160 km do Porto de São Sebastião">
    </div>
 </div>
</div>
</div>

</div>
</div>

<div id="plantas_bg">

<div id="plantas_content">
<h1>Sob medida</h1>
<p>O JM600 é perfeito para o seu negócio.</p>
<p>Além de oferecer uma estrutura completa para a instalação da sua empresa, a relação custo x benefício e a valorização<br />dos imóveis na cidade também o consagram como uma grande oportunidade para todos os tipos de investimentos.</p>

<div id="plantas_content_office"><img src="_imgs/jm600_plantas_img_office.jpg" width="490" height="100" /></div>
<p class="fonte16">Salas Comerciais a partir de 33,35 m²<br />Lajes de 455 m²<br />Pequenas, Médias e Grandes Empresas<br />Profissionais Autônomos</p>

<div id="plantas_content_botoes">
<ul>
<li>
<a class="group1" href="_imgs/jm600_planta01.jpg" title="IMPLANTAÇÃO DO EMPREENDIMENTO">
<img src="_imgs/jm600_plantas_botao01.jpg" width="225" height="80" />
</a>
<a class="group1" href="_imgs/jm600_planta02.jpg" title="SALA COMERCIAL DE 33,65 m²"></a>
<a class="group1" href="_imgs/jm600_planta03.jpg" title="SALA COMERCIAL DE 67 m²"></a>
<a class="group1" href="_imgs/jm600_planta04.jpg" title="LAJE DE 455 m²"></a>
</li>
<li><a href="#background_contato" id="btContato"><img src="_imgs/jm600_plantas_botao02.jpg" width="225" height="80" /></a></li>
</ul>
</div>

</div>
</div>

<div id="background_diferenciais">
<div id="diferenciais">
<div id="diferenciais_esquerda">
<h1>Diferenciais e Ficha Técnica</h1>
<p>• Terreno com mais de 4.600 m²<br />• 2 Torres<br />• 8 Elevadores<br />• Mais de 300 vagas de estacionamento<br />• Bicicletário<br />• Segurança 24 horas<br />• Gerador de Energia*<br />• Salas Comerciais<br />
• Mall para Lojas e Serviços<br />• Salas de Reuniões<br />• Centro de Convenções<br />• Auditório para 100 pessoas<br />• Lobby com pé direito duplo<br />• Alto Padrão de Acabamento</p>
<div id="diferenciais_textolegal">
* Para o funcionamento do elevador, luzes de emergência, funções básicas da portaria,<br />
portões e bomba d’água.
</div>
</div>

<div id="diferenciais_direita"><img src="_imgs/jm600_diferenciais_imagem.jpg" width="490" height="445" /></div>

</div>
</div>

<div id="background_contato">
<div id="contato">
<h1>FALE COM UM CORRETOR</h1>
<p><span class="laranja fonte24px">OBRIGADO!<br />Sua mensagem foi enviada com sucesso.<br />Em breve entraremos em contato.</span></p>
</div>
</div>

<div id="footer">
<div id="footer_content">
<div id="footer_content_txt01"><img src="_imgs/jm600_logo_eko.jpg" alt="EKO Construtora" /></div>
<div id="footer_content_txt02"><img src="_imgs/jm600_logo_mm.jpg" alt="M&M Imóveis e Seguros" /></div>
<div id="footer_content_txt03"><img src="_imgs/jm600_logo_glaucobenavente.jpg" alt="Glauco Benavente" /></div>
<div id="footer_content_txt04"><img src="_imgs/jm600_logo_marthagaviao.jpg" alt="Marta Gavião" /></div>
<div id="footer_content_txt05"><img src="_imgs/jm600_logo_priolligaluppo.jpg" alt="Priolli Galuppo" /></div>
</div>

<div id="footer_content_textolegal">Perspectivas Artísticas. Material preliminar sujeito a alteração. Todas as imagens apresentadas neste site são meramente ilustrativas.</div>

</div>

 		<script type="text/javascript" charset="utf-8">
			$(document).ready(function(){
				$('#checkboxDemo input[type=checkbox],#radioDemo input[type=radio]').prettyCheckboxes();
				$('.inlineRadios input[type=radio]').prettyCheckboxes({'display':'inline'});
			});
		</script>
    
    <script type="text/javascript">
function validaform()
{
	if(document.checkboxDemo.nome.value == 'Nome*'){
		alert("[NOME] Todos os campos com * são de preenchimento obrigatório.");
		document.checkboxDemo.nome.focus();
		return false;
	}

	if(document.checkboxDemo.ddd.value == 'DDD*'){
		alert("[DDD] Todos os campos com * são de preenchimento obrigatório.");
		document.checkboxDemo.telefone.focus();
		return false;
	}

	if(document.checkboxDemo.telefone.value == 'Telefone*'){
		alert("[TELEFONE] Todos os campos com * são de preenchimento obrigatório.");
		document.checkboxDemo.telefone.focus();
		return false;
	}
	
	if (document.checkboxDemo.email.value == 'E-mail*'){
		alert("[E-MAIL] Todos os campos com * são de preenchimento obrigatório.");
		document.checkboxDemo.email.focus();
		return false;
	}
	if (document.checkboxDemo.email.value.indexOf("@") == -1){
		alert("Digite o seu [E-MAIL] corretamente.");
		document.checkboxDemo.email.focus();
		return false;
	}
	if (document.checkboxDemo.email.value.indexOf(".") == -1){
		alert("Digite o seu [E-MAIL] corretamente.");
		document.checkboxDemo.email.focus();
		return false;
	}

	if(document.checkboxDemo.mensagem.value == 'Mensagem*'){
		alert("[MENSAGEM] Todos os campos com * são de preenchimento obrigatório.");
		document.checkboxDemo.mensagem.focus();
		return false;
	}
}
</script>  

<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2'});
				$(".group3").colorbox({rel:'group3'});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:650, innerHeight:400});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
    
  <!-- SlidesJS Required: Link to jquery.slides.js -->
  <script src="js/jquery.slides.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
  <script>
    $(function() {
      $('#slides').slidesjs({
        width: 490,
        height: 345,
        navigation: false,
				play: {
          auto: true
        }
      });

      /*
        To have multiple slideshows on the same page
        they just need to have separate IDs
      */
      $('#slides2').slidesjs2({
        width: 245,
        height: 190,
        navigation: false,
        play: {
          auto: true
        }
      });
});
  </script>
  <!-- End SlidesJS Required -->
    
    <script src="js/bootstrap-scrollspy.js"></script>
<script src="js/bootstrap-tab.js"></script>

<script src="jquery.easing.min.js"></script>	
      
    <script type="text/javascript">
    	$(function(){
			//inicia a navegacao
			navegation($('ul.menu a'),39);
			navegation($('ul.menu02 a'),39);
			navegation($('#plantas_content_botoes a'),39);
			navegation($('#btcorretor a'),39);
			});
		
		//função para o menu deslizante
		function navegation(elemento,desconto){
			elemento.bind('click',function(event){
				var $anchor = $(this);
				var calculo = $($anchor.attr('href')).offset().top;
				if(desconto){
					var goto = calculo-desconto;
				}else{
					var goto = calculo;
				}
				
				$('html, body').stop().animate({
					scrollTop: goto
				}, 900,'easeInOutExpo');
			
				event.preventDefault();
				
			});				
		}		
		
    </script>
    
    
    <script type="text/javascript">
	
	function verificaMenu()
	{
		var y = jQuery(window).scrollTop();
		
		$("#menu02_background").hide();
		
if(y <= 1120)
{
$("#menu02_background").hide();
}
else {
$("#menu02_background").show();
}

		//console.log(y);
		
		if(y <= 1120)
		{
			$("#flutuante li").removeClass('current');
			$("#flutuante li:eq(0)").addClass('current');
		}

		if(y >= 1121 && y <= 1940)
		{
			$("#flutuante li").removeClass('current');
			$("#flutuante li:eq(1)").addClass('current');
		}
		else if(y >= 1941 && y <= 2630)
		{
			$("#flutuante li").removeClass('current');
			$("#flutuante li:eq(2)").addClass('current');
		}
				else if(y >= 2631 && y <= 3340)
		{
			$("#flutuante li").removeClass('current');
			$("#flutuante li:eq(3)").addClass('current');
		}
		
						else if(y >= 3341 && y <= 3995)
		{
			$("#flutuante li").removeClass('current');
			$("#flutuante li:eq(4)").addClass('current');
		}
		
								else if(y >= 3996)
		{
			$("#flutuante li").removeClass('current');
			$("#flutuante li:eq(5)").addClass('current');
		}								
	setTimeout('verificaMenu()', 500);
	};
</script>




</body>
</html>
