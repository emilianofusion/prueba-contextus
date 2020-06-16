<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * PushNotification
 *
 * @ORM\Entity
 * @ORM\Table(
 * 	name="push_notification"
 * )
 *
 **/
class PushNotification {
	/**
	 * @ORM\Id
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\GeneratedValue
	 * @var int
	 */
	private $id;

	/**
	 * @ORM\Column(name="user_id", type="integer")
	 * @var int
	 */
	private $user_id;

	/**
	 * @ORM\Column(name="text", type="text")
	 * @var text
	 */
	private $text;

	/**
	 * @ORM\Column(name="body", type="text")
	 * @var text
	 */
	private $body;

	/**
	 * @ORM\Column(name="processed", type="boolean")
	 * @var boolean
	 */
	private $processed;

	/**
	 * Get Id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Get UserId
	 *
	 * @return integer
	 */
	public function getUserId() {
		return $this->user_id;
	}

	/**
	 * Set UserId
	 *
	 * @param int $Text
	 *
	 * @return integer
	 */
	public function setUserId($user_id) {
		$this->user_id = $user_id;

		return $this;
	}

	/**
	 * Set Text
	 *
	 * @param text $Text
	 *
	 * @return text
	 */
	public function setText($text) {
		$this->text = $text;

		return $this;
	}

	/**
	 * Get Text
	 *
	 * @return text
	 */
	public function getText() {
		return $this->text;
	}

	/**
	 * Set Body
	 *
	 * @param text $Body
	 *
	 * @return body
	 */
	public function setBody($body) {
		$this->body = $body;

		return $this;
	}

	/**
	 * Get Body
	 *
	 * @return body
	 */
	public function getBody() {
		return $this->body;
	}

	/**
	 * Set Processed
	 *
	 * @param boolean $Processed
	 *
	 * @return Processed
	 */
	public function setProcessed($processed) {
		$this->processed = $processed;

		return $this;
	}

	/**
	 * Get Processed
	 *
	 * @return boolean
	 */
	public function getProcessed() {
		return $this->processed;
	}

}