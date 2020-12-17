<?php

namespace App\Console\Commands;

use App\Currency;
use App\CurrencyHistory;
use Illuminate\Console\Command;

class CurrencyParse extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:parse';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $url = 'http://www.cbr.ru/scripts/XML_daily.asp';
        $xml = simplexml_load_file($url);
        $xml = json_decode(json_encode($xml), true);

        $usd = '';
        foreach ($xml['Valute'] as $findVal)
        {
           if($findVal['CharCode'] === 'USD'){
               $usd = str_replace(',', '.', $findVal['Value']);
               $usd = floatval($usd);
           }
        }

        foreach ($xml['Valute'] as $val) {
            $rate = str_replace(',', '.', $val['Value']);
            $currents = Currency::where('name', $val['CharCode']);

            if($currents->count() == 0){
            $saveCurrencies = Currency::create([
                'name' => $val['CharCode'],
                'rate' => floatval($rate) * 1 / $usd
            ]);

            CurrencyHistory::create([
                'name' => $val['CharCode'],
                'rate' => floatval($rate) * 1 / $usd
            ]);
        }else{
            $update = Currency::where('name', $val['CharCode'])->update(['rate' => floatval($rate) * 1 / $usd]);
            $history = CurrencyHistory::create([
                'name' => $val['CharCode'],
                'rate' => floatval($rate) * 1 / $usd
            ]);
            }
          }
        }

}
