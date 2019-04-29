<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\News;
use App\File;
use App\Car;
use App\Form;
use App\Contact;

class SiteController extends Controller {

    public function __construct() {

        $footerNews = News::orderBy('id','desc')->where('published',1)->take(3)->get();
        view()->share('footerNews',$footerNews);
    }

    public function index() {

        $hotSales = Car::where('publish',1)->where('sale','>',5)->take(6)->get();

        return view('site.index',[
            'hotSales' => $hotSales
        ]);
    }

    public function news() {
        $news = News::where('published',1)->paginate(6);
        $latestNews = News::orderBy('id','desc')->where('published',1)->take(4)->get();

        return view('site.news',[
            'news' => $news,
            'latestNews' => $latestNews
        ]);
    }

    public function newsSingle($id) {
        $news = News::find($id);
        $image = File::where('type','news')->where('value_id',$news->id)->first();
        $latestNews = News::orderBy('id','desc')->where('published',1)->take(4)->get();

        return view('site.news-single',[
            'news' => $news,
            'image' => $image,
            'latestNews' => $latestNews
        ]);
    }

    public function searchNews(Request $request) {

        $keyword = $request->key;

        if($keyword == NULL || $keyword == " ") {
            return redirect()->to('/news');
        }

        $latestNews = News::orderBy('id','desc')->where('published',1)->take(4)->get();
		$news = News::where('title','like',"%{$keyword}%")
							->paginate(8)
							->map(function ($row) use ($keyword) {
								$row->title = preg_replace('/(' . $keyword . ')/i', "<span style=\"background-color: #fbad1a;padding: 0 3px;\">$1</span>", $row->title);
								return $row;
                            });
    
        return view('site.news-search',[
            'news' => $news,
            'latestNews' => $latestNews
        ]);
    }

    public function about() {
        return view('site.about');
    }

    public function cars(Request $request) {

        if($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'priceRange' => 'required|numeric',
            ]);
    
            if($validator->fails()) {
                return back()->withErrors($validator);
            }
    
            $carType = $request->type == "Buy" ? "sell" : "rent";
            $priceRange = $request->priceRange;
    
            $cars = Car::where('publish',1)->where('type',$carType)->where('price','>',$priceRange)->paginate(9);
        } else {
            $cars = Car::where('publish',1)->paginate(9);
        }

        $popularCars = Car::orderBy('id','desc')->where('publish',1)->where('sale','>',5)->take(5)->get();
        $carInstance = new Car;
        $minPrice = $carInstance->getMinPrice();
        $maxPrice = $carInstance->getMaxPrice();


        return view('site.cars',[
            'cars' => $cars,
            'popularCars' => $popularCars,
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice
        ]);
    }

    public function carSingle($id) {
        $car = Car::where('publish',1)->where('id',$id)->first();
        $popularCars = Car::orderBy('id','desc')->where('publish',1)->where('sale','>',5)->take(5)->get();
        $image = File::where('value_id',$id)->first();
        $carInstance = new Car;
        $minPrice = $carInstance->getMinPrice();
        $maxPrice = $carInstance->getMaxPrice();

        return view('site.car-single',[
            'car' => $car,
            'popularCars' => $popularCars,
            'image' => $image,
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice
        ]);
    }

    public function searchCars(Request $request) {
        
        $keyword = $request->key;
        if($keyword == NULL || $keyword == " ") {
            return redirect()->to('/cars');
        }

		$cars = Car::where('name','like',"%{$keyword}%")
							->paginate(9)
							->map(function ($row) use ($keyword) {
								$row->name = preg_replace('/(' . $keyword . ')/i', "<span style=\"background-color: #072d4d;padding: 0 3px;\">$1</span>", $row->name);
								return $row;
                            });
        $popularCars = Car::orderBy('id','desc')->where('publish',1)->where('sale','>',5)->take(5)->get();
        $carInstance = new Car;
        $minPrice = $carInstance->getMinPrice();
        $maxPrice = $carInstance->getMaxPrice(); 

        return view('site.cars-search',[
            'cars' => $cars,
            'popularCars' => $popularCars,
            'minPrice' => $minPrice,
            'maxPrice' => $maxPrice
        ]);
    }

    public function contact() {
        return view('site.contact');
    }

    public function form(Request $request) {

        if($request->ajax()) {
            
            $name = $request->name;
            $familyName = $request->familyname;
            $passport = $request->passport;
            $code = $this->getRandomString();
            

            $form = new Form;
            $form->name = $name;
            $form->familyname = $familyName;
            $form->passport = $passport;
            $form->user_id = Auth::user()->id;
            $form->car_id = $request->car_id;
            $form->code = $code;
            $form->save();

            return $code;
        }
    }

    // https://stackoverflow.com/questions/5444877/generating-a-unique-random-string-of-a-certain-length-and-restrictions-in-php
    public function getRandomString($length = 8) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $string = '';
    
        for ($i = 0; $i < $length; $i++) {
            $string .= $characters[mt_rand(0, strlen($characters) - 1)];
        }
    
        return $string;
    }

    public function leaveContact(Request $request) {

        $validator = Validator::make($request->all(), [
            'email' => "required|email",
            'body' => "required",
            'topic' => "required"
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator);
        }

        $contact = Contact::create($request->all());

        return back();
    }

}