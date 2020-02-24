<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    //


	public function index(){
		$cars=Car::all();
		return view('carindex',compact('cars'));

	}

    public function create()
    {
        return view('createcar');
    }


    public function store(Request $req){
    	$car = new Car();
    	$car->carcompany=$req->carcompany;
    	$car->model=$req->model;
    	$car->price=$req->price;
    	$car->save();

    	return redirect('car')->with('success','Car has been successfully added');
    }

    public function edit($id)
    {
        $car = Car::find($id);
        return view('caredit',compact('car','id'));
    }

    public function update(Request $req, $id)
    {
        $car= Car::find($id);
        $car->carcompany = $req->carcompany;
        $car->model = $req->model;
        $car->price = $req->price;        
        $car->save();
        return redirect('car')->with('success', 'Car has been successfully update');
    }

    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();
        return redirect('car')->with('success','Car has been  deleted');
    }
}
