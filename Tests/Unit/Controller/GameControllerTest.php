<?php
declare(strict_types=1);

namespace MichaelEder\Games\Tests\Unit\Controller;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Michael Eder 
 */
class GameControllerTest extends UnitTestCase
{
    /**
     * @var \MichaelEder\Games\Controller\GameController
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\MichaelEder\Games\Controller\GameController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllGamesFromRepositoryAndAssignsThemToView()
    {
        $allGames = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $gameRepository = $this->getMockBuilder(\MichaelEder\Games\Domain\Repository\GameRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $gameRepository->expects(self::once())->method('findAll')->will(self::returnValue($allGames));
        $this->inject($this->subject, 'gameRepository', $gameRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('games', $allGames);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenGameToView()
    {
        $game = new \MichaelEder\Games\Domain\Model\Game();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('game', $game);

        $this->subject->showAction($game);
    }
}
