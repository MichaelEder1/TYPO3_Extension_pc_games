<?php

declare(strict_types=1);

namespace MichaelEder\Games\Domain\Model;


/**
 * This file is part of the "PC Games" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Michael Eder
 */

/**
 * USK
 */
class USK extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * age
     *
     * @var int
     */
    protected $age = 0;

    /**
     * Returns the age
     *
     * @return int $age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets the age
     *
     * @param int $age
     * @return void
     */
    public function setAge($age)
    {
        $this->age = $age;
    }
}
