<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Company;

class apiCardController extends Controller
{
    public function returnAllCards()
    {
    	$cards = Card::all();
		return $cards;
    }

    public function returnCardById($id)
    {
    	$card = Card::find($id);
    	$card->setAttributes();
		return $card;
    }

    public function create(Request $request)
    {
    	$card = new Card;
    	$card->company_id = $request->company_id;
    	$card->image_url = $request->image_url;
    	$card->type = $request->type;

    	if ($card->save()) 
    	{
    		return "true";
    	}
    	return "false";
    	
    	
    }
}
