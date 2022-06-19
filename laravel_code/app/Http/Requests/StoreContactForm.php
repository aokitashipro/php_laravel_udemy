<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactForm extends FromRequest
{

  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'your_name' => 'required|string|max:20',
      'title' => 'required|string|max:50',
      'email' => 'required|email|unique:users|max:255',
      'url' => 'url|nullable',
      'gender' => 'required',
      'age' => 'required',
      'contact' => 'required|string|max:200',
      'caution' => 'required|accepted'
    ];
  }
}
