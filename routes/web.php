<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/api/datatable-data', function () {
    // Data dummy untuk testing DataTable
    $data = [];
    for ($i = 1; $i <= 50; $i++) {
        $data[] = [
            'OrderID' => 'ORD-' . str_pad($i, 5, '0', STR_PAD_LEFT),
            'Recipient' => 'Customer ' . $i,
            'Shipping' => [
                'Address' => 'Jl. Example No. ' . $i,
                'Country' => 'Indonesia',
                'City' => 'Jakarta',
                'Date' => date('Y-m-d', strtotime('-' . rand(30, 90) . ' days'))
            ],
            'Agent' => 'Agent ' . ($i % 5 + 1),
            'Company' => 'Company ' . chr(65 + ($i % 26)),
            'OrganizationID' => 'ORG-' . str_pad($i, 4, '0', STR_PAD_LEFT),
            'Latitude' => -6.2 + (rand(-100, 100) / 1000),
            'Longitude' => 106.8 + (rand(-100, 100) / 1000),
            'Delivery' => [
                'Date' => date('Y-m-d', strtotime('-' . rand(1, 29) . ' days'))
            ],
            'Payment' => [
                'Date' => date('Y-m-d', strtotime('-' . rand(1, 60) . ' days')),
                'Amount' => '$' . number_format(rand(100, 5000), 2)
            ],
            'Timezone' => 'Asia/Jakarta',
            'Email' => 'customer' . $i . '@example.com',
            'Phone' => '08' . rand(100000000, 999999999),
            'Status' => rand(1, 8)
        ];
    }
    
    return response()->json(['data' => $data]);
});
