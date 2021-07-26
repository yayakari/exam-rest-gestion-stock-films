<?php

namespace App\DataFixtures;

use App\Entity\Film;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FilmFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $film1 = new Film();
        $film1->setTitre("Spider-Man");
        $film1->setDesctription("Spider-Man est un film américain réalisé par Sam Raimi, sorti en 2002. C'est l'adaptation cinématographique du comics de Marvel Spider-Man créé par Stan Lee et le dessinateur Steve Ditko.");
        $film1->setRealisateur("Sam Raimi");

        $film2 = new Film();
        $film2->setTitre("Star Wars");
        $film2->setDesctription("Le film suit le chevalier Jedi Qui-Gon Jinn et son apprenti Obi-Wan Kenobi qui escortent et protègent la reine Amidala qui voyage de la planète Naboo à la planète Coruscant dans l'espoir de trouver une issue pacifique à un différend commercial interplanétaire. Il met également en scène le jeune Anakin Skywalker avant qu'il ne devienne un Jedi. Celui-ci est alors un jeune esclave qui semble avoir une forte prédisposition à l'utilisation de la Force.");
        $film2->setRealisateur("George Lucas");

        $film3 = new Film();
        $film3->setTitre("Kaamelott");
        $film3->setDesctription("Kaamelott est une série télévisée française humoristique et dramatique de fantasy historique créée par Alexandre Astier, Alain Kappauf et Jean-Yves Robin et diffusée entre le 3 janvier 2005 et le 31 octobre 2009 sur M6.");
        $film3->setRealisateur("Alexandre Astier");
      

        $manager->persist($film1);
        $manager->persist($film2);
        $manager->persist($film3);

        $manager->flush();
    }
}
