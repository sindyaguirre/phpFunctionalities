<?php

class Funcoes {

    /**
     * It receives a phrase or word and inverts the words of the phrase.
     * @param type $sentence
     * @return type
     */
    public function revertSentence($sentence) {
        $newWord = "";

        if ($sentence) {
            $arrayStr = explode(' ', $sentence);

            foreach ($arrayStr as $key => $value) {
                $newWord .= strrev($value) . " ";
            }
        }
        return trim($newWord);
    }

    /**
     * Function that encodes or decodes, converts entities string to utf8.
     * In the $ type parameter use:
     * 1 to utf8_decode,
     * 2 for utf8_encode,
     * 3 for htmlentities
     * @param type $vlr
     * @param type $tipo
     * @return type
     */
    public function tratarCaracter($vlr, $tipo) {
        switch ($tipo) {
            case 1: $rst = utf8_decode($vlr);
                break;
            case 2: $rst = utf8_encode($vlr);
                break;
            case 3: $rst = htmlentities($vlr, ENT_QUOTES, "ISO-8859-1");
                break;
        }
        return $rst;
    }

    /**
     * This function takes a string and returns the amount of palindromes substrings.
     * @param type $string
     * @return int
     */
    public function quantityPalindromesSubstrings($string) {

        $string = $this->replaceString($string);
        $arrayStr = explode(' ', trim($string));
        $count = 0;
        foreach ($arrayStr as $key => $value) {
            if ($value == strrev($value)) {
                $count++;
            }
        }
        return $count;
    }

    /**
     * Removes points and special characters.
     * @param type $string
     * @return type
     */
    function replaceString($string) {

        $array = array(",", ".", "!", "@", "#", "$", "%", "¨",
            "&", "*", "(", ")", "_", "+", "=", "-", ">", "<", "/", "?", "|", "\\", ";", ":");
        $result = str_replace($array, "", $string);
        return $result;
    }

}
