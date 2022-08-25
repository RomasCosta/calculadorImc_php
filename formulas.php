$classif = array(
        "magreza" => 18.5,
        "Saudavel" => 24.9,
        "Sobrepeso" => 29.9,
        "Obesidade Grau I" => 34.9,
        "Obesidade Grau II" => 35.0,
        "Obesidade Grau III" => 39.9 
        );

        foreach($classif as $campo => $valor) {
          if($imc <= 18.5) {
            echo "$campo <br>";
        }elseif ($imc >= 18.51 && $imc <=24.9) {
          echo "$campo <br>";

      }
    }
        