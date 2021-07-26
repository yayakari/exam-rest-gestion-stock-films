<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setEmail("admin@admin.com");
        $user1->setRoles(["ROLE_ADMIN"]);
        $user1->setPassword($this->encoder->hashPassword($user1, "admin"));

        $user2 = new User();
        $user2->setEmail("user@user.com");
        $user2->setRoles(["ROLE_USER"]);
        $user2->setPassword($this->encoder->hashPassword($user2, "user"));

        $manager->persist($user1);
        $manager->persist($user2);

        $manager->flush();
    }
}
