<div>
    <p>Dear <strong>{{ $appointment->user->first_name . ' ' . $appointment->user->last_name }}</strong>!</p>

    <p>Appointment created with the following parameters:</p>

    <table>
        <thead>
        <tr>
            <th>Category</th>
            <th>Address</th>
            <th>Description</th>
        </tr>
        </thead>
        <tr>
            <td>{{ $appointment->category->name }}</td>
            <td>{{ $appointment->address }}</td>
            <td>{{ $appointment->description }}</td>
        </tr>
    </table>

    <p>Please wait for date and time confirmation.</p>
    <p>You can track your appointment status in your personal dashboard at the address:</p>
    <a href="{{ $_ENV['APP_URL'] . '/app/appointments' }}" class="p-3 bg-cyan-400">Dashboard</a>

    <p>If you are new to our website, please visit the link below for the email confirmation:</p>
    <a href="{{ $_ENV['APP_URL'] . '/email-confirmation' }}">Confirm email</a>
</div>
