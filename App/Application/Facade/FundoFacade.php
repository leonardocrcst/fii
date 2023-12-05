<?php

namespace App\Application\Facade;

use App\Domain\Model\Fundo;
use App\Domain\Model\Repository\FundoRepository;

class FundoFacade
{
    public function __construct(
        protected FundoRepository $fundoRepository
    ) {
    }

    public function registrarFundo(
        string $sigla,
        float $valorCotaCaptacao,
        ?string $nome = null,
        ?string $url = null
    ): Fundo
    {
        $fundo = new Fundo($sigla, $valorCotaCaptacao);
        $fundo->setRepository($this->fundoRepository);
        if (!empty($nome)) {
            $fundo->setNome($nome);
        }
        if (!empty($url)) {
            $fundo->setSite($url);
        }
        $fundo->salvar();
        return $fundo;
    }
}
