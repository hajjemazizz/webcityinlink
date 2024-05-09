<?php

namespace App\Controller;

use App\Entity\Pharmacie;
use App\Form\PharmacieType;
use App\Form\ReclamationType;
use App\Repository\MedicamentRepository;
use App\Repository\PharmacieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Endroid\QrCode\Builder\BuilderInterface;
use Endroid\QrCode\Writer\Result\PngResult;
// use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



#[Route('/pharmacie')]
class PharmacieController extends AbstractController
{
    private $qrCodeBuilder;

    public function __construct(BuilderInterface $qrCodeBuilder)
    {
        $this->qrCodeBuilder = $qrCodeBuilder;
    }
    private function convertQrCodeResultToString(PngResult $qrCodeResult): string
    {
        // Convert the result to a string (e.g., base64 encode the image)
        // Adjust this logic based on how you want to represent the QR code data
        return 'data:image/png;base64,' . base64_encode($qrCodeResult->getString());
    }
    #[Route('/', name: 'app_pharmacie_index', methods: ['GET'])]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $queryBuilder = $entityManager->getRepository(Pharmacie::class)->findAll();


        return $this->render('pharmacie/index.html.twig',
            [
                'pharmacies' => $queryBuilder,
            ]);
    }

    #[Route('/new', name: 'app_pharmacie_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $pharmacie = new Pharmacie();
        $form = $this->createForm(PharmacieType::class, $pharmacie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($pharmacie);
            $entityManager->flush();

            return $this->redirectToRoute('app_pharmacie_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pharmacie/new.html.twig', [
            'pharmacie' => $pharmacie,
            'form' => $form,
        ]);
    }
    
  
    #[Route('/pharmacie/{id}/medicaments', name: 'show_medicaments')]
    public function showMedicaments(int $id, MedicamentRepository $medicamentRepository, PharmacieRepository $pharmacieRepository): Response
    {
        $pharmacie = $pharmacieRepository->find($id);
        if (!$pharmacie) {
            throw $this->createNotFoundException('The pharmacy does not exist');
        }

        $medicaments = $medicamentRepository->findBy(['idPharmacie' => $id]);
        foreach ($medicaments as $medicament) {
            // Check if $this->qrCodeBuilder is not null
            if ($this->qrCodeBuilder !== null) {
                // Customize the QR code data
                $qrCodeResult = $this->qrCodeBuilder
                    ->data($medicament->getNom())
                    ->build();

                // Convert the QR code result to a string representation
                $qrCodeString = $this->convertQrCodeResultToString($qrCodeResult);

                // Add the QR code string to the article entity
                $medicament->setQrCode($qrCodeString);
            }
        }
        return $this->render('medicaments.html.twig', [
            'pharmacie' => $pharmacie,
            'medicaments' => $medicaments
        ]);
    }
    #[Route('/search', name: 'app_pharmacie_search', methods: ['GET'])]
    public function search(Request $request, EntityManagerInterface $entityManager): Response
    {
        $searchTerm = $request->query->get('term', '');
        $pharmacies = $entityManager->getRepository(Pharmacie::class)->findByTerm($searchTerm);
    
        
    
        return $this->render('pharmacie/index.html.twig',[
            "pharmacies " =>  $pharmacies
        ]);
    }
    

    #[Route('/{idPharmacie}', name: 'app_pharmacie_show', methods: ['GET'])]
    public function show(Pharmacie $pharmacie): Response
    {
        return $this->render('pharmacie/show.html.twig', [
            'pharmacie' => $pharmacie,
        ]);
    }

    #[Route('/{idPharmacie}/edit', name: 'app_pharmacie_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Pharmacie $pharmacie, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PharmacieType::class, $pharmacie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_pharmacie_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pharmacie/edit.html.twig', [
            'pharmacie' => $pharmacie,
            'form' => $form,
        ]);
    }

    #[Route('/{idPharmacie}', name: 'app_pharmacie_delete', methods: ['POST'])]
    public function delete(Request $request, Pharmacie $pharmacie, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $pharmacie->getIdPharmacie(), $request->request->get('_token'))) {
            $entityManager->remove($pharmacie);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_pharmacie_index', [], Response::HTTP_SEE_OTHER);
    }
    

}



