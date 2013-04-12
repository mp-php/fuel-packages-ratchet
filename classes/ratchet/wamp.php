<?php

namespace Ratchet;

/**
 * Class of Ratchet WampServer
 *
 * @author    Mamoru Otsuka http://madroom-project.blogspot.jp/
 * @copyright 2013 Mamoru Otsuka
 * @license   MIT License http://www.opensource.org/licenses/mit-license.php
 */
class Ratchet_Wamp implements \Ratchet\Wamp\WampServerInterface
{

	public function onCall(\Ratchet\ConnectionInterface $conn, $id, $topic, array $params) {

	}

	public function onClose(\Ratchet\ConnectionInterface $conn) {

	}

	public function onError(\Ratchet\ConnectionInterface $conn, \Exception $e) {

	}

	public function onOpen(\Ratchet\ConnectionInterface $conn) {

	}

	public function onPublish(\Ratchet\ConnectionInterface $conn, $topic, $event, array $exclude, array $eligible) {

	}

	public function onSubscribe(\Ratchet\ConnectionInterface $conn, $topic) {

	}

	public function onUnSubscribe(\Ratchet\ConnectionInterface $conn, $topic) {

	}

	public function callback($json) {

	}
}

/* end of file wamp.php */
