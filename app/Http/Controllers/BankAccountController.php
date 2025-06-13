<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use App\Models\User;
use App\Services\NotificationService;
use Illuminate\Http\Request;

class BankAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bank');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'full_name' => 'required|string',
            'bank_name' => 'required|string',
            'branch_name' => 'required|string',
        ]);
        BankAccount::create($request->all());
        $user=User::findOrFail($request->id);
        $type='Bank Account';
        $mail_message='You have successfully created a new bank account';
        NotificationService::sendFormSubmissionMail($user,$type,$mail_message);
        dd('hello');
        return view('broker')->with('success', 'Bank account saved successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(BankAccount $bankAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BankAccount $bankAccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BankAccount $bankAccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BankAccount $bankAccount)
    {
        //
    }
}
