<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ChildrenSelected implements Rule
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
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $children_list = json_decode($value);
        if (count($children_list) < 1)
            return false;

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'حداقل یک فرزند باید انتخاب شود.';
    }
}
