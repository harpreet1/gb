<?php
App::uses('AppController', 'Controller');
class ImagesController extends AppController {

////////////////////////////////////////////////////////////

	public $components = array('Image');

////////////////////////////////////////////////////////////

	public function admin_crop() {

		if ($this->request->is('post')) {

			$x = $this->request->data['Picture']['x'];
			$y = $this->request->data['Picture']['y'];
			$w = $this->request->data['Picture']['w'];
			$h = $this->request->data['Picture']['h'];

			$width = $this->request->data['Picture']['width'];

			$src_filename = $this->request->data['Picture']['src_filename'];
			$dst_filename = $this->request->data['Picture']['dst_filename'];

			$referer = $this->request->data['Picture']['referer'];

			$scale = $width / $w;

			$this->Image->cropimage($src_filename, $dst_filename, $w, $h, $x, $y, $scale);

			$this->redirect($referer);

		}

		$referer = $this->referer();

		$src_dir = $this->params['url']['src_dir'];
		$dst_dir = $this->params['url']['dst_dir'];
		$src_file = $this->params['url']['src_file'];
		$dst_file = $this->params['url']['dst_file'];

		$width = $this->params['url']['width'];
		$height = $this->params['url']['height'];

		$src_filename = IMAGES . $src_dir . '/' . $src_file;

		if(!is_file($src_filename)) {
			die('Unable to read source image: ' . $src_filename);
		}

		$sizes = getimagesize($src_filename);
		$src_width = $sizes[0];
		$src_height = $sizes[1];

		$dst_filename = IMAGES . $dst_dir . '/' . $dst_file;

		$src_fileweb = '/img/' . $src_dir . '/' . $src_file;

		$this->set(compact('src_width', 'src_height', 'src_filename', 'dst_filename', 'width', 'height', 'src_fileweb', 'referer'));

		$this->layout = 'crop';

		Configure::write('debug', 0);

	}

/////////////////////////////////////////////////////////////

}
