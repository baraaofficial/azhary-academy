<?php

namespace App\Http\Controllers\Api;

use App\Models\Calss;
use App\Models\CartCourse;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Question;
use App\Models\QuestionsOption;
use App\Models\RequestLog;
use App\Models\Subject;
use App\Models\Test;
use App\Models\TestAnswer;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{

    // Start list courses

    public function courses() {

        $courses = Course::orderBy('id', 'desc')->limit(100)->get();

        return responseJson(1, 'success',  $courses);
    }

    public function class(Request $request) {
        $course = Course::where(function ($query) use ($request) {
            if ($request->has('class_id'))
            {
                $query->where('class_id',$request->class_id);
            }
        })->get();

        return responseJson(1, 'success',  $course);
    }

    public function subjects(Request $request) {

        $course = Course::where(function ($query) use ($request) {
            if ($request->has('subject_id'))
            {
                $query->where('subject_id',$request->subject_id);
            }
        })->orderBy('id', 'desc')->limit(100)->get();

        return responseJson(1, 'success',  $course);

    }

    public function getsubjects(Request $request) {

        $get_subjects = Subject::orderBy('id', 'desc')->limit(100)->get();

        return responseJson(1, 'success',  $get_subjects);

    }

    public function getclass(Request $request) {

        $get_class = Calss::all();

        return responseJson(1, 'success',  $get_class);

    }

    public function teacher(Request $request) {
        $course = Course::where(function ($query) use ($request) {
            if ($request->has('teacher_id'))
            {
                $query->where('teacher_id',$request->teacher_id);
            }
        })->get();

        return responseJson(1, 'success',  $course);

    }

    public function category(Request $request) {
        $course = Course::where(function ($query) use ($request) {
            if ($request->has('category_id'))
            {
                $query->where('category_id',$request->category_id);
            }
        })->get();

        return responseJson(1, 'success',  $course);

    }
    // End list courses

    //===========================//

    // Start list lesson
    public function lessons(Request $request) {

        $course = Course::where(function ($query) use ($request) {
            if ($request->has('id'))
            {
                $query->where('id',$request->id);
            }
        })->firstOrFail();
      //  $course  = Course::where('id', $id)->firstOrFail();
        $payment = CartCourse::where('course_id', $course->id)->where('user_id', auth::user()->id)->whereHas('cart', function($q){
            return $q->where('paid', 1);
        })->count();

            if($payment){
                $lessons = $course->lessons()->get();

            } else {
                $lessons = $course->lessons()->where('isFree', 1)->get();

            }
           // dd($lessons);
        return responseJson(1, 'success', $lessons);

    }

    public function lesson(Request $request) {
        $lessons = Lesson::where(function ($query) use ($request) {
            if ($request->has('id'))
            {
                $query->where('id',$request->id);
            }
        })->firstOrFail();
        $course = $lessons->course;
        $payment = CartCourse::where('course_id', $course->id)->where('user_id', auth::user()->id)->whereHas('cart', function($q){
            return $q->where('paid', 1);
        })->first();
        if(!isset($payment) && $lessons->isFree == 0){
            abort(404);
        }
        else
        {
            return responseJson(1, 'success', $lessons);
        }


    }
    // End list lesson

    //===========================//

    // Create list favourite

    public function postFavourite(Request $request)
    {
        RequestLog::create(['content' => $request->all(), 'service' => 'Course toggle favourite']);
        $rules = [
            'course_id' => 'required|exists:courses,id',
        ];
        $validator = validator()->make($request->all(), $rules);

        if ($validator->fails()) {
            return responseJson(0, $validator->errors()->first(), $validator->errors());
        }

        $toggle = $request->user()->favourites()->toggle($request->course_id);

        return responseJson(1, 'Success', $toggle);
    }

    //===========================//

    //  List myFavourite

    public function myFavourites(Request $request)
    {
        $courses = $request->user()->favourites()->latest()->paginate(20);// oldest()
        return responseJson(1, 'Loaded...', $courses);
    }

    //===========================//


    // List myCourses
    public function myCourses(Request $request)
    {
        $user = User::where(function ($query) use ($request) {
            if ($request->has('email'))
            {
                $query->where('email',$request->email);
            }
        })->firstOrFail();

        $payments = CartCourse::where('user_id', auth::user()->id)->whereHas('cart', function($q){
            return $q->where('paid', 1);
        })->paginate(30);

        return responseJson(1, 'success', $payments);

    }

    //===========================//

    // Count Notifications
    public function notificationsCount(Request $request)
    {
        $count = $request->user()->notifications()->where(function ($query) use ($request) {
            $query->where('is_read',0);
        })->count();
        return responseJson(1, 'loaded...',[
            'notifications-count' => $count
        ]);
        // 'notifications_count' => $request->user()->notifications()->count()

    }

    //===========================//

    // Notifications

    public function notifications(Request $request)
    {
        $items = $request->user()->notifications()->latest()->paginate(20);
        return responseJson(1, 'Loaded...', $items);
    }

    public function questions(Request $request)
    {
        $lesson = Lesson::where(function ($query) use ($request) {
            if ($request->has('id'))
            {
                $query->where('id',$request->id);
            }
        })->firstOrFail();

        $questions = Question::where('lesson_id',$lesson->id)->paginate(10);

        foreach ($questions as $question)
        {
            $question->options = QuestionsOption::where('question_id', $question->id)->get();
        }

        return responseJson(1, 'success',  $questions);

    }

    public function options($id)
    {
        $lesson = Lesson::findOrFail($id);
        //   dd($lesson->id);
        $questions = Question::inRandomOrder()->where('lesson_id',$lesson->id)->paginate(10);
        foreach ($questions as $question)
        {
            $question->options = QuestionsOption::where('question_id', $question->id)->get();
        }

        return responseJson(1, 'success',  $question);    }

    public function test(Request $request)
    {
        $result = 0;

        $test = Test::create([
            'user_id' => Auth::id(),
            'result'  => $result,
        ]);

        foreach ($request->input('questions', []) as $key => $question) {
            $status = 0;

            if ($request->$question != null
                && QuestionsOption::find($request->$question)->correct
            ) {
                $status = 1;
                $result++;
            }
            TestAnswer::create([
                'user_id'     => Auth::id(),
                'test_id'     => $test->id,
                'question_id' => $question,
                'option_id'   => $request->$question,
                'correct'     => $status,
            ]);
        }

        $test->update(['result' => $result]);

        return responseJson(1, 'success',  $test);

    }

    public function result(Request $request)
    {
        $test = Test::where(function ($query) use ($request) {
            if ($request->has('id'))
            {
                $query->where('id',$request->id);
            }
        })->firstOrFail();

        if ($test) {
            $results = TestAnswer::where('test_id', $test->id)
                ->with('question')
                ->with('question.options')
                ->get();
        }

        return responseJson(1, 'success', $test);
    }

    public function search(Request $request)
    {

        $data = $request->get('data');
        if ($request->get('data')) {
            $search_drivers = Course::where('name', 'like', "%{$data}%")
                ->orWhere('description', 'like', "%{$data}%")
                ->latest()->paginate(3);

            return responseJson(1, 'success', $search_drivers);

        }
    }

}
