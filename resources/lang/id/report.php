<?php 

return [
    'admin' => [
        'title' => 'Laporan Admin',
        'page_title' => 'Laporan Admin',
        'page_title_desc' => '',
        'header' => [
            'user' => 'Pengguna',
            'role' => 'Peran',
            'store' => 'Toko',
            'unit' => 'Satuan',
            'phone_provider' => 'Provider Telepon',
            'settings' => 'Setting',
            'purchase_order' => 'Pembelian',
            'sales_order' => 'Penjualan',
        ],
        'field' => [
            'user' => 'Pengguna',
            'email' => 'Email',
            'role' => 'Peran',
            'profile' => 'Profil',
            'name' => 'Nama',
            'permission' => 'Ijin',
            'tax_id' => 'NPWP',
            'symbol' => 'Simbol',
            'short_name' => 'Singkatan',
        ],
    ],
    'master' => [
        'title' => 'Laporan Master',
        'page_title' => 'Laporan Master',
        'page_title_desc' => '',
        'header' => [
            'customer' => 'Pelanggan',
            'supplier' => 'Supplier',
            'product' => 'Produk',
            'product_type' => 'Tipe Produk',
            'bank' => 'Bank',
            'warehouse' => 'Gudang',
            'truck' => 'Truk',
            'truck_maintenance' => 'Pemeliharaan Truk',
            'vendor_trucking' => 'Layanan Angkutan',
        ],
        'field' => [
            'name' => 'Nama',
            'profile_name' => 'Profil',
            'bank_account' => 'Akun Bank',
            'short_code' => '',
            'short_name' => '',
            'branch' => 'Cabang',
            'branch_code' => 'Kode Cabang',
            'plate_number' => 'Plat Nomor',
        ],
    ],
    'monitoring' => [
        'title' => '',
        'page_title' => '',
        'page_title_desc' => '',
    ],
    'tax' => [
        'title' => '',
        'page_title' => '',
        'page_title_desc' => '',
    ],
    'transaction' => [
        'title' => 'Laporan Transaksi',
        'page_title' => 'Laporan Transaksi',
        'page_title_desc' => '',
        'header' => [
            'purchase_order' => 'Pembelian',
            'sales_order' => 'Penjualan',
        ],
        'field' => [
            'po_code' => 'Kode',
            'po_date' => 'Tanggal',
            'shipping_date' => 'Tgl Kirim',
            'receipt_date' => 'Tgl Terima',
            'supplier' => 'Supplier',
            'so_code' => 'Kode',
            'so_date' => 'Tanggal',
            'deliver_date' => 'Tgl Kirim',
            'customer' => 'Pelanggan',
        ],
    ],
    'template' => [
        'warehouse' => [
            'report_name' => 'Laporan Gudang',
            'parameter' => [
                'name' => 'Nama',
            ],
            'header' => [
                'store' => 'Toko',
                'name' => 'Nama',
                'address' => 'Alamat',
                'phone_number' => 'No. Telp',
                'status' => 'Status',
                'remarks' => 'Catatan',
            ],
            'footer' => 'Dicetak oleh :user pada :date',
        ],
        'vendor_trucking' => [
            'report_name' => 'Laporan Penyedia Pengiriman',
            'parameter' => [
                'name' => 'Nama',
            ],
            'footer' => 'Dicetak oleh :user pada :date',
            'header' => [
                'store' => '',
                'name' => '',
                'address' => '',
                'tax_id' => '',
                'status' => '',
                'remarks' => '',
            ],
        ],
        'truck_maintenance' => [
            'report_name' => 'Laporan Perawatan Truk',
            'parameter' => [
                'plate_number' => 'Nomor Plat',
            ],
            'footer' => 'Dicetak oleh :user pada :date',
            'header' => [
                'store' => '',
                'plate_number' => '',
                'maintenance_type' => '',
                'cost' => '',
                'odometer' => '',
                'remarks' => '',
            ],
        ],
        'bank' => [
            'report_name' => '',
            'parameter' => [
                'name' => '',
                'short_name' => '',
                'branch' => '',
                'branch_code' => '',
            ],
            'header' => [
                'name' => '',
                'short_name' => '',
                'branch' => '',
                'branch_code' => '',
                'status' => '',
                'remarks' => '',
            ],
            'footer' => '',
        ],
        'customer' => [
            'report_name' => '',
            'parameter' => [
                'name' => '',
                'profile_name' => '',
                'bank_account' => '',
            ],
            'header' => [
                'address' => '',
                'phone_number' => '',
                'city' => '',
                'tax_id' => '',
                'status' => '',
                'remarks' => '',
                'payment_due_day' => '',
                'price_level' => '',
                'person_in_charge' => '',
                'no' => '',
                'first_name' => '',
                'last_name' => '',
                'ic_number' => '',
                'phone_numbers' => '',
                'provider' => '',
                'number' => '',
                'bank_accounts' => '',
                'bank' => '',
                'account_number' => '',
                'store' => '',
                'sign_code' => '',
                'name' => '',
                'fax_num' => '',
            ],
            'footer' => '',
        ],
        'phone_provider' => [
            'report_name' => '',
            'parameter' => [
                'name' => '',
                'short_name' => '',
            ],
            'header' => [
                'name' => '',
                'short_name' => '',
                'prefix' => '',
                'status' => '',
                'remarks' => '',
            ],
            'footer' => '',
        ],
        'product' => [
            'report_name' => '',
            'parameter' => [
                'name' => '',
                'short_code' => '',
            ],
            'header' => [
                'product_type' => '',
                'name' => '',
                'short_code' => '',
                'product_units' => '',
                'description' => '',
                'status' => '',
                'remarks' => '',
                'unit' => '',
                'conversion_value' => '',
                'store' => '',
            ],
            'footer' => '',
        ],
        'product_type' => [
            'report_name' => '',
            'parameter' => [
                'name' => '',
                'short_code' => '',
            ],
            'header' => [
                'store' => '',
                'name' => '',
                'short_code' => '',
                'description' => '',
                'status' => '',
            ],
            'footer' => '',
        ],
        'role' => [
            'report_name' => '',
            'parameter' => [
                'name' => '',
                'permission' => '',
            ],
            'header' => [
                'name' => '',
                'display_name' => '',
                'description' => '',
            ],
            'footer' => '',
        ],
        'store' => [
            'report_name' => '',
            'parameter' => [
                'name' => '',
                'tax_id' => '',
            ],
            'header' => [
                'name' => '',
                'address' => '',
                'phone_num' => '',
                'fax_num' => '',
                'tax_id' => '',
                'status' => '',
                'remarks' => '',
            ],
            'footer' => '',
        ],
        'supplier' => [
            'report_name' => '',
            'parameter' => [
                'name' => '',
                'profile_name' => '',
                'bank_account' => '',
            ],
            'header' => [
                'address' => '',
                'phone_number' => '',
                'city' => '',
                'tax_id' => '',
                'status' => '',
                'remarks' => '',
                'payment_due_day' => '',
                'fax_number' => '',
                'person_in_charge' => '',
                'no' => '',
                'first_name' => '',
                'last_name' => '',
                'ic_number' => '',
                'phone_numbers' => '',
                'provider' => '',
                'number' => '',
                'bank_accounts' => '',
                'bank' => '',
                'account_number' => '',
                'store' => '',
                'sign_code' => '',
                'name' => '',
            ],
            'footer' => '',
        ],
        'truck' => [
            'report_name' => '',
            'parameter' => [
                'plate_number' => '',
            ],
            'header' => [
                'store' => '',
                'truck_type' => '',
                'plate_number' => '',
                'inspection_date' => '',
                'driver' => '',
                'status' => '',
                'remarks' => '',
            ],
            'footer' => '',
        ],
        'unit' => [
            'report_name' => '',
            'parameter' => [
                'name' => '',
                'symbol' => '',
                'tax_id' => '',
            ],
            'header' => [
                'name' => '',
                'symbol' => '',
                'status' => '',
                'remarks' => '',
            ],
            'footer' => '',
        ],
        'user' => [
            'report_name' => '',
            'parameter' => [
                'name' => '',
                'email' => '',
                'role' => '',
                'profile_name' => '',
                'profile' => '',
            ],
            'header' => [
                'name' => '',
                'email' => '',
            ],
            'footer' => '',
        ],
        'purchase_order' => [
            'report_name' => '',
        ],
    ],
    'viewer' => [
        'title' => 'Tampilan Laporan',
        'page_title' => 'Tampilan Laporan',
        'page_title_desc' => '',
    ],
];