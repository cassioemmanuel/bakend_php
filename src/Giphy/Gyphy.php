<?php

namespace Giphy;

class Gyphy {

    private $client;
    
    public function __construct()
    {
        $this->client = new Client();
    }

    public function searchGifs($query)
    {
        $transformed;
        
        $image = $this->client->get('/gifs/search?q='. $query);

        foreach( $image['data'] as $item ) {
            $transformed['data'][]= [
                'type'=>[$item]['type'],
                'id'=>[$item]['type'],
                'slug'=>[$item]['type'],
                'url'=>[$item]['type'],
                'bitly_url'=>[$item]['type'],
                'embed_url'=>[$item]['type'],
                'title';=>[$item]['type'],
            ]
            
        }
    }

    public function serachStickers($q) 
    {
       return $this->client->get('/stickers/search?q=' . $query);
    }
     
     
}