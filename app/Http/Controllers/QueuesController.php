<?php

namespace App\Http\Controllers;

use App\Models\Queue;
use App\Models\RumahSakit;
use Illuminate\Http\Request;

class QueuesController extends Controller
{
    public function index()
    {
        $rs = RumahSakit::all();
        return view("queue.index", compact("rs"));
    }

    public function history(){
        if (auth()->user()->role == 1){
            $antrian = Queue::where("isFinish",0)->orderByRaw("tanggal_antrian ASC, priority DESC")->paginate();
        }else{
            $antrian = Queue::where("user_id", auth()->id())->where("isFinish",0)->paginate();
        }
        return view("history.index",compact("antrian"));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show(Queue $queue)
    {
    }

    public function edit(Queue $queue)
    {
    }

    public function update(Request $request, Queue $queue)
    {
        $queue->update([
            'isFinish' => 1
        ]);
        return redirect()->route("queues.history");
    }

    public function destroy(Queue $queue)
    {
    }
}
