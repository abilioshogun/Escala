<?php
ob_start("ob_gzhandler");
include("header.html");
?>
<meta name="description" content="Página Contendo todos os colaboradoresda empresa">
<meta name="keywords" content="colaboradores,empresa">
<title>Colaboradores | Escala</title>

<?php
	include("navbar.html");
	?>

<h1> Quadro de colaboradores</h1>

<p>
    Abaixo você pode ver os colaboradores da nossa empresa.
</p>
<div class="avatar">
    <figure>
        <img id="imagem" src="https://reinodaluz.com/test/projeto/imagem/avatar.png" alt="Avatar padrão"
            title="Avatar padrão">
        <figcaption>Parceiro<br>Pedro paulo</figcaption>
    </figure>
</div>
<div class="avatar">
    <figure>
        <img id="imagem" src="https://reinodaluz.com/test/projeto/imagem/avatar-f.png" alt="Avatar padrão"
            title="Avatar padrão">
        <figcaption>Marketing<br>Luciana</figcaption>
    </figure>
</div>
<div class="avatar">
    <figure>
        <img id="imagem" src="https://reinodaluz.com/test/projeto/imagem/avatar.png" alt="Avatar padrão"
            title="Avatar padrão">
        <figcaption>Pedro paulo</figcaption>
    </figure>
</div>

<div class="avatar">
    <figure>
        <img id="imagem" src="https://reinodaluz.com/test/projeto/imagem/avatar-p.png" alt="Avatar padrão"
            title="Avatar padrão">
        <figcaption>Zero Absoluto <br>Dono Pedro paulo</figcaption>
    </figure>
</div>

<div class="avatar">
    <figure>
        <img id="imagem" src="https://reinodaluz.com/test/projeto/imagem/avatar-m.png" alt="Avatar padrão"
            title="Avatar padrão">
        <figcaption>Hospital Mãe de Deus<br>Pedro paulo</figcaption>
    </figure>
</div>

<div class="avatar">
    <figure>
        <img id="imagem" src="https://reinodaluz.com/test/projeto/imagem/avatar-s.png" alt="Avatar padrão"
            title="Avatar padrão">
        <figcaption>Pedro paulo</figcaption>
    </figure>
</div>

<div class="avatar">
    <figure>
        <img id="imagem" src="https://reinodaluz.com/test/projeto/imagem/avatar.png" alt="Avatar padrão"
            title="Avatar padrão">
        <figcaption>Outro<br>Pedro paulo</figcaption>
    </figure>
</div>

<div class="avatar">
    <figure>
        <img id="imagem" src="https://reinodaluz.com/test/projeto/imagem/avatar.png" alt="Avatar padrão"
            title="Avatar padrão">
        <figcaption>Outro<br>João</figcaption>
    </figure>
</div>


<?php
	include("footer.html");
	?>