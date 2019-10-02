<?php


namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

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
                'love birds' => [
                    'alex',
                    'abbey',
                    'erin',
                    'zack',
                    'jj',
                    'katy'
                ],
                'important folks' => [],
                'avalanche budz' => []
            ]
        ];

        return view('charts.show', compact('data'));
    }

}
