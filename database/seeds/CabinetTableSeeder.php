<?php

/*
 * This file is part of Fixhub.
 *
 * Copyright (C) 2016 Fixhub.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Fixhub\Models\Cabinet;
use Illuminate\Database\Seeder;

class CabinetTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cabinets')->delete();

        Cabinet::create([
            'name'        => 'Database',
            'description' => 'Database Servers',
            'key_id'      => 1,
        ]);
    }
}
