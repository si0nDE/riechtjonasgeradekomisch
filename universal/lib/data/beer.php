<?php
function beer($input)
{
    $q = str_replace("q", "BEER∫", $input);
    $w = str_replace("w", "BEERBEER∫", $q);
    $e = str_replace("e", "BEERBEERBEER∫", $w);
    $r = str_replace("r", "BEERBEERBEERBEER∫", $e);
    $t = str_replace("t", "BEERBEERBEERBEERBEER∫", $r);
    $z = str_replace("z", "BEERBEERBEERBEERBEERBEER∫", $t);
    $u = str_replace("u", "BEERBEERBEERBEERBEERBEERBEER∫", $z);
    $i = str_replace("i", "BEERBEERBEERBEERBEERBEERBEERBEER∫", $u);
    $o = str_replace("o", "BEERBEERBEERBEERBEERBEERBEERBEERBEER∫", $i);
    $p = str_replace("p", "BEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫", $o);

    $a = str_replace("a", "BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫", $p);
    $s = str_replace("s", "BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫", $a);
    $d = str_replace("d", "BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫", $s);
    $f = str_replace("f", "BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫", $d);
    $g = str_replace("g", "BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫", $f);
    $h = str_replace("h", "BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫", $g);
    $j = str_replace("j", "BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫", $h);
    $k = str_replace("k", "BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫", $j);
    $l = str_replace("l", "BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫", $k);

    $y = str_replace("y", "BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫", $l);
    $x = str_replace("x", "BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫", $y);
    $c = str_replace("c", "BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫", $x);
    $v = str_replace("v", "BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫", $c);
    $b = str_replace("b", "BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫", $v);
    $n = str_replace("n", "BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫", $b);
    $m = str_replace("m", "BEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEERBEER∫", $n);

    $point = str_replace(".", "BEER-BEER∫", $m);
    $commata = str_replace(",", "BEER_BEER∫", $point);

    $Q = str_replace("Q", "µ∫", $commata);
    $W = str_replace("W", "µµ∫", $Q);
//$E  =   str_replace("E","µµµ∫",$W);
//$R  =   str_replace("R","µµµµ∫",$E);
    $T = str_replace("T", "µµµµµ∫", $W);
    $Z = str_replace("Z", "µµµµµµ∫", $T);
    $U = str_replace("U", "µµµµµµµ∫", $Z);
    $I = str_replace("I", "µµµµµµµµ∫", $U);
    $O = str_replace("O", "µµµµµµµµµ∫", $I);
    $P = str_replace("P", "µµµµµµµµµµ∫", $O);

    $A = str_replace("A", "µµµµµµµµµµµ∫", $P);
    $S = str_replace("S", "µµµµµµµµµµµµ∫", $A);
    $D = str_replace("D", "µµµµµµµµµµµµµ∫", $S);
    $F = str_replace("F", "µµµµµµµµµµµµµµ∫", $D);
    $G = str_replace("G", "µµµµµµµµµµµµµµµ∫", $F);
    $H = str_replace("H", "µµµµµµµµµµµµµµµµ∫", $G);
    $J = str_replace("J", "µµµµµµµµµµµµµµµµµ∫", $H);
    $K = str_replace("K", "µµµµµµµµµµµµµµµµµµ∫", $J);
    $L = str_replace("L", "µµµµµµµµµµµµµµµµµµµ∫", $K);

    $Y = str_replace("Y", "µµµµµµµµµµµµµµµµµµµµ∫", $L);
    $X = str_replace("X", "µµµµµµµµµµµµµµµµµµµµµ∫", $Y);
    $C = str_replace("C", "µµµµµµµµµµµµµµµµµµµµµµ∫", $X);
    $V = str_replace("V", "µµµµµµµµµµµµµµµµµµµµµµµ∫", $C);
//$B  =   str_replace("B","µµµµµµµµµµµµµµµµµµµµµµµµ∫",$V);
    $N = str_replace("N", "µµµµµµµµµµµµµµµµµµµµµµµµµ∫", $V);
    $M = str_replace("M", "µµµµµµµµµµµµµµµµµµµµµµµµµµ∫", $N);
    return $M;
}