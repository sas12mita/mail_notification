<form action="{{ route('bank-accounts.store') }}" method="POST">
    @csrf
    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
    
    <div>
        <label>Full Name:</label>
        <input type="text" name="full_name" required>
    </div>

    <div>
        <label>Bank Name:</label>
        <input type="text" name="bank_name" required>
    </div>

    <div>
        <label>Branch Name:</label>
        <input type="text" name="branch_name" required>
    </div>

    <button type="submit">Submit Bank Account</button>
</form>
