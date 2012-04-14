<?php

/**
 * Minify Controller
 *
 * Classe responsável pela compressão de arquivos javascript e css.
 *
 * @package		app.Controller
 */
class MinifyController extends Controller {

	/**
	 * Take care of any minifying requests.
	 * The import is not defined outside the class to avoid errors if the class is read from the console.
	 *
	 * @return void
	 */
	public function index() {
		App::import('Minify.Vendor', 'minify' . DS . 'index');

		$this->response->statusCode('304');
		exit;
	}

}
