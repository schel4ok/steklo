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
use App\Http\Requests\CalculatorRequest;


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



	public function order(CalculatorRequest $request) 
	{
		$input = Input::all();
		$calc = $request->input('calc');

        //check if its our form
        if ( Session::token() !== Input::get( '_token' ) ) {
            return Response::json( array(
                'msg' => 'Несанкционированная попытка отправки письма'
            ) );
        }


		if ( $calc == 'sauna' ) {
			$mailtemplate = 'emails.sauna-calculator';
            // $pagetitle = 'Стеклянные двери для сауны';
            // $pageurl = $_SERVER['SERVER_NAME'] .'/izdeliya-iz-stekla/steklyannye-dveri/steklyannye-dveri-dlya-sauny';
            $mailarray = array(
                'door_size_radio' => $request->input('door_size_radio'),
                'door_size_standard' => $request->input('door_size_standard'),
            	'door_size_b' => $request->input('door_size_b'),
            	'door_size_h' => $request->input('door_size_h'),
            	'glass' => $request->input('glass'),
            	'korobka' => $request->input('korobka'),
            	'petli' => $request->input('petli'),
            	'dekor' => $request->input('dekor'),
            	'dostavka' => $request->input('dostavka'),
            	'montazh' => $request->input('montazh'),
            	'name' => $request->input('name'),
            	'tel' => $request->input('tel'),
            	'email' => $request->input('email'),
            	'user_message' => $request->input('message'),
            	);

		}

		elseif ( $calc == 'dush-peregorodka' ) {
			$mailtemplate = 'emails.dush-calculator';
           // $pagetitle = 'Стеклянные сантехнические перегородки';
           // $pageurl = $_SERVER['SERVER_NAME'] .'/izdeliya-iz-stekla/steklyannye-peregorodki/santehnicheskie-peregorodki';
			$mailarray = array(
            	'calc' => $request->input('calc'),
            	'size_b' => $request->input('size_b'),
            	'size_h' => $request->input('size_h'),
            	'glass' => $request->input('glass'),
            	'furnitura' => $request->input('furnitura'),
            	'verh_truba' => $request->input('verh_truba'),
            	'uplotniteli' => $request->input('uplotniteli'),
            	'dostavka' => $request->input('dostavka'),
            	'montazh' => $request->input('montazh'),
            	'name' => $request->input('name'),
            	'tel' => $request->input('tel'),
            	'email' => $request->input('email'),
            	'user_message' => $request->input('message'),
            	);
		}


		Mail::send($mailtemplate, $mailarray,

        	function($message) use ($request, $input)
    			{
        			$message->from('admin@steklo-group.ru', $request->input('name') );
        			$message->to('ipopov@steklo-group.ru', 'Илья Попов');
                    $message->setCc($request->input('email'), $request->input('name'));
        			$message->replyTo($request->input('email'), $request->input('name') );
        			$message->subject('Заказ с сайта');
				});
    	return Redirect::back()->with('message', 'Ваше сообщение отправлено! Менеджер свяжется с вами в ближайшее время для уточнения деталей заказа');
	}


}