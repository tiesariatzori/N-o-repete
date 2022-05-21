<?php
	public function naoRepete($inicio = 0, $fim = 20, $valorAleatorioInicio = 1, $valorAleatorioFim = 10)
    {

        $mensagem = 'Valores Não Repetidos : ';

        if ($inicio > $fim || $valorAleatorioInicio > $valorAleatorioFim) {
            return 'Por favor informe Valor inicial maior que o Final!';
        }

        $arrayAleatorio = [];

        for ($i = $inicio; $i <= $fim; $i++) {
            $arrayAleatorio [] = rand($valorAleatorioInicio, $valorAleatorioFim);
        }

        $arrayRepetidos = array_unique($arrayAleatorio, SORT_REGULAR);
        $arrayUnicos    = [];

        foreach ($arrayRepetidos as $repetido) {
            $contador = 0;

            foreach ($arrayAleatorio as $aleatorio) {

                if ($repetido == $aleatorio) {
                    $contador++;
                }
            }
            if ($contador == 1) {
                $arrayUnicos[] = $repetido;
            }
        }

        if (isset($arrayUnicos)) {

            foreach ($arrayUnicos as $unico) {
                $mensagem .= $unico . ',';
            }
        }

        return $mensagem;
    }
?>