<?php

namespace App\DataFixtures;


use Faker\Factory;
use App\Entity\Country;
use App\Entity\City;
use App\Entity\Resident;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        for($i=0;$i<30;$i++)
        {
            $coun = new Country();
            $coun->setName($faker->country);
            $manager->persist($coun);
            for($c=0;$c<10;$c++)
            {
                $city = new City();
                $city->setName($faker->city)
                     ->setCountry($coun);
                $manager->persist($city);
                for($z=0;$z<30;$z++)
                {
                    $res = new Resident();
                    $res->setSocialNumber($faker->nir)
                        ->setBirthDate($faker->dateTimeThisCentury)
                        ->setCity($city);
                    $manager->persist($res);
                }             
            }       
        }
        $manager->flush();
    }
}

//country 121   - 150
//city    2701  - 3000
//res     90001 - 92550