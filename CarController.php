<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    
    public function __construct() {
        // only Admins have access to the following methods
        $this->middleware('auth.admin')->only(['create', 'store', 'edit', 'update']);
        // only authenticated users have access to the methods of the controller
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::orderBy('Manufacturer')->get();
        return view('cars',  compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'VIN_Nr' => 'required|string|min:8|max:191',
            'Manufacturer' => 'required|string|min:3|max:191',
            'New_Used' => 'required|string|min:3|max:191',
            'Type' => 'required|string|min:3|max:191',
            'Model' => 'required|string|min:1|max:191',
            'Year' => 'required|digits:4|integer|max:'.(date('Y')),
            'Engine_Type' => 'required|string|min:3|max:191',
            'Power' => 'required|integer|min:1|max:1000',
            'Mileage' => 'required|integer|min:1|max:10000000',
            'Price' => 'required|integer|min:1|max:100000',
            'Tax' => 'required|between:0,599.99',
        );        
        $this->validate($request, $rules); 
        
        $car = new Car();
        $car->VIN_Nr = $request->VIN_Nr;
        $car->Manufacturer = $request->Manufacturer;
        $car->Type = $request->Type;
        $car->Model = $request->Model;
        $car->Year = $request->Year;
        $car->Engine_Type = $request->Engine_Type;
        $car->Power = $request->Power;
        $car->Mileage = $request->Mileage;
        $car->Price = $request->Price;
        $car->Tax = $request->Tax;
        $car->save();
        return redirect()->route('car.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('car', compact('car'));
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
        return view('edit', compact('car'));
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
        $car = Car::find($id);
        $car->Price = $request->Price;
        $car->Discount = $request->Discount;
        
        $car->update();
        return redirect()->route('car.index');
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
        $car->delete();
        return view('bought');
    }
}
