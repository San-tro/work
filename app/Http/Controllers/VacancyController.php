<?php

namespace App\Http\Controllers;

use App\Vacancys;
use App\Organizations;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
public function index(){
 $vacancy = Vacancys::all();
 $org = Organizations::all();
 return view('vacancy', compact('vacancy' , 'org'));
}

public  function show($id){
    $vacancy = Vacancys::find($id);

    return view('ShowVacancy', compact('vacancy'));
}

    public function store(Request $request)
    {
        $request->validate([
            'direction'=> 'required|max:255',
            'organization_id'=>'required|numeric'
        ]);

        $vacancy = new Vacancys([
            'direction' => $request->get('direction'),
            'organization_id' => $request->get('organization_id'),
        ]);

        $vacancy->save();

        return redirect('/vacancy')->with('success', 'Вакансия успешно добавлена!');
    }

 public  function create(){
    $org = Organizations::all();
     return view('CreateVacancy',compact('org'));
 }
public  function edit($id){
    $vacancy = Vacancys::find($id);

    return view('EditVacancy', compact('vacancy'));
}
public  function destroy($id){
    $vacancy = Vacancys::find($id);
    $vacancy->delete();

    return redirect('/vacancy')->with('success', 'Вакансия удалена!');
}

    public function update(Request $request, $id)
    {
        $request->validate([
            'direction'=> 'required|max:255',
        ]);

        $vacancy = Vacancys::find($id);
        $vacancy->direction = $request->get('direction');
        $vacancy->save();

        return redirect('/vacancy')->with('success', 'Вакансия успешно отредактирована!');
    }

}
