<?php
namespace DoctrineNaPratica\Model;

use Doctrine\ORM\Mapping as ORM;

/** 
 * @ORM\Entity
 * @ORM\Table(name="User")	
 */
class User
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 * @var integer
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string", length=150)
	 * @var string
	 */
	private $name;

	/**
	 * @ORM\Column(type="string", length=20, unique=true)
	 */
	private $login;

	/**
	 * @ORM\Column(type="string", length=150, nullable=true)
	 */
	private $email;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $avatar;

	/**
	 * @ORM\OneToOne(targetEntity="Subscription", mappedBy="user", cascade={"all"})
	 */
	private $subscription;

	public function getSubscription()
	{
		return $this->subscription;
	}

	public function setSubscription($subscription)
	{
		$this->subscription = $subscription;
		return $this;
	}

	/**
	 * @return integer
	 */
	public function getId($id)
	{
		return $this->id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	public function getLogin()
	{
		return $this->login;
	}

	public function setLogin($login)
	{
		$this->login = $login;
		return $this;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}

	public function getAvatar()
	{
		return $this->avatar;
	}

	public function setAvatar($avatar)
	{
		$this->avatar = $avatar;
		return $this;
	}

}