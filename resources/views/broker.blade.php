<form action="{{ route('broker-accounts.store') }}" method="POST">
    @csrf
    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
    
    <div>
        <label>Full Name:</label>
        <input type="text" name="full_name" required>
    </div>

    <div>
        <label>BOID Number:</label>
        <input type="text" name="boid_no" required>
    </div>

    <div>
        <label>Source of Investment:</label>
        <input type="text" name="source_of_investment" required>
    </div>

    <button type="submit">Submit Broker Account</button>
</form>
