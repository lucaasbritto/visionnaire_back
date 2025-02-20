<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhoneNumber;

class PhoneNumberController extends Controller
{
    public function index(Request $request){        
        $phoneNumbers = PhoneNumber::paginate($request->perPage); 
        return response()->json($phoneNumbers);
    }

    public function show($id)
    {
        $phoneNumber = PhoneNumber::findOrFail($id);

        return response()->json($phoneNumber);
    }

    public function store(Request $request){
        $request->validate([
            'value' => 'required|string|unique:phone_numbers,value',
            'monthlyPrice' => 'required|numeric',
            'setupPrice' => 'required|numeric',
            'currency' => 'required|string',
        ]);

        $phoneNumber = PhoneNumber::create($request->all());
        return response()->json($phoneNumber, 201);
    }

    public function update(Request $request, $id){
        $phoneNumber = PhoneNumber::findOrFail($id);
        $phoneNumber->update($request->all());
        return response()->json($phoneNumber);
    }


    public function destroy($id){
        PhoneNumber::findOrFail($id)->delete();
        return response()->json(null, 204);
    }


}
