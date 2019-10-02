<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class ChartController extends Controller
{

    public function index()
    {
        return view('charts.index');
    }

    public function show()
    {
        $data = [
            'people' => [
                'heidi', 'ray', 'liz', 'beth', 'henry', 'tt', 'rich', 'randy', 'dima'
            ],
            'tables' => [
                [
                    'name' => 'love birds',
                    'container_id' => Str::snake('love birds'),
                    'people' => [
                        'alex',
                        'abbey',
                        'erin',
                        'zack',
                        'jj',
                        'katy'
                    ],
                ],
                [
                    'name' => 'important folks',
                    'container_id' => Str::snake('important folks'),
                    'people' => []
                ],
                [
                    'name' => 'avalanche',
                    'container_id' => Str::snake('avalanche folks'),
                    'people' => []
                ]
            ]
        ];

        return view('charts.show', compact('data'));
    }

}
