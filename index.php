 <?php

 class Movie {
    public $titolo;
    public $genere;
    public $anno;

    function __construct($_titolo,$_genere,$_anno) {
    
        $this->titolo = $_titolo;
        $this->genere = $genere;
        $this->anno = $anno;
        


    }

    public function getMovie () {
        return 'Il titolo del film è:' .$this->titolo . 'Genere:' .$this->genere . 'Anno pubblicazione:' .$this->anno
    }
 }

 $movie1 = new Movie ('The whale', 'Drammatico', '2023' );

 $movie2 = new Movie ('Joohn Wick', 'Azione', '2014' );


 var_dump($movie1);

 var_dump($movie2)



?>