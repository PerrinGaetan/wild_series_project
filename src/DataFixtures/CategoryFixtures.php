<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{

    const CATEGORIES = [
        'Action',
        'Aventure',
        'Animation',
        'Comédie',
        'Fantastique',
        'Gore',
        'Horreur',
        'Romantique',
        'Science-Fiction',
        'Thriller',
        'Western',
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::CATEGORIES as $key => $categoryName) {
            $category = new Category();
            $category->setName($categoryName);

            $manager->persist($category);
        }

        $manager->flush();
    }
}
