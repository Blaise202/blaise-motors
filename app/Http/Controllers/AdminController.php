<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\User;
use App\Models\Order;
use App\Models\customers;
use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\SharedFunctionsTrait;

class AdminController extends Controller
{

    use SharedFunctionsTrait;

    // <dashboard>
    public function counts()
    {
        $data = $this->getUser();
        $totalCars = Car::count();
        $totalWorkers = User::where('status', 'active')->count();
        $carsAvailable = Car::where('number', '>', 0)->count();
        $pendingOrders = Order::where('payment_mode', 'unsettled')->count();
        $completedOrders = Order::where('payment_mode', 'completed')->count();        
        $registeredCustomers = customers::count();
        
        return view('Front.users.admin.dashboard', compact('totalCars','totalWorkers', 'registeredCustomers', 'pendingOrders', 'completedOrders','carsAvailable', 'data'));    
    }

    // </dashboard>

    // <vehicles>
    
    public function ViewCars()
    {
        
        $data = $this->getUser();
        $car = Car::where('status', 'Visible')->get();
        return view('Front.users.admin.ViewCars',compact('car', 'data'));
    }

    public function SalesAnalytics()
    {
        
        $data = $this->getUser();
        return view('Front.users.admin.SalesAnalytics', compact('data'));
    }
    
    public function showClients()
    {
        $data = $this->getUser();
        $customer = customers::all();
        return view('Front.users.admin.Clients', compact('customer', 'data'));
    }
    
    public function showInventory()
    {
        
        $data = $this->getUser();
        $text = Inventory::where('status','current')->get();
        $brand = Inventory::where('type', 'brand')->get();
        $car = Car::all();
        $user = User::all();
        return view('Front.users.admin.Inventory', compact('text', 'brand', 'car', 'user', 'data'));   
    }
    
    public function showRemoveCar()
    {
        $data = $this->getUser();
        $data = Car::where('status', 'Visible')->get();
        return view('Front.users.admin.RemoveCar', compact('data', 'data'));
    }

    public function AddNew()
    {
        $data = $this->getUser();
        return view('Front.users.admin.AddNew', compact('data'));
    }
    public function AddNewCar(Request $request)
    {
        // Validate the request data
        $request->validate([
            'car_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
    
        // Process the validated data
        $cars = new Car();
        $image = $request->file('car_image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->move('carimages', $filename);
    
        $cars->car_image = $filename;
        $cars->car_make = $request->car_make;
        $cars->car_model = $request->car_model;
        $cars->body_type = $request->body_type;
        $cars->transmission = $request->transmission;
        $cars->mileage = $request->mileage;
        $cars->VIN = $request->VIN;
        $cars->price = $request->price;
        $cars->description = $request->overall_description;
    
        $cars->save();
    
        return redirect()->back()->with('message', 'New Car Added Successfully');
    }
    

    public function removeCarId($id)
    {
        $data = Car::find($id);
        $data->update(['status' => 'invisible']);
        return redirect()->back()->with('message', 'Car Status Changed to "invisible" Successifully');
    }

    public function editCar($id)
    {
        
        $data = $this->getUser();
        $car = Car::find($id);
        return view('Front.users.admin.editCar', compact('data', 'car'));
    }
    

    public function updateCar(Request $request, $id)
    {
        $car = Car::find($id);
        
        $car->car_make = $request->car_make;
        $car->car_model = $request->car_model;
        $car->body_type = $request->body_type;
        $car->transmission = $request->transmission;
        $car->mileage = $request->mileage;
        $car->VIN = $request->VIN;
        $car->price = $request->price;
        $car->description = $request->overall_description;
        $car->number = $request->number;
        $image = $request->image;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->file->move('carimages', $imagename);

            $car->image = $imagename;
        } 

        $car->save();
        
        return redirect()->back()->with('success','car updated successifully!');
    }

    public function saveWelcomeText(Request $request)
    {
        $text = new Inventory();
        if($text)
        {
            $text->name = $request-> name;
            $text->type = $request-> type;

            $text->save();

            return redirect()->back()->with('successs','Welcome text saved successiflly') ;
        }

        else
        {
            return redirect()->back()->with('danger','Something Went wrong');
        }
    }

    public function saveNewbrand(Request $request)
    {
        $brand = new Inventory();

        $brand->type = $request->type;
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->move('brand', $filename);
    
        $brand->image = $filename;

        $brand->save();

        return redirect()->back();

    }

    public function myAccount($id)
    {
        $data = $this->getUser();
        $user = User::find($id);
        return view('Front.users.admin.myAccount', compact('user', 'data'));
    }

    public function updateAccount(Request $request, $id)
    {
        $user = User::find($id);

        $validate = $request->validate([
            'gender' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone' => 'required|string'
        ]);

        if($validate)
        {
            $user->gender = $request->gender;
            $user->phone = $request->phone;
            $image = $request->file('image');
            {
                $imagename = time().'.'.$image->getClientOriginalExtension();
    
                $request->file->move('usersimages', $imagename);
    
                $user->image = $imagename;
            } 
            $user -> save();
            return redirect()->back();
        }
    }
    

  

    

    

    
    
}