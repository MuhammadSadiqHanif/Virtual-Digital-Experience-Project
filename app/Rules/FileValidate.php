<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class FileValidate implements Rule
{
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
        $mimes = ['jpg','jpeg','png','bmp','json','pdf'];
        
        if (in_array($value->getClientOriginalExtension(),$mimes)) {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
         return 'File should be a jpg,jpeg,png,bmp,json,pdf';
    }
}
