<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CityRepository;
use App\Repository\CountryRepository;
use App\Entity\City;
use Symfony\Component\HttpFoundation\JsonResponse;


class CityController extends AbstractController
{
    /**
     * @Route("/city", name="city_read",methods={"GET"})
     */
    public function index(Request $req, CityRepository $cityRepo)
    {
        $allcity = $cityRepo->findAll();
        return $this->json($allcity,200,[],['groups'=>'post:read']);
    }
    /**
     * @Route("/city/{id<\d+>?0}", name="city_create",methods={"POST"})
     */
    public function create(Request $req,$id,SerializerInterface $ser,EntityManagerInterface $em,CountryRepository $counRepo)
    {
        $country = $counRepo->find($id);
        if (!$country) dd("ce pays n'existe pas dans la base de donnée");
        $jsonCity = $req->getContent();
        $city = $ser->deserialize($jsonCity, City::class,'json');
        $city->setCountry($country);
        
        $em->persist($city);
        $em->flush();
        return $this->json($city,200,[],['groups'=>'post:read']);
    }
    /**
     * @Route("/city/{id<\d+>?0}", name="city_update",methods={"PATCH"})
     */
    public function update(Request $req, $id,SerializerInterface $ser,EntityManagerInterface $em,CityRepository $cityRepo,CountryRepository $counRepo)
    {
        $cityToUpd = $cityRepo->find($id);
        if (!$cityToUpd) dd("cette ville n'existe pas dans la base de donnée");
        $newCityJson = $req->getContent();
        $newCityObj = $ser->deserialize($newCityJson, City::class,'json');
        $countryNewValue = $counRepo->findOneBy(["name"=>$newCityObj->getCountry()->getName()]);
        $countryUpd = $countryNewValue ? $countryNewValue : $cityToUpd->getCountry();
        $cityToUpd->setName($newCityObj->getName())
                  ->setCountry($countryUpd);

        $em->persist($cityToUpd);
        $em->flush();
        return $this->json($cityToUpd,201,[],['groups'=>'post:read']);
    }
    /**
     * @Route("/city/{id<\d+>?0}", name="city_delete",methods={"DELETE"})
     */
    public function delete(Request $req, $id, CityRepository $cityRepo, EntityManagerInterface $em)
    {
        $delCity = $cityRepo->find($id);
        if (!$delCity) dd("cette ville n'existe pas dans la base de donnée");
        $em->remove($delCity);
        $em->flush();
        return $this->json($delCity,201,[],['groups'=>'post:read']);
    }
}