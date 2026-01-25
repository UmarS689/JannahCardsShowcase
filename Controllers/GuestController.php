<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CardDesign;
use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    // Shows the existing guest list. 
    public function index(CardDesign $cardDesign)
    {
        return $cardDesign->guests()
            ->where('is_deleted', false)
            ->orderBy('order_index')
            ->get();
    }

    // Stores a new guest in the database.
    public function store(Request $request, CardDesign $cardDesign)
    {
        $guest = $cardDesign->guests()->create([
            'name' => $request->name,
            'guestNo' => $request->guestNo ?? 1,
            'phone' => $request->phone,
            'email' => $request->email,
            'notes' => $request->notes,
            'order_index' => $cardDesign->guests()->count(),
        ]);

        // Scope for sending emails and texts automatically.

        return response()->json($guest);
    }

    // Deletes an existing guest.
    public function destroy(Guest $guest)
    {
        // Doesn't delete them, just changes the field for that user.
        $guest->update(['is_deleted' => true]);

        return response()->json(['success' => true]);
    }

    // Updates the guest info
    public function update(Request $request, Guest $guest)
    {
        $guest->update([
            'name' => $request->name ?? $guest->name,
            'guestNo' => $request->guestNo ?? $guest->guestNo,
            'phone' => $request->phone ?? $guest->phone,
            'email' => $request->email ?? $guest->email,
            'notes' => $request->notes ?? $guest->notes,
            'is_edited' => true,
        ]);

        return response()->json($guest);
    }

    // Finds the cardDesign associated with the guestList.
    public function cardDesign()
    {
        return $this->belongsTo(CardDesign::class);
    }

}
