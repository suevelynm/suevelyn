<?php
	include("dados.php");
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
</head>
<body>
	<main>
		
		<section>
			<header>
				<h1>Contato: (11) 9888-8118 | Rua das Laranjeiras 593, Jardins - SP</h1>
				<p>Peça por ligação ou WhatsApp.</p>
			</header>
				<?php
				if(isset($_GET['id']) && !empty($_GET['id'])){
					echo "ID = ". $_GET['id'];
                $id = $_GET['id'];
                echo "id = " . $id;
				foreach($tutoriais as $key => $value){
                    if($value['id'] == $id){
			?>
			<article>
				<a href="#"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=$value['descricao'];?></p>
			</article>
			<?php
                    }
				}
			}else{
				echo "não existe";
			}
			?>
			
		</section>
        <section>

			<?php
				foreach($tutoriais as $key => $value){
                    if($value['id'] != $id){
			?>
			<article>
				<h2><?=$value['titulo'];?></h2>
	    	</article>
			<?php
                    }
				}
			?>
		</section>
	</main>
</body>
</html>