<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Barryvdh\DomPDF\Facade\Pdf;

class QuotePdfController extends Controller
{
    public function generate($id)
    {
        $quote = Quote::findOrFail($id);
        $pdf = Pdf::loadView('pdf.quote', compact('quote'))->setPaper('a4');

        $filename = 'devis_' . $quote->id . '_' . date('Ymd') . '.pdf';
        return $pdf->download($filename);
    }
}
