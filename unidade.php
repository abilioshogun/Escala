<?php
ob_start("ob_gzhandler");
include("header.html");
?>
<meta name="description" content="Página Contendo as unidades da empresa">
<meta name="keywords" content="regras,empresa">
<title>Unidades | Escala</title>

<?php
	include("navbar.html");
	?>
<h2>
    Nossa localização
</h2>
<div id="map">
    <div style="overflow:hidden;width: 700px;position: relative;">
        <iframe width="700" height="440"
            src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=rua%20coronel%20genuino%20130+(Unidade%20zona%20sul)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed"
            frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe>
        <div
            style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;">
            <small style="line-height: 1.8;font-size: 2px;background: #fff;">Powered by <a
                    href="https://embedgooglemaps.com/de/">embedgooglemaps DE</a> & <a
                    href="https://rechargevodafone.co.uk">https://rechargevodafone.co.uk/vodafone-coverage/</a></small>
        </div>
        <style>
            #gmap_canvas img {
                max-width: none !important;
                background: none !important
            }
        </style>
    </div>
</div>


<?php
	include("footer.html");
	?>