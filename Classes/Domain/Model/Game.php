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
 * Game
 */
class Game extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * publishingDate
     *
     * @var \DateTime
     */
    protected $publishingDate = null;

    /**
     * price
     *
     * @var float
     */
    protected $price = 0.0;

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * linkToSteam
     *
     * @var string
     */
    protected $linkToSteam = '';

    /**
     * officialWebsite
     *
     * @var string
     */
    protected $officialWebsite = '';

    /**
     * artwork
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $artwork = null;

    /**
     * screenshots
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $screenshots = null;

    /**
     * score
     *
     * @var int
     */
    protected $score = 0;

    /**
     * multiplayer
     *
     * @var bool
     */
    protected $multiplayer = false;

    /**
     * cpu
     *
     * @var string
     */
    protected $cpu = '';

    /**
     * gpu
     *
     * @var string
     */
    protected $gpu = '';

    /**
     * ram
     *
     * @var string
     */
    protected $ram = '';

    /**
     * diskspace
     *
     * @var float
     */
    protected $diskspace = 0.0;

    /**
     * os
     *
     * @var string
     */
    protected $os = '';

    /**
     * genre
     *
     * @var \MichaelEder\Games\Domain\Model\Genre
     */
    protected $genre = null;

    /**
     * characters
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MichaelEder\Games\Domain\Model\Character>
     */
    protected $characters = null;

    /**
     * publisher
     *
     * @var \MichaelEder\Games\Domain\Model\Publisher
     */
    protected $publisher = null;

    /**
     * usk
     *
     * @var \MichaelEder\Games\Domain\Model\USK
     */
    protected $usk = null;

    /**
     * __construct
     */
    public function __construct()
    {

        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    public function initializeObject()
    {
        $this->screenshots = $this->screenshots ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->characters = $this->characters ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the publishingDate
     *
     * @return \DateTime $publishingDate
     */
    public function getPublishingDate()
    {
        return $this->publishingDate;
    }

    /**
     * Sets the publishingDate
     *
     * @param \DateTime $publishingDate
     * @return void
     */
    public function setPublishingDate(\DateTime $publishingDate)
    {
        $this->publishingDate = $publishingDate;
    }

    /**
     * Returns the price
     *
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the price
     *
     * @param float $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the linkToSteam
     *
     * @return string $linkToSteam
     */
    public function getLinkToSteam()
    {
        return $this->linkToSteam;
    }

    /**
     * Sets the linkToSteam
     *
     * @param string $linkToSteam
     * @return void
     */
    public function setLinkToSteam($linkToSteam)
    {
        $this->linkToSteam = $linkToSteam;
    }

    /**
     * Returns the officialWebsite
     *
     * @return string $officialWebsite
     */
    public function getOfficialWebsite()
    {
        return $this->officialWebsite;
    }

    /**
     * Sets the officialWebsite
     *
     * @param string $officialWebsite
     * @return void
     */
    public function setOfficialWebsite($officialWebsite)
    {
        $this->officialWebsite = $officialWebsite;
    }

    /**
     * Returns the artwork
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $artwork
     */
    public function getArtwork()
    {
        return $this->artwork;
    }

    /**
     * Sets the artwork
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $artwork
     * @return void
     */
    public function setArtwork(\TYPO3\CMS\Extbase\Domain\Model\FileReference $artwork)
    {
        $this->artwork = $artwork;
    }

    /**
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $screenshot
     * @return void
     */
    public function addScreenshot(\TYPO3\CMS\Extbase\Domain\Model\FileReference $screenshot)
    {
        $this->screenshots->attach($screenshot);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $screenshotToRemove The FileReference to be removed
     * @return void
     */
    public function removeScreenshot(\TYPO3\CMS\Extbase\Domain\Model\FileReference $screenshotToRemove)
    {
        $this->screenshots->detach($screenshotToRemove);
    }

    /**
     * Returns the screenshots
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $screenshots
     */
    public function getScreenshots()
    {
        return $this->screenshots;
    }

    /**
     * Sets the screenshots
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $screenshots
     * @return void
     */
    public function setScreenshots(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $screenshots)
    {
        $this->screenshots = $screenshots;
    }

    /**
     * Returns the score
     *
     * @return int $score
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Sets the score
     *
     * @param int $score
     * @return void
     */
    public function setScore($score)
    {
        $this->score = $score;
    }

    /**
     * Returns the multiplayer
     *
     * @return bool $multiplayer
     */
    public function getMultiplayer()
    {
        return $this->multiplayer;
    }

    /**
     * Sets the multiplayer
     *
     * @param bool $multiplayer
     * @return void
     */
    public function setMultiplayer($multiplayer)
    {
        $this->multiplayer = $multiplayer;
    }

    /**
     * Returns the boolean state of multiplayer
     *
     * @return bool
     */
    public function isMultiplayer()
    {
        return $this->multiplayer;
    }

    /**
     * Returns the cpu
     *
     * @return string $cpu
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * Sets the cpu
     *
     * @param string $cpu
     * @return void
     */
    public function setCpu($cpu)
    {
        $this->cpu = $cpu;
    }

    /**
     * Returns the gpu
     *
     * @return string $gpu
     */
    public function getGpu()
    {
        return $this->gpu;
    }

    /**
     * Sets the gpu
     *
     * @param string $gpu
     * @return void
     */
    public function setGpu($gpu)
    {
        $this->gpu = $gpu;
    }

    /**
     * Returns the ram
     *
     * @return string $ram
     */
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * Sets the ram
     *
     * @param string $ram
     * @return void
     */
    public function setRam($ram)
    {
        $this->ram = $ram;
    }

    /**
     * Returns the diskspace
     *
     * @return float $diskspace
     */
    public function getDiskspace()
    {
        return $this->diskspace;
    }

    /**
     * Sets the diskspace
     *
     * @param float $diskspace
     * @return void
     */
    public function setDiskspace($diskspace)
    {
        $this->diskspace = $diskspace;
    }

    /**
     * Returns the os
     *
     * @return string $os
     */
    public function getOs()
    {
        return $this->os;
    }

    /**
     * Sets the os
     *
     * @param string $os
     * @return void
     */
    public function setOs($os)
    {
        $this->os = $os;
    }

    /**
     * Returns the genre
     *
     * @return \MichaelEder\Games\Domain\Model\Genre $genre
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Sets the genre
     *
     * @param \MichaelEder\Games\Domain\Model\Genre $genre
     * @return void
     */
    public function setGenre(\MichaelEder\Games\Domain\Model\Genre $genre)
    {
        $this->genre = $genre;
    }

    /**
     * Adds a Character
     *
     * @param \MichaelEder\Games\Domain\Model\Character $character
     * @return void
     */
    public function addCharacter(\MichaelEder\Games\Domain\Model\Character $character)
    {
        $this->characters->attach($character);
    }

    /**
     * Removes a Character
     *
     * @param \MichaelEder\Games\Domain\Model\Character $characterToRemove The Character to be removed
     * @return void
     */
    public function removeCharacter(\MichaelEder\Games\Domain\Model\Character $characterToRemove)
    {
        $this->characters->detach($characterToRemove);
    }

    /**
     * Returns the characters
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MichaelEder\Games\Domain\Model\Character> $characters
     */
    public function getCharacters()
    {
        return $this->characters;
    }

    /**
     * Sets the characters
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\MichaelEder\Games\Domain\Model\Character> $characters
     * @return void
     */
    public function setCharacters(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $characters)
    {
        $this->characters = $characters;
    }

    /**
     * Returns the publisher
     *
     * @return \MichaelEder\Games\Domain\Model\Publisher $publisher
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Sets the publisher
     *
     * @param \MichaelEder\Games\Domain\Model\Publisher $publisher
     * @return void
     */
    public function setPublisher(\MichaelEder\Games\Domain\Model\Publisher $publisher)
    {
        $this->publisher = $publisher;
    }

    /**
     * Returns the usk
     *
     * @return \MichaelEder\Games\Domain\Model\USK $usk
     */
    public function getUsk()
    {
        return $this->usk;
    }

    /**
     * Sets the usk
     *
     * @param \MichaelEder\Games\Domain\Model\USK $usk
     * @return void
     */
    public function setUsk(\MichaelEder\Games\Domain\Model\USK $usk)
    {
        $this->usk = $usk;
    }
}
