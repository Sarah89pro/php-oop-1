<?php 
/**
 * Movie Class
 */
class Movie {

    //ATTRIBUTI/PROPRIETA'
    public $title;
    public $distribuited_by;
    public $director;
    public $plot;



    //COSTRUTTORE
    function __construct($title, $distribuited_by, $director, $plot) {
        $this->title = $title;
        $this->distribuited_by = $distribuited_by;
        $this->director = $director;
        $this->plot = $plot;
    }

    //GET EXCERPT
    public function getExcerpt() {
        $sub = substr($this->plot, 0, 810); //cosa voglio vedere, da dove parto e quanti caratteri max
        return $sub;
    }
}




//Prima Istanza
/*$movie1 = new Movie('Crudelia',
                    'Walt Disney',
                    'Craig Gillespie',
                    'Estella è una bambina con un sogno e un lato oscuro: il sogno è quello di diventare una celebre stilista di moda,
                    il lato oscuro è il desiderio di sfidare il mondo senza farsi scrupoli, cui sua madre Catherine ha dato un nome: Crudelia.
                    Catherine invita la figlia a tenere Crudelia sotto controllo, ma Estella deve trasgredire, e ad una festa organizzata dalla Baronessa
                    presso cui sua madre lavora si intrufola nel salone dove va in mostra una grande sfilata di moda. Ne nasce un putiferio, e Catherine
                    viene uccisa dai tre dalmata della Baronessa: una morte di cui Estella si ritiene colpevole. Anni dopo la ritroviamo giovane donna a Londra,
                    intenta a campare di furtarelli con gli amici Jasper e Horace, ma con ancora in testa il sogno di fare la stilista: magari proprio per la celebre Baronessa.'
);
$movie1->title = 'Crudelia';
$movie1->distribuited_by ='Walt Disney';
$movie1->director = 'Crag Gillespie';
$movie1->plot = 'Estella è una bambina con un sogno e un lato oscuro: il sogno è quello di diventare una celebre stilista di moda,
il lato oscuro è il desiderio di sfidare il mondo senza farsi scrupoli, cui sua madre Catherine ha dato un nome: Crudelia.
Catherine invita la figlia a tenere Crudelia sotto controllo, ma Estella deve trasgredire, e ad una festa organizzata dalla Baronessa
presso cui sua madre lavora si intrufola nel salone dove va in mostra una grande sfilata di moda. Ne nasce un putiferio, e Catherine
viene uccisa dai tre dalmata della Baronessa: una morte di cui Estella si ritiene colpevole. Anni dopo la ritroviamo giovane donna a Londra,
intenta a campare di furtarelli con gli amici Jasper e Horace, ma con ancora in testa il sogno di fare la stilista: magari proprio per la celebre Baronessa.';

var_dump($movie1);
echo '<p>'. $movie1->getExcerpt() . '(...)</p>';*/

//Seconda Istanza
/*$movie2 = new Movie('The Witches',
                    'Warner Bros',
                    'Robert Zemeckis',
                    'Rimasto orfano dopo un incidente, un bambino di otto anni va a vivere a Demopolis, in Alabama, con la nonna.
                    È il 1968, per gli afroamericani la vita non è semplice, ma per nonna e nipote il pericolo viene soprattutto dalla scoperta che le streghe
                    - creature malvagie e orribili che odiano i bambini sopra ogni cosa - sono tornate. Convinti di sfuggire alla persecuzione, si rifugiano in
                    un hotel di lusso dove lavora un loro cugino, senza sapere, però, che proprio in quel luogo sfarzoso si terrà l\'annuale raduno delle streghe.
                    E che la tremenda Strega suprema ha intenzione di trasformare tutti i bambini del mondo in topi.'
);
$movie2->title = 'The Witches';
$movie2->distribuited_by ='Warner Bros';
$movie2->director = 'Robert Zemeckis';
$movie2->plot = 'Rimasto orfano dopo un incidente, un bambino di otto anni va a vivere a Demopolis, in Alabama, con la nonna.
È il 1968, per gli afroamericani la vita non è semplice, ma per nonna e nipote il pericolo viene soprattutto dalla scoperta che le streghe
- creature malvagie e orribili che odiano i bambini sopra ogni cosa - sono tornate. Convinti di sfuggire alla persecuzione, si rifugiano in
un hotel di lusso dove lavora un loro cugino, senza sapere, però, che proprio in quel luogo sfarzoso si terrà l\'annuale raduno delle streghe.
E che la tremenda Strega suprema ha intenzione di trasformare tutti i bambini del mondo in topi.';

var_dump($movie2);
echo '<p>'. $movie2->getExcerpt() . '(...)</p>';*/

//Terza Istanza
/*$movie3 = new Movie('Sul più bello',
                    'Eagle Pictures',
                    'Alice Filippi',
                    'Marta è bruttina e sa di esserlo. Per di più soffre di una rara malattia che non le permetterà di invecchiare, e che può
                    essere scatenata da mille fattori esterni. Ma non si lascia avvilire e affronta la vita scegliendo di vedere sempre il bicchiere mezzo pieno,
                    aiutata dai suoi migliori amici Federica e Jacopo, entrambi gay, con cui vive in una sorta di simbiosi. Il suo lavoro è leggere gli annunci
                    delle offerte al microfono di un supermercato in modo così accattivante che i clienti, senza nemmeno vederla, la riempiono di richieste di appuntamenti:
                    perché Marta, per sua stessa ammissione, esprime meglio il proprio sex appeal dietro un microfono, o dietro una tastiera. Fino a quando l\'incontro
                    con Arturo Selva, l\'uomo più bello (e ricco) di Torino, non la costringe a confrontarsi con la realtà.'
);
$movie3->title = 'Sul più bello';
$movie3->distribuited_by ='Eagle Pictures';
$movie3->director = 'Alice Filippi';
$movie3->plot = 'Marta è bruttina e sa di esserlo. Per di più soffre di una rara malattia che non le permetterà di invecchiare, e che può
essere scatenata da mille fattori esterni. Ma non si lascia avvilire e affronta la vita scegliendo di vedere sempre il bicchiere mezzo pieno,
aiutata dai suoi migliori amici Federica e Jacopo, entrambi gay, con cui vive in una sorta di simbiosi. Il suo lavoro è leggere gli annunci
delle offerte al microfono di un supermercato in modo così accattivante che i clienti, senza nemmeno vederla, la riempiono di richieste di appuntamenti:
perché Marta, per sua stessa ammissione, esprime meglio il proprio sex appeal dietro un microfono, o dietro una tastiera. Fino a quando l\'incontro
con Arturo Selva, l\'uomo più bello (e ricco) di Torino, non la costringe a confrontarsi con la realtà.';

var_dump($movie3);
echo '<p>'. $movie3->getExcerpt() . '(...)</p>';*/

?>