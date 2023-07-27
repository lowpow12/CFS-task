<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{

    public function __construct()
    {
        
    }
    public function index()
    {
        $pageTitle = 'Feedback List'; // Ditambahkan
        $feedbacks = Feedback::all();
        return view('feedbacks.index', [
            'pageTitle' => $pageTitle, //Ditambahkan
            'feedback' => $feedbacks,
        ]);
    }

    public function create()//
    {
        $pageTitle = 'Create Feedback';
        

    return view('feedbacks.create', ['pageTitle' => $pageTitle]);
    }

    public function store(Request $request)//
    {
        $request->validate(
            [
                'sender' => 'required',
                'feedbacks' => 'required',
                'comments' => 'required',
            ],
            $request->all()
        );
        
        Feedback::create([
            'sender' => $request->sender,
            'feedbacks' => $request->feedbacks,
            'comments' => $request->comments,
        ]);

        return redirect()->route('feedbacks.wait');
    }

    public function wait()//
    {
        $pageTitle = 'Submitting Feedback';
        

    return view('feedbacks.wait', ['pageTitle' => $pageTitle]);
    }
    
    public function edit($id)//
    {
            $pageTitle = 'Edit Feedback';
            $feedback = Feedback::find($id);

            return view('feedbacks.edit', ['pageTitle' => $pageTitle, 'feedback' => $feedback]);
    }

    public function update(Request $request, $id)//
    {
        $feedback = Feedback::find($id);
        $feedback->update([
            'sender' => $request->sender,
            'feedbacks' => $request->feedbacks,
            'comments' => $request->comments,
        ]);
        

        return redirect()->route('feedbacks.index');
    }

    public function delete($id)//
    {
        $pageTitle = 'Delete Feedback';
        $feedback = Feedback::find($id);

        return view('feedbacks.delete', ['pageTitle' => $pageTitle, 'feedback' => $feedback]);
    }

    public function destroy($id)//
    {
        $feedback = Feedback::find($id);
        $feedback->delete();
        return redirect()->route('feedbacks.index');
    }

    
}