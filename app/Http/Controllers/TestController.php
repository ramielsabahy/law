<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('tests.create')->with('courses', \App\Course::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $course = $request->course;
        $question = $request->question;
        $answer = $request->answer;
        \App\Test::create(['course' => $course, 'question' => $question, 'answer' => $answer]);
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $tests = \App\Test::orderBy('created_at','DESC')->get();
        return view('tests.show')->with('tests', $tests);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = \App\Test::where('id', $id)->first();
        return view('tests.edit')->with('test', $test)
        						 ->with('courses', \App\Course::get());
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
        $test = \App\Test::find($id);
        $test->course = $request->course;
        $test->question = $request->question;
        $test->answer = $request->answer;
        $test->save();
        return redirect()->route('showTest');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        \App\Test::where('id', $id)->delete();
        return redirect()->back();
    }
}
