<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(Request $request)
    {
        $perpage = $request->perpage ?? 2;
        return view('appointments', [
            'appointments' => Appointment::paginate($perpage)->withQueryString()
        ]);
    }

    public function create()
    {
        return view('appointments_create', [
            'users' => User::all(),
            'services' => Service::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_users' => 'required|numeric',
            'id_service' => 'required|numeric',
            'appointment_datetime' => 'required|date',
            'price' => 'required|numeric|min:0'
        ]);

        Appointment::create($validated);

        return redirect()->route('appointments.index')
                        ->with('success', 'Запись успешно создана!');
    }

    public function show(string $id)
    {
        $appointment = Appointment::with(['user', 'service'])->findOrFail($id);
        return view('appointments.show', compact('appointment'));
    }

    public function edit(string $id)
    {
        $appointment = Appointment::findOrFail($id);
        $users = User::all();
        $services = Service::all();
        
        return view('appointments.edit', compact('appointment', 'users', 'services'));
    }

    public function update(Request $request, string $id)
    {
        // Валидация
        $validated = $request->validate([
            'id_users' => 'required|exists:users,id',
            'id_service' => 'required|exists:service,id',
            'appointment_datetime' => 'required|date',
            'price' => 'required|numeric|min:0'
        ]);

        $appointment = Appointment::findOrFail($id);
        $appointment->update($validated);

        return redirect()->route('appointments.index')
                         ->with('success', 'Запись успешно обновлена!');
    }

    public function destroy(string $id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return redirect()->route('appointments.index')
                         ->with('success', 'Запись успешно удалена!');
    }
}
