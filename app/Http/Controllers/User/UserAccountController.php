<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Dependent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PragmaRX\Google2FA\Google2FA;
use PragmaRX\Google2FALaravel\Support\Authenticator;

class UserAccountController extends Controller
{
    public function index(){
        $dependents = Dependent::where('benefactor', Auth::id())->get();

        return view('user.index', compact('dependents'));
    }

    public function addDependent(){
        return view('user.dependent');
    }


    public function addNewDependent(Request $request){
        $dependent = new Dependent();
        $dependent->title = strtolower($request['title']);
        $dependent->f_name = $request['f_name'];
        $dependent->phone = $request['phone'];
        $dependent->location = $request['location'];
        $dependent->address = $request['address'];
        $dependent->benefactor = Auth::id();

        switch ($request->location){
            case 1:
                $health_center = "Amalexis Hospital";
                $health_addr = "Golden Pearl Estate";
                break;
            case 2:
                $health_center = "Southern Shore Hospital";
                $health_addr = "17c Alternative route, off Chevron drive";
                break;
            case 3:
                $health_center = "Abiodun Falade Hospitals";
                $health_addr = "53 Ajiran road, Agungi, Lagos";
                break;
            case 4:
                $health_center = "Cura-Med Hospital";
                $health_addr = "Plot 4 Orchid road";
                break;
            case 5:
                $health_center = "Nuklius Specialist Hospital";
                $health_addr = "Block 384, Ilasan housing estate, Jakande Lekki";
                break;
            case 6:
                $health_center = "Kunsela Community Hospital";
                $health_addr = "5 Kusenla road, Chisco bustop, lekki";
                break;
            case 7:
                $health_center = "Preston Hospital";
                $health_addr = "5 Chief Esan way, opposite world oil, Ikate";
                break;
            case 8:
                $health_center = "Etta Atlantic memorial Hospital";
                $health_addr = "5 Providence street, off Lekki Epe expressway";
                break;
            case 9:
                $health_center = "Evercare Hospital";
                $health_addr = "23 Admiralty way, Lekki Phase 1";
                break;
            case 10:
                $health_center = "Britannia Hospital";
                $health_addr = "12bAdeola Odeku street, Victoria Island";
                break;
            case 11:
                $health_center = "Louis Med Hospital";
                $health_addr = "151 Ozumba Mbadiwe road";
                break;
            default:
                $health_center = "Tristate Hospital";
                $health_addr = "3 Badore road, Ajah";
        }

        $dependent->health_center = $health_center;
        $dependent->health_addr = $health_addr;

        $dependent->save();

        return redirect('dependents');
    }

    public function dependents(){
        $dependents = Dependent::where('benefactor', Auth::id())->latest()->first();
        return view('user.dependents', compact('dependents'));
    }
}
