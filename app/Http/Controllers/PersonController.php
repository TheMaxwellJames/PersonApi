<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function store(Request $request)
    {
        // Validate input data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',


        ]);

        // Create a new person
        $person = new Person();
        $person->name = $validatedData['name'];


        $person->save();

        return response()->json($person, 201);

       // return response()->json(['message' => 'Person created successfully'], 201);
    }

    public function show($id)
    {
        // Fetch details of a person by ID
        $person = Person::find($id);

        if (!$person) {
            return response()->json(['message' => 'Person not found'], 404);
        }

        return response()->json($person);
    }

    public function update(Request $request, $id)
    {
        // Validate input data
        $validatedData = $request->validate([
            'name' => 'string|max:255',

        ]);

        // Find the person by ID
        $person = Person::find($id);

        if (!$person) {
            return response()->json(['message' => 'Person not found'], 404);
        }

        // Update person attributes
        if (isset($validatedData['name'])) {
            $person->name = $validatedData['name'];
        }


        $person->save();

        return $person;

       // return response()->json(['message' => 'Person updated successfully']);
    }

    public function destroy($id)
    {
       // Find the person by ID
    $person = Person::find($id);

    if (!$person) {
        return response()->json(['message' => 'Person not found'], 404);
    }

    $personName = $person->name; // Get the name before deleting

    $person->delete();

    return response()->json(['message' => $personName . ' deleted successfully']);


    }
}
