<?php
class SitesController extends AppController {

	public function index() {

		if (!empty($this->request->data)) {

			$this->loadModel('Contact');
			$this->Contact->create();
			if ($this->Contact->save($this->data)) {
				$body = $this->data['Contact']['name'] . "\n";
				$body .= $this->data['Contact']['email'] . "\n";
				$body .= $this->data['Contact']['message'] . "\n";
				mail('andras@kende.com', 'Message', $body);
				$this->Session->setFlash('The message has been sent', 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->set('errors', $this->Contact->validationErrors);
				$this->Session->setFlash('The message could not be sent. Please, try again.', 'flash_error');
			}
		}

	}

	public function r() {
		$this->redirect('/', 301);
	}

}

