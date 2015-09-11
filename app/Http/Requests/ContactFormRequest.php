<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactFormRequest extends Request {

  public function authorize()
  {
    return true;
  }

public function rules()
{
  return [
    'name' => 'required|max:30|min:2',
    'email' => 'required|email',
    'message' => 'required',
    'attachment' => 'required',
  ];
}

}
