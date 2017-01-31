<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Problem;
use App\User;
use Illuminate\Http\Request;

class ProblemController extends Controller
{
    public function index()
    {
        $problems = Problem::where('is_show', 1)->get();
        return view('problem.index', ['problems' => $problems]);
    }

    public function show($id)
    {
        $problem = Problem::findOrFail($id);
        return view('problem.show', ['problem' => $problem]);
    }

    public function nextProblem($id)
    {
        $nextProblemID = Problem::where('id', '>', $id)->min('id');
        return redirect()->action('ProblemController@show', ['id' => $nextProblemID]);
    }

    public function prevProblem($id)
    {
        $prevProblemID = Problem::where('id', '<', $id)->max('id');
        return redirect()->action('ProblemController@show', ['id' => $prevProblemID]);
    }

    public function replyAnswer(Request $request)
    {
        $content = $request->get('content');
        $problem_id = $request->get('problem_id');
        $user_id = $request->get('user_id');

        $answer = [
            'content' => $content,
            'problem_id' => $problem_id,
            'user_id' => $user_id,
        ];

        $answer = Answer::create($answer);

        $problem = Problem::findOrFail($problem_id);
        $user = User::findOrFail($user_id);

        if($problem->answer == $answer->content){
            $answer->is_correct = 1;
            $answer->save();

            $user->score += $problem->point;
            $user->save();
        }

        return redirect()->action('ProblemController@show', ['id' => $problem_id]);
    }

    #-----------------------------------------------------------------------------------------

    public function create()
    {
        return view('problem.create');
    }

    public function store(Request $request)
    {
        $problem = $request->all();
        $problem = Problem::create($problem);

        return redirect()->action('ProblemController@show', ['id' => $problem->id]);
    }

    public function edit($id)
    {
        $problem = Problem::findOrFail($id);

        return view('problem.edit', ['problem' => $problem]);
    }

    public function update(Request $request, $id)
    {
        $problem = Problem::findOrFail($id);
        $updatedProblem = $request->all();
        $problem->update($updatedProblem);

        return redirect()->action('ProblemController@show', ['id' => $problem->id]);
    }

    public function destroy($id)
    {
        $problem = Problem::findOrFail($id);
        $problem->delete();

        return redirect('admin');
    }

    public function admin()
    {
        $problems = Problem::all();

        return view('problem.admin', ['problems' => $problems]);
    }

    public function change($id)
    {
        $problem = Problem::findOrFail($id);
        if($problem->is_show == 1){
            $problem->is_show = 0;
        }else{
            $problem->is_show = 1;
        }
        $problem->save();

        return redirect('admin');
    }

    public function showAll()
    {
        $problems = Problem::all();
        foreach ($problems as $problem) {
            $problem->is_show = 1;
            $problem->save();
        }

        return redirect()->back();
    }

    public function hideAll()
    {
        $problems = Problem::all();
        foreach ($problems as $problem) {
            $problem->is_show = 0;
            $problem->save();
        }

        return redirect()->back();
    }

    public function handle1()
    {
        return 'OK, We receive the message GoodLuck!';
    }

    public function handle2(Request $request)
    {
        $from = $request->get('from');
        $call = $request->get('call');
        $message = $request->get('message');

        if($from == 'ultraman jack' && $call == 'ultraseven'){
            return 'OK, I will help you.';
        }
    }
}
