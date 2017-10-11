<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserCard;
use App\Card;
use App\User;
use App\Scanned;

class apiUserCardController extends Controller
{
    public function returnAllUserCards()
    {
    	$userCards = UserCard::all();
    	foreach ($userCards as $userCard) 
    	{
    		$userCard->setAttributes();
    		$userCard->card->setAttributes();
    	}
		return $userCards;
    }

    public function returnUserCardById($id)
    {
    	$userCard = UserCard::find($id);
    	$userCard->setAttributes();
    	$userCard->card->setAttributes();
		return $userCard;
    }

    public function scannedCard($id)
    {
        $userCard = UserCard::find($id);
        $user = User::find($userCard->user_id);
        $card = Card::find($userCard->card_id);

        $scanned = new Scanned;

        $scanned->user_id = $userCard->user_id;
        $scanned->card_id = $userCard->card_id;
        $scanned->save();

        dd($user);
    }
}
