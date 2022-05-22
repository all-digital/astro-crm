<?php 

namespace App\Exports;

use App\Models\Services;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Models\User;

class ServicesExport implements FromView
{
    public function view(): View
    {        
        $user = User::find(auth()->user()->id);
        
        // $id = 2;
        // $services = Services::find($id);

        // $services = new Services();
        
        return view('exports.services', [
            'services' => Services::where("company_id", $user->profile->company->id)->get()
        ]);



    }//end method view
}//end class

