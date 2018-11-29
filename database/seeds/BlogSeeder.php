<?php
/**
 * Created by PhpStorm.
 * User: peanutonetwo
 * Date: 30/11/18
 * Time: 0.01
 */

use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run()
    {
        $titolo = ["Raccolta differenziata",
            "Riciclaggio dei rifiuti",
            "Biodegradabilità",
            "Buco nell'ozono "];
        $contenuto = [
            "La raccolta differenziata, indica un sistema di raccolta dei rifiuti urbani che prevede, per ogni tipologia di rifiuto, una prima selezione o differenziazione in base al tipo da parte dei cittadini diversificandola dunque dalla raccolta totalmente indifferenziata, prevalente sino a pochi anni fa.Il fine ultimo è dunque la separazione dei rifiuti in modo tale da reindirizzare ciascuna tipologia di rifiuto differenziato verso il rispettivo più adatto trattamento di smaltimento o recupero che va dallo stoccaggio in discarica o all'incenerimento/termovalorizzazione per il residuo indifferenziato, al compostaggio per l'organico e al riciclo per il differenziato propriamente detto (carta, vetro, plastica, metallo ecc...).Per quanto detto dunque la raccolta differenziata è propedeutica alla corretta e più avanzata gestione dei rifiuti costituendone di fatto la prima fase dell'intero processo, ma perde di senso in mancanza degli impianti di trattamento/smaltimento dei rifiuti differenziati.",
            "Per riciclaggio dei rifiuti, nell'ambito della gestione dei rifiuti, si intende l'insieme di strategie e metodologie volte a recuperare materiali utili dai rifiuti al fine di riutilizzarli anziché smaltirli direttamente in discarica e inceneritori.Il riciclaggio previene dunque lo spreco di materiali potenzialmente utili garantendo maggiore sostenibilità al ciclo di produzione/utilizzazione dei materiali, riduce il consumo di materie prime, l'utilizzo di energia e l'emissione di gas serra associati.",
            "La biodegradabilità è una proprietà delle sostanze organiche e di alcuni composti sintetici, di essere decomposti dalla natura, o meglio, dai batteri saprofiti. Questa proprietà permette il regolare mantenimento dell'equilibrio ecologico del pianeta.Una sostanza decomponibile, viene attaccata da alcuni batteri che ne estraggono gli enzimi necessari alla decomposizione in prodotti semplici, dopodiché l'elemento viene assorbito completamente nel terreno.",
            "La riduzione dell'ozono e il buco nell'ozono sono due fenomeni connessi con la riduzione dell'ozono stratosferico, intendendosi con essi rispettivamente: il calo lento, relativamente stabile e globale dell'ozono stratosferico totale ovvero nell'ozonosfera dai primi anni 1980 in poi; il molto più potente, ma intermittente fenomeno di riduzione dell'ozono delle regioni polari terrestri, quello a cui più propriamente ci si riferisce quando si parla di \"buco dell'ozono\", in realtà un assottigliamento marcato dello strato.Lo strato di ozono è uno schermo fondamentale per l'intercettazione di radiazioni letali per la vita sulla terra, e la sua formazione avviene principalmente nella stratosfera alle più irradiate latitudini tropicali, mentre la circolazione globale tende poi ad accumularlo maggiormente alle alte latitudini e ai poli.Il meccanismo di formazione del buco è diverso dall'assottigliamento alle medie latitudini dello strato di ozono, ma entrambi i fenomeni si basano sul fatto che gli alogeni, principalmente cloro e bromo, catalizzano reazioni ozono-distruttive.",
        ];

        foreach (range(0, 3) as $index) {
            DB::table('blog')->insert([
                'titolo' => $titolo[$index],
                'descrizione' => $contenuto[$index],
            ]);
        }
    }
}
