<?php

namespace Galoa\ExerciciosPhp\TextWrap;

/**
 * Implemente sua resolução aqui.
 */
    <?php
        function quebra(&$texto, &$comprim){
            $caract = explode(" ", $texto, $comprim);
            for($i = 0; $i < $comprim; $i++){
                echo "$caract[$i]<br/>";
            }
        }

        $text = 'Define uma interface para o exercício de quebra de linha.';
        $length = 2;
        quebra($text,$length);
    ?>

class Resolucao implements TextWrapInterface {

  /**
   * {@inheritdoc}
   */
  public function textWrap(string $text, int $length): array {
    return [""];
  }

}
