<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\SharedFunctionsTrait;
use App\Models\Car;
use App\Models\Comment;
use App\Models\Inventory;
use App\Models\job_posts;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    use SharedFunctionsTrait;

    public function index()
    {

        $cars = Car::all();
        $brand = Inventory::where('type', 'brand')->get();
        $text = Inventory::where('type', 'Welcome text')->get();
        $newCar = Car::orderBy('id', 'desc')->limit(3)->get();

        return view("Front.home.index", compact('text', 'brand', 'cars', 'newCar'));  
    }

    public function showSignUpForm()
    {
        return view('Front.authority.login.signup');
    }

    public function aboutUs()
    {
        return view('Front.home.AboutUs');
    }

    public function homeJob()
    {
        $data = job_posts::all();
        $count = $data->count();
        if ($count > 0)
        {
            foreach($data as $id){
                $id = $id->id;
                $user = job_posts::find($id);
            }
            $now = now();
            $deadline = $user->deadlines;
            $timeSpent = $now->diffIndays($deadline);
            return view('Front.home.Homejob', compact('data','timeSpent'));
        }
        else
        {
            return view('Front.home.Homejob', compact('data'))->with('no job posts yet');
        }
    }
    
    public function BuyACar()
    {
        $cars = Car::all();
        return view('Front.home.BuyACar' , compact('cars'));
    }
    public function Showcars()
    {
        $cars =Car::all();
        $comments = Comment::all();
        return view('home.index',compact('cars','comments'));
    }

    public function showJobs()
    {
        $job = job_posts::all();
        return view('home.Homejob', compact('job'));
    }
    
    public function MakeAnOrder(Request $request, $car_id)
    {
        $car = Car::findOrFail($car_id);
        $data = $request->validate([
            'order_name' =>'required|string',
            'orderNo' =>'required|string',
            'payment_mode' =>'required|string'
        ]);

        $order = $car->Order()->create($data);

        return redirect()->route('home.BuyACar', ['car'=>$car_id])->with('success', 'Order paced successifully');
    }

    public function rateus(Request $request)
    {
        $comment = new Comment();

        $comment->commenter_name = $request->commenter_name;
        $comment->commenter_phone = $request->commenterphone;
        $comment->commenter_email = $request->commenteremail;
        $comment->commenter_message = $request->commentermessage;

        $image = $request->file('commenter_image');
        $filename = time().'.'.
        $image -> getClientOriginalExtension();
        $image->move('workerImages', $filename);
        $comment->image = $filename;

        $comment-> save();

        return redirect()->back();
    }

    public function saveEmail(Request $request)
    {
        $sub = new Subscription();

        $validate = $request->validate([
            'name' => 'required|email|max:55'
        ]);

        if($validate)
        {
            $sub-> name = $request->name;
    
            $sub->save();
    
            return redirect()->back();
        }
        // else{
        //     return redirect()->back()->with('email Not Saved');
        // }
    }

    public function showUserdashboard(){
        $data = $this->getUser();
        $cars = Car::all();
        return view('Front.users.udashboard', compact('data', 'cars'));
    }

    public function getcarMake($text){
        $car = Car::where('car_make', $text);
        return $car;
    }
    public function getcarModel($text){
        $car = Car::where('car_model', $text);
        return $car;
    }
    public function getcarMileage($text){
        $car = Car::where('car_milleage', $text);
        return $car;
    }

    

    public function searchCar(Request $request)
    {
        $make = $request->input('make');
        $model = $request->input('model');
        $mileage = $request->input('mileage');

        $query = Car::query();

        if ($make) {
            $query->where('car_make', 'like', "%$make%");
        }

        if ($model) {
            $query->where('car_model', 'like', "%$model%");
        }

        if ($mileage) {
            $query->where('car_mileage', 'like', "%$mileage%");
        }

        $results = $query->get();

        if ($results->isEmpty()) {
            return redirect()->back()->with(['error' => 'No results found']);
        }

        return redirect()->back()->with(['results' => $results, 'make' => $make, 'model' => $model, 'mileage' => $mileage]);
    }

    public function showBmw()
    {
        $Cars = Car::where('car_make', 'bmw')->get();
        return redirect()->back()->with('Cars', $Cars);
    }

    public function showferrari()
    {
        $Cars = Car::where('car_make', 'ferari')->get();
        return redirect()->back()->with('Cars', $Cars);
    }

    public function showaudi()
    {
        $Cars = Car::where('car_make', 'audi')->get();
        return redirect()->back()->with('Cars', $Cars);
    }
    public function showacer()
    {
        $Cars = Car::where('car_make', 'acer')->get();
        return redirect()->back()->with('Cars', $Cars);
    }
    public function showdish()
    {
        $Cars = Car::where('car_make', 'dish')->get();
        return redirect()->back()->with('Cars', $Cars);
    }
    public function showhonda()
    {
        $Cars = Car::where('car_make', 'honda')->get();
        return redirect()->back()->with('Cars', $Cars);
    }
    public function showhyundai()
    {
        $Cars = Car::where('car_make', 'hyundai')->get();
        return redirect()->back()->with('Cars', $Cars);
    }
    public function showtoyota()
    {
        $Cars = Car::where('car_make', 'toyota')->get();
        return redirect()->back()->with('Cars', $Cars);
    }
    public function showchevrolet()
    {
        $Cars = Car::where('car_make', 'chevrolet')->get();
        return redirect()->back()->with('Cars', $Cars);
    }
    public function showhsbc()
    {
        $Cars = Car::where('car_make', 'hsbc')->get();
        return redirect()->back()->with('Cars', $Cars);
    }

    public function showrambolghini()
    {
        $Cars = Car::where('car_make', 'rambolghini')->get();
        return redirect()->back()->with('Cars', $Cars);
    }

    

}