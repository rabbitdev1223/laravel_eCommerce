<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('orders', function () {
    return auth()->user()->hasRole(['super', 'admin']);
});

Broadcast::channel('presence-admin', function () {
    if (auth()->user()->hasRole(['super', 'admin'])) {
        // return ['id' => auth()->id(), 'name' => auth()->user()->first_name . ' ' . auth()->user()->last_name];
        return ['id' => auth()->id()];
    }
});
