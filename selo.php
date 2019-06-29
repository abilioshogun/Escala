<?php
ob_start("ob_gzhandler");
include("header.html");
?>
<meta name="description" content="Página Contendo os selos de validação">
<meta name="keywords" content="selos,empresa">
<title>Selo de qualidade</title>

<?php
	include("navbar.html");
	?>
<h1> Selos de qualidade</h1>
<p>Abaixo pode conferir que a nossa empresa Escala segue as normas da W3C.</p>

<p>
    <a href="https://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px" src="https://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
    </a>
</p>

<?php
	include("footer.html");
	?>