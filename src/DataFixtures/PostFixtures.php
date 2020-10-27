<?php

namespace App\DataFixtures;

use App\Entity\Post;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PostFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $post = (new Post())
            ->setTitle('A blog article')
            ->setDescription('description of the post')
            ->setContent('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ut quidem sequi cupiditate, excepturi praesentium odit et consectetur enim pariatur eos inventore laudantium. Ad maxime incidunt facere quam provident at.')
            ->setAuthor('Admin')
            ->setCreatedAt(new DateTimeImmutable())
        ;

        $manager->persist($post);

        $manager->flush();
    }
}
