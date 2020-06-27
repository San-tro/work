<?php

namespace App\Http\Controllers;
use App\Organizations;
use App\User;
use App\Resumes;
use App\Vacancys;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('user',compact('user'));
    }
    public function store(Request $request)
    {
        //$user = User::all();
        //$resume = Resumes::all();
        //return view('CreateResume',compact('user','resume'));
        $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'patronymic' => 'required|max:255',
            'birthday' => 'required|date',
            'lastplacework' => 'required|max:255',
            'vieweducation' => 'required|max:255',
            'course' => 'required|max:255',
            'speciality' => 'required|max:255',
            'institution' => 'required|max:255',
            'endyear' =>'required|date',
            'telephone' =>'required|numeric',
        ]);

        $resume = new Resumes([
            'name' => $request->get('name'),
            'surname' => $request->get('surname'),
            'patronymic' => $request->get('patronymic'),
            'birthday' => $request->get('birthday'),
            'lastplacework' => $request->get('lastplacework'),
            'vieweducation' => $request->get('vieweducation'),
            'course' => $request->get('course'),
            'speciality' => $request->get('speciality'),
            'institution' => $request->get('institution'),
            'endyear' =>$request->get('endyear'),
            'telephone' =>$request->get('telephone'),
        ]);

        $resume->save();

        return redirect('/user')->with('success', 'Резюме успешно добавлено!');
    }

    public  function create(){
        $resume = Resumes::all();
        return view('CreateResume',compact('resume'));
    }

    public  function show($id){
        $resume = Resumes::find($id);
        return view('ShowResume',compact('resume'));
    }
}
