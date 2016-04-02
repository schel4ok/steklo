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
    'tel' => 'required',
    'email' => 'required|email',
   ];
  }

}
