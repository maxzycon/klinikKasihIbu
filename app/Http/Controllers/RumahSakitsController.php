<?php

namespace App\Http\Controllers;

use App\Models\CategoryRs;
use App\Models\Queue;
use App\Models\RumahSakit;
use Illuminate\Http\Request;

class RumahSakitsController extends Controller
{
    public function index()
    {
        $rs = RumahSakit::paginate();
        return view('rs.index', compact('rs'));
    }

    public function create()
    {
        return view("rs.create");
    }

    public function store(Request $request)
    {
        $upldFile = $request->file("thumbnail_rs")->store("rs_thumbnail",'public');
        RumahSakit::create(['thumbnail_rs' => $upldFile, 'nama_rs' => $request->post("nama_rs"),'descriptiton_rs' => $request->post("descriptiton_rs"), 'alamat_rs' => $request->post("alamat_rs")]);
        return redirect()->route("rumahSakit.index");
    }

    public function showCategoryRumahSakit(RumahSakit $rumahSakit)
    {
        $rumahSakit->load("categoryRs");
        return view("queue.showCategory", compact("rumahSakit"));
    }

    public function showCategoryRumahSakitList(CategoryRs $category)
    {
        return view("queue.showCategoryList", compact("category"));
    }

    public function storeQueue(Request $request, CategoryRs $category)
    {
        Queue::create([
            'priority' => $request->post("priority"),
            'tanggal_antrian' => $request->post("tanggalQueue"),
            'isFinish' => 0,
            'category_rs_id' => $category->id,
            'user_id' => auth()->id(),
            'alasan' => $request->post("alasan")
        ]);
        return redirect()->route("queues.history");
    }



    public function edit(RumahSakit $rumahSakit)
    {
    }

    public function update(Request $request, RumahSakit $rumahSakit)
    {
    }

    public function destroy(RumahSakit $rumahSakit)
    {
    }
}
