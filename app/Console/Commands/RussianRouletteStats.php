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
    protected $description = 'Statistics of Russian Roulette game.';

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

        $numberstatplayer = $this->cacheRepository->get('Player Numbers', []);
        $numberstatgame = $this->cacheRepository->get('Game numbers', []);
        $winstat = $this->cacheRepository->get('Win counter', []);
        $losestat = $this->cacheRepository->get('Lose counter', []);

        $countervalues = array_count_values($numberstatplayer);
        $countervaluesgame = array_count_values($numberstatgame);
        $countervalueswin = array_count_values($winstat);
        $countervalueslose = array_count_values($losestat);

        foreach ($countervalues as $value => $count) {
            $table1[] = [$value, $count];
        }
        foreach ($countervaluesgame as $value => $count) {

            $table2[] = [$value, $count];
        }
        foreach ($countervalueswin as $value => $count) {

            $table3[] = [$value, $count];
        }
        foreach ($countervalueslose as $value => $count) {

            $table4[] = [$value, $count];
        }

        $this->info('Player Numbers and Counts Statistics');
        $this->table(['Number', 'Occurence'], $table1);
        $this->info('Game Numbers and Counts Statistics');
        $this->table(['Number', 'Occurence'], $table2);
        $this->info('Player Win and Counts Statistics');
        $this->table(['Number', 'Occurence'], $table3);
        $this->info('Player Lose and Counts Statistics');
        $this->table(['Number', 'Occurence'], $table4);
    }
}
