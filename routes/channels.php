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


// Ici, vous pouvez enregistrer tous les canaux de diffusion d'événements que votre application
// prend en charge. Les rappels d'autorisation de canal donnés sont
// utilisé pour vérifier si un utilisateur authentifié peut écouter le canal.

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
