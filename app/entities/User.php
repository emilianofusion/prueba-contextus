<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Entity
 * @ORM\Table(
 * 	schema="public",
 * 	name="user"
 * )
 *
 **/
class User {
	/**
	 * @ORM\Id
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\GeneratedValue
	 * @var int
	 */
	private $id;

	/**
	 * @ORM\Column(name="store", type="text")
	 * @var text
	 */
	private $store;

	/**
	 * @ORM\Column(name="allow_pnotification", type="boolean")
	 * @var boolean
	 */
	private $allow_pnotification;

	/**
	 * Get Id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set Store
	 *
	 * @param smallint $Store
	 *
	 * @return User
	 */
	public function setStore($store) {
		$this->store = $store;

		return $this;
	}

	/**
	 * Get Store
	 *
	 * @return text
	 */
	public function getStore() {
		return $this->store;
	}

	/**
	 * Set AllowPNotification
	 *
	 * @param boolean $AllowPNotification
	 *
	 * @return User
	 */
	public function setAllowPNotification($allow_pnotification) {
		$this->allow_pnotification = $allow_pnotification;

		return $this;
	}

	/**
	 * Get AllowPNotification
	 *
	 * @return boolean
	 */
	public function getAllowPNotification() {
		return $this->allow_pnotification;
	}

}