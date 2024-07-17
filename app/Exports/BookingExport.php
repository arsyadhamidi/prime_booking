<?php

namespace App\Exports;

use App\Models\Booking;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BookingExport implements FromCollection, WithHeadings
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        // Map data to include country name
        return $this->data->map(function ($item) {
            return [
                'id' => $item->id,
                'nama' => $item->nama, // Pastikan ada kolom 'nama_negara' di model Negara
                'kategori_id' => $item->kategori->nama,
                'layanan_id' => $item->layanan->nama_layanan,
                'tanggal' => $item->tanggal,
                'jam' => $item->jam,
                'status' => $item->status,
                'keterangan' => $item->status,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama Lengkap',
            'Kategori',
            'Layanan',
            'Tanggal',
            'Jam',
            'Status',
            'Keterangan',
        ];
    }
}
