<?php

namespace App\Http\Controllers\Expert;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use App\Models\Expert;
use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function index()
    {
        $complaints = Complaint::with(['user', 'image'])
        ->where('expert_id', null)
        ->orderBy('created_at', 'desc')
        ->get();
        //dd($complaints);

        $count = Complaint::where('expert_id', null)->count();

        return view ('expert.index',compact('complaints','count'));
    }

    public function approve(Request $request)
    {
        $complaintId = $request->input('complaint_id');
        $complaint = Complaint::findOrFail($complaintId);
        $complaint->expert_id = auth()->user()->id;
        $complaint->save();

        return response()->json(['message' => 'Complaint approved successfully']);
    }

}
