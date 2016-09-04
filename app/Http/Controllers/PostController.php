<?php namespace App\Http\Controllers;
use Form;
use Input;
use Mail;
use Illuminate\Support\Facades\Redirect;
use Request;
use Session;
use Validator;
use Event;
use App\Events\SendMail;
use App\Http\Controllers\Controller;
use App\Http\Requests\CallbackRequest;
use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\CalculatorRequest;

class PostController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	}

	public function callback(CallbackRequest $request) 
	{
	    $result = $request->all();
    	Event::fire(new SendMail($result));
    	return 'callback-success';
	}

	public function order(CallbackRequest $request) 
	{
	    $result = $request->all();
    	Event::fire(new SendMail($result));
    	return 'order-success';


        //check if its our form
        // пока неработает не могу понять почему
/*
        if ( csrf_token() !== Input::get( '_token' ) ) {
            return Response::json( array(
                'msg' => 'Несанкционированная попытка отправки письма'
            ) );
        }
*/
        

        
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
            	), 
        	function($message) use ($request, $input)
    			{
        			$message->from('admin@steklo-group.ru', $request->input('name') );
        			$message->to('ipopov@steklo-group.ru', 'Илья Попов');
        		//	$message->сс('sales@steklo-group.ru', 'Настя');
        			$message->replyTo($request->input('email'), $request->input('name') );
        			$message->subject('Письмо со страницы контактов www.steklo-group.ru.');
        			if ( isset($input['attachment']) ) 
        			{
						$message->attach($input['attachment']->getRealPath(), array(
							'as' 	=> $input['attachment']->getClientOriginalName(), 
        					'mime' 	=> $input['attachment']->getMimeType()));
					}
					

				});

    	return Redirect::back()->with('message', 'Ваше сообщение успешно отправлено!');
	}

}
