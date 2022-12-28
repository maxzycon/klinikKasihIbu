<?php

namespace App\Http\Controllers;

use App\Models\CategoryRs;
use App\Models\RumahSakit;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class CategoryRsController extends Controller
{
    public function index()
    {
        $kategori = CategoryRs::paginate();
        return view('kategori.index',compact("kategori"));
    }

    public function create()
    {
        Debugbar::startMeasure('getRumahSakit','Time for getRumahSakit from database');
        $db = RumahSakit::all()->toArray();
        Debugbar::stopMeasure('getRumahSakit');

        Debugbar::startMeasure('array','Time for sort array');
        $rs = $this->array_msort($db, ["id" => SORT_DESC]);
        Debugbar::stopMeasure('array');
        return view("kategori.create",compact('rs'));
    }

    function array_msort($array, $cols) // sorting function array
    {
        $colarr = array();
        foreach ($cols as $col => $order) {
            $colarr[$col] = array();
            foreach ($array as $k => $row) { $colarr[$col]['_'.$k] = strtolower($row[$col]); }
        }
        $eval = 'array_multisort(';
        foreach ($cols as $col => $order) {
            $eval .= '$colarr[\''.$col.'\'],'.$order.',';
        }
        $eval = substr($eval,0,-1).');';
        eval($eval);
        $ret = array();
        foreach ($colarr as $col => $arr) {
            foreach ($arr as $k => $v) {
                $k = substr($k,1);
                if (!isset($ret[$k])) $ret[$k] = $array[$k];
                $ret[$k][$col] = $array[$k][$col];
            }
        }
        return $ret;
    }

    public function store(Request $request)
    {
        CategoryRs::create($request->all());
        return redirect()->route("kategori.index");
    }

    public function show(CategoryRs $categoryRs)
    {
    }

    public function edit(CategoryRs $categoryRs)
    {
    }

    public function update(Request $request, CategoryRs $categoryRs)
    {
    }

    public function destroy(CategoryRs $categoryRs)
    {
    }
}
