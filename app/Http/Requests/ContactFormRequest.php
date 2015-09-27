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
    'name' => 'required|alpha|max:30|min:2',
    'tel' => 'required',
    'email' => 'required|email',
    'message' => 'required',
    'attachment' => 'max:10240|mimes:jpeg,bmp,png,gif,zip,rar,pdf,psd,ai,cdr,rtf,doc,docx,xls,xlsx,ppt,pptx',  
    // max file size 10240 kb = 10 Mb
   ];
  }

}
