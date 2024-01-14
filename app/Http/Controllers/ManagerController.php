<?php

namespace App\Http\Controllers;

use App\Models\job_posts;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ManagerController extends Controller
{

    public function hrDashboard()
    {
        return view('Front.users.manager.hr.hrDashboard');
    }
    //functions needed by hr start
    Public function ShowWorkers()
    {
        $data = users::all();
        return view('Front.users.manager.hr.hrDatabase' ,compact('data'));
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

    public function getUser($id)
    {
        $userImage = users::find($id);
        return view('include.navbar', compact('userImage'));
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
            'title' => 'required|string',
            'description' => 'required|string',
            'qualifications' => 'required|string',
            'location' => 'required|string',
            'deadline' => 'required|date',
            'contact' => 'required|string'
        ]);

        if(!$validate){
            return redirect()->back()->with('please fill in all parts');
        }
        else{
            $post->title = $request->title;
            $post->description = $request->description;
            $post->qualification = $request->qualification;
            $post->location = $request->location;
            $post->deadline = $request->deadline;
            $post->contact = $request->contact;
            $post->benefits = $request->benefits;
            $post->opportunities = $request->opportunities;
    
            $post->save();
    
            return redirect()->back()->with('new post added successifully');
        }
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
        $data = job_posts::all();
        if($data)
        {
            foreach($data as $id){
                $id = $id->id;
            }
            $user = job_posts::find($id);
            $createdAt = $user->created_at;
            $deadline = $user->deadlines;
            $timeSpent = $createdAt->diffIndays($deadline);
            return view('Front.users.manager.hr.hrRecruitments', compact('data', 'timeSpent'));
        }
        return view('Front.users.manager.hr.hrRecruitments')->with('no job posts yet');
    }
    
    
    //functions needed by hr ends
}