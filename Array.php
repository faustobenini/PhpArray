<?php

/* 
 * Array em PHP - Estudo, Exemplos, melhores práticas
 * Autor : Fausto Benini
 * Conceito de Array em PHP : Um array no PHP é atualmente um mapa ordenado. Um mapa é um tipo 
 * que relaciona valores a chaves. Este tipo é otimizado de várias maneiras, então você pode
 * usá-lo como um array, ou uma lista (vetor), hashtable (que é uma implementação de mapa), 
 * dicionário, coleção, pilha, fila e provavelmente mais. Assim como existe a possibilidade 
 * dos valores do array serem outro array, árvores e arrays multidimensionais.
 * fonte: http://br.php.net/manual/pt_BR/language.types.array.php
 */


/*
 * Sintaxe : Especificando com Array()
 * Um array pode ser criado com o construtor de linguagem array(). Ele leva 
 * qualquer quantidade de pares separados por vírgula chave => valor como argumentos.
 * 
 */

// Exemplo de array em os pares chave => valor estão trocados

    $array1 = array(
        "foo" => "bar",
        "bar" => "foo",
    );
    
// Nova maneira de declarar arrays apartir do php 5.4
    
    $array2 = [
        "foo" => "bar",
        "bar" => "foo",
    ];

/*
 * A chave pode ser um inteiro ou um string. O valor pode ser de qualquer tipo
 * Strings contendo inteiros válidos, serão convertidos para o tipo inteiro. 
 * Por exemplo, a chave"8" será, na verdade, armazenada como 8. Entretanto, "08" não será convertido,
 * por não ser um inteiro decimal válido.
 * Floats também são convertidos para inteiros, isso significa que a parte fracionada será removida. 
 * Por exemplo, a chave 8.7 será na verdade armazenada como 8.
 * Booleanos são convertidos para inteiros, igualmente, por exemplo, a chave true, 
 * será na verdade armazenada como 1 e a chave false como 0.
 * Null será convertido para uma string vazia, por exemplo, a chave null na verdade será armazenada como "".
 * Arrays e objetos não podem ser usados como chaves. Fazer isso resultará em um aviso: Illegal offset type.
 * Se vários elementos na declaração do array utilizam a mesma chave, apenas o último será utilizado, 
 * enquanto todos os outros serão sobrescritos.
 */
    
/* exemplo de conversão de tipo e sobrescrita : em seguencia atribuições vao sobrescrevendo
 * atribuições interios e das chaves floats são utilizados somente as partes inteiras e das 
 * chaves booleana há conforme acima uma conversao.
 */
    
    $array3 = array(
        1    => "a",
        "1"  => "b",
        1.5  => "c",
        true => "d",
    );

    
/* exemplos de array que misturam inteiro e string   
 * 
 */ 
    
    $array4 = ["foo" => "bar",
        "bar" => "foo",
        100   => -100,
        -100  => 100,
    ];
    
/*array indexada sem chaves
 * 
 */
   
    $array5 = ["foo", "bar", "hello", "world"];
    
/*array com chaves em alguns elementos
 * 
 */
    $array6 = ["a", "b", 6 => "c", "d"];    
    
/* Acessando elementos de um array com colchetes
 * 
 */
    
    $array7 = [
        "foo" => "bar", 
        42 => 24, 
        "multi" => [
            "dimencional" => ["array" => "foo"]
        ]
    ];