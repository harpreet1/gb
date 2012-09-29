<?php
App::uses('AppController', 'Controller');
class CarsController extends AppController {

////////////////////////////////////////////////////////////

	public $components = array('Image');

////////////////////////////////////////////////////////////

	public function index() {

		$carousels = $this->Car->find('all', array(
			'recursive' => -1,
			'conditions' => array(
				'Car.available' => 1,
				'Car.active' => 1
			),
			'order' => 'RAND()',
			'limit' => 5
		));

		$cars = $this->Car->find('all', array(
			'contain' => array('Category'),
			'conditions' => array(
				'Car.available' => 1,
				'Car.active' => 1
			),
			'order' => array(
				'Car.daily_rent' => 'DESC',
				'Category.sort' => 'ASC',
			)
		));

		$brands = $this->Car->find('all', array(
			'recursive' => -1,
			'fields' => array(
				'Car.make'
			),
			'group' => array(
				'Car.make'
			),
			'order' => array(
				'Car.make' => 'ASC'
			),
		));
		$brands = implode(', ', Set::extract($brands, '{n}.Car.make'));

		$title = 'Luxury Car Rental Los Angeles CA - Exotic Auto Rentals';
		$this->set(compact('carousels', 'cars', 'brands', 'title'));

	}

////////////////////////////////////////////////////////////

	public function cars() {

		$carsavailable = $this->Car->find('all', array(
			'contain' => array('Category'),
			'conditions' => array(
				'Car.available' => 1,
				'Car.active' => 1
			),
			'order' => array(
				'Car.daily_rent' => 'DESC',
				'Category.sort' => 'ASC',
			)
		));

		$carsrented = $this->Car->find('all', array(
			'contain' => array('Category'),
			'conditions' => array(
				'Car.available' => 0,
				'Car.active' => 1
			),
			'order' => array(
				'Category.sort' => 'ASC',
				'Car.daily_rent' => 'DESC',
			)
		));

		$title = 'Luxury Cars for Rent - Exotic Auto Rentals Los Angeles CA';
		$this->set(compact('carsavailable', 'carsrented', 'title'));

	}

////////////////////////////////////////////////////////////

	public function view($slug) {

		$car = $this->Car->find('first', array(
			'contain' => array('Category'),
			'conditions' => array(
				'Car.slug' => $slug,
				'Car.active' => 1
			)
		));
		if(empty($car)) {
			$this->redirect(array('action' => 'index'));
		}

		App::uses('Folder', 'Utility');
		App::uses('File', 'Utility');
		$dir = new Folder(IMAGES . '/cars/' . $car['Car']['slug'] . '/gallery/');
		$thumbs = $dir->find('.*\.jpg', true);

		$title = $car['Car']['name'] . ' ' . $car['Category']['name'] . ' Rental Los Angeles';

		$keywords = explode(' ', $car['Car']['name']);
		$keywords = implode(', ', $keywords);
		$keywords = strtolower($keywords . ', rent, rental, car, auto, luxury, exotic, los angeles, california');

		$this->set(compact('car', 'thumbs', 'title', 'keywords'));

	}

////////////////////////////////////////////////////////////

	public function sitemap() {
		$cars = $this->Car->find('all', array(
			'fields' => array('Car.slug'),
			'recursive' => -1,
			'conditions' => array(
				'Car.active' => 1
			),
			'order' => array('Car.name' => 'ASC'),
		));
		$this->set(compact('cars'));
		$this->layout = 'xml';
		$this->response->type('xml');
	}

////////////////////////////////////////////////////////////

	public function w() {
		$slug = $this->request->query['slug'];
		$image = $this->request->query['image'];

//		$image = preg_replace()
		$slug = preg_replace('/[^a-zA-Z0-9-_\.]+/', null, $slug);
		$image = preg_replace('/[^a-zA-Z0-9-_\.]+/', null, $image);

		$dir = IMAGES . 'cars/' . $slug . '/gallery/';

		if (!file_exists($dir . $image)) {
			die("Image does not exist.");
		}

		$dir2 = IMAGES;
		$overlay = 'watermark.png';

		if (!file_exists($dir2 . $overlay)) {
			die("Watermark Image does not exist.");
		}

		$w_offset = 10;
		$h_offset = 10;

		$background = imagecreatefromjpeg($dir . $image);

		// Find base image size
		$swidth = imagesx($background);
		$sheight = imagesy($background);

		// Turn on alpha blending
		imagealphablending($background, true);

		// Create overlay image
		$overlay = imagecreatefrompng($dir2 . $overlay);

		// Get the size of overlay
		$owidth = imagesx($overlay);
		$oheight = imagesy($overlay);

		$now = $swidth / 4;

		$noh = $oheight * ($now / $owidth);

		$png = imagecreatetruecolor($now, $noh);
		imagesavealpha($png, true);

		$trans_colour = imagecolorallocatealpha($png, 0, 0, 0, 127);
		imagefill($png, 0, 0, $trans_colour);

		$red = imagecolorallocate($png, 255, 0, 0);
		imagefilledellipse($png, 400, 300, 400, 300, $red);

		imagecopyresampled($png, $overlay, 0, 0, 0, 0, $now, $noh, $owidth, $oheight);

		$owidth = imagesx($png);
		$oheight = imagesy($png);

		// Overlay watermark
		imagecopy($background, $png, $swidth - $owidth - $w_offset, $sheight - $oheight - $h_offset, 0, 0, $owidth, $oheight);

		// Output header and final image
		header('Content-type: image/jpeg');
		header('Content-Disposition: filename=' . $image);
		imagejpeg($background);

		// Destroy the images
		imagedestroy($background);
		imagedestroy($overlay);

		die();
	}

////////////////////////////////////////////////////////////

	public function admin_index() {
		$this->paginate = array(
			'contain' => array('Category'),
//			'recursive' => -1,
			'conditions' => array(
//				'Car.active' => 1
			),
			'order' => array(
				'Car.name' => 'ASC'
			),
			'limit' => 100
		);
		$cars = $this->paginate('Car');
//		print_r($cars);
		$this->set(compact('cars'));

	}

////////////////////////////////////////////////////////////

	public function admin_slug() {

		App::uses('Folder', 'Utility');
		App::uses('File', 'Utility');
		$dir = new Folder(IMAGES . 'cars/');
		$slugs = $dir->read();

		foreach($slugs[0] as $slug) {

			$car = $this->Car->find('first', array(
				'conditions' => array(
					'Car.slug' => $slug,
				)
			));

			echo $slug . ' === ' . $car['Car']['slug'];
			echo "<br />";

		}

		die('vege');

	}

////////////////////////////////////////////////////////////

	//$s = Inflector::slug($car['Car']['name'], '-');
	//$s = strtolower($s) . '.jpg';

////////////////////////////////////////////////////////////

	public function admin_switch($field = null, $id = null) {
		$model = 'Car';

		$this->$model->recursive = -1;
		$data = $this->$model->findById($id);
		$value = 0;
		if($data[$model][$field] == 0) {
			$value = 1;
		}
		$this->$model->id = $id;
		$this->$model->saveField($field, $value);
		if(!$this->RequestHandler->isAjax()) {
			$this->redirect($this->referer());
		}
		$this->autoRender = false;
	}

////////////////////////////////////////////////////////////

	public function admin_view($id = null) {

		if ($this->request->is('post')) {
			$slug = $this->request->data['Car']['slug'];
			$image = $this->request->data['Car']['slug'] . '.jpg';

			$targetdir = IMAGES . 'cars/' . $slug . '/original/';

			$upload = $this->Image->upload($this->request->data['Car']['image']['tmp_name'], $targetdir, $image);

			if($upload == 'Success') {
				$uploadedfile = $targetdir . '/' . $image;
				$this->Image->resample($uploadedfile, IMAGES . '/cars/' . $slug . '/', $image, 900, 600, 1, 0);
				$this->Image->resample($uploadedfile, IMAGES . '/cars/' . $slug . '/thumb/', $image, 180, 120, 1, 0);
			}

			$this->Session->setFlash($upload);
			$this->redirect($this->referer());
		}

		$this->Car->id = $id;
		if (!$this->Car->exists()) {
			throw new NotFoundException(__('Invalid car'));
		}
		$car = $this->Car->find('first', array(
			'contain' => array('Category'),
			'conditions' => array(
				'Car.id' => $id
			)
		));

		App::uses('Folder', 'Utility');
		App::uses('File', 'Utility');

		$dir = new Folder(IMAGES . 'cars/' . $car['Car']['slug'] . '/');
		$files = $dir->findRecursive('.*', true);

		$dir = new Folder(IMAGES . 'cars/' . $car['Car']['slug'] . '/gallery/');
		$images = $dir->find('.*\.jpg', true);

		$this->set(compact('car', 'files', 'images'));

	}

////////////////////////////////////////////////////////////

	public function admin_delete_gallery() {

		$image = $this->request->query['image'];
		$slug = $this->request->query['slug'];

		$sourcefile = IMAGES . 'cars/' . $slug . '/gallery/' . $image;
		$sourcefilethumb = IMAGES . 'cars/' . $slug . '/t/' . $image;

		if(is_file($sourcefile) && is_file($sourcefilethumb)) {
			unlink($sourcefile);
			unlink($sourcefilethumb);
		}

		$this->redirect($this->referer());
		//$this->redirect(array('action' => 'organize_gallery', $slug));

	}

////////////////////////////////////////////////////////////

	public function admin_organize_gallery($slug) {

			App::uses('Folder', 'Utility');
			App::uses('File', 'Utility');

			$directoryg = IMAGES . '/cars/' . $slug . '/gallery/';
			$directoryt = IMAGES . '/cars/' . $slug . '/t/';

			$dir = new Folder($directoryg);
			$sources = $dir->find('.*\.jpg', true);

			$r = mt_rand(1001,9999);

			foreach($sources as $source) {
				rename($directoryg . $source, $directoryg . $r . $source);
				rename($directoryt . $source, $directoryt . $r . $source);
			}

			$counter = 1;

			foreach($sources as $source) {
				$i = sprintf('%03s', $counter);
				rename($directoryg . $r . $source, $directoryg . $slug . '_' . $i . '.jpg');
				rename($directoryt . $r . $source, $directoryt . $slug . '_' . $i . '.jpg');
				$counter++;
			}

			$this->redirect($this->referer());

	}

////////////////////////////////////////////////////////////

	public function uploadify() {

		if (!empty($_FILES)) {

			App::uses('Folder', 'Utility');
			App::uses('File', 'Utility');

			$tempFile = $_FILES['Filedata']['tmp_name'];
			$slug = $_POST['folder'];
			$targetPath = IMAGES . 'cars/' . $slug . '/gallery/';
			if(!is_dir($targetPath)) {
				$d = new Folder($targetPath, true, 0777);
			}

			$dir = new Folder($targetPath);
			$images = $dir->find('.*\.jpg', true);
			$num = count($images) + 1;
			$i = sprintf('%03s', $num);

			$targetFileName = $slug . '_' . $i . '.jpg';

			$targetFile = $targetPath . $targetFileName;

			$fileTypes = array('jpg', 'jpeg');
			$fileParts = pathinfo(strtolower($_FILES['Filedata']['name']));

			if (in_array($fileParts['extension'], $fileTypes)) {
				move_uploaded_file($tempFile, $targetFile);
				$this->Image->resample($targetFile, IMAGES . 'cars/' . $slug . '/t/', $targetFileName, 180, 120, 1, 1);
				echo '1';
			} else {
				echo 'Invalid file type.';
			}
		}

		$this->autoRender = false;

	}

////////////////////////////////////////////////////////////

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Car->create();
			if ($this->Car->save($this->request->data)) {
				$this->Session->setFlash(__('The car has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Car->Category->find('list');
		$this->set(compact('categories'));
	}

////////////////////////////////////////////////////////////

	public function admin_edit($id = null) {
		$this->Car->id = $id;
		if (!$this->Car->exists()) {
			throw new NotFoundException(__('Invalid car'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Car->save($this->request->data)) {
				$this->Session->setFlash(__('The car has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The car could not be saved. Please, try again.'));
			}
		} else {
			$data = $this->Car->find('first', array(
				'conditions' => array(
					'Car.id' => $id
				)
			));
			$this->request->data = $data = $data;
			$categories = $this->Car->Category->find('list');
			$this->set(compact('categories'));
		}
	}

////////////////////////////////////////////////////////////

	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Car->id = $id;
		if (!$this->Car->exists()) {
			throw new NotFoundException(__('Invalid car'));
		}

		$car = $this->Car->find('first', array(
			'conditions' => array(
				'Car.id' => $id
			)
		));

		if ($this->Car->delete()) {

			if($car['Car']['slug'] != '') {
				App::uses('Folder', 'Utility');
				App::uses('File', 'Utility');

				$folder = new Folder(IMAGES . 'cars/' . $car['Car']['slug']);
				if ($folder->delete()) {
				}
			}

			$this->Session->setFlash('Car deleted');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Car was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

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
		$this->Image->resample(IMAGES . 'cars/' . $slug . '/' . $slug . '.jpg', IMAGES . 'cars/' . $slug . '/thumb/', $slug . '.jpg', 180, 120, 1, 0);

		$this->redirect(array('controller' => 'cars', 'action' => 'view', $id));
	}

/////////////////////////////////////////////////////////////

}
