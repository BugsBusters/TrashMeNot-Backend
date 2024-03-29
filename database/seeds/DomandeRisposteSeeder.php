<?php
/**
 * Created by PhpStorm.
 * User: peanutonetwo
 * Date: 30/11/18
 * Time: 0.08
 */
use Illuminate\Database\Seeder;

class DomandeRisposteSeeder extends Seeder
{
    public function run()
    {
        $domanda =[
            "Di che si occupa in economia il settore terziario?",
            "Qual è il fine ultimo della raccolta differenziata?",
            "Che cosa è una discarica?",
            "Che cosa sono i rifiuti?",
            "Quale delle seguenti non è una proprietà dei materiali?",
            "Che cosa si intende con riciclaggio dei rifiuti?",
            "Che cosa sono le materie prime?",
            "In che contesto si inserisce il riciclaggio della carta?",
            "In che contesto si inserisce l'imballaggio?",
            "Quale delle seguenti affermazioni relative alle materie plastiche è corretta?",
            "Come è ottenuto il vetro?",
            "In che cosa consiste la proprietà di biodegradabilità dei materiali?",
            "Di che colore sono i contenitori dei rifiuti di plastica?",
            "Che cosa si intende con energie rinnovabili?",
            "Quale dei seguenti materiali deriva dalla lavorazione di sostanze chimiche generate dal raffinamento del petrolio?",
            "Che cosa è un composto organico?",
            "In che cosa stanno provando a riciclare l'anidride carbonica?",
            "In che cosa consiste la nuova frontiera del riutilizzo dell'acqua?",
            "Quanti anni ci mette un sacchetto di plastica a degradarsi in acqua?",
            "In che anno si spera di richiudere il buco nell'ozono?",
            "Quanta anidride carbonica si riesce ad evitare di emettere nell'atmosfera grazie al riciclo?",
            "Da che cosa deriva l'inquinamento radioattivo?",
            "Quale delle seguenti affermazioni è vera?",
        ];
        $risposte = [[
            ['risposta' => "raggruppa tutte le attività legate allo sfruttamento delle risorse naturali;",
                'corretta' => 0,
            ],
            ['risposta' => "produce e fornisce servizi;",
                'corretta' => 1,],
            ['risposta' => "comprende tutte le attività dell'industria;",
                'corretta' => 0,],
            ['risposta' => "nessuna delle precedenti;",
                'corretta' => 0,],
        ],
            [
                ['risposta' => "è un sistema di raccolta dei rifiuti urbani;",
                    'corretta' => 1,
                ],
                ['risposta' => "dividere i rifiuti per lasciarli in discarica;",
                    'corretta' => 0,],
                ['risposta' => "trovare nuovi fonti di energia;",
                    'corretta' => 0,],
                ['risposta' => "nessuna delle precedenti;",
                    'corretta' => 0,],
            ],
            [
                ['risposta' => "è un luogo dove vengono depositati/stoccati in modo non selezionato e permanente i rifiuti;",
                    'corretta' => 1,
                ],
                ['risposta' => "è un luogo dove vengono depositati/stoccati in modo selezionato i rifiuti;",
                    'corretta' => 0,],
                ['risposta' => "è un luogo dove vengono depositati/stoccati in modo selezionato e permanente i rifiuti;",
                    'corretta' => 0,],
                ['risposta' => "nessuna delle precedenti;",
                    'corretta' => 0,],
            ],
            [
                ['risposta' => "persone non eticamente corrette;",
                    'corretta' => 0,
                ],
                ['risposta' => "esclusivamente materiali non più utilizzati;",
                    'corretta' => 0,],
                ['risposta' => "materiali di scarto o avanzo di svariate attività umane;",
                    'corretta' => 1,],
                ['risposta' => "nessuna delle precedenti;",
                    'corretta' => 0,],
            ],
            [
                ['risposta' => "densità;",
                    'corretta' => 0,
                ],
                ['risposta' => "conducibilità termica;",
                    'corretta' => 0,],
                ['risposta' => "bellezza;",
                    'corretta' => 1,],
                ['risposta' => "nessuna delle precedenti;",
                    'corretta' => 0,],
            ],
            [
                ['risposta' => "l'insieme delle strategie e metodologia volte a far sparire i rifiuti;",
                    'corretta' => 0,
                ],
                ['risposta' => "l'insieme delle strategie e metodologie volte a recuperare materiali utili dai rifiuti;",
                    'corretta' => 0,],
                ['risposta' => "l'insieme delle strategie e metodologie volte a smaltire in maniera definitiva i rifiuti;",
                    'corretta' => 1,],
                ['risposta' => "nessuna delle precedenti;",
                    'corretta' => 0,],
            ],
            [
                ['risposta' => "quei materiali che sono alla base per la fabbricazione e produzione di altri beni;",
                    'corretta' => 1,
                ],
                ['risposta' => "quei materiali che si sono manifestati per primi sulla Terra;",
                    'corretta' => 0,],
                ['risposta' => "quei materiali che si ottengono dopo la fabbricazione e produzione di altri beni;",
                    'corretta' => 0,],
                ['risposta' => "nessuna delle precedenti;",
                    'corretta' => 0,],
            ],
            [
                ['risposta' => "è un business nato esclusivamente per lucrarci sopra;",
                    'corretta' => 0,
                ],
                ['risposta' => "è un settore specifico del riciclaggio dei rifiuti;",
                    'corretta' => 1,],
                ['risposta' => "è una pratica esclusivamente italiana;",
                    'corretta' => 0,],
                ['risposta' => "nessuna delle precedenti;",
                    'corretta' => 0,],
            ],
            [
                ['risposta' => "serve per la consegna del prodotto dal produttore al consumatore o all'utilizzatore;",
                    'corretta' => 1,
                ],
                ['risposta' => "serve per lavorare le materie prime;",
                    'corretta' => 0,],
                ['risposta' => "serve per garantire la privacy in fase di deposito;",
                    'corretta' => 0,],
                ['risposta' => "nessuna delle precedenti;",
                    'corretta' => 0,],
            ],
            [
                ['risposta' => "non sono costituite da polimeri puri o miscelati con additivi o cariche varie;",
                    'corretta' => 0,
                ],
                ['risposta' => "sono costituite da polimeri puri o miscelati con additivi o cariche varie;",
                    'corretta' => 1,],
                ['risposta' => "le materie plastiche non esistono;",
                    'corretta' => 0,],
                ['risposta' => "nessuna delle precedenti;",
                    'corretta' => 0,],
            ],
            [
                ['risposta' => "dal fuoco di un drago;",
                    'corretta' => 0,
                ],
                ['risposta' => "dalla lavorazione di un solido;",
                    'corretta' => 0,],
                ['risposta' => "dalla solidificazione di un liquido;",
                    'corretta' => 1,],
                ['risposta' => "nessuna delle precedenti;",
                    'corretta' => 0,],
            ],
            [
                ['risposta' => "nella loro decomposizione;",
                    'corretta' => 1,
                ],
                ['risposta' => "nella loro capacità di autorigenerarsi;",
                    'corretta' => 0,],
                ['risposta' => "nella loro possibilità di sgretolarsi;",
                    'corretta' => 0,],
                ['risposta' => "nessuna delle precedenti;",
                    'corretta' => 0,],
            ],
            [
                ['risposta' => "verde;",
                    'corretta' => 0,
                ],
                ['risposta' => "rosso;",
                    'corretta' => 0,],
                ['risposta' => "giallo;",
                    'corretta' => 1,],
                ['risposta' => "bianco;",
                    'corretta' => 0,],
            ],
            [
                ['risposta' => "forme di energia che per loro caratteristica intrinseca si rigenerano almeno alla stessa velocità con cui vengono consumate;",
                    'corretta' => 1,
                ],
                ['risposta' => "forme di energia che per loro caratteristica intrinseca si rigenerano non alla stessa velocità con cui vengono consumate;",
                    'corretta' => 0,],
                ['risposta' => "forme di energia che per loro caratteristica intrinseca non si rigenerano;",
                    'corretta' => 0,],
                ['risposta' => "nessuna delle precedenti;",
                    'corretta' => 0,],
            ],
            [
                ['risposta' => "legno;",
                    'corretta' => 0,
                ],
                ['risposta' => "carta",
                    'corretta' => 0,],
                ['risposta' => "plastica",
                    'corretta' => 1,],
                ['risposta' => "nessuna delle precedenti;",
                    'corretta' => 0,],
            ],
            [
                ['risposta' => "un composto in cui nessun atomo di carbonio è unito tramite legame covalente ad atomi di altri elementi;",
                    'corretta' => 0,
                ],
                ['risposta' => "un composto in cui uno o più atomi di carbonio sono uniti tramite legame covalente ad atomi di altri elementi;",
                    'corretta' => 1,],
                ['risposta' => "esclusivamente un concime;",
                    'corretta' => 0,],
                ['risposta' => "nessuna delle precedenti;",
                    'corretta' => 0,],
            ],
            [
                ['risposta' => "acqua;",
                    'corretta' => 0,
                ],
                ['risposta' => "combustibili idrocarburici;",
                    'corretta' => 1,],
                ['risposta' => "non è possbile ricilare l'anidride carbonica;",
                    'corretta' => 0,],
                ['risposta' => "nessuna delle precedenti;",
                    'corretta' => 0,],
            ],
            [
                ['risposta' => "riutilizzare l'acqua piovana per fabbisogno idrico domestico;",
                    'corretta' => 1,
                ],
                ['risposta' => "riutilizzare l'acqua delle fogne;",
                    'corretta' => 0,],
                ['risposta' => "non esiste nessuna nuova frontiera del riutilizzo dell'acqua;",
                    'corretta' => 0,],
                ['risposta' => "nessuna delle precedenti;",
                    'corretta' => 0,],
            ],
            [
                ['risposta' => "1 anno;",
                    'corretta' => 0,
                ],
                ['risposta' => "10 anni;",
                    'corretta' => 0,],
                ['risposta' => "20 anni;",
                    'corretta' => 1,],
                ['risposta' => "nonsi decompone;",
                    'corretta' => 0,],
            ],
            [
                ['risposta' => "2030-2045;",
                    'corretta' => 0,
                ],
                ['risposta' => "2100-2115;",
                    'corretta' => 0,],
                ['risposta' => "2060-2075;",
                    'corretta' => 1,],
                ['risposta' => "nessuna delle precedenti;",
                    'corretta' => 0,],
            ],
            [
                ['risposta' => "3.4 tonnellate;",
                    'corretta' => 1,
                ],
                ['risposta' => "1 tonnellata;",
                    'corretta' => 0,],
                ['risposta' => "2.6 tonnellata;",
                    'corretta' => 0,],
                ['risposta' => "nessuna delle precedenti;",
                    'corretta' => 0,],
            ],
            [
                ['risposta' => "industriale,militare,accidentale;",
                    'corretta' => 1,
                ],
                ['risposta' => "industriale,domestica,accidentale;",
                    'corretta' => 0,],
                ['risposta' => "domestica, militare, accidentale;",
                    'corretta' => 0,],
                ['risposta' => "nessuna delle precedenti;",
                    'corretta' => 0,],
            ],
            [
                ['risposta' => "solo alcune forme di vita sulla Terra vengono mantenute dal flusso energetico solare che penetra nella biosfera;",
                    'corretta' => 0,
                ],
                ['risposta' => "nessuna forma di vita sulla Terra viene mantenuta dal flusso energetico solare che penetra nella biosfera;",
                    'corretta' => 0,],
                ['risposta' => "ogni forma di vita sulla Terra viene mantenuta dal flusso energetico solare che penetra nella biosfera;",
                    'corretta' => 1,],
                ['risposta' => "nessuna delle precedenti;",
                    'corretta' => 0,],
            ],
        ];

        foreach (range(0,22) as $index){
            DB::table('domande')->insert([
                'domanda' => $domanda[$index],
                'livello' => rand(1,4),
            ]);
            $id_domanda = DB::table('domande')->max('id');
            foreach ($risposte[$index] as $risposta){
                DB::table('risposte')->insert([
                    'risposta' => $risposta['risposta'],
                    'esatto' => $risposta['corretta'],
                    'domande_id' => $id_domanda,
                ]);
            }
        }
    }

}
