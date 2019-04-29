<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;
use Validator;
use Session;
use App\Car;
use App\File;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::paginate(2);
        return view('dashboard.cars.index',[
            'cars' => $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!isset($request->type)) $request->type = "Rent";
        $validator = $this->validateRequest($request);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $car = new Car;
        $car->name = $request->name;
        $car->description = $request->description;
        $car->type = $request->type;
        $car->price = $request->price;
        $car->sale = $request->sale;
        $car->publish = isset($request->publish) ? '1' : '0';
        $car->save();

        $image = new File;
        $image->type = 'car';
        $imageName = time().uniqid().'.'.$request->file('image')->getClientOriginalExtension();
        Image::make($request->file('image'))->resize(300, 200)->save('images/small/cars/'.$imageName);
        Image::make($request->file('image'))->save('images/cars/'.$imageName);
        $image->path = $imageName;
        $image->value_id = $car->id;
        $image->save();
        
        Session::flash('car-created','You have successfully created a new car!');

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
        $image = File::where('type','car')->where('value_id',$id)->first();
        // dd($image->path);

        return view('dashboard.cars.edit',[
            'car' => $car,
            'image' => $image
        ]);      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $this->validateRequest($request);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        $car = Car::find($id);
        $car->name = $request->name;
        $car->description = $request->description;
        $car->type = $request->type == null ? 'rent' : 'sell';
        $car->price = $request->price;
        $car->sale = $request->sale;
        $car->publish = isset($request->publish) ? '1' : '0';
        $car->save();

        if($request->hasFile('image')){
            $image = File::where('type','car')->where('value_id',$id)->first();
            unlink(public_path().'/images/cars/'.$image->path);
            $imageName = time().uniqid().'.'.$request->file('image')->getClientOriginalExtension();
            Image::make($request->file('image'))->resize(300, 200)->save('images/small/cars/'.$imageName);
            Image::make($request->file('image'))->save('images/cars/'.$imageName);
            $image->path = $imageName;
            $image->save();
        }
        
        Session::flash('car-created','You have successfully updated the car!');

        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);
        
        $image = File::where('type','car')->where('value_id',$id)->first();
        unlink(public_path().'/images/cars/'.$image->path);
        unlink(public_path().'/images/small/cars/'.$image->path);
        $car->delete();
        $image->delete();

        Session::flash('car-deleted','You have successfully deleted the car!');
        return redirect()->back();
    }

    // To validate request for model Car
    public function validateRequest($request)
    {
        return Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'max:2047|mimes:jpeg,png,jpg'
        ]);
    }
}
