<?php

namespace App\ProjektPizza\Gateways;
use App\ProjektPizza\Interfaces\FrontendRepositoryInterface;

class FrontendGateway
{
    public function __construct(FrontendRepositoryInterface $fR)
    {
        $this-> fR = $fR;
    }

    public function searchPizzeria($request)
    {
        $term = $request->input('term');
        $result=array();
        $queries = $this->fR->getSearchPizzeria($term);

        foreach($queries as $query)
        {
            $result[]= ['id'=>$query->id, 'value'=>$query->city];
        }
        return $result;
    }


    public function getSearchResults($request)
    {
        $request->flash(); //aktualne wartosci wpisywane do formularzu przezucone do sesji
        if($request->input('city')!=null)
        {

            $result =$this->fR->getSearchResults($request->input('city'));

            if($result)
            {
                return $result;
            }
        }


        return false;
    }


}


