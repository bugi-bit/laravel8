<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array
     */
    public function setPasswordAttribute($password){
        $this->attributes['password'] = bcrypt($password);
    }
    
    protected function passwordRules()
    {
        return ['required', 'string', new Password, 'confirmed'];
    }
    
}
