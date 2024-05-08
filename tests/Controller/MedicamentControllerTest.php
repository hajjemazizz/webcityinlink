<?php

namespace App\Test\Controller;

use App\Entity\Medicament;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MedicamentControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $repository;
    private string $path = '/medicament/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->repository = $this->manager->getRepository(Medicament::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Medicament index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'medicament[nom]' => 'Testing',
            'medicament[description]' => 'Testing',
            'medicament[prix]' => 'Testing',
            'medicament[type]' => 'Testing',
            'medicament[idPharmacie]' => 'Testing',
        ]);

        self::assertResponseRedirects('/sweet/food/');

        self::assertSame(1, $this->getRepository()->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Medicament();
        $fixture->setNom('My Title');
        $fixture->setDescription('My Title');
        $fixture->setPrix('My Title');
        $fixture->setType('My Title');
        $fixture->setIdPharmacie('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Medicament');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Medicament();
        $fixture->setNom('Value');
        $fixture->setDescription('Value');
        $fixture->setPrix('Value');
        $fixture->setType('Value');
        $fixture->setIdPharmacie('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'medicament[nom]' => 'Something New',
            'medicament[description]' => 'Something New',
            'medicament[prix]' => 'Something New',
            'medicament[type]' => 'Something New',
            'medicament[idPharmacie]' => 'Something New',
        ]);

        self::assertResponseRedirects('/medicament/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getNom());
        self::assertSame('Something New', $fixture[0]->getDescription());
        self::assertSame('Something New', $fixture[0]->getPrix());
        self::assertSame('Something New', $fixture[0]->getType());
        self::assertSame('Something New', $fixture[0]->getIdPharmacie());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Medicament();
        $fixture->setNom('Value');
        $fixture->setDescription('Value');
        $fixture->setPrix('Value');
        $fixture->setType('Value');
        $fixture->setIdPharmacie('Value');

        $this->manager->remove($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/medicament/');
        self::assertSame(0, $this->repository->count([]));
    }
}
