<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        switch (auth()->user()->role) {
            case 'admin':
               return redirect()->route('admin.dashboard');
                break;
            case 'driver':
                return redirect()->route('driver.dashboard');
                break; 
            case 'passenger':
                return redirect()->route('passenger.dashboard');
                break;       
            
            default:
            return redirect()->route('login');
            break;
        }
    }
}
