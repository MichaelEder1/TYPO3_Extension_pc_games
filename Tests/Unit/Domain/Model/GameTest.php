<?php
declare(strict_types=1);

namespace MichaelEder\Games\Tests\Unit\Domain\Model;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Michael Eder 
 */
class GameTest extends UnitTestCase
{
    /**
     * @var \MichaelEder\Games\Domain\Model\Game
     */
    protected $subject;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \MichaelEder\Games\Domain\Model\Game();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPublishingDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getPublishingDate()
        );
    }

    /**
     * @test
     */
    public function setPublishingDateForDateTimeSetsPublishingDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setPublishingDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'publishingDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPriceReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPrice()
        );
    }

    /**
     * @test
     */
    public function setPriceForFloatSetsPrice()
    {
        $this->subject->setPrice(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'price',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLinkToSteamReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLinkToSteam()
        );
    }

    /**
     * @test
     */
    public function setLinkToSteamForStringSetsLinkToSteam()
    {
        $this->subject->setLinkToSteam('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'linkToSteam',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getOfficialWebsiteReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOfficialWebsite()
        );
    }

    /**
     * @test
     */
    public function setOfficialWebsiteForStringSetsOfficialWebsite()
    {
        $this->subject->setOfficialWebsite('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'officialWebsite',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getArtworkReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getArtwork()
        );
    }

    /**
     * @test
     */
    public function setArtworkForFileReferenceSetsArtwork()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setArtwork($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'artwork',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getScreenshotsReturnsInitialValueForFileReference()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getScreenshots()
        );
    }

    /**
     * @test
     */
    public function setScreenshotsForFileReferenceSetsScreenshots()
    {
        $screenshot = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $objectStorageHoldingExactlyOneScreenshots = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneScreenshots->attach($screenshot);
        $this->subject->setScreenshots($objectStorageHoldingExactlyOneScreenshots);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneScreenshots,
            'screenshots',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addScreenshotToObjectStorageHoldingScreenshots()
    {
        $screenshot = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $screenshotsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $screenshotsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($screenshot));
        $this->inject($this->subject, 'screenshots', $screenshotsObjectStorageMock);

        $this->subject->addScreenshot($screenshot);
    }

    /**
     * @test
     */
    public function removeScreenshotFromObjectStorageHoldingScreenshots()
    {
        $screenshot = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $screenshotsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $screenshotsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($screenshot));
        $this->inject($this->subject, 'screenshots', $screenshotsObjectStorageMock);

        $this->subject->removeScreenshot($screenshot);
    }

    /**
     * @test
     */
    public function getScoreReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getScore()
        );
    }

    /**
     * @test
     */
    public function setScoreForIntSetsScore()
    {
        $this->subject->setScore(12);

        self::assertAttributeEquals(
            12,
            'score',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMultiplayerReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getMultiplayer()
        );
    }

    /**
     * @test
     */
    public function setMultiplayerForBoolSetsMultiplayer()
    {
        $this->subject->setMultiplayer(true);

        self::assertAttributeEquals(
            true,
            'multiplayer',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCpuReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getCpu()
        );
    }

    /**
     * @test
     */
    public function setCpuForStringSetsCpu()
    {
        $this->subject->setCpu('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'cpu',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGpuReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getGpu()
        );
    }

    /**
     * @test
     */
    public function setGpuForStringSetsGpu()
    {
        $this->subject->setGpu('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'gpu',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRamReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRam()
        );
    }

    /**
     * @test
     */
    public function setRamForStringSetsRam()
    {
        $this->subject->setRam('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'ram',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDiskspaceReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getDiskspace()
        );
    }

    /**
     * @test
     */
    public function setDiskspaceForFloatSetsDiskspace()
    {
        $this->subject->setDiskspace(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'diskspace',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getOsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getOs()
        );
    }

    /**
     * @test
     */
    public function setOsForStringSetsOs()
    {
        $this->subject->setOs('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'os',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGenreReturnsInitialValueForGenre()
    {
        self::assertEquals(
            null,
            $this->subject->getGenre()
        );
    }

    /**
     * @test
     */
    public function setGenreForGenreSetsGenre()
    {
        $genreFixture = new \MichaelEder\Games\Domain\Model\Genre();
        $this->subject->setGenre($genreFixture);

        self::assertAttributeEquals(
            $genreFixture,
            'genre',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCharactersReturnsInitialValueForCharacter()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getCharacters()
        );
    }

    /**
     * @test
     */
    public function setCharactersForObjectStorageContainingCharacterSetsCharacters()
    {
        $character = new \MichaelEder\Games\Domain\Model\Character();
        $objectStorageHoldingExactlyOneCharacters = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneCharacters->attach($character);
        $this->subject->setCharacters($objectStorageHoldingExactlyOneCharacters);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneCharacters,
            'characters',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addCharacterToObjectStorageHoldingCharacters()
    {
        $character = new \MichaelEder\Games\Domain\Model\Character();
        $charactersObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $charactersObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($character));
        $this->inject($this->subject, 'characters', $charactersObjectStorageMock);

        $this->subject->addCharacter($character);
    }

    /**
     * @test
     */
    public function removeCharacterFromObjectStorageHoldingCharacters()
    {
        $character = new \MichaelEder\Games\Domain\Model\Character();
        $charactersObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $charactersObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($character));
        $this->inject($this->subject, 'characters', $charactersObjectStorageMock);

        $this->subject->removeCharacter($character);
    }

    /**
     * @test
     */
    public function getPublisherReturnsInitialValueForPublisher()
    {
        self::assertEquals(
            null,
            $this->subject->getPublisher()
        );
    }

    /**
     * @test
     */
    public function setPublisherForPublisherSetsPublisher()
    {
        $publisherFixture = new \MichaelEder\Games\Domain\Model\Publisher();
        $this->subject->setPublisher($publisherFixture);

        self::assertAttributeEquals(
            $publisherFixture,
            'publisher',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getUskReturnsInitialValueForUSK()
    {
        self::assertEquals(
            null,
            $this->subject->getUsk()
        );
    }

    /**
     * @test
     */
    public function setUskForUSKSetsUsk()
    {
        $uskFixture = new \MichaelEder\Games\Domain\Model\USK();
        $this->subject->setUsk($uskFixture);

        self::assertAttributeEquals(
            $uskFixture,
            'usk',
            $this->subject
        );
    }
}
