<?php

namespace App\Controllers;

use App\Models\CountryModel;
use App\Models\DirectorModel;
use App\Models\DramaDetailModel;
use App\Models\WriterModel;
use App\Models\DramaModel;
use App\Models\LanguageModel;
use App\Models\NetworkModel;
use CodeIgniter\Language\Language;

class Drama extends BaseController
{
	protected $dramaModel;
	protected $dramaDetailModel;
	protected $directorModel;
	// protected $writerModel;
	protected $networkModel;
	protected $countryModel;
	protected $languageModel;

	public function __construct()
	{
		$this->dramaModel = new DramaModel();
		$this->dramaDetailModel = new DramaDetailModel();
		$this->directorModel = new DirectorModel();
		// $this->writerModel = new WriterModel();
		$this->networkModel = new NetworkModel();
		$this->countryModel = new CountryModel();
		$this->languageModel = new LanguageModel();
	}

	public function index()
	{
		$controllerData = [
			'breadcrumb' => 'drama/index',
			'dramaList' => $this->dramaModel->getDrama()
		];
		return view('appDrama/index', $controllerData);
	}

	public function dramaAdd()
	{
		$controllerData = [
			'breadcrumb' => 'drama/add-drama',
			'validator' => \Config\Services::validation(),
			'directorList' => $this->directorModel->getDirector(),
			'networkList' => $this->networkModel->getNetwork(),
			'countryList' => $this->countryModel->getCountry(),
			'languageList' => $this->languageModel->getLanguage()
		];
		// dd($this->writerModel->getWriter());
		return view('appDrama/dramaAdd', $controllerData);
	}

	public function dramaSave()
	{
		// if (!$this->validate([
		// 	'drama-title' => "required",
		// 	'drama-hangeul' => 'required',
		// 	'drama-romanization' => 'required',
		// 	'drama-cover' => [
		// 		'rules' => 'max_size[drama-cover, 1024]|is_image[drama-cover]|mime_in[drama-cover,image/jpg,image/jpeg,img/png]',
		// 		'errors' => [
		// 			'max_size' => "1MB is the maximum size.",
		// 			'is_image' => 'Only use image files',
		// 			'mime_in' => 'Only use image files'
		// 		]
		// 	],
		// 	'director-select' => 'required',
		// 	'network-select' => 'required',
		// 	'drama-episode' => 'required',
		// 	'country-select' => 'required',
		// 	'language-select' => 'required',
		// 	'drama-Begin' => 'required',
		// 	'drama-End' => 'required'
		// ])) {
		// 	return redirect()->to('/drama/add')->withInput();
		// };

		$slug = url_title($this->request->getVar('drama-title'), '-', true);

		// Get, change name and upload it
		$coverFile = $this->request->getFile('drama-cover');
		if ($coverFile->getError() == 4) {
			$coverName = 'notfound.png';
		} else {
			$coverName = "K-Drama_" . $slug . "." . $coverFile->getExtension();
			$coverFile->move('img/drama', $coverName);
		}
		$saveDramaInfo = [
			'primary_title' => $this->request->getVar('drama-title'),
			'secondary_title' => $this->request->getVar('drama-title-lit'),
			'rev_romanization' => $this->request->getVar('drama-romanization'),
			'hangeul' => $this->request->getVar('drama-hangeul'),
			'slug' => $slug,
			'cover' => $coverName
		];

		$this->dramaModel->saveDramaInfo($saveDramaInfo);
		$getID = $this->dramaModel->getDramaID($slug);

		$saveDramaDetail = [
			'id_drama' => $getID,
			'id_director' => $this->request->getVar('director-select'),
			'id_network' => $this->request->getVar('network-select'),
			'episode' => $this->request->getVar('drama-episode'),
			'id_language' => $this->request->getVar('language-select'),
			'id_country' => $this->request->getVar('country-select'),
			'synopsis' => $this->request->getVar('drama-synopsis')
		];

		$this->dramaModel->saveDramaDetail($saveDramaDetail);
		$getDDetailID = $this->dramaDetailModel->getDramaDetailID($getID);

		$saveReleaseInfo = [
			'id_ddetail' => $getDDetailID,
			'release_date' => $this->request->getVar('drama-Begin'),
			'end_date' => $this->request->getVar('drama-End')
		];

		$this->dramaModel->saveReleaseInfo($saveReleaseInfo);

		$saveBroadcastInfo = [
			'id_ddetail' => $getDDetailID,
			'odd_ep' => $this->request->getVar('oddEpisode-select'),
			'even_ep' => $this->request->getVar('evenEpisode-select'),
			'broadcast_time' => $this->request->getVar('broadcast-time')
		];

		$this->dramaModel->saveBroadcastInfo($saveBroadcastInfo);
		return redirect()->to('/drama');
	}

	// 	public function detailDrama($slug)
	// 	{
	// 		$controllerData = [
	// 			'breadcrumb' => 'drama/detail',
	// 			'dramaDetail' => $this->dramaModel->getDramaDetail($slug),
	// 			'cast' => $this->dramaModel->getCast($slug)
	// 		];
	// 		// dd($controllerData);
	// 		return view('app-dramaList/detail-drama', $controllerData);

	// 		if (empty($controllerData['dramaDetail'])) {
	// 			throw new \CodeIgniter\Exceptions\PageNotFoundException('Drama ' . $slug . ' not found in our database');
	// 		}
	// 	}

	// 	public function deleteDrama($id)
	// 	{
	// 		$this->dramaModel->deleteDrama($id);
	// 		return redirect()->to('/drama');
	// 	}

	// 	public function editDrama($slug)
	// 	{
	// 		$controllerData = [
	// 			'breadcrumb' => 'drama/edit-drama',
	// 			'validator' => \Config\Services::validation()
	// 		];
	// 		return view('app-dramaList/edit-drama', $controllerData);
	// 	}
	// 	/*
	// 	---------------------------
	// 	***************************

	// 	***************************
	// 	---------------------------
	// 	*/
	// 	public function addCast($slug)
	// 	{
	// 		$controllerData = [
	// 			'breadcrumb' => 'drama/add-cast',
	// 			'validator' => \Config\Services::validation(),
	// 			'actor' => $this->actorModel->getActor(),
	// 			'getDrama' => $this->dramaModel->getDramaDetail($slug)
	// 		];
	// 		return view('app-dramaList/add-cast', $controllerData);
	// 	}
	// 	public function saveCast()
	// 	{
	// 		if (!$this->validate([
	// 			'actor-select' => 'required',
	// 			'actor-cast' => 'required',
	// 			'drama-ActorRole' => 'required',
	// 			'cast-cover' => [
	// 				'rules' => 'max_size[cast-cover, 1024]|is_image[cast-cover]|mime_in[cast-cover,image/jpg,image/jpeg,img/png]',
	// 				'errors' => [
	// 					'max_size' => "1MB is the maximum size.",
	// 					'is_image' => 'Only use image files',
	// 					'mime_in' => 'Only use image files'
	// 				]
	// 			]
	// 		])) {
	// 			return redirect()->to("/drama/add-cast/" . $this->request->getVar('drama-slug'))->withInput();
	// 		};

	// 		// Get, change name and upload it
	// 		$coverFile = $this->request->getFile('cast-cover');
	// 		if ($coverFile->getError() == 4) {
	// 			$coverName = 'notfound.png';
	// 		} else {
	// 			$coverName = $this->request->getVar('actor-select') . "_" . $this->request->getVar('actor-cast') . "." . $coverFile->getExtension();
	// 			$coverFile->move('img/cast', $coverName);
	// 		}

	// 		// d($coverName);
	// 		// dd($this->request->getVar());

	// 		$saveData = [
	// 			'id_drama' => $this->request->getVar('drama-id'),
	// 			'id_actor' => $this->request->getVar('actor-select'),
	// 			'cast_as' => $this->request->getVar('actor-cast'),
	// 			'role' => $this->request->getVar('drama-ActorRole'),
	// 			'cover' => $coverName
	// 		];

	// 		$this->dramaModel->saveCastDB($saveData);
	// 		return redirect()->to('/drama/' . $this->request->getVar('drama-slug'));
	// 	}
}
