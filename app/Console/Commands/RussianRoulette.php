<?php

namespace App\Console\Commands;


use Illuminate\Console\Command;
use Illuminate\Contracts\Cache\Repository as CacheRepository;


class RussianRoulette extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ru-roulette:test';

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
        $numberint = 0;
        $numberstring = "x";
        $wincounter = 0;
        $losecounter = 0;
        
        $numberstat = array();
        $exit_parameter = 'n';
        $name = $this->ask("Welcome to 'THE RUSSIAN ROULETTE'!");
        while(strtolower($exit_parameter) != "stop") {
        
            $this->info("To continue please enter your number from 1 to 7:");
            $numberstring = readline("Command: ");
            $numberint = (int) $numberstring;
            if ($numberint < 1 or $numberint > 7) {
                $this->info("You entered wrong number! Game over!");

                break;
            } else {
                $numberstat[] = $numberint;

                $this->info("Your number:{$numberint}");
                $game = random_int(1, 7);
                $this->info("Destiny has chosen: {$game} ");
                if ($numberint == $game) {
                    $this->info("Congratiulations you won");
                    $wincounter++;
                } else {
                    $this->info("Sorry you are dead");
                    $losecounter++;
                }
            }
            $this->info("For exit please write 'stop' ");

        }
        $this->info("You decided to quit? Come back any time!");
    
        $countervalues = $this->cacheRepository->get('Results', []);
        $countervalues[$name] = $countervalues[$name] ?? 0;
        

        $this->cacheRepository->set('Results', 86400);  //seconds in a day 

    }
}
