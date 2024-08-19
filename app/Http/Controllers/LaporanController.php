<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\Pengeluaran;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $tanggalAwal = date('Y-m-d', mktime(0, 0, 0, date('m'), 1, date('Y')));
        $tanggalAkhir = date('Y-m-d');

        if ($request->has('tanggal_awal') && $request->tanggal_awal != "" && $request->has('tanggal_akhir') && $request->tanggal_akhir) {
            $tanggalAwal = $request->tanggal_awal;
            $tanggalAkhir = $request->tanggal_akhir;
        }

        return view('laporan.index', compact('tanggalAwal', 'tanggalAkhir'));
    }

    public function getData($awal, $akhir)
    {
        $data = [];
        $total_pendapatan = 0;

        // Loop through each date in descending order
        while (strtotime($akhir) >= strtotime($awal)) {
            $tanggal = $akhir;
            $akhir = date('Y-m-d', strtotime("-1 day", strtotime($akhir)));

            $total_penjualan = Penjualan::whereDate('created_at', $tanggal)->sum('bayar');
            $total_pembelian = Pembelian::whereDate('created_at', $tanggal)->sum('bayar');
            $total_pengeluaran = Pengeluaran::whereDate('created_at', $tanggal)->sum('nominal');

            $pendapatan = $total_penjualan - $total_pembelian - $total_pengeluaran;
            $total_pendapatan += $pendapatan;

            $data[] = [
                'DT_RowIndex' => count($data) + 1,
                'tanggal' => tanggal_indonesia($tanggal, false),
                'penjualan' => format_uang($total_penjualan),
                'pembelian' => format_uang($total_pembelian),
                'pengeluaran' => format_uang($total_pengeluaran),
                'pendapatan' => format_uang($pendapatan),
            ];
        }

        // Add a row for total income
        $data[] = [
            'DT_RowIndex' => '',
            'tanggal' => '',
            'penjualan' => '',
            'pembelian' => '',
            'pengeluaran' => 'Total Income',
            'pendapatan' => format_uang($total_pendapatan),
        ];

        return $data;
    }

    public function data($awal, $akhir)
    {
        $data = $this->getData($awal, $akhir);

        return datatables()
            ->of($data)
            ->make(true);
    }

    public function exportPDF($awal, $akhir)
    {
        $data = $this->getData($awal, $akhir);
        $pdf  = PDF::loadView('laporan.pdf', compact('awal', 'akhir', 'data'));
        $pdf->setPaper('a4', 'potrait');
        
        return $pdf->stream('Laporan-pendapatan-' . date('Y-m-d-his') . '.pdf');
    }
}
