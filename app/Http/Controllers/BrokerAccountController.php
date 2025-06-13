<?php

namespace App\Http\Controllers;

use App\Models\BrokerAccount;
use App\Models\User;
use App\Services\NotificationService;
use Illuminate\Http\Request;

class BrokerAccountController extends Controller
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
        return view('broker');
    }

    /**
     * Store a newly created resource in storage.
     */ public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'full_name' => 'required|string',
            'boid_no' => 'required|string',
            'source_of_investment' => 'required|string',
        ]);

        BrokerAccount::create($request->all());
        $user = User::findOrFail($request->id);
        $type = 'Broker Account';
        $mail_message = 'You have successfully created a new Broker account';
        NotificationService::sendFormSubmissionMail($user, $type, $mail_message);

        return back()->with('success', 'Broker account saved successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(BrokerAccount $brokerAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BrokerAccount $brokerAccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BrokerAccount $brokerAccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BrokerAccount $brokerAccount)
    {
        //
    }
}
