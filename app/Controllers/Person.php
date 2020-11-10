<?php

namespace App\Controllers;

use App\Models\ActorModel;

class Person extends BaseController
{
    protected $actorModel;

    public function __construct()
    {
        $this->actorModel = new ActorModel();
    }

    public function index()
    {
        $controllerData = [
            'breadcrumb' => 'person/index',
            'actorList' => $this->actorModel->getActorLimit()
        ];
        return view('appPerson/index', $controllerData);
    }

    public function actorIndex()
    {
        $controllerData = [
            'breadcrumb' => 'person/actor',
            'actorList' => $this->actorModel->getActor()
        ];
        return view('appPerson/personActor/index', $controllerData);
    }

    public function actorAdd()
    {
        $controllerData = [
            'breadcrumb' => 'person/actor/add-actor',
            'validator' => \Config\Services::validation()
        ];
        return view('appPerson/personActor/actorAdd', $controllerData);
    }

    // public function saveActor()
    // {
    //     if (!$this->validate([
    //         'actor-name' => "required",
    //         'actor-Birthday' => 'required',
    //         'actor-NameHangeul' => "required",
    //         'actor-Gender' => "required"
    //     ])) {
    //         return redirect()->to('/person/actor/add-actor')->withInput();
    //     };

    //     $slug = url_title($this->request->getVar('actor-name'), '_', false);
    //     // Get, change name and upload it
    //     $coverFile = $this->request->getFile('actor-cover');
    //     if ($coverFile->getError() == 4) {
    //         $coverName = 'notfound.png';
    //     } else {
    //         if ($this->request->getVar('actor-Gender') == "F") {
    //             $sufix = "actress.";
    //         } else {
    //             $sufix = "actor.";
    //         }
    //         $coverName = $slug . "_" . $sufix . $coverFile->getExtension();
    //         $coverFile->move('img/actor', $coverName);
    //     }

    //     $saveData = [
    //         'actor_name' => $this->request->getVar('actor-name'),
    //         'actor_nameHangeul' => $this->request->getVar('actor-NameHangeul'),
    //         'actor_birthName' => $this->request->getVar('actor-BirthName'),
    //         'actor_birthNameHangeul' => $this->request->getVar('actor-BirthNameHangeul'),
    //         'actor_birthday' => $this->request->getVar('actor-Birthday'),
    //         'actor_height' => $this->request->getVar('actor-Height'),
    //         'actor_gender' => $this->request->getVar('actor-Gender'),
    //         'actor_bloodType' => $this->request->getVar('actor-BloodType'),
    //         'cover' => $coverName,
    //         'slug' => $slug,
    //     ];

    //     $this->actorModel->saveActorDB($saveData);
    //     return redirect()->to('/person/actor');
    // }
}
