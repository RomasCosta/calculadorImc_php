
    <?php

      echo "<h1>Calculadora de IMC!</h1>";

      //funcão para calcular o imc passado.
      function calculoImc ($peso, $altura) {
        return $peso / ($altura * $altura);

      }

      //variável para informar peso e altura
      $pesoInformado = 75;
      $alturaInformada = 1.75;
      calculoImc($peso, $altura);

      //chamada da função para informar o imc
      $imc = calculoImc($pesoInformado, $alturaInformada);
      echo 'O valor do imc é: ' . round($imc, 2);

      echo "<br>";
      
    

      $classificacao = [
       [ 'max' => 18.5,
        'classificador' => 'MAGREZA' 
      ],
        [
          'min' => 18.51,
        'max' => 24.9,
        'classificador' => 'SAUDÁVEL'
      ],
        [
          'min' => 25.0,
          'max' => 29.9,
          'classificador' => 'SOBREPESO'
        ],
        [
          'min' => 30.0,
          'max' => 34.9,
          'classificador' => 'OBESIDADE GRAU I'
        ],
        [
          'min' => 35.0,
          'max' => 39.9,
          'classificador' => 'OBESIDADE GRAU II'
        ],
        [
          'min' => 39.9,
          'classificador' => 'OBESIDADE GRAU III'
        ]
    ];

        for($i = 0; $i < sizeof($classificacao); $i++) {

          if($imc >= $classificacao[$i]['max']) {
            $mensagem = $classificacao[$i]['classificador'];
          } elseif($imc >= $classificacao[$i]['min'] && $imc <= $classificacao[$i]['max']) {
            $mensagem = $classificacao[$i]['classificador'];
            break;
          } elseif ($imc <= $classificacao[$i]['max']) {
            $mensagem = $classificacao['i']['classificador'];
            break;
          }
        };
            echo 'O valor do seu IMC é: ' . round($imc, 2) . ' e está na classificação: ' . $mensagem;
    ?>
