<?php

namespace App\Controller;

use App\Entity\Author;
use App\Repository\AuthorRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Context\Normalizer\ObjectNormalizerContextBuilder;

class AuthorController extends AbstractController
{
    #[Route('/api/authors', name: 'app_author')]
    public function getAllAuthors(AuthorRepository $authorRepository, SerializerInterface $serializerInterface): JsonResponse
    {
        $context = (new ObjectNormalizerContextBuilder())
        ->withGroups('getAuthor')
        ->toArray();

        $authors = $authorRepository->findAll();
        $AuthorsJson = $serializerInterface->serialize($authors, 'json', $context);
        
        return new JsonResponse($AuthorsJson, Response::HTTP_OK,[], true);
    }

    #[Route('/api/author/{id}', name:'detailAuthor', methods:['GET'])]
    public function getAuthor(Author $author, SerializerInterface $serializerInterface) :JsonResponse
    {
        $context = (new ObjectNormalizerContextBuilder())
        ->withGroups('getAuthor')
        ->toArray();

        $jsonAuthor = $serializerInterface->serialize($author, 'json', $context);

        
        return new JsonResponse($jsonAuthor, Response::HTTP_OK, [], true);
    }

    #[route('/api/author/{id}', name:'deleteAuthor', methods:['DELETE'])]
    public function RemoveAuthor(EntityManagerInterface $entityManagerInterface,Author $author, SerializerInterface $serializerInterface) : JsonResponse{
        $entityManagerInterface->remove($author);
        $entityManagerInterface->flush();

        return new JsonResponse(null, Response::HTTP_NO_CONTENT);
    }
    
    #[route('/api/authors/', name:'addAuthor', methods:['POST'])]
    public function createAuthor(Request $request, SerializerInterface $serializer,
    EntityManagerInterface $em): JsonResponse {
    $author = $serializer->deserialize($request->getContent(), Author::class, 'json');
    $em->persist($author);
    $em->flush();

    $jsonAuthor = $serializer->serialize($author, 'json', ['groups' => 'getAuthor']);
    return new JsonResponse($jsonAuthor, Response::HTTP_CREATED, [], true);	
}
}
