<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trips = [

            [
                "title" => "Il mio viaggio a New York",
                "description" => "Esplorare New York è un'esperienza unica, dove ogni angolo racconta una storia. Dai grattacieli iconici di Manhattan, come l'Empire State Building e il One World Trade Center, alla vivace Times Square con le sue luci brillanti e schermi giganti. Passeggiare per Central Park offre una pausa verde dalla frenesia della città, mentre una visita al Metropolitan Museum of Art o al MoMA svela tesori artistici da tutto il mondo. Un giro in traghetto fino alla Statua della Libertà e Ellis Island racconta la storia dell'immigrazione e del sogno americano. Il viaggio si conclude con una passeggiata sul Ponte di Brooklyn al tramonto, ammirando lo skyline in continuo cambiamento. New York, con la sua energia ineguagliabile e la sua diversità, lascia un ricordo indelebile.",
                "cover_image" => "img/newyork.jpg",
                "start_date" => "2022-10-27",
                "end_date" => "2022-11-10",
            ],

            [
                "title" => "Weekend Romantico a Venezia",
                "description" => "Venezia è una città che incanta ad ogni passo. Un weekend romantico qui inizia con una passeggiata tra le calli strette e i ponti sospesi, attraversando canali che riflettono le luci dei palazzi storici. Una visita al maestoso Palazzo Ducale e alla Basilica di San Marco svela l'arte e l'architettura unica della Serenissima. Il giro in gondola lungo il Canal Grande, passando sotto il Ponte di Rialto, è un'esperienza da sogno, mentre l'aperitivo al tramonto in Piazza San Marco, accompagnato dal suono della musica dal vivo, regala un'atmosfera magica. I ristoranti lungo i canali servono specialità veneziane come il risotto al nero di seppia e i cicchetti. Un weekend a Venezia è una fuga romantica tra storia, arte e sapori.",
                "cover_image" => "img/venezia.jpg",
                "start_date" => "2024-05-18",
                "end_date" => "2024-05-21",
            ],

            [
                "title" => "Salento",
                "description" => "Trascorrere l'estate in Salento è come immergersi in un paradiso mediterraneo, dove il mare cristallino e le spiagge dorate ti accolgono con la loro bellezza mozzafiato. Dalle acque trasparenti di Punta Prosciutto e Porto Cesareo, ideali per il nuoto e lo snorkeling, alle lunghe distese di sabbia di Torre dell'Orso, il Salento offre infinite opportunità di relax e divertimento. La sera, i borghi antichi come Lecce, la 'Firenze del Sud', e Otranto, con il suo affascinante castello sul mare, si animano con musica dal vivo, mercatini e tradizionali feste popolari. Non manca la buona cucina: dai sapori autentici delle orecchiette fatte in casa ai freschissimi piatti di pesce, ogni pasto è una celebrazione della tradizione pugliese. Un'estate in Salento è una combinazione perfetta di mare, cultura e gastronomia, che lascia un segno indelebile nel cuore.",
                "cover_image" => "img/salento.jpg",
                "start_date" => "2024-08-12",
                "end_date" => "2024-08-21",
            ],

            [
                "title" => "Avventura in Toscana",
                "description" => "Scoprire la Toscana è come sfogliare un libro di storia e bellezza. Da Firenze, con il suo patrimonio artistico rinascimentale e i musei che ospitano opere di Michelangelo e Botticelli, ai paesaggi mozzafiato delle colline del Chianti, dove ogni vigneto racconta la storia di secoli di vinificazione. Passeggiare per i vicoli di Siena, con la sua famosa Piazza del Campo e il Duomo gotico, è un tuffo nel passato, mentre San Gimignano, con le sue torri medievali, offre una vista spettacolare sulla campagna toscana. Le serate si concludono con cene tipiche a base di bistecca alla fiorentina, pici all'aglione e vini locali, come il Chianti e il Brunello di Montalcino. Un'avventura in Toscana è un viaggio tra arte, sapori e paesaggi unici al mondo.",
                "cover_image" => "img/toscana.avif",
                "start_date" => "2024-09-05",
                "end_date" => "2024-09-15",
            ],
        ];

        foreach ($trips as $trip) {
            Trip::create([
                'title' => $trip['title'],
                'description' => $trip['description'],
                'cover_image' => $trip['cover_image'],
                'start_date' => $trip['start_date'],
                'end_date' => $trip['end_date'],
            ]);
        }

    }
}
