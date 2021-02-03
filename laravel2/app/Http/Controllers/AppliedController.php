<?php

namespace App\Http\Controllers;

use API;
use App\Applied;
use Illuminate\Http\Request;

class AppliedController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['user_id'=>'required', 'offer_id'=>'required']);
        $applied = Applied::create($request->all());
        return api(201, 'El usuario ' . $applied->user_id . ' ha aplicado a la oferta ' . $applied->offer_id, $applied);
    }

    public function unapplyUserFromAppliedOffer($offer_id, $user_id)
    {
        $rows = Applied::where('user_id', '=', $user_id)
                            ->where('offer_id', '=', $offer_id)
                            ->get();

        if (sizeof($rows) > 0) {
            $applied = $rows[0];
            $applied->delete();
            return API::ok('El usuario ' . $applied->user_id . ' ha aplicado a la oferta ' . $applied->offer_id, $applied);
        }
        else {
            return API::response(404, 'No hay ofertas aplicadas para el usuario ' . $user_id . ' y la oferta ' . $offer_id, null);
        }
        
    }
}
