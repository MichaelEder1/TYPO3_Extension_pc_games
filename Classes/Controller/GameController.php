<?php

declare(strict_types=1);

namespace MichaelEder\Games\Controller;


/**
 * This file is part of the "PC Games" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Michael Eder
 */

/**
 * GameController
 */
class GameController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * gameRepository
     *
     * @var \MichaelEder\Games\Domain\Repository\GameRepository
     */
    protected $gameRepository = null;

    /**
     * @param \MichaelEder\Games\Domain\Repository\GameRepository $gameRepository
     */
    public function injectGameRepository(\MichaelEder\Games\Domain\Repository\GameRepository $gameRepository)
    {
        $this->gameRepository = $gameRepository;
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $games = $this->gameRepository->findAll();
        $this->view->assign('games', $games);
    }

    /**
     * action show
     *
     * @param \MichaelEder\Games\Domain\Model\Game $game
     * @return string|object|null|void
     */
    public function showAction(\MichaelEder\Games\Domain\Model\Game $game)
    {
        $this->view->assign('game', $game);
    }

    /**
     * action genre
     *
     * @return string|object|null|void
     */
    public function genreAction()
    {
        $games = $this->gameRepository->findGenre();
        $this->view->assign('games', $games);
    }

    /**
     * action publisher
     *
     * @return string|object|null|void
     */
    public function publisherAction()
    {
        $games = $this->gameRepository->findPublisher();
        $this->view->assign('games', $games);
    }

    /**
     * action cheapest
     *
     * @return string|object|null|void
     */
    public function cheapestAction()
    {
        $games = $this->gameRepository->findCheapest();
        $this->view->assign('games', $games);
    }
}
