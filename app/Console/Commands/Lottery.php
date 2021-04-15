<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
require './vendor/autoload.php';
 
use phpspider\core\phpspider;

class Lottery extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Lottery';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '中大奖啊';

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
     * @return mixed
     */
    public function handle()
    {
        //
        $configs = array(
            'name'=>'糗事百科',
            'domains'=> array(
            'https://webapi.sporttery.cn/gateway/lottery/getHistoryPageListV1.qry?gameNo=85&provinceId=0&pageSize=30&isVerify=1&pageNo=1'
            ));
            dd($spider = new phpspider($configs));
            
            $spider->start();
    }
}
