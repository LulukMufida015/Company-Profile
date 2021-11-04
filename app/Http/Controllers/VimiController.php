<?php

namespace App\Http\Controllers;

use App\Models\Target;
use App\Models\Vimi;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class VimiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vimi = Vimi::with('target')->get();
        // return dd($vimi);
        return view('profile', ['vimi' => $vimi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $target = Target::all();
        return view('admin.inputVisi', ['target' => $target]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Vimi::create($request->all());
        $visi = new Vimi;
        $visi->visi = $request->get('visi');
        $visi->idtarget = $request->get('idtarget');

        return redirect('profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;
        $count = Vimi::all()->count();
        $vimi = Vimi::with('target')->where('id', $id)->first();
        $vimi->visi = $request->get('visi');
        $vimi->idtarget = $request->get('idtarget');
        $vimi->save();

        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vimi::where('id', $id)->delete();
        return redirect()->route('beranda.index');
    }

    public function targetVisi()
    {
        $target = Target::all();
        return $target;
    }
}
