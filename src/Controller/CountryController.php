<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CountryRepository;
use App\Entity\Country;
use Symfony\Component\HttpFoundation\JsonResponse;

class CountryController extends AbstractController
{
    /**
     * @Route("/country", name="country_read",methods={"GET"})
     */
    public function index(Request $req, CountryRepository $countryRepo)
    {
        $allcountry = $countryRepo->findAll();
        return $this->json($allcountry,200,[],['groups'=>'post:read']);
    }
    /**
     * @Route("/country", name="country_create",methods={"POST"})
     */
    public function create(Request $req,SerializerInterface $ser,EntityManagerInterface $em)
    {
        $jsoncountry = $req->getContent();
        $country = $ser->deserialize($jsoncountry,Country::class,'json');
        $em->persist($country);
        $em->flush();
        return $this->json($country,200,[],['groups'=>'post:read']);
    }
    /**
     * @Route("/country/{id<\d+>?0}", name="country_update",methods={"PATCH"})
     */
    public function update(Request $req, $id,SerializerInterface $ser,EntityManagerInterface $em,CountryRepository $countryRepo)
    {
        $updcountry = $countryRepo->find($id);
        if (!$updcountry) dd("ce pays n'existe pas dans la base de donnée");
        $newcountryJson = $req->getContent();
        $newcountryObj = $ser->deserialize($newcountryJson,Country::class,'json');
        $updcountry->setName($newcountryObj->getName());
        $em->persist($updcountry);
        $em->flush();  
        return $this->json($updcountry,201,[],['groups'=>'post:read']);
    }
    /**
     * @Route("/country/{id<\d+>?0}", name="country_delete",methods={"DELETE"})
     */
    public function delete(Request $req, $id, CountryRepository $countryRepo,EntityManagerInterface $em)
    {
        $delcountry = $countryRepo->find($id);
        if (!$delcountry) dd("ce pays n'existe pas dans la base de donnée");
        $em->remove($delcountry);
        $em->flush();
        return $this->json($delcountry,201,[],['groups'=>'post:read']);
    }
}
