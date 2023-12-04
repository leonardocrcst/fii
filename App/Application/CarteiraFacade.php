<?php

namespace App\Application;

use App\Domain\Model\Carteira;
use App\Domain\Model\Fundo;
use App\Domain\Model\Repository\CarteiraRepository;
use DateTime;

class CarteiraFacade
{
    public function __construct(
        protected CarteiraRepository $carteiraRepository,
        protected ?Carteira $carteira = new Carteira()
    ) {
    }

    /**
     * Adiciona um fundo de investimento na carteira
     * @param Fundo $fundo
     * @param int $quantidade
     * @param float $valorCota
     * @param DateTime $dataLancamento
     * @return float
     */
    public function adicionarFundo(
        Fundo $fundo,
        int $quantidade,
        float $valorCota,
        DateTime $dataLancamento
    ): float {
        $this->carteira->adicionarFundo($fundo, $quantidade, $valorCota, $dataLancamento);
        return $this->pegarInvestimentoTotal();
    }

    /**
     * Remove um fundo de investimento da carteira
     * @param Fundo $fundo Fundo de investimento
     * @param int $quantidade Quantidade a ser removida
     * @param float $valorCota Valor de venda da cota
     * @param ?DateTime $dataRemocao (opcional) Data do lançamento
     * @return float
     */
    public function removerFundo(
        Fundo $fundo,
        int $quantidade,
        float $valorCota,
        ?DateTime $dataRemocao = null
    ): float {
        $this->carteira->removerFundo($fundo, $quantidade, $valorCota, $dataRemocao);
        return $this->pegarInvestimentoTotal();
    }

    /**
     * @param DateTime|null $inicio (opcional) Data inicial
     * @param DateTime|null $fim (opcional) Data final
     * @param Fundo|null $fundo (opcional) Fundo
     * @return float
     */
    public function pegarInvestimentoTotal(?DateTime $inicio = null, ?DateTime $fim = null, ?Fundo $fundo = null): float
    {
        return 0.0;
    }
}
