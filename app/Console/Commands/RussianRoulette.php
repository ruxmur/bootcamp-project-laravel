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
        $result = 0;
        $numberstat = array();
        for (;;) {

            print "For exit please write 'stop'\n";
            print "To continue please enter your number from 1 to 7:\n";
            $numberstring = readline("Command: \n");
            if ($numberstring == 'stop') {

                break;
            }

            $numberint = (int) $numberstring;

            if ($numberint < 1 or $numberint > 7) {
                echo "You entered wrong number! Gameover!\n";

                break;
            } else {
                $numberstat[] = $numberint;

                echo ("Your number:" . $result . "\n");
                $game = random_int(1, 7);
                echo ("Destiny has chosen:" . $game . "\n");
                if ($numberint == $game) {
                    print "Congratiulations you won\n";
                    $wincounter++;
                } else {
                    print "Sorry you are dead\n";
                    $losecounter++;
                }
            }
        }
        echo "You decided to quit? Come back any time!\n";
        echo ($wincounter . $losecounter);


        $countervalues = array_count_values($numberstat);
        foreach ($countervalues as $value => $count) {

            $table[] = [$value, $count, $wincounter, $losecounter];
        }

        // printing array counter
        // print_r($countervalues);
        $this->table(['Number', 'Counter', 'totalWins', 'totalDefeats'], $table);


        $this->cacheRepository->set('Results',  86400);  //seconds in a day 


    }
}
