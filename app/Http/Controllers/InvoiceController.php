<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    // Mendapatkan semua invoice berdasarkan id_merchant
    public function getInvoicesByMerchant($merchantId)
    {
        $invoices = Invoice::where('id_merchant', $merchantId)->get();
        return response()->json($invoices, 200);
    }
}
