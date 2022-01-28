<?php

namespace App\Console\Commands;


use Illuminate\Console\Command;
use Illuminate\Contracts\Cache\Repository as CacheRepository;

class RussianRouletteStats extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ru-roulette:stats';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    private CacheRepository $cacheRepository;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(CacheRepository $cacheRepository)
    {
        parent::__construct();
        $this->cacheRepository = $cacheRepository;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $countervalues = $this->cacheRepository->get('Results', []);
        
        $numberstat = array();
        $wincounter = 0;
        $losecounter = 0;
        $numberint = 0;
        $numberstring = "x";
        $numberstat = array();

        $numberint = (int) $numberstring;
        $numberstat[] = $numberint;
        $wincounter++;
        $losecounter++;

        echo ($wincounter . $losecounter);

        $countervalues = array_count_values($numberstat);
        $table = [];
        foreach ($countervalues as $value => $count) {

            $table[] = [$wincounter, $losecounter, $value, $count] ;
        }

        $this->table(['totalWins', 'totalDefeats', 'Number', 'Counter'], $table);

        $this->cacheRepository->set('Results',  86400);  //seconds in a day  
    }
}
