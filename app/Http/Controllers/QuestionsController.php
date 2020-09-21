<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Question;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $placeholders = [
            "What is the difference between vegan and vegetarian?",
            "What do vegans eat?",
            "How to vegans get protein?",
            "Are vegans also gluten-free?",
            "I have a vegan coming to dinner, what should I serve them?",
            "Why would someone want to eat a vegan diet?",
            "Do you miss eating meat?",
            "I’m curious to try a vegan diet, what’s the best way to start?",
            "Is veganism a good way to lose weight?",
            "What is the best thing about being vegan?"
        ];
        $placeholder = Arr::random($placeholders);
        $questions = Question::orderBy("created_at", "desc")->paginate(5);
        return view("questions.index", ["questions" => $questions, "placeholder" => $placeholder]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "title" => ["required", "min:5", "ends_with:?"]
        ]);

        $question = new Question;
        $question->title = $request->input("title");
        $question->save();

        return redirect("/questions")->with("success", "Question added!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::find($id);
        return view("questions.show")->with("question", $question);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
