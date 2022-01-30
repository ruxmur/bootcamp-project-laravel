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
    protected $signature = 'ru-roulette:play';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Play Russian Roulette game.';

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

        $number = 0;
        $winstat = [];
        $losestat = [];
        $counter = 0;
        $numberstatplayer = [];
        $numberstatgame = [];
        $this->info("Welcome to 'THE RUSSIAN ROULETTE'!");
        while ($number > 1 or $number < 6) {

            $this->info("To continue please enter your number from 1 to 6:");
            $number = $this->ask("Command: ");

            if ($number < 1 or $number > 6) {
                $this->info("Game over!");

                break;
            } else {
                $numberstatplayer[] = $number;

                $this->info("Your number:{$number}");
                $game = random_int(1, 6);
                array_push($numberstatgame, $game);
                $this->info("Destiny has chosen: {$game} ");
                $counter++;
                if ($number == $game) {
                    $this->info("Sorry you are dead");
                    array_splice($losestat, ($counter - 1), 0, $number);
                    array_splice($winstat, ($counter - 1), 0, 'out of count');
                } else {
                    $this->info("Congratiulations you won");
                    array_splice($winstat, ($counter - 1), 0, $number);
                    array_splice($losestat, ($counter - 1), 0, 'out of count');
                }
            }
            $this->info("If you want to break enter anything except [1;6] ");
        }
        $this->info("You decided to quit? Come back any time!");

        $this->cacheRepository->set('Player Numbers', $numberstatplayer, 86400);
        $this->cacheRepository->set('Game numbers', $numberstatgame, 86400);
        $this->cacheRepository->set('Win counter', $winstat, 86400);
        $this->cacheRepository->set('Lose counter', $losestat, 86400);
        
    }
}
