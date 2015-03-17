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

	/**
	 * @ORM\OneToMany(targetEntity="Enrollment", mappedBy="user", cascade={"all"}, orphanRemoval=true, fetch="LAZY")
	 */
	private $enrollmentCollection;

	/**
	 * @ORM\OneToMany(targetEntity="Course", mappedBy="teacher", cascade={"all"}, orphanRemoval=true, fetch="LAZY")
	 * @var Doctrine\Common\Collections\Collection
	 */
	protected $courseCollection;

	/**
	 * @ORM\ManyToMany(targetEntity="Lesson", inversedBy="userLessons", cascade={"all"})
	 * @ORM\JoinTable(name="LessonUser",
	 *		joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
	 *		inverseJoinColumns={@ORM\JoinColumn(name="lesson_id", referencedColumnName="id")})
	 */
	private $lessonCollection;

	public function __construct()
	{
		$this->couseCollection      = new ArrayCollection;
		$this->lessonCollection     = new ArrayCollection;
		$this->enrollmentCollection = new ArrayCollection;
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

	public function getSubscription()
	{
		return $this->subscription;
	}

	public function setSubscription($subscription)
	{
		$this->subscription = $subscription;
		return $this;
	}

	public function getEnrollmentCollection()
	{
		return $this->enrollmentCollection;
	}

	public function setEnrollmentCollection($enrollmentCollection)
	{
		$this->enrollmentCollection = $enrollmentCollection;
		return $this;
	}

	public function getCourseCollection()
	{
		return $this->courseCollection;
	}

	public function setCouseCollection($couseCollection)
	{
		$this->couseCollection = $couseCollection;
		return $this;
	}

	public function getLessonCollection()
	{
		return $this->lessonCollection;
	}

	public function setLessonCollection($lessonCollection)
	{
		$this->lessonCollection = $lessonCollection;
		return $this;
	}

}