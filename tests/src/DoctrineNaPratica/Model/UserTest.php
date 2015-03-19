<?php

namespace DoctrineNaPratica\Model;

use DoctrineNaPratica\Test\TestCase;
use DoctrineNaPratica\Model\User;
use DoctrineNaPratica\Model\Subscription;
use DoctrineNaPratica\Model\Enrollment;
use DoctrineNaPratica\Model\Course;
use DoctrineNaPratica\Model\Lesson;
use DoctrineNaPratica\Model\GithubProfile;
use DoctrineNaPratica\Model\FacebookProfile;
use DoctrineNaPratica\Model\TwitterProfile;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @group Model	
 */
class UserTest extends TestCase
{
	//testa a criação do User
	public function testUser()
	{
		$user = new User;
		$user->setName('Steve Jobs');
		$user->setLogin('steve');
		$user->setEmail('stave@apple.com');
		$user->setAvatar('steve.png');

		$this->getEntityManager()->persist($user);
		$this->getEntityManager()->flush();

		//deve ter criado um id
		$this->assertNotNull($user->getId());
		$this->assertEquals(1, $user->getId());

		$savedUser = $this->getEntityManager()->find(get_class($user), $user->getId());
		$this->assertInstanceOf(get_class($user), $savedUser);
		$this->assertEquals($user->getName(), $savedUser->getName());
	}

	//testa a Subscription do User
	public function testUserSubscription()
	{
		$user = $this->buildUser();

		$subscription = new Subscription;
		$subscription->setStatus(1);
		$subscription->setStated(new \DateTime('NOW'));
	}
}