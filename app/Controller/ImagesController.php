<?php
App::uses('AppController', 'Controller');
class ImagesController extends AppController {

////////////////////////////////////////////////////////////

	public $components = array('Image');

////////////////////////////////////////////////////////////

	public function admin_crop() {

//		$id = $this->params['url']['id'];
		$src_dir = $this->params['url']['src_dir'];
		$dst_dir = $this->params['url']['dst_dir'];
		$src_file = $this->params['url']['src_file'];
		$dst_file = $this->params['url']['dst_file'];

		$width = $this->params['url']['width'];
		$height = $this->params['url']['height'];

		$sourcefile = IMAGES . $src_dir . '/' . $src_file;

		if(!is_file($sourcefile)) {
			die('Unable to read source image: ' . $sourcefile);
		}

		$destinationfile = IMAGES . $dst_dir . '/' . $dst_file;

		$sourcefileweb = '/img/' . $src_dir . '/' . $src_file;

		$sizes = getimagesize($sourcefile);
		$srcfilewidth = $sizes[0];
		$srcfileheight = $sizes[1];
		$this->set(compact('srcfilewidth', 'srcfileheight'));

		$this->set(compact('sourcefile', 'destinationfile', 'width', 'height', 'sourcefileweb'));

		$this->layout = 'crop';

		Configure::write('debug', 0);

	}

/////////////////////////////////////////////////////////////

	public function admin_cropprocess() {

		$id = $this->data['Picture']['id'];
		$slug = $this->data['Picture']['slug'];

		$x = $this->data['Picture']['x'];
		$y = $this->data['Picture']['y'];
		$w = $this->data['Picture']['w'];
		$h = $this->data['Picture']['h'];

		$width = $this->data['Picture']['width'];

		$src = $this->data['Picture']['sourcefile'];
		$dst = $this->data['Picture']['destinationfile'];

		$scale = $width / $w;

		$this->Image->cropimage($src, $dst, $w, $h, $x, $y, $scale);

//		$this->Image->resample(IMAGES . $slug . '/' . $slug . '.jpg', IMAGES . 'cars/' . $slug . '/', $slug . '.jpg', 900, 600, 1, 0);

		$this->redirect(array('controller' => 'users', 'action' => 'index'));
	}

////////////////////////////////////////////////////////////

}
