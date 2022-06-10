<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => 'アクセサリー',
                'sort_order' => 1,
            ],
            [
                'name' => '家具',
                'sort_order' => 2,
            ],
            [
                'name' => 'ファッション',
                'sort_order' => 3,
            ],
            [
                'name' => '小物・財布',
                'sort_order' => 4,
            ],
            [
                'name' => 'キッズ',
                'sort_order' => 5,
            ],
            [
                'name' => 'その他',
                'sort_order' => 6,
            ],

                ]);

                        DB::table('secondary_categories')->insert([
                            [
                                'name' => 'ネックレス',
                                'sort_order' => 1,
                                'primary_category_id' => 1,
                            ],
                            [
                                'name' => 'ブレスレット',
                                'sort_order' => 2,
                                'primary_category_id' => 1,
                            ],
                            [
                                'name' => 'ピアス',
                                'sort_order' => 3,
                                'primary_category_id' => 1,
                            ],
                            [
                                'name' => 'イヤリング',
                                'sort_order' => 4,
                                'primary_category_id' => 1,
                            ],
                            [
                                'name' => 'その他',
                                'sort_order' => 5,
                                'primary_category_id' => 1,
                            ],
                            [
                                'name' => '椅子',
                                'sort_order' => 6,
                                'primary_category_id' => 2,
                            ],
                            [
                                'name' => '照明',
                                'sort_order' => 7,
                                'primary_category_id' => 2,
                            ],
                            [
                                'name' => '時計',
                                'sort_order' => 8,
                                'primary_category_id' => 2,
                            ],
                            [
                                'name' => '小物入れ',
                                'sort_order' => 9,
                                'primary_category_id' => 2,
                            ],
                            [
                                'name' => '鏡',
                                'sort_order' => 10,
                                'primary_category_id' => 2,
                            ],
                            [
                                'name' => '花瓶',
                                'sort_order' => 11,
                                'primary_category_id' => 2,
                            ],
                            [
                                'name' => '本棚',
                                'sort_order' => 12,
                                'primary_category_id' => 2,
                            ],
                            [
                                'name' => 'バス・トイレ用品',
                                'sort_order' => 13,
                                'primary_category_id' => 2,
                            ],

                            [
                                'name' => 'テレビ台',
                                'sort_order' => 14,
                                'primary_category_id' => 2,
                            ],
                            [
                                'name' => 'その他',
                                'sort_order' => 15,
                                'primary_category_id' => 2,
                            ],
                            [
                                'name' => '照明',
                                'sort_order' => 16,
                                'primary_category_id' => 2,
                            ],
                            [
                                'name' => 'マフラー',
                                'sort_order' => 17,
                                'primary_category_id' => 3,
                            ],
                            [
                                'name' => '手袋',
                                'sort_order' => 18,
                                'primary_category_id' => 3,
                            ],
                            [
                                'name' => 'スカーフ',
                                'sort_order' => 19,
                                'primary_category_id' => 3,
                            ],
                            [
                                'name' => 'ハンカチ',
                                'sort_order' => 20,
                                'primary_category_id' => 3,
                            ],
                            [
                                'name' => '洋服',
                                'sort_order' => 21,
                                'primary_category_id' => 3,
                            ],
                            [
                                'name' => 'その他',
                                'sort_order' => 22,
                                'primary_category_id' => 3,
                            ],
                            [
                                'name' => '財布',
                                'sort_order' => 23,
                                'primary_category_id' => 4,
                            ],
                            [
                                'name' => 'キーケース',
                                'sort_order' => 24,
                                'primary_category_id' => 4,
                            ],
                            [
                                'name' => 'メガネケース',
                                'sort_order' => 25,
                                'primary_category_id' => 4,
                            ],
                            [
                                'name' => '名刺入れ',
                                'sort_order' => 26,
                                'primary_category_id' => 4,
                            ],
                            [
                                'name' => 'その他',
                                'sort_order' => 27,
                                'primary_category_id' => 4,
                            ],
                            [
                                'name' => 'ぬいぐるみ',
                                'sort_order' => 28,
                                'primary_category_id' => 5,
                            ],
                            [
                                'name' => 'おもちゃ',
                                'sort_order' => 29,
                                'primary_category_id' => 5,
                            ],
                            [
                                'name' => 'その他',
                                'sort_order' => 30,
                                'primary_category_id' => 5,
                            ],
                            [
                                'name' => 'その他',
                                'sort_order' => 31,
                                'primary_category_id' => 6,
                            ],

                        ]);
    }
}
