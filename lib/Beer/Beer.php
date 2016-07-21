<?php
namespace rauhkrusche\BeerPHP;
class Beer
{
    private $alphabet = array('q', 'w', 'e', 'r', 't', 'z', 'u', 'i', 'o', 'p', 'a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'y', 'x', 'c', 'v', 'b', 'n', 'm');
    public function serialize($input)
    {
        $input = str_replace('.', 'BEER-BEER∫', $input);
        $input = str_replace(',', 'BEER_BEER∫', $input);

        for ($i = 0; $i < count($this->alphabet); $i++) {
            if (!in_array($this->alphabet[$i], array('b', 'e', 'r'))) {
                $input = str_replace(strtoupper($this->alphabet[$i]), $this->repeatString('∫', 'µ', $i), $input);
            }
            $input = str_replace($this->alphabet[$i], $this->repeatString('∫', 'BEER', $i), $input);

        }
        return $input;
    }

    public function deserialize($input)
    {
        $input = str_replace('BEER-BEER∫', '.', $input);
        $input = str_replace('BEER_BEER∫', ',', $input);

        for ($i = count($this->alphabet) - 1; $i >= 0; $i--) {
            if (!in_array($this->alphabet[$i], array('b', 'e', 'r'))) {
                $input = str_replace($this->repeatString('∫', 'µ', $i), strtoupper($this->alphabet[$i]), $input);
            }
            $input = str_replace($this->repeatString('∫', 'BEER', $i), $this->alphabet[$i], $input);

        }
        return $input;
    }

    private function repeatString($finalChar, $stringToRepeat, $count)
    {
        $result = $stringToRepeat;
        for ($i = 0; $i < $count; $i++) {
            $result .= $stringToRepeat;
        }
        return $result . $finalChar;
    }
}