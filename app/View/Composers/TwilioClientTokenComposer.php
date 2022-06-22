<?php

namespace App\View\Composers;

use Illuminate\View\View;
use Twilio\Jwt\AccessToken;
use Twilio\Jwt\Grants\ChatGrant;

class TwilioClientTokenComposer
{
    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {
        if (!auth()->user()) {
            return true;
        }

        $token = cache()->remember('twilio_client_token_user_' . auth()->user()->id, 60 * 60, function () {
            $token = new AccessToken(
                config('services.twilio.sid'),
                config('services.twilio.apiKey'),
                config('services.twilio.apiSecret'),
                3600,
                auth()->user()->id
            );

            $chatGrant = new ChatGrant();
            $chatGrant->setServiceSid(config('services.twilio.services.chat'));

            $token->addGrant($chatGrant);

            return $token->toJWT();
        });

        $view->with('twilioClientToken', $token);
    }
}
