<?php

namespace App\Http\Controllers;

use App\Organizations;
use App\Tendor;
use App\Vacancys;
use Illuminate\Http\Request;

class TenderController extends Controller
{
    public function index(){

        $tenders = Tendor::all();
        $vacancy = Vacancys::all();
        $org = Organizations::all();
        return view('tenders', compact('tenders','vacancy', 'org'));
    }

    public  function show($id){
        $tenders = Tendor::find($id);

        return view('ShowTendor', compact('tenders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'view'=> 'required|max:255',
            'date'=> 'required|date',
            'personincharge'=> 'required|max:255',
            'vacancy_id'=> 'required|numeric',

        ]);

        $vacancy = new Tendor([
            'view' => $request->get('view'),
            'date' => $request->get('date'),
            'vacancy_id'=> $request->get('vacancy_id'),
            'personincharge' => $request->get('personincharge'),
        ]);

        $vacancy->save();

        return redirect('/tenders')->with('success', 'Тендор успешно добавлен!');
    }

    public  function create(){
        $tenders = Tendor::all();
        $vacancy = Vacancys::all();
        return view('CreateTendor',compact('vacancy','tenders'));
    }
    public  function edit($id){
        $tenders = Tendor::find($id);

        return view('EditTendor', compact('tenders'));
    }
    public  function destroy($id){
        $tenders = Tendor::find($id);
        $tenders->delete();

        return redirect('/tenders')->with('success', 'Тендер удален!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'view'=> 'required|max:255',
            'date'=> 'required|date',
            'personincharge'=> 'required|max:255',
        ]);

        $tenders = Tendor::find($id);
        $tenders->view = $request->get('view');
        $tenders->date = $request->get('date');
        $tenders->personincharge = $request->get('personincharge');
        $tenders->save();

        return redirect('/tenders')->with('success', 'Тендер успешно отредактирован!');
    }
}
