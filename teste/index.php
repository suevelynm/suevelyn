<?php
	include("dados.php");
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title;?></title>

    <style>
        #cabecalho{
            height: 200px;
            background-color: lightyellow;
        }
        #principal{
            height: 1570px;
            background-color: gainsboro;
        }
        #rodape{
            height: 200px;
            background-color: lightyellow;
        }
        #principal article img{
             width: 250px;
        }

        
    </style>
</head>
<body>
    <div id="cabecalho">
        <h1 style="font-size: 70px; color:darkorange; text-align: center;">Marmitas Dona Rita</h1>
        <p style="font-size: 40px; color: darkorange; text-align: center;">escolha sua marmita!</p>
    </div>
    <div id="principal">
				<h1>Cardápio de Marmitas</h1>
				<p style="font-size: 25px;">Click na foto e confira:</p>
			<?php
				foreach($tutoriais as $key => $value){
			?>
			<article>
				<a href="pagina2.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=$value['descricao'];?></p>
			</article>
			<?php
				}
			?>
		</section>
    </div>
    <div id="rodape">
        <h1 style="font-size: 25px; color: black; text-align: center;">Suevelyn Alves Miranda | R.A 1933140-5</h1>
    </div>
</body>
</html>