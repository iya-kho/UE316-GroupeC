<?php

namespace App\DataFixtures;

use App\Entity\Post;
use App\Entity\Tag;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PostFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $category = new Category();
        $category->setName('Technologie');
        $manager->persist($category);

        $tag1 = new Tag();
        $tag1->setName('IA');
        $manager->persist($tag1);

        $tag2 = new Tag();
        $tag2->setName('Innovation');
        $manager->persist($tag2);

        $tag3 = new Tag();
        $tag3->setName('Technologie');
        $manager->persist($tag3);

        $post1 = new Post();
        $post1->setTitle('Les dernières innovations en intelligence artificielle');
        $post1->setContent('L\'intelligence artificielle continue de progresser à un rythme rapide. Les dernières innovations incluent des modèles de langage avancés, des systèmes de vision par ordinateur améliorés et des applications dans divers domaines tels que la santé, l\'automobile et la finance.');
        $post1->setIsActive(true);
        $post1->setImage('https://example.com/image1.jpg');
        $post1->setCategory($category);
        $post1->addTag($tag1);
        $post1->addTag($tag2);
        $post1->addTag($tag3);
        $manager->persist($post1);

        $post2 = new Post();
        $post2->setTitle('La 5G : Révolution ou simple évolution ?');
        $post2->setContent('La 5G promet des vitesses de connexion ultra-rapides et une latence réduite, ouvrant la voie à de nouvelles applications telles que les voitures autonomes, la réalité augmentée et les villes intelligentes. Cependant, des défis subsistent en termes de déploiement et de sécurité.');
        $post2->setIsActive(true);
        $post2->setImage('https://example.com/image2.jpg');
        $post2->setCategory($category);
        $post2->addTag($tag1);
        $post2->addTag($tag2);
        $post2->addTag($tag3);
        $manager->persist($post2);

        $post3 = new Post();
        $post3->setTitle('Les tendances de la cybersécurité en 2025');
        $post3->setContent('Avec l\'augmentation des cyberattaques, la cybersécurité est devenue une priorité pour les entreprises et les gouvernements. Les tendances actuelles incluent l\'utilisation de l\'IA pour détecter les menaces, la protection des données personnelles et la sécurisation des infrastructures critiques.');
        $post3->setIsActive(true);
        $post3->setImage('https://example.com/image3.jpg');
        $post3->setCategory($category);
        $post3->addTag($tag1);
        $post3->addTag($tag2);
        $post3->addTag($tag3);
        $manager->persist($post3);

        $manager->flush();
    }
}