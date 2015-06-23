<?php namespace App\Http\Controllers;

use Auth;
use Input;
use DB;

use App\User;
use App\Entity;
use App\Contact;
use App\About;
use App\Home;
use App\Skill;
use App\Quote;
use App\SkillSlider;
use App\PortfolioPiece;
use App\PortfolioCategory;

class UpdateController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function updateAboutMe() {
		$user = User::find(Auth::user()->id);
		$about = About::where('user_id', Auth::user()->id)->firstOrFail();
		if(isset($user) && $about != NULL) {

			if(Input::get('about_first_title') != '') {
				$about->first_title = Input::get('about_first_title');
			}
			if(Input::get('about_first_caption') != '') {
				$about->first_caption = Input::get('about_first_caption');
			}
			if(Input::get('about_second_title') != '') {
				$about->second_title = Input::get('about_second_title');
			}
			if(Input::get('about_second_caption') != '') {
				$about->second_caption = Input::get('about_second_caption');
			}
			if(Input::get('about_third_title') != '') {
				$about->third_title = Input::get('about_third_title');
			}
			if(Input::get('about_third_caption') != '') {
				$about->third_caption = Input::get('about_third_caption');
			}
			if(Input::get('about_extra_1') != '') {
				$about->extra_1 = Input::get('about_extra_1');
			}
			if(Input::get('about_extra_2') != '') {
				$about->extra_2 = Input::get('about_extra_2');
			}
			$about->save();
			return redirect('home')->with('status', 'success');
		} else {
			return 'An error has occurred';//'no';
		}
	}

	public function updateContact() {
		$user = User::find(Auth::user()->id);
		$contact = Contact::where('user_id', Auth::user()->id)->firstOrFail();
		$entity = Entity::where('user_id', Auth::user()->id)->firstOrFail();
		if(isset($user) && $contact != NULL) {
			if(Input::get('first_title') != '') {
				$contact->first_title = Input::get('first_title');
			}
			if(Input::get('first_caption') != '') {
				$contact->first_caption = Input::get('first_caption');
			}
			if(Input::get('second_title') != '') {
				$contact->second_title = Input::get('second_title');
			}
			if(Input::get('second_caption') != '') {
				$contact->second_caption = Input::get('second_caption');
			}
			if(Input::get('email') != '') {
				$entity->email = Input::get('email');
			}
			if(Input::get('phone') != '') {
				$contact->phone = Input::get('phone');
			}
			if(Input::get('address') != '') {
				$contact->address = Input::get('address');
			}
			if(Input::get('extra_1') != '') {
				$contact->extra_1 = Input::get('extra_1');
			}
			if(Input::get('extra_2') != '') {
				$contact->extra_2 = Input::get('extra_2');
			}
			$entity->save();
			$contact->save();
			return redirect('home')->with('status', 'success');
		} else {
			return 'An error has occured';
		}
	}

	public function updateSocialMedia() {
		$user = User::find(Auth::user()->id);
		$entity = Entity::where('user_id', Auth::user()->id)->firstOrFail();
		if(isset($user) && $entity != NULL) {
			if(Input::get('facebook') != '') {
				$entity->facebook = Input::get('facebook');
			}
			if(Input::get('instagram') != '') {
				$entity->instagram = Input::get('instagram');
			}
			if(Input::get('linkedin') != '') {
				$entity->linkedin = Input::get('linkedin');
			}
			if(Input::get('twitter') != '') {
				$entity->twitter = Input::get('twitter');
			}
			if(Input::get('github') != '') {
				$entity->github = Input::get('github');
			}
			if(Input::get('behance') != '') {
				$entity->behance = Input::get('behance');
			}
			if(Input::get('dribble') != '') {
				$entity->dribble = Input::get('dribble');
			}
			if(Input::get('extra_1') != '') {
				$entity->extra_1 = Input::get('extra_1');
			}
			if(Input::get('extra_2') != '') {
				$entity->extra_1 = Input::get('extra_2');
			}
			$entity->save();
			return redirect('home')->with('status', 'success');
		} else {
			return 'An error has occured';
		}
	}

	public function updateHome() {
		$user = User::find(Auth::user()->id);
		$home = Home::where('user_id', Auth::user()->id)->firstOrFail();
		if(isset($user) && $home != NULL) {
			if(Input::get('title') != '') {
				$home->title = Input::get('title');
			}
			if(Input::get('caption') != '') {
				$home->caption = Input::get('caption');
			}
			if(Input::get('image_id') != '') {
				$home->image_id = Input::get('image_id');
			}
			if(Input::get('video_url') != '') {
				$home->video_url = Input::get('video_url');
			}
			$home->save();
			return redirect('home')->with('status', 'success');
		} else {
			return 'An error has occured';
		}
	}

	public function updateSkill($id) {
		$user = User::find(Auth::user()->id);
		$skill = Skill::find($id);
		if(isset($user) && $skill != NULL && $skill->user_id == $user->id) {
			if(Input::get('icon') != '') {
				$skill->icon = Input::get('icon');
			}
			if(Input::get('title') != '') {
				$skill->title = Input::get('title');
			}
			if(Input::get('caption') != '') {
				$skill->caption = Input::get('caption');
			}
			if(Input::get('image_id') != '') {
				$skill->image_id = Input::get('image_id');
			}
			if(Input::get('extra_1') != '') {
				$skill->extra_1 = Input::get('extra_1');
			}
			if(Input::get('extra_2') != '') {
				$skill->extra_2 = Input::get('extra_2');
			}
			$skill->save();
			return redirect('home')->with('status', 'success');

		} else {
			return 'There was an error';
		}
	}

	public function deleteSkill($id) {
		$user = User::find(Auth::user()->id);
		$skill = Skill::find($id);
		if(isset($user) && $skill != NULL && $skill->user_id == $user->id) {
			$skill->delete();
			return redirect('home')->with('status', 'success');
		} else {
			return 'An error has occured';
		}
	}

	public function addSkill() {
		$user = User::find(Auth::user()->id);
		if(isset($user)) {
			$skill = new Skill();
			$skill->user_id = $user->id;
			if(Input::get('add_icon') != '') {
				$skill->icon = Input::get('add_icon');
			}
			if(Input::get('add_title') != '') {
				$skill->title = Input::get('add_title');
			}
			if(Input::get('add_caption') != '') {
				$skill->caption = Input::get('add_caption');
			}
			if(Input::get('add_image') != '') {
				$skill->image_id = Input::get('add_image');
			}
			if(Input::get('add_extra_1') != '') {
				$skill->extra_1 = Input::get('add_extra_1');
			}
			if(Input::get('add_extra_2') != '') {
				$skill->extra_2 = Input::get('add_extra_2');
			}
			$skill->save();
			return redirect('home')->with('status', 'success');
		} else {
			return 'An error has occured';
		}
	}

	public function updateQuote($id) {
		$user = User::find(Auth::user()->id);
		$quote = Quote::find($id);
		if(isset($user) && $quote != NULL && $quote->user_id == $user->id) {
			if(Input::get('text') != '') {
				$quote->text = Input::get('text');
			}
			if(Input::get('title') != '') {
				$quote->author = Input::get('author');
			}
			if(Input::get('extra_1') != '') {
				$quote->extra_1 = Input::get('extra_1');
			}
			if(Input::get('extra_2') != '') {
				$quote->extra_2 = Input::get('extra_2');
			}
			$quote->save();
			return redirect('home')->with('status', 'success');
		} else {
			return 'There was an error';
		}
	}

	public function deleteQuote($id) {
		$user = User::find(Auth::user()->id);
		$quote = Quote::find($id);
		if(isset($user) && $quote != NULL && $quote->user_id == $user->id) {
			$quote->delete();
			return redirect('home')->with('status', 'success');
		} else {
			return 'An error has occured';
		}
	}

	public function addQuote() {
		$user = User::find(Auth::user()->id);
		if(isset($user)) {
			$quote = new Quote();
			$quote->user_id = $user->id;
			if(Input::get('add_text') != '') {
				$quote->text = Input::get('add_text');
			}
			if(Input::get('add_author') != '') {
				$quote->author = Input::get('add_author');
			}
			if(Input::get('add_extra_1') != '') {
				$quote->extra_1 = Input::get('add_extra_1');
			}
			if(Input::get('add_extra_2') != '') {
				$quote->extra_2 = Input::get('add_extra_2');
			}
			$quote->save();
			return redirect('home')->with('status', 'success');
		} else {
			return 'An error has occured';
		}
	}


	public function updateSkillSlider($id) {
		$user = User::find(Auth::user()->id);
		$skill_slider = SkillSlider::find($id);
		if(isset($user) && $skill_slider != NULL && $skill_slider->user_id == $user->id) {
			if(Input::get('skill_title') != '') {
				$skill_slider->skill_title = Input::get('skill_title');
			}
			if(Input::get('skill_caption') != '') {
				$skill_slider->skill_caption = Input::get('skill_caption');
			}
			if(Input::get('skill_value') != '') {
				$skill_slider->value = Input::get('skill_value');
			}
			if(Input::get('extra_1') != '') {
				$skill_slider->extra_1 = Input::get('extra_1');
			}
			if(Input::get('extra_2') != '') {
				$skill_slider->extra_2 = Input::get('extra_2');
			}
			$skill_slider->save();
			return redirect('home')->with('status', 'success');
		} else {
			return 'There was an error';
		}
	}

	public function deleteSkillSlider($id) {
		$user = User::find(Auth::user()->id);
		$skill_slider = SkillSlider::find($id);
		if(isset($user) && $skill_slider != NULL && $skill_slider->user_id == $user->id) {
			$skill_slider->delete();
			return redirect('home')->with('status', 'success');
		} else {
			return 'An error has occured';
		}
	}

	public function addSkillSlider() {
		$user = User::find(Auth::user()->id);
		if(isset($user)) {
			$skill_slider = new SkillSlider();
			$skill_slider->user_id = $user->id;
			if(Input::get('add_title') != '') {
				$skill_slider->skill_title = Input::get('add_title');
			}
			if(Input::get('add_caption') != '') {
				$skill_slider->skill_caption = Input::get('add_caption');
			}
			if(Input::get('add_value') != '') {
				$skill_slider->value = Input::get('add_value');
			}
			if(Input::get('add_extra_1') != '') {
				$skill_slider->extra_1 = Input::get('add_extra_1');
			}
			if(Input::get('add_extra_2') != '') {
				$skill_slider->extra_2 = Input::get('add_extra_2');
			}
			$skill_slider->save();
			return redirect('home')->with('status', 'success');
		} else {
			return 'An error has occured';
		}
	}

	public function updatePortfolioPiece($id) {
		$user = User::find(Auth::user()->id);
		$portfolio_piece = PortfolioPiece::find($id);
		if(isset($user) && $portfolio_piece != NULL && $portfolio_piece->user_id == $user->id) {
			if(Input::get('update_title') != '') {
				$portfolio_piece->title = Input::get('update_title');
			}
			if(Input::get('update_caption') != '') {
				$portfolio_piece->caption = Input::get('update_caption');
			}
			if(Input::get('update_title_1') != '') {
				$portfolio_piece->content_title_1 = Input::get('update_title_1');
			}
			if(Input::get('update_text_1') != '') {
				$portfolio_piece->content_text_1 = Input::get('update_text_1');
			}
			if(Input::get('update_title_2') != '') {
				$portfolio_piece->content_title_2 = Input::get('update_title_2');
			}
			if(Input::get('update_text_2') != '') {
				$portfolio_piece->content_text_2 = Input::get('update_text_2');
			}
			if(Input::get('update_title_3') != '') {
				$portfolio_piece->content_title_3 = Input::get('update_title_3');
			}
			if(Input::get('update_text_3') != '') {
				$portfolio_piece->content_text_3 = Input::get('update_text_3');
			}
			if(Input::get('update_title_4') != '') {
				$portfolio_piece->content_title_4 = Input::get('update_title_4');
			}
			if(Input::get('update_text_4') != '') {
				$portfolio_piece->content_text_4 = Input::get('update_text_4');
			}
			if(Input::get('update_info_1') != '') {
				$portfolio_piece->info_title_1 = Input::get('update_info_1');
			}
			if(Input::get('update_caption_1') != '') {
				$portfolio_piece->info_caption_1 = Input::get('update_caption_1');
			}
			if(Input::get('update_info_2') != '') {
				$portfolio_piece->info_title_2 = Input::get('update_info_2');
			}
			if(Input::get('update_caption_2') != '') {
				$portfolio_piece->info_caption_2 = Input::get('update_caption_2');
			}
			if(Input::get('update_extra_1') != '') {
				$portfolio_piece->extra_1 = Input::get('update_extra_1');
			}
			if(Input::get('update_extra_2') != '') {
				$portfolio_piece->extra_2 = Input::get('update_extra_2');
			}
			if(Input::get('update_extra_3') != '') {
				$portfolio_piece->extra_3 = Input::get('update_extra_3');
			}
			if(Input::get('update_extra_4') != '') {
				$portfolio_piece->extra_4 = Input::get('update_extra_4');
			}
			$portfolio_piece->save();
			return redirect('home')->with('status', 'success');
		} else {
			return 'There was an error';
		}
	}

	public function deletePortfolioPiece($id) {
		$user = User::find(Auth::user()->id);
		$portfolio_piece = PortfolioPiece::find($id);
		if(isset($user) && $portfolio_piece != NULL && $portfolio_piece->user_id == $user->id) {
			$portfolio_piece->delete();
			return redirect('home')->with('status', 'success');
		} else {
			return 'An error has occured';
		}
	}

	public function addPortfolioPiece() {
		$user = User::find(Auth::user()->id);
		if(isset($user)) {
			$portfolio_piece = new PortfolioPiece();
			$portfolio_piece->user_id = $user->id;
			if(Input::get('add_title') != '') {
				$portfolio_piece->title = Input::get('add_title');
			}
			if(Input::get('add_caption') != '') {
				$portfolio_piece->caption = Input::get('add_caption');
			}
			if(Input::get('add_title_1') != '') {
				$portfolio_piece->content_title_1 = Input::get('add_title_1');
			}
			if(Input::get('add_text_1') != '') {
				$portfolio_piece->content_text_1 = Input::get('add_text_1');
			}
			if(Input::get('add_title_2') != '') {
				$portfolio_piece->content_title_2 = Input::get('add_title_2');
			}
			if(Input::get('add_text_2') != '') {
				$portfolio_piece->content_text_2 = Input::get('add_text_2');
			}
			if(Input::get('add_title_3') != '') {
				$portfolio_piece->content_title_3 = Input::get('add_title_3');
			}
			if(Input::get('add_text_3') != '') {
				$portfolio_piece->content_text_3 = Input::get('add_text_3');
			}
			if(Input::get('add_title_4') != '') {
				$portfolio_piece->content_title_4 = Input::get('add_title_4');
			}
			if(Input::get('add_text_4') != '') {
				$portfolio_piece->content_text_4 = Input::get('add_text_4');
			}
			if(Input::get('add_info_1') != '') {
				$portfolio_piece->info_title_1 = Input::get('add_info_1');
			}
			if(Input::get('add_caption_1') != '') {
				$portfolio_piece->info_caption_1 = Input::get('add_caption_1');
			}
			if(Input::get('add_info_2') != '') {
				$portfolio_piece->info_title_2 = Input::get('add_info_2');
			}
			if(Input::get('add_caption_2') != '') {
				$portfolio_piece->info_caption_2 = Input::get('add_caption_2');
			}
			if(Input::get('add_extra_1') != '') {
				$portfolio_piece->extra_1 = Input::get('add_extra_1');
			}
			if(Input::get('add_extra_2') != '') {
				$portfolio_piece->extra_2 = Input::get('add_extra_2');
			}
			if(Input::get('add_extra_3') != '') {
				$portfolio_piece->extra_3 = Input::get('add_extra_3');
			}
			if(Input::get('add_extra_4') != '') {
				$portfolio_piece->extra_4 = Input::get('add_extra_4');
			}
			$portfolio_piece->save();
			return redirect('home')->with('status', 'success');
		} else {
			return 'An error has occured';
		}
	}
}
