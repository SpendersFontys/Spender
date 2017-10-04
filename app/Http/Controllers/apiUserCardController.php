<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserCard;

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
}
