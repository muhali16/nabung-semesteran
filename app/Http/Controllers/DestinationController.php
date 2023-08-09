<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDestinationRequest;
use App\Http\Requests\UpdateDestinationRequest;
use App\Models\Destination;
use App\Services\Destination\DestinationService;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public $destinationService;

    public function __construct(DestinationService $destinationService)
    {
        $this->destinationService = $destinationService;
    }

    public function index()
    {
        $destinations = $this->destinationService->getAllDestinationsAscByDate();
        return view("destination.index", [
            "title" => "Destinations",
            "destinations"=> $destinations,
        ]);
    }

    public function show($id)
    {
        $destination = $this->destinationService->find($id);
        return view("destination.edit", [
            "title" => "Destination: " . $destination->name,
            'destination' => $destination,
        ]);
    }

    public function store(StoreDestinationRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = auth()->user()->id;

        $store = $this->destinationService->create($validated);
        if ($store) {
            return back()->with("failed-destination", "Destination failed to added.");
        }
        return back()->with("success-destination", "Destination added.");
    }

    public function update(UpdateDestinationRequest $request)
    {
        $validated = $request->validated();
        $update = $this->destinationService->update($validated['id'], $validated);
        if ($update) {
            return redirect(route("destination"))->with("failed-editdestination", "Destination:".$validated['name']." failed to update");
        }

        return redirect(route("destination"))->with("success-editdestination", "Destination:". $validated['name'] ." updated");
    }

    public function delete(Request $request)
    {
        $destination = $this->destinationService->find($request->id);
        $delete = $this->destinationService->delete($request->id);
        if ($delete) {
            return back()->with("failed-deletedestination", "Destination to ".$destination->name." failed to remove.");
        }

        return back()->with("success-deletedestination", "Destination to ".$destination->name." removed.");
    }
}
