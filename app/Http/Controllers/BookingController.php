<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Client;
use Google\Service\Calendar;

class BookingController extends Controller
{
    public function create()
    {
        return view('reservas');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'date' => 'required|date',
            'time' => 'required',
            'service' => 'required|string|max:100',
        ]);

        $client = new Client();
        $client->setAuthConfig(storage_path('app/google/credentials.json'));
        $client->addScope(Calendar::CALENDAR);

        // Aquí usas un token ya generado (lo configuraremos luego)
        $client->setAccessToken(json_decode(file_get_contents(storage_path('app/google/token.json')), true));

        $service = new Calendar($client);
        $event = new Calendar\Event([
            'summary' => 'Reserva: ' . $validated['service'],
            'description' => 'Cliente: ' . $validated['name'] . ' (' . $validated['email'] . ')',
            'start' => [
                'dateTime' => $validated['date'] . 'T' . $validated['time'] . ':00',
                'timeZone' => 'America/Santiago',
            ],
            'end' => [
                'dateTime' => $validated['date'] . 'T' . date('H:i:s', strtotime($validated['time'].' +1 hour')),
                'timeZone' => 'America/Santiago',
            ],
        ]);

        $calendarId = 'primary';
        $service->events->insert($calendarId, $event);

        return back()->with('success', 'Tu reserva fue registrada exitosamente.');
    }
}
