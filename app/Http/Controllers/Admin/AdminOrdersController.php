<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\USPS;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\City;
use App\Models\Order;
use App\Models\State;
use App\Rules\UspsRule;

class AdminOrdersController extends Controller
{
    public function __invoke()
    {
        return view('admin.orders.index');
    }
    
    public function updateAddress(Request $request, Order $order){
        $request->validate([
            'type' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => ['required', 'string', new UspsRule],
        ]);
        
        
        
        $address_return = USPS::validateAddress($request->address, City::find($request->city)->title, State::find($request->state)->code, $request->zipcode);
        
        
        if(!$address_return){
            session()->flash('error','invalid address');            
            return redirect(route('admin.orders.index'));
            
        }
        
        if($request->zipcode != $address_return->Address->Zip5->__toString()){
            $request->zipcode = trim($address_return->Address->Zip5->__toString());
        }
        
        if(strtoupper($request->address) != strtoupper($address_return->Address->Address2->__toString())){
            $request->address = trim($address_return->Address->Address2->__toString());
        }
        
        if(strtoupper(State::find($request->state)->code) != strtoupper($address_return->Address->State->__toString())){
            $state_search = State::where('code', strtoupper($address_return->Address->State->__toString()))->get()->first();
            
            if(!$state_search){
                session()->flash('error','invalid State');
                return redirect(route('admin.orders.index'));
            }
            
            if($state_search->id != $this->state){
                $request->state = $state_search->id;
            }
        }
        
        if(strtoupper(City::find($request->city)->title) != strtoupper($address_return->Address->City->__toString())){
            
            $city_search = City::where(DB::raw("upper(title)"), strtoupper($address_return->Address->City->__toString()))
            ->where('state_id',$request->state)->get()->first();
            
            if(!$city_search){
                session()->flash('error','invalid City');
                return redirect(route('admin.orders.index'));
            }
            $request->city = $city_search->id;
        }
        
        
        $order->address_type = $request->type;
        $order->address = $request->address;
        $order->address_2 = $request->address2;
        $order->city_id = $request->city;
        $order->zipcode = $request->zipcode;
        $order->save();
        
        session()->flash('message','Address changed with successfully!');
        
//         return redirect(route('admin.orders.index'));
        return redirect()->back();
    }
}
