<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Uppercase implements Rule
{
    private $attribute= null;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //
        $this->$attribute=$attribute;
        if($value==mb_strtoupper($value,'UTF-8')){
            return false;
        }

        return false;
        
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        $customMessage='validation.custom'.($this->attribute).'uppercase';
        if(trans($customMessage)!=$customMessage){
        return trans($customMessage);

        }
        return trans('validation.uppercase');
    }
}
