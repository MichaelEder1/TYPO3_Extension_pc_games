<?php

    declare(strict_types=1);

    namespace MichaelEder\Games\Domain\Repository;


    /**
     * This file is part of the "PC Games" Extension for TYPO3 CMS.
     *
     * For the full copyright and license information, please read the
     * LICENSE.txt file that was distributed with this source code.
     *
     * (c) 2021 Michael Eder
     */

    /**
     * The repository for Games
     */
    class GameRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
    {
        public function findGenre()
        {
            $query = $this->createQuery();
            $query->matching(
                $query->equals('genre.name', "FPS"));
            return $query->execute();
        }

        public function findPublisher()
        {
            $query = $this->createQuery();
            $query->matching(
                $query->equals('publisher.name', "Ubisoft"));
            return $query->execute();
        }

        public function findCheapest()
        {
            $query = $this->createQuery();
            $query->matching(
                $query->lessThanOrEqual('price', 30));
            return $query->execute();
        }
    }
