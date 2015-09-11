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
		$filename = null;
		return view('pages.contacts')->withCategory($category)->withFilename($filename);

	}

	public function sendmail(ContactFormRequest $request) 
	{
		$category = Category::where('sef', '=', 'contacts')->first();
		$input = Input::all();

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
        			$message->сс('sales@steklo-group.ru', 'Настя');
        			$message->replyTo($request->input('email'), $request->input('name') );
        			$message->subject('Письмо со страницы контактов www.steklo-group.ru.');
					$message->attach($input['attachment']->getRealPath(), array(
						'as' 	=> $input['attachment']->getClientOriginalName(), 
        				'mime' 	=> $input['attachment']->getMimeType()));
				});

    	return Redirect::route('contacts')->withCategory($category)
    									  ->with('message', 'Ваше сообщение успешно отправлено!');
	}



	public function test()
	{
		Mail::queue('emails.contacts', array('name' => 'schel4ok'), function($message)
			{
				$message->subject('Письмо с сайта www.steklo-group.ru - страница контактов.');
    			$message->from('admin@steklo-group.ru', $request->input('name') );
    			$message->to('ipopov@steklo-group.ru', 'Илья Попов');
    			//$message->cc('sales@steklo-group.ru', 'Настя'); 

    			$message->replyTo($request->input('email'), $request->input('name') ); 
    		//	$message->attach($pathToFile, array $options = []);
    		//  $message->attach($pathToFile, ['as' => $display, 'mime' => $mime]);
    			// Attach a file from a raw $data string...
    		//	$message->attachData($data, $name, array $options = []);

    			// Get the underlying SwiftMailer message instance...
    			$message->getSwiftMessage();
			});
	}

	public function testmail()
	{
		$category = Category::where('sef', '=', 'contacts')->first();
		Mail::queue('emails.test', array('name' => 'schel4ok'), function($message)
			{
				$message->subject('Feedback from site');
    			$message->from('admin@steklo-group.ru', 'admin' );
    			$message->to('ipopov@steklo-group.ru', 'Илья Попов');
    			$message->getSwiftMessage();
			});

		return view('pages.contacts')->withCategory($category);

	}

}
