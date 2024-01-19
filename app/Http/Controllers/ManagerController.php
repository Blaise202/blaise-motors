<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Traits\SharedFunctionsTrait;
use App\Models\job_posts;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ManagerController extends Controller
{
    use SharedFunctionsTrait;

    public function hrDashboard()
    {
        $data = $this->getUser();
        $director = users::where('rank', '2')->get();
        $manager = users::where('rank', '3')->get();
        $seller = users::where('rank', '4')->get();
        $distributer = users::where('rank', '5')->get();
        $tech = users::where('rank', '6')->get();

        return view('Front.users.manager.hr.hrDashboard', compact('director','manager','seller','distributer', 'tech', 'data'));
    }
    //functions needed by hr start
    Public function ShowWorkers()
    {
        $totalUsers = Users::count();
        $currentWorkers = users::where('status', 'active')->count();
        $previousWorkers = users::where('status', 'terminate')->count();
        $data = $this->getUser();
        $user = users::all(); 
        return view('Front.users.manager.hr.hrDatabase' ,compact('data', 'user','totalUsers','currentWorkers','previousWorkers'));
    }

   

    public function getWorkerbyRank()
    {
        $director = users::where('rank', '2');
        $manager = users::where('rank', '3');
        $seller = users::where('rank', '4');
        $distributer = users::where('rank', '5');
        $tech = users::where('rank', '6');

        return view('hr.hrDashboard', compact('director','manager','seller','distributer', 'client'));
    }

    public function addWorker(Request $request)
    {
        $worker = new Users();
        $image = $request->file('image');

            $filename = time().'.'.
            $image -> getClientOriginalExtension();
            $image->move('workerImages', $filename);
            $worker->image = $filename;
        $worker->name = $request->name;
        $worker->gender = $request->gender;
        $worker->title = $request->title;
        $worker->email = $request->email;
        $worker->phone = $request->phone;
        $worker->PIN = $request->PIN;
        $worker->password = $request->password;

        $worker->save();

        return redirect()->back()->with('new user added successifully');		

    }

    public function removeWorker($id)
    {
        $data = users::find($id);
        $data -> update(['status' => 'terminate']);
        return redirect()->back()->with('message', 'worker status set to fired');
    }


    public function WorkersCounts()
    {

        $totalUsers = Users::count();
        $currentWorkers = users::where('status', 'active');
        $previousWorkers = users::where('status', 'terminate');

        return view('hr.hrDatabase', compact('totalUsers', 'currentWorkers', 'previousWorkers'));    
    }

    public function AddJob_post(Request $request)
    {
        $post = new job_posts();

        $validate = $request -> validate([
            'job_title' => 'required|string',
            'job_description' => 'required|string',
            'qualification' => 'required|string',
            'locations' => 'required|string',
            'deadline' => 'required|date',
            'phone' => 'required|string'
        ]);

        if($validate){
            $post->title = $request->title;
            $post->job_description = $request->job_description;
            $post->qualification = $request->qualification;
            $post->locations = $request->locations;
            $post->deadlines = $request->deadlines;
            $post->phone = $request->phone;
            $post->benefits = $request->benefits;
            $post->opportunities = $request->opportunities;
    
            $post->save();
    
            return redirect()->back()->with('new post added successifully');
        }
        // else{
        //     return redirect()->back()->with('please fill in all parts');
        // }
    }

    public function getjob($id)
    {
        $data = job_posts::find($id);
        return view('hr.hrRecruitments', compact('data'));
    }

    public function deletePost($id)
    {
        $data = job_posts::find($id);
        $data -> delete();

        return redirect()->back();
    }

    public function getApplicants($jobId)
    {
        $job = job_posts::findOrFail($jobId);
        $applicants = $job->applicants;
        return view('Front.users.hr.hrRecruitments', compact('applicants'));
    }

    public function hrRecruitments()
    {
        $data =$this->getUser();
        $posts = job_posts::all();
        if($posts)
        {
            foreach($posts as $id){
                $id = $id->id;
                $user = job_posts::find($id);
                $createdAt = $user->created_at;
                $deadline = $user->deadlines;
                $timeSpent = $createdAt->diffIndays($deadline);
                return view('Front.users.manager.hr.hrRecruitments', compact('data', 'timeSpent','posts'));
            }
        }
        return view('Front.users.manager.hr.hrRecruitments', compact('data','posts'))->with('no job posts yet');
    }
    
    
    //functions needed by hr ends
}