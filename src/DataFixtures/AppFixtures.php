<?php

namespace App\DataFixtures;

use App\Entity\Author;
use App\Entity\Book;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $listAuthor = [];
        for($i=0;$i<=10;$i++){
            $author = new Author();
            $author->setLastName("NomAuteur .$i");
            $author->setFirstName("PrenomAuteur . $i");
            $listAuthor[] = $author;
            $manager->persist($author);
        }

        for($i=0;$i<=20;$i++){
            $book = new Book();
            $book->setTitle("titre.$i");
            $book->setCoverText("Quatrième de couverture . $i");
            $book->setAuthor($listAuthor[1]);
            $manager->persist($book);
        }

        $manager->flush();
    }
}
