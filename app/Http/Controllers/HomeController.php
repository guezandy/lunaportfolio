<?php namespace App\Http\Controllers;

use App\User;
use Auth;
use App\Entity;
use App\Contact;
use App\About;
use App\Home;
use App\Skill;
use App\SkillSlider;
use App\Quote;
use App\PortfolioCategory;
use App\PortfolioPiece;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = User::findOrFail(Auth::user()->id);
		$entity = Entity::where('user_id', Auth::user()->id)->firstOrFail();
		$about = About::where('user_id', Auth::user()->id)->firstOrFail();
		$contact = Contact::where('user_id', Auth::user()->id)->firstOrFail();
		$home = Home::where('user_id', Auth::user()->id)->firstOrFail();
		$quote = Quote::where('user_id', Auth::user()->id)->get();
		$quote_count = $quote->count();
		$skill = Skill::where('user_id', Auth::user()->id)->get();
		$skill_count = $skill->count();
		$skill_slider = SkillSlider::where('user_id', Auth::user()->id)->get();
		$skill_slider_count = $skill_slider->count();
		$portfolio_piece = PortfolioPiece::where('user_id', Auth::user()->id)->get();
		$portfolio_piece_count = $portfolio_piece->count();
		return view('home')->with('user', $user)->with('home', $home)->with('entity', $entity)
							->with('contact', $contact)->with('about', $about)->with('skill', $skill)
							->with('skill_count', $skill_count)->with('quote', $quote)->with('quote_count', $quote_count)
							->with('skill_slider', $skill_slider)->with('skill_slider_count', $skill_slider_count)
							->with('portfolio_piece', $portfolio_piece)->with('portfolio_piece_count', $portfolio_piece_count);
	}

	public function edit() {
		$user = User::findOrFail(Auth::user()->id);
		$entity = Entity::where('user_id', Auth::user()->id)->firstOrFail();
		$about = About::where('user_id', Auth::user()->id)->firstOrFail();
		$contact = Contact::where('user_id', Auth::user()->id)->firstOrFail();
		$home = Home::where('user_id', Auth::user()->id)->firstOrFail();
		$quote = Quote::where('user_id', Auth::user()->id)->get();
		$quote_count = $quote->count();
		$skill = Skill::where('user_id', Auth::user()->id)->get();
		$skill_count = $skill->count();
		$skill_slider = SkillSlider::where('user_id', Auth::user()->id)->get();
		$skill_slider_count = $skill_slider->count();
		$portfolio_piece = PortfolioPiece::where('user_id', Auth::user()->id)->get();
		$portfolio_piece_count = $portfolio_piece->count();
		return view('edit')->with('user', $user)->with('home', $home)->with('entity', $entity)
						->with('contact', $contact)->with('about', $about)->with('skill', $skill)
						->with('skill_count', $skill_count)->with('quote', $quote)->with('quote_count', $quote_count)
						->with('skill_slider', $skill_slider)->with('skill_slider_count', $skill_slider_count)
						->with('portfolio_piece', $portfolio_piece)->with('portfolio_piece_count', $portfolio_piece_count);
	}

}
