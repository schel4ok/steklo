<?php namespace App\Http\Controllers;
use Form;
use Input;
use Mail;
use Redirect;
use Request;
use Session;
use Validator;
use App\Category;
use App\Page;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;

class StekloController extends Controller {

	public function __construct()
	{	

	}

	public function getIndex()
	{
		$category = Category::where('sef', '=', 'izdeliya-iz-stekla')->first();
		$categories = $category->descendants()->orderBy('id', 'asc')->paginate(20);

		return view('steklo.index')->withCategory($category)
								   ->withCategories($categories);
	}

	public function getCategory($cat)
	{
		$category = Category::where('sef', '=', $cat)->first();
		$items = Page::where('category_id', $category->id)->paginate(20);

		$previous = $category->getPrevSibling();
		$next = $category->getNextSibling();


		return view('steklo.cat')->withCategory($category)
								 ->withItems($items)
                                 ->withPrevious($previous)
                                 ->withNext($next);

	}

	public function getItem($cat, $item)
	{
		$category = Category::where('sef', '=', $cat)->first();
		$item = Page::where('sef', $item)->first();

        $previous = Page::where('id', '<', $item->id)->orderBy('id', 'desc')->first();
		$next = Page::where('id', '>', $item->id)->orderBy('id', 'asc')->first();

		$category = Category::where('id', $item->category_id)->first();

		return view('steklo.item')->withCategory($category)
								  ->withItem($item)
								  ->withPrevious($previous)
								  ->withNext($next);
	}



	public function order(ContactFormRequest $request) 
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
        			if ( isset($input['attachment']) ) 
        			{
						$message->attach($input['attachment']->getRealPath(), array(
							'as' 	=> $input['attachment']->getClientOriginalName(), 
        					'mime' 	=> $input['attachment']->getMimeType()));
					}
					

				});
    	return Redirect::route('contacts')->withCategory($category)
    									  ->with('message', 'Ваше сообщение успешно отправлено!');
	}


}
