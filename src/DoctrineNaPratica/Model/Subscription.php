<?php
namespace DoctrineNaPratica\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Subscription") 	
 */
class Subscription
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 * @var integer
	 */
	protected $id;

	/**
	 * @ORM\OneToOne(targetEntity="User", inversedBy="subscription")
	 * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
	 */
	private $user;

	/**
	 * @ORM\Column(type="integer", nullable=false)
	 * @var integer 
	 */
	private $status;

	/**
	 * @ORM\Column(type="datetime")
	 * @var datetime
	 */
	protected $started;

	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 * @var datetime
	 */
	protected $finished;

	/**
	 * @return integer
	 */
	public function getId()
	{
		return $this->id;
	}

	public function getUser()
	{
		return $this->user;
	}

	public function setUser($user)
	{
		$this->user = $user;
		return $this;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		return $this;
	}

	public function getStarted()
	{
		return $this->started;
	}

	public function setStarted($started)
	{
		$this->started = $started;
		return $this;
	}

	public function getFinished()
	{
		return $this->finished;
	}

	public function setFinished($finished)
	{
		$this->finished = $finished;
		return $this;
	}
}