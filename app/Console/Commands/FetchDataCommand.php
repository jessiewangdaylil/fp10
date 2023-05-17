<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use League\Csv\Reader;

class FetchDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:fetch-data-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
// 爬取網頁資料並存入
        $response = Http::get('https://data.moi.gov.tw/MoiOD/System/DownloadFile.aspx?DATA=AE071E62-42F3-4DE1-BA2A-03F2DBFB8713');
        $filename = 'ndata.csv'; // 指定下載的檔案名稱
        $filePath = storage_path('app\public\csv' . $filename);
        file_put_contents($filePath, $response->body());
// 比較 新爬取檔案 與 當前檔案是否有差異
        // base File 當前檔案
        $baseFPath = storage_path('app\public\csv\data.csv');
        $csvB = Reader::createFromPath($baseFPath, 'r');
        $recordsB = $csvB->getRecords();
        //new File 新爬取檔案
        $newFPath = storage_path('app\public\csv\ndata.csv');
        $csvN = Reader::createFromPath($newFPath, 'r');
        $recordsN = $csvN->getRecords();
        // 比較
        if ($recordsB == $recordsN) {
            // echo "兩個 CSV 檔案的內容完全相同";
        } else {
            // echo "兩個 CSV 檔案的內容不相同";

        }

    }
}