<?php
ob_start("ob_gzhandler");
include("header.html");
?>
<meta name="description" content="Página inicial sobre a empresa escala">
<meta name="keywords" content="escala,empresa modelo">
<title>Escala</title>

	<?php
	include("navbar.html");
	?>  
      
        <div id="conteudo-principal">
            <h1>Escalas</h1>
            <label><strong>Semana</strong></label>

            <select class="tamanho-select" name="escala-opcao">
                <option selected>Selecione o escopo de dados</option>
                <option value="a+a">a+a</option>
                <option value="b+b">b+b</option>
                <option value="d+d">d+d</option>
            </select>

            <label><strong>Unidades</strong></label>
            <select class="tamanho-select" name="escala-opcao">
                <option selected>Loja Central</option>
                <option value="a+a">a+a</option>
                <option value="b+b">b+b</option>
                <option value="d+d">d+d</option>
            </select>
            <button type="button">Exibr</button>
        </div>
      <div style="overflow-x:auto;">
        
      
        <table class="tabela-alternada">
          <thead>  
          <tr>
                <th>Colaborador</th>
                <th>Função</th>
                <th>Setor</th>
                <th>Horario</th>
            </tr>
          </thead>
          
          <tbody>

            <tr>
                <td>Daiane Soares</td>
                <td>Operador de caixa</td>
                <td>Frente A</td>
                <td>07:20</td>
            </tr>
            <tr>
                <td>Jorge Lopes Silva</td>
                <td>Operador de caixa</td>
                <td>Frente B</td>
                <td>09:50</td>
            </tr>
            <tr>
                <td>Alice de Almeida</td>
                <td>Operador de caixa</td>
                <td>Restaurante</td>
                <td>11:50</td>
            </tr>
            <tr>
                <td>Renta Teixeira</td>
                <td>Empacotador</td>
                <td>Frente C</td>
                <td>11:50</td>
            </tr>
            <tr>
                <td>José da Slva Machado</td>
                <td>Fiscal</td>
                <td>Frente A</td>
                <td>13:30</td>
            </tr>
          </tbody>
        </table>
    </div>
        
    
      
<div id="conteudo-auxiliar">
        <p>Colaboradores afastados</p>
        <ol class="decimal">
            <li>Orlando Medeiros</li>
            <li>Deniel Oliveira</li>
            <li>Bernardo Mezero</li>
            <li>Luciana Rezende</li>
        </ol>
    </div>
  
   <div id="conteudo-auxiliar-imagem">
        <img id="imagem"  src="https://reinodaluz.com/test/projeto/imagem/ceu.jpg" alt="imagem do céu" title="Imagem do céu">
   </div> 


	<?php
	include("footer.html");
	?>