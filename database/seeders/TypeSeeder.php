<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            'Front-End',
            'Back-End',
            'Full-Stack'
        ];

        foreach ($types as $typeName) {
            $type = new Type();
            $type->name = $typeName;
            $type->save();

        }
    }
}
