<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Resident;
use App\Repository\ResidentRepository;
use App\Repository\CityRepository;
use App\Repository\CountryRepository;
use DateTimeZone;
use DateTime;
use Symfony\Component\HttpFoundation\JsonResponse;

class ResidentController extends AbstractController
{
    
    /**
     * @Route("/resident", name="resident_read",methods={"GET"})
     */
    public function index(Request $req, ResidentRepository $residentRepo)
    {        
        $allresident = $residentRepo->findAll();
        return $this->json($allresident,200,[],['groups'=>'post:read']);
    }
    /**
     * @Route("/resident/{id<\d+>?0}", name="resident_create",methods={"POST"})
     */
    public function create(Request $req, $id,SerializerInterface $ser,EntityManagerInterface $em,CityRepository $cityRepo,CountryRepository $countryRepo)
    {
        $city = $cityRepo->find($id);
        if(!$city)dd("Cette ville n'existe pas");
        $country = $countryRepo->find($city->getCountry()->getId());  
        if(!$country)dd("Ce pays n'existe pas");
        $city->setCountry($country);

        $jsonresident = $req->getContent();
        $resident = $ser->deserialize($jsonresident,Resident::class,'json');
        $resident->setCity($city);
        $em->persist($resident);
        $em->flush();
        return $this->json($resident,200,[],['groups'=>'post:read']);
    }
    /**
     * @Route("/resident/{id<\d+>?0}", name="resident_update",methods={"PATCH"})
     */
    public function update(Request $req, $id,SerializerInterface $ser,EntityManagerInterface $em,ResidentRepository $residentRepo,CityRepository $cityRepo)
    {
        //seek Resident Objet $id data
        $residentToUpd = $residentRepo->find($id);
        if (!$residentToUpd) dd("ce resident n'existe pas dans la base de donnée");

        //seek json content and transform it on a Resident Objet
        $newResidentJson = $req->getContent();       
        $newResidentObj = $ser->deserialize($newResidentJson,Resident::class,'json');

        //seek $city Objet from new value by name 
        $cityNewValue = $cityRepo->findOneBy(["name"=>$newResidentObj->getCity()->getName()]);
        //dd($cityNewValue);
        //if no new $city stick with old value 
        $cityUpd = $cityNewValue ? $cityNewValue : $residentToUpd->getCity();
        
        
        //update $residentToUpd from $newresidentObj value
        $residentToUpd->setSocialNumber($newResidentObj->getSocialNumber())
                    ->setBirthDate($newResidentObj->getBirthDate())
                    ->setCity($cityUpd);
        
        $em->persist($residentToUpd);
        $em->flush();
        return $this->json($residentToUpd,201,[],['groups'=>'post:read']);
    }
    /**
     * @Route("/resident/{id<\d+>?0}", name="resident_delete",methods={"DELETE"})
     */
    public function delete(Request $req, $id, ResidentRepository $residentRepo,EntityManagerInterface $em)
    {
        $delresident = $residentRepo->find($id);
        if (!$delresident) dd("ce resident n'existe pas dans la base de donnée");
        $em->remove($delresident);
        $em->flush();
        return $this->json($delresident,201,[],['groups'=>'post:read']);
    }
    /**
     * @Route("/resident/avgCity/{id<\d+>?0}", name="resident_delete",methods={"GET"})
     */
    public function avgResidentAgeOf(Request $req, $id, ResidentRepository $residentRepo,EntityManagerInterface $em,CityRepository $cityRepo)
    {
        //on fait un findBy()
        $cityLookIn = $cityRepo->find($id);
        $allResidentOn = $residentRepo->findBy(["city"=>$cityLookIn]);
        $sumAges=0;
        
        foreach ($allResidentOn as $resident) {
            
            $tz  = new DateTimeZone('Europe/Brussels');
            $sumAges .= DateTime::createFromFormat('Y/m/d', input($resident->getBirthDate()), $tz)
                ->diff(new DateTime('now', $tz))
                ->y;
        }
        return $sumAges/count($allResidentOn);

    }

}
