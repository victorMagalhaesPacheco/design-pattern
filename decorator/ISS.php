<?php

class ISS extends Imposto
{
    function __construct(Imposto $outroImposto = null)
    {
        parent::__construct($outroImposto);
    }

    public function calcula(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.06 + $this->calculaOutroImposto($orcamento);
    }
}