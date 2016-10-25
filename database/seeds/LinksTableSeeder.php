<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'link_name' => '百度',
                'link_title' => '百度一下，你就知道',
                'link_url' => 'https://www.baidu.com/',
                'link_order' => '1',
            ],
            [
                'link_name' => '知乎',
                'link_title' => '与世界分享你的知识、经验和见解',
                'link_url' => 'https://www.zhihu.com/',
                'link_order' => '2',
            ]
        ];
        DB::table('links')->insert($data);
    }
}
