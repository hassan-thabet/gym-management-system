<?php
namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use App\Models\Coash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CoashController extends Controller
{
    public function index(){
        $coashes = Coash::paginate(20);
        return view('dashboard.coashes.coashes')->with([
            'coashes' => $coashes ,
        ]);
    }


    public function create(){
        return view('dashboard.coashes.add-coash');
    }

    
    public function store(Request $request){

        try {
            Coash::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'password' => Hash::make($request->password),
                'image' => $request->image,
                'salary' => $request->salary,
                'joined_at' => $request->joined_at,
                'api_token' => bin2hex(openssl_random_pseudo_bytes(60)),
            ]);

            return redirect()->route('admin.coashes-list');

        }catch (\Exception $exception){
            return $exception;
        }

    }




    public function destroy($id){
        $coash = Coash::find($id);
        if (! $coash){
            return redirect()->route('admin.home');
        }
        $coash->delete();
        return redirect()->route('admin.coashes-list');

    }

}