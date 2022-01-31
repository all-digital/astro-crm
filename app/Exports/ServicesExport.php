<?php 

namespace App\Exports;

use App\Models\Services;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ServicesExport implements FromView
{
    public function view(): View
    {
        // $id = 2;
        // $services = Services::find($id);

        // $services = new Services();
        
        return view('exports.services', [
            'services' => Services::all()
        ]);



    }//end method view
}//end class

