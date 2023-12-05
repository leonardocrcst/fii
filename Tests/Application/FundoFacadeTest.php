<?php

namespace Application;

use App\Application\Facade\FundoFacade;
use App\Domain\Model\Fundo;
use App\Domain\Model\Repository\FundoRepository;
use App\Domain\Repository\DatabaseManager;
use PHPUnit\Framework\TestCase;

class FundoFacadeTest extends TestCase
{
    protected FundoFacade $fundoFacade;

    public function setUp(): void
    {
        parent::setUp();
        $mock = $this
            ->getMockBuilder(DatabaseManager::class)
            ->disableOriginalConstructor()
            ->getMock();
        $fundoRepository = new FundoRepository($mock);
        $this->fundoFacade = new FundoFacade($fundoRepository);
    }

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
    public function testRegistrarFundo(
        string $sigla,
        float $valorCotaCaptacao,
        ?string $nome = null,
        ?string $site = null
    )
    {
        $fundoFacade = $this->fundoFacade;
        $fundo = $fundoFacade->registrarFundo($sigla, $valorCotaCaptacao, $nome, $site);
        $this->assertInstanceOf(Fundo::class, $fundo);
    }
}
