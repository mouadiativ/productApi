<?php

// src/DataFixtures/ProductFixtures.php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Faker\CustomProductProvider;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Create a Faker instance and add custom provider
        $faker = Factory::create();
        $faker->addProvider(new CustomProductProvider($faker));

        // Create 10 fake products
        for ($i = 0; $i < 10; $i++) {
            $product = new Product();
            $product->setCode($faker->unique()->ean13());
            $product->setName($faker->word());
            $product->setDescription($faker->sentence(10));
            $product->setImage($faker->imageUrl());
            $product->setCategory($faker->word());
            $product->setPrice($faker->randomFloat(2, 1, 100));
            $product->setQuantity($faker->numberBetween(1, 100));
            $product->setInternalReference($faker->unique()->word());
            $product->setShellId($faker->shellId()); // Use custom provider method
            $product->setInventoryStatus($faker->inventoryStatus()); // Use custom provider method
            $product->setRating($faker->randomFloat(1, 1, 5));

            // Set createdAt and updatedAt fields to the current time
            $product->setCreatedAt(new \DateTime());
            $product->setUpdatedAt(new \DateTime());

            $manager->persist($product);
        }

        // Flush the data to the database
        $manager->flush();
    }
}
