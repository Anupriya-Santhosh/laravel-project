<?php

namespace App\Http\Controllers;

use App\Models\Destination; // Adjust if your model is named differently
use App\Models\Contact;
use App\Models\BookNow; // Add this line for the BookNow model


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{

    


    public function travel()
    {
        $destinations = Destination::all(); // or use appropriate query
        return view('travel', compact('destinations'));
    }
    



     // Add this method for the about page
     public function about()
     {
         return view('about'); // Make sure you have a view named 'about.blade.php'
     }

     public function tour()
     {
         return view('tour'); // Make sure to have a 'tour.blade.php' in the resources/views directory
     }


     public function gallery()
     {
         return view('gallery'); // Make sure you have a 'reviews.blade.php' view file
     }

public function services()
{
    return view('services'); // Ensure you have a 'services.blade.php' view file
}

public function contact()
{
    return view('contact'); // Make sure you have a 'contact.blade.php' view file
}

public function book()
{
    return view('book'); // Ensure you have a 'book_now.blade.php' view file
}



public function submitContact(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    // Handle the contact submission (e.g., send an email or store in the database)
    // For now, just return a success message
    return redirect()->back()->with('success', 'Your message has been sent!');
}






    public function showLoginForm()

{
    return view('login'); // Adjust with the actual login view name
}

public function login(Request $request)
{
    // Validate the request
    $request->validate([
        'user_name' => 'required|email|string', // Assuming user_name is the email
        'pass_word' => 'required|string',
    ]);

    $credentials = [
        'email' => $request->input('user_name'), // Change here
        'password' => $request->input('pass_word'),
    ];

    // Attempt to log the user in
    if (Auth::attempt($credentials)) {
        // Authentication passed, redirect to the dashboard
        return redirect()->route('dashboard'); // Ensure you have a route named 'dashboard'
    }

    // If authentication fails, return an error message
    return back()->withErrors([
        'user_name' => 'Invalid Username or Password',
    ]);
}

// Assuming you want this for the featured destinations page
public function featuredDestinations()
{
    // Fetch all destinations from the database
    $destinations = Destination::all();  // You can add more filters if needed

    // Pass the destinations to the view
    return view('travel', compact('destinations'));  // Updated to 'travel' view
}

public function showDashboard()
{
    $destinations = Destination::all(); // Assumes 'Destination' model exists
    return view('dashboard', compact('destinations'));
}

public function dash()
    {
        // Fetch destinations from the database
        $destinations = Destination::all();

        // Pass destinations to the view
        return view('dash', ['destinations' => $destinations]);
    }


public function showAddForm()
{
    return view('add_destination'); // Adjust this path as needed
}



public function addDestination(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
       
    ]);

    $destination = new Destination();
    $destination->title = $request->title;
    $destination->description = $request->description;

   

    if ($request->hasFile('image')) {
        $image = $request->file('image')->store('images', 'public');
        $destination->image = $image;
    }

    $destination->save();

    return redirect()->route('dashboard')->with('success', 'Destination added successfully!');

}

public function create()
    {
        return view('add_destination');  // This corresponds to resources/views/add_destination.blade.php
    }

    
public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
    ]);

    // Store the image
    $imagePath = $request->file('image')->store('images', 'public');

    // Save to the database
    Destination::create([
        'title' => $request->title,
        'description' => $request->description,
        'image' => $imagePath, // Save image path
    ]);

    return redirect()->route('add_destination_form')->with('success', 'Destination added successfully!');
}


    public function dashboard()
    {
        // Fetch destinations from the database
        $destinations = Destination::all();

        // Pass the destinations data to the view
        return view('dashboard', compact('destinations'));
    }


    public function edit($id)
{
    $destination = Destination::findOrFail($id); // Find the destination by ID or fail
    return view('edit_destination', compact('destination')); // Pass the destination to the view
}

public function update(Request $request, $id)
    {
        // Find the destination by ID
        $destination = Destination::findOrFail($id);

        // Validate the incoming request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Update title and description
        $destination->title = $validated['title'];
        $destination->description = $validated['description'];

        // Check if an image was uploaded
        if ($request->hasFile('image')) {
            // Store the new image and get its file path
            $image = $request->file('image')->store('images', 'public');

            // Optionally, delete the old image if necessary
            if ($destination->image) {
                Storage::disk('public')->delete($destination->image);
            }

            // Update the image path in the database
            $destination->image = $image;
        }

        // Save the updated destination
        $destination->save();

        // Redirect back with a success message
        return redirect()->route('dashboard')->with('success', 'Destination updated successfully!');
    }

    public function destroy($id)
{
    // Find the destination by ID
    $destination = Destination::findOrFail($id);

    // Delete the associated image file if it exists
    if ($destination->image) {
        Storage::disk('public')->delete($destination->image);
    }

    // Delete the destination from the database
    $destination->delete();

    // Redirect back with a success message
    return redirect()->route('dash')->with('success', 'Destination deleted successfully!');
}




// Method to show the booking form
public function showBookingForm()
{
    // Optionally, you can pass destinations to the booking form if needed
    $destinations = Destination::all(); 
    return view('book', compact('destinations')); // Ensure you have a 'book.blade.php' view
}

// Method to handle booking form submission
public function storeBooking(Request $request)
{
    // Validate the incoming booking data
    $request->validate([
        'full_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|regex:/^\+?[1-9][0-9]{7,14}$/',
        'destination' => 'required|string|max:255',
        'travel_date' => 'required|date',
        'guests' => 'required|integer|min:1',
    ]);

    // Store the booking data in the database
    BookNow::create([
        'full_name' => $request->full_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'destination' => $request->destination,
        'travel_date' => $request->travel_date,
        'guests' => $request->guests,
    ]);

    // Redirect back with success message
    return redirect()->back()->with('success', 'Booking has been successfully submitted!');
}

public function showBookings()
    {
        // Fetch all bookings from the book_nows table
        $bookings = BookNow::all();

        // Return the view with bookings data
        return view('book_db', compact('bookings'));
    }
    
    public function showBookingsPage()
{
    $bookings = BookNow::all(); // Fetch all bookings from the database
    return view('booking', compact('bookings')); // Pass data to the new Blade view
}



}  



