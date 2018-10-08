<?php

namespace App\Http\Validators;

use Illuminate\Validation\Validator;


class KatakanaValidator extends Validator
{

  public function validateKana($attribute, $value, $parameters){

    if(preg_match( '/[ァ-ヶ]+/u',$value )){
     return true;
   }
   return false;

  }

}








 ?>
