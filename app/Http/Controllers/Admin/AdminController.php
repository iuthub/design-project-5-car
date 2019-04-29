<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use Validator;
use Session;
use App\Car;
use App\Form;

class AdminController extends Controller {

    public function forms() {
        
        $forms = Form::paginate(6);

        return view('dashboard.forms',[
            'forms' => $forms
        ]);
    }

    public function deleteForm($id) {
        
        $form = Form::find($id);
        $form->delete();

        return redirect()->back();
    }

}