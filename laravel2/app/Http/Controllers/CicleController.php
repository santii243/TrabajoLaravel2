<?php

namespace App\Http\Controllers;

use API;
use App\Cicle;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cicles = Cicle::all();
        return API::ok('listado de ciclos', $cicles);
    }

    public function listOffersByCicleID($cicleID)
    {
        try
        {
            $cicle = Cicle::findOrFail($cicleID);
            $offers = $cicle->offers()->get();
            return API::ok('Listado de ofertas para el ciclo con id ' . $cicleID, $offers);
        }
        catch(ModelNotFoundException $e)
        {
            return API::notFound("Ciclo no encontrado con id " . $cicleID);
        }
    }

    
    public function listArticlesByCicleID($cicleID)
    {
        try
        {
            $cicle = Cicle::findOrFail($cicleID);
            $articles = $cicle->articles()->get();
            return API::ok('Listado de articulos para el ciclo con id ' . $cicleID, $articles);
        }
        catch(ModelNotFoundException $e)
        {
            return API::notFound("Ciclo no encontrado con id " . $cicleID);
        }
    }
}
