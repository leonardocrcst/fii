<?php

namespace Domain\Model;

use App\Domain\Model\Fundo;
use PHPUnit\Framework\TestCase;

class FundoTest extends TestCase
{
    public static function dataFundoProvider(): array
    {
        return [
            [
                'MCHF11',
                8.69,
                null,
                null
            ],
            [
                'BTCI11',
                9.13,
                'BTG PACTUAL FUNDO DE CRI',
                'https://www.btgpactual.com/asset-management/fundos-listados/BTCI11'
            ]
        ];
    }

    /**
     * @dataProvider dataFundoProvider
     * @param string $sigla
     * @param float $valorCotaCaptacao
     * @param string|null $nome
     * @param string|null $site
     * @return void
     */
    public function testItCreateFundo(
        string $sigla,
        float $valorCotaCaptacao,
        ?string $nome = null,
        ?string $site = null
    )
    {
        $fundo = new Fundo($sigla, $valorCotaCaptacao);
        $fundo
            ->setNome($nome)
            ->setSite($site);
        $this->assertEquals($sigla, $fundo->getSigla());
        $this->assertEquals($valorCotaCaptacao, $fundo->getValorCotaCaptacao());
        $this->assertEquals($nome, $fundo->getNome());
        $this->assertEquals($site, $fundo->getSite());
    }
}
