<?php
App::uses('AppController', 'Controller');
class ImagesController extends AppController {

////////////////////////////////////////////////////////////

	public $components = array('Image');

////////////////////////////////////////////////////////////

	public function admin_crop() {

		$id = $this->params['url']['id'];
		$slug = $this->params['url']['slug'];
		$width = $this->params['url']['width'];
		$height = $this->params['url']['height'];

		$sourcefile = IMAGES . 'cars/' . $slug . '/original/' . $slug . '.jpg';

		if(!is_file($sourcefile)) {
			die('Unable to read source image: ' . $sourcefile);
		}

		$destinationfile = IMAGES . 'cars/' . $slug . '/' . $slug . '.jpg';

		$sourcefileweb = '/img/cars/' . $slug . '/original/' . $slug . '.jpg';
		$this->set(compact('sourcefileweb'));

		$sizes = getimagesize($sourcefile);
		$srcfilewidth = $sizes[0];
		$srcfileheight = $sizes[1];
		$this->set(compact('srcfilewidth', 'srcfileheight'));

		$this->set(compact('id', 'gallery', 'slug', 'width', 'height', 'gallery_path', 'sourcefile', 'destinationfile'));

		$this->layout = 'crop';

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

		$this->Image->resample(IMAGES . 'cars/' . $slug . '/' . $slug . '.jpg', IMAGES . 'cars/' . $slug . '/', $slug . '.jpg', 900, 600, 1, 0);

		$this->redirect(array('controller' => 'cars', 'action' => 'view', $id));
	}

////////////////////////////////////////////////////////////

}
