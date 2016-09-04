<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CalculatorRequest extends Request {

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
   return [
    'name' => 'required|alpha_spaces|max:30|min:2',
    'tel' => 'regex:^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$|required',
    'email' => 'required|email',
   ];
  }

}
