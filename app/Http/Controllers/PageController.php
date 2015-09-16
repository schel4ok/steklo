<?php namespace App\Http\Controllers;
use Form;
use Input;
use Mail;
use Redirect;
use Request;
use Session;
use Validator;
use App\Category;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;

class PageController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	}

	public function o_kompanii()
	{
		$category = Category::where('sef', '=', 'o-kompanii')->first();
		return view('pages.o-kompanii')->withCategory($category);
	}

	public function contacts()
	{
		$category = Category::where('sef', '=', 'contacts')->first();
		return view('pages.contacts')->withCategory($category);

	}

	public function sendmail(ContactFormRequest $request) 
	{
		$category = Category::where('sef', '=', 'contacts')->first();
		$input = Input::all();
	//	return var_dump($input['attachment']->getRealPath());

		Mail::send('emails.contacts',
        	array(
            	'name' => $request->input('name'),
            	'tel' => $request->input('tel'),
            	'email' => $request->input('email'),
            	'user_message' => $request->input('message'),
            	'url' => $request->url(),
            	), 
        	function($message) use ($request, $input)
    			{
        			$message->from('admin@steklo-group.ru', $request->input('name') );
        			$message->to('ipopov@steklo-group.ru', 'Илья Попов');
        		//	$message->сс('sales@steklo-group.ru', 'Настя');
        			$message->replyTo($request->input('email'), $request->input('name') );
        			$message->subject('Письмо со страницы контактов www.steklo-group.ru.');
        			if ( $input['attachment']->getRealPath() ) 
        			{
						$message->attach($input['attachment']->getRealPath(), array(
							'as' 	=> $input['attachment']->getClientOriginalName(), 
        					'mime' 	=> $input['attachment']->getMimeType()));
					}

				});
    	return Redirect::route('contacts')->withCategory($category)
    									  ->with('message', 'Ваше сообщение успешно отправлено!');
	}


	public function uslugi_index()
	{
		$category = Category::where('sef', '=', 'o-kompanii')->first();
		return view('pages.o-kompanii')->withCategory($category);
	}

	public function uslugi_item()
	{
		$category = Category::where('sef', '=', 'o-kompanii')->first();
		return view('pages.o-kompanii')->withCategory($category);
	}

}
