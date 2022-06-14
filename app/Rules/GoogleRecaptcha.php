<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Request;


class GoogleRecaptcha implements Rule
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
        

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $secret = env('RECAPTCHA_SECRET_KEY', false);
        $remoteip = $_SERVER['REMOTE_ADDR'];

        $request = file_get_contents( $url.'?secret='.$secret.'&response='.$value.'&remoteip='.$remoteip);

        $resposta = json_decode($request,true);

        if(isset($resposta['success']) && $resposta['success'] == true && $resposta['score'] >=  env('RECAPTCHA_MINIMUM_SCORE', false)){
            return true;
        }

        return false;
        dd($resposta);
        /*$client = new Client();
        try {
            $response = $client->post(, [
                'form_params' => [
                    'secret' => env('RECAPTCHA_SECRET_KEY', false),
                    'response' => $value,
                    'remoteip' => Request::ip(),
                ],
            ]);
        } catch (\GuzzleHttp\Exception\BadResponseException $e) {
            return false;
        }
        return $this->getScore($response) >= 0.6;*/
    }
    private function getScore($response)
    {
        //return \GuzzleHttp\json_decode($response->getBody(), true)['score'];
    }
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Failed on reCAPTCHA verification.';
    }
}
