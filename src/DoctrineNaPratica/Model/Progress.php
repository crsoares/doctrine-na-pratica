<?php

namespace DoctrineNaPratica\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Progress")
 */
class Progress
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 * @var integer
	 */
	private $id;

	/**
	 * @ORM\Column(type="integer")
	 *
	 * @var int
	 */
	private $percent;

	/**
	 * @ORM\ManyToOne(targetEntity="User", cascade={"persist", "merge", "refresh"})
	 *
	 * @var user
	 */
	protected $user;

	/**
	 * @ORM\ManyToOne(targetEntity="Lesson", cascade={"persist", "merge", "refresh"})
	 *
	 * @var Lesson
	 */
	protected $lesson;

	/**
	 * @ORM\Column(type="datetime")
	 *
	 * @var Datetime
	 */
	protected $created;

	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 *
	 * @var Datetime
	 */
	protected $updated;

	/**
	 * @return integer
	 */
	public function getId()
	{
		return $this->id;
	}

	public function getPercent()
	{
		return $this->percent;
	}

	public function setPercent($percent)
	{
		$this->percent = $percent;
		return $this;
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

	public function getLesson()
	{
		return $this->lesson;
	}

	public function setLesson($lesson)
	{
		$this->lesson = $lesson;
		return $this;
	}

	public function getCreated()
	{
		return $this->created;
	}

	public function setCreated($created)
	{
		$this->created = $created;
		return $this;
	}

	public function getUpdated()
	{
		return $this->updated;
	}

	public function setUpdated($updated)
	{
		$this->updated = $updated;
		return $this;
	}
}