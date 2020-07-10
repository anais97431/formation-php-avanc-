<?php


//namespace permet d'assurer l'auto chargement
namespace app;

class DeskManager
{
    public function findAllNumbers()
        {
            $desks = json_decode(file_get_contents(__DIR__.'/directory.json'));
            return array_column($desks, 'desk');
        }
    
    public function findOnByNumbers($number)
        {
            $desks = json_decode(file_get_contents(__DIR__.'/directory.json'));
            foreach($desks as $desk){
                if($number== $desk->desk){
                    return $desk;
                } 
            }
            throw new NotFoundException();
        }
 }