<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use LVR\CreditCard\CardCvc;
use LVR\CreditCard\CardNumber;
use LVR\CreditCard\CardExpirationYear;
use LVR\CreditCard\CardExpirationMonth;

class CreditCardRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'card_number' => ['required', 'unique:bank_accounts,card_number', new CardNumber],
            'expiration_year' => ['required', new CardExpirationYear($this->get('expiration_month'))],
            'expiration_month' => ['required', new CardExpirationMonth($this->get('expiration_year'))],
            'cvc' => ['required', new CardCvc($this->get('card_number'))]
        ];

    }
}
