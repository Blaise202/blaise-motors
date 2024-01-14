<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Comment;
use App\Models\Inventory;
use App\Models\job_posts;
use App\Models\Subscription;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $brand = Inventory::where('type', 'brand')->get();
        $text = Inventory::where('type', 'Welcome text')->get();
        return view("Front.home.index", compact('text', 'brand'));  
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
        if ($data)
        {
            foreach($data as $id){
                $id = $id->id;
            }
            $user = job_posts::find($id);
            $createdAt = $user->created_at;
            $deadline = $user->deadlines;
            $timeSpent = $createdAt->diffIndays($deadline);
            return view('Front.home.Homejob', compact('data','timeSpent'));
        }
        else
        {
            return view('Front.home.Homejob')->with('no job posts yet');
        }
    }
    
    public function BuyACar()
    {
        return view('Front.home.BuyACar');
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

        $sub-> name = $request->name;

        $sub->save();

        return redirect()->back();
    }
}