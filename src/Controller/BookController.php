<?php

namespace App\Controller;

use App\Entity\Author;
use App\Entity\Book;
use App\Repository\AuthorRepository;
use App\Repository\BookRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class BookController extends AbstractController
{
    #[Route('/api/books', name: 'books')]
    public function getAllBooks(BookRepository $bookRepository, SerializerInterface $serializerInterface): JsonResponse
    {

        $bookList = $bookRepository->findAll();
        //dd($bookList);
        $jsonBookList = $serializerInterface->serialize($bookList, "json", ["groups" => "getBooks"]);
        return new JsonResponse($jsonBookList, Response::HTTP_OK, [], true);
    }

    // #[Route('/api/books/{id}', name: 'app_book1', methods:['GET'])]
    // public function getOneBook(BookRepository $bookRepository, int $id, SerializerInterface $serializerInterface) : JsonResponse{
    //     $book = $bookRepository->find($id);
    //     if($book){
    //         $jsonBook = $serializerInterface->serialize($book, 'json');
    //         return new JsonResponse($jsonBook, Response::HTTP_OK, [], true);
    //     }
    //     return new JsonResponse(null, Response::HTTP_NOT_FOUND);

    // }

    #[Route('/api/books/{id}', name: 'detailbook', methods:['GET'])]
    public function getOneBook(Book $book, SerializerInterface $serializerInterface, Author $author) : JsonResponse{

        $jsonBook = $serializerInterface->serialize($book, 'json', ["groups" => "getBooks"]);
        return new JsonResponse($jsonBook, Response::HTTP_OK, [],true);
    }

    #[Route('/api/books/{id}', name:'deleteBook', methods:['DELETE'])]
    public function RemoveBook(Book $book, EntityManagerInterface $entityManagerInterface) : JsonResponse
    {
        $entityManagerInterface->remove($book);
        $entityManagerInterface->flush();
        
        return new JsonResponse(null, Response::HTTP_NO_CONTENT);
    }

    #[Route('/api/books', name:'postBook', methods:['POST'])]
    public function AddBook(ValidatorInterface $validator,Request $request, SerializerInterface $serializerInterface , EntityManagerInterface $entityManagerInterface, AuthorRepository $authorRepository) : JsonResponse
    {
        
        $book = $serializerInterface->deserialize($request->getContent(), Book::class, 'json');
        
       
        $content = $request->toArray();
        $idAuthor = $content['idAuthor'] ?? -1;
        $book->setAuthor($authorRepository->find($idAuthor));
        
        // $error = $validator->validate($book);
        
        // if($error->count() > 0){
        //     return new JsonResponse($serializerInterface->serialize($error, 'json'), JsonResponse::HTTP_BAD_REQUEST,[], true);
        // }

        $entityManagerInterface->persist($book);
        $entityManagerInterface->flush();

        $jsonBook = $serializerInterface->serialize($book, 'json', ['groups' => 'getBooks']);
        
        return new JsonResponse($jsonBook, Response::HTTP_CREATED, [], true);
    }

    #[Route('/api/books/{id}', name:'postBook', methods:['PUT'])]
    public function UpdateBook(Book $updateBook,Request $request, SerializerInterface $serializerInterface , EntityManagerInterface $entityManagerInterface, AuthorRepository $authorRepository, BookRepository $bookRepository) : JsonResponse
    {

        $updateBook = $serializerInterface->deserialize($request->getContent(), Book::class, 'json', [AbstractNormalizer::OBJECT_TO_POPULATE => $updateBook]);
        $content = $request->toArray();
        $idAuthor = $content['idAuthor'] ?? -1;
        $updateBook->setAuthor($authorRepository->find($idAuthor));

        $entityManagerInterface->persist($updateBook);
        $entityManagerInterface->flush();
        
        return new JsonResponse(null, Response::HTTP_NO_CONTENT);
    }

    #[Route('/d', name:'postBook', methods:['GET'])]
    public function montest(BookRepository $book) :Response
    {
        $t = $book->findAll();
        array_reduce($t, function(){
            
        });
        return new Response("cc");
    }


}

