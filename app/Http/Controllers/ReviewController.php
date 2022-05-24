<?php

namespace App\Http\Controllers;
use App\Models\Feedbacks;
use Illuminate\Http\Request;
use App\Http\Requests\FeedbackForm;

class ReviewController extends Controller
{
    public function showReviewForm() 
    {
        return view('sections.reviewform');
    }

    public function reviews()
    {
        return view('sections.reviews', ['data' => Feedbacks::all()]);
    }

    public function review(FeedbackForm $request)
    {
        Feedbacks::create($request->validated());

        return redirect(route('home'));
    }
}
