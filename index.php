<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 02 OOP </title>
</head>
<body>
	<pre>
	<?php
		require_once 'Caneta.php';
		$caneta1 = new Caneta;
		$caneta1->setModelo('Bic');
		$caneta1->setPonta(0.5);
		$caneta1->setCor('Azul');
		$caneta1->setCarga(60);

		echo ("<p> João tem uma caneta {$caneta1->getModelo()} com a ponta {$caneta1->getPonta()} da cor {$caneta1->getCor()}</p>");

		$caneta1->tampar();
		$caneta1->carga();
		$caneta1->rabiscar();

		$caneta2 = new Caneta;
		$caneta2->setModelo('Pilot');
		$caneta2->setPonta(3.5);
		$caneta2->setCor('Vermelha');
		$caneta2->setCarga(25);

		echo ("<p> Maria tem uma caneta {$caneta2->getModelo()} com a ponta {$caneta2->getPonta()} da cor {$caneta2->getCor()}</p>");

		$caneta2->destampar();
		$caneta2->carga();
		$caneta2->rabiscar();

		$caneta3 = new Caneta;
		$caneta3->setModelo('Stabilo Ultra Fina');
		$caneta3->setPonta(1.0);
		$caneta3->setCor('Preta');
		$caneta3->setCarga(0);

		echo ("</> Tania tem uma caneta {$caneta3->getModelo()} com a ponta {$caneta3->getPonta()} da cor {$caneta3->getCor()}</p>");

		$caneta3->tampar();
		$caneta3->carga();
		$caneta3->rabiscar();


	?>
	</pre>
</body>
</html>