<html>
<title>oloco</title>
<body> 
<?php
	function verifica($a)
	{
		$cURL = curl_init($a);
		curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);

		// Seguir qualquer redirecionamento que houver na URL
		curl_setopt($cURL, CURLOPT_FOLLOWLOCATION, true);

		$resultado = curl_exec($cURL);
		
		// Pega o código de resposta HTTP
		$resposta = curl_getinfo($cURL, CURLINFO_HTTP_CODE);

		

		if ($resposta == '404') {
			echo 'O site está fora do ar (ERRO 404)!';
		} else {
			echo 'Olha o site aí... vai na fé djow';
		}
		echo $resultado;
		curl_close($cURL);
		/*echo $a;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $a);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$output = curl_exec($ch);
		echo $output;
		/*$response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		echo $response_code;
		if ($response_code == ’404′) {
			echo 'O site digitado não existe!';
		}
		else { 
			echo 'Vai na fé irmão';
		}*/
	}
 	$valor1=$_POST['nome'];
        verifica($valor1);
 ?>
</body>
</html>
