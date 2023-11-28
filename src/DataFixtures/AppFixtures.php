<?php

namespace App\DataFixtures;

use App\Factory\ActiveUserCountFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        ActiveUserCountFactory::createMany(50);
    }
}
