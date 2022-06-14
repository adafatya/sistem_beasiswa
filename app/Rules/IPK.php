<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class IPK implements Rule
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
        $ipk;
        if ((float) $value) {
            $ipk = (float) $value;
        } else {
            return false;
        }
        return $ipk >= 0 && $ipk <= 4;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'IPK harus bilangan desimal dan diantara 0 sampai 4.';
    }
}
