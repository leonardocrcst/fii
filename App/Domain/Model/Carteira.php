<?php

namespace App\Domain\Model;

use DateTime;

class Carteira
{
    /**
     * @var Lancamento[]
     */
    protected array $lancamentos = [];

    public function adicionarFundo(Fundo $fundo, int $quantidade, float $valorCota, ?DateTime $dataLancamento = null): Lancamento
    {
        $lancamento = new Lancamento($fundo, $quantidade, $valorCota, $dataLancamento);
        $this->lancamentos[] = $lancamento;
        return $lancamento;
    }

    public function removerFundo(Fundo $fundo, int $quantidade, float $valorCota, ?DateTime $dataLancamento = null): Lancamento
    {
        $lancamento = new Lancamento($fundo, -1 * $quantidade, $valorCota, $dataLancamento);
        $this->lancamentos[] = $lancamento;
        return $lancamento;
    }

    /**
     * @param DateTime $inicio
     * @param DateTime $fim
     * @param Fundo|null $fundo
     * @return Lancamento[]
     */
    public function listarFundos(DateTime $inicio, DateTime $fim, ?Fundo $fundo = null): array
    {
        return array_filter($this->lancamentos,
            function (Lancamento $lancamento) use ($inicio, $fim, $fundo) {
                if ($lancamento->getDataLancamento() >= $inicio && $lancamento->getDataLancamento() <= $fim && (is_null($fundo) || $fundo->getSigla() == $lancamento->getFundo()->getSigla())) {
                    return $lancamento;
                }
                return false;
            });
    }
}
