<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymTracker - Trainer Reservations</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="bg-black text-white w-64 hidden md:flex flex-col">
            <div class="p-6 border-b border-gray-700">
                <div class="flex items-center">
                    <i class="fas fa-dumbbell text-red-500 text-2xl mr-3"></i>
                    <h1 class="text-xl font-bold">GymTracker</h1>
                </div>
                <p class="text-xs text-gray-400 mt-1">Trainer Portal</p>
            </div>
            <nav class="flex-1 overflow-y-auto py-4">
                <ul class="space-y-2 px-4">
                    
                    <li>
                        <a href="#" class="flex items-center space-x-3 text-gray-300 p-2 rounded-lg bg-gray-700">
                            <i class="fas fa-calendar-check w-5"></i>
                            <span>My Reservations</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 text-gray-300 p-2 rounded-lg hover:bg-gray-700 transition duration-200">
                            <i class="fas fa-users w-5"></i>
                            <span>My Clients</span>
                        </a>
                    </li>
                   
                    <li>
                        <a href="#" class="flex items-center space-x-3 text-gray-300 p-2 rounded-lg hover:bg-gray-700 transition duration-200">
                            <i class="fas fa-cog w-5"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="p-4 border-t border-gray-700 bg-gray-800">
                <div class="flex items-center mb-4">
                    <img src="{{ Storage::url(Auth::user()->photo) }}" alt="Profile" class="w-10 h-10 rounded-full border border-gray-600">
                    <div class="ml-3 text-white">
                        <p class="text-sm font-semibold">{{ Auth::user()->full_name }}</p>
                        <p class="text-xs text-gray-400">Senior Trainer</p>
                    </div>
                </div>
            
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-2 text-sm text-white px-4 py-2 bg-black rounded-md hover:bg-gray-600 transition duration-200">
                        <i class="fas fa-sign-out-alt w-4 h-4"></i>
                        <span>Déconnexion</span>
                    </button>
                </form>
            </div>
            
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Navigation -->
            <header class="bg-white shadow-sm z-10">
                <div class="flex items-center justify-between h-16 px-6">
                    <div class="flex items-center md:hidden">
                        <button class="text-gray-500 focus:outline-none">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <div class="relative w-64 md:w-80">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="fas fa-search text-gray-400"></i>
                        </span>
                        <input type="text" class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent" placeholder="Search reservations...">
                    </div>
                    <div class="flex items-center space-x-4">
                        <button class="relative p-1 text-gray-400 hover:text-gray-600 focus:outline-none">
                            <i class="fas fa-bell text-xl"></i>
                            <span class="absolute top-0 right-0 h-4 w-4 bg-red-500 rounded-full text-xs text-white flex items-center justify-center">5</span>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
                <div class="mb-8">
                    <h1 class="text-2xl font-bold text-gray-800">Reservation Management</h1>
                    <p class="text-gray-600">Manage your session reservations and client appointments</p>
                </div>

                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Total Reservations</h3>
                            @if(isset($newToday) && $newToday > 0)
                                <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-1 rounded-full">+{{ $newToday }} today</span>
                            @endif
                        </div>
                        <div class="flex items-center">
                            <span class="text-3xl font-bold text-gray-800">{{ $totalReservations }}</span>
                            <div class="w-10 h-10 ml-auto bg-blue-500 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Pending Approval</h3>
                        </div>
                        <div class="flex items-center">
                            <span class="text-3xl font-bold text-gray-800">{{ $pendingReservations }}</span>
                            <div class="w-10 h-10 ml-auto bg-yellow-500 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Confirmed Sessions</h3>
                            @if(isset($newConfirmed) && $newConfirmed > 0)
                                <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-1 rounded-full">+{{ $newConfirmed }} today</span>
                            @endif
                        </div>
                        <div class="flex items-center">
                            <span class="text-3xl font-bold text-gray-800">{{ $confirmedReservations }}</span>
                            <div class="w-10 h-10 ml-auto bg-green-500 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Canceled Sessions</h3>
                        </div>
                        <div class="flex items-center">
                            <span class="text-3xl font-bold text-gray-800">{{ $canceledReservations }}</span>
                            <div class="w-10 h-10 ml-auto bg-red-500 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-times"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Reservations -->
                <div class="bg-white rounded-lg shadow mb-8">
                    <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-gray-800">Pending Reservations</h2>
                        <div class="flex space-x-2">
                            <div class="relative">
                                <input type="date" class="border border-gray-300 rounded-lg text-sm px-4 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                            </div>
                            <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg text-sm hover:bg-gray-300 transition duration-300">
                                <i class="fas fa-filter mr-2"></i>Filter
                            </button>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Time</th>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @forelse($pendingList as $reservation)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <img class="h-8 w-8 rounded-full" src="https://randomuser.me/api/portraits/{{ $loop->odd ? 'women' : 'men' }}/{{ ($loop->index * 10) + 22 }}.jpg" alt="">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">{{ $reservation->membre->name }}</div>
                                                    <div class="text-sm text-gray-500">{{ $reservation->membre->email }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ date('M d, Y', strtotime($reservation->date)) }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ date('h:i A', strtotime($reservation->time)) }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <form action="{{ route('trainer.confirm.reservation', $reservation->id) }}" method="POST" class="inline">
                                                @csrf
                                                <button type="submit" class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600 mr-2">
                                                    <i class="fas fa-check mr-1"></i>Confirm
                                                </button>
                                            </form>
                                            <form action="{{ route('trainer.cancel.reservation', $reservation->id) }}" method="POST" class="inline">
                                                @csrf
                                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">
                                                    <i class="fas fa-times mr-1"></i>Cancel
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">No pending reservations found</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Upcoming and Recent Reservations -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Today's Confirmed Sessions -->
                    <div class="bg-white rounded-lg shadow">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-gray-800">Today's Confirmed Sessions</h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                @forelse($todaysSessions as $session)
                                <div class="flex items-center p-3 bg-gray-50 rounded-lg border-l-4 border-green-500">
                                    <div class="bg-green-100 text-green-800 rounded-lg w-16 h-16 flex flex-col items-center justify-center">
                                        <span class="text-sm font-bold">{{ date('H:i', strtotime($session->time)) }}</span>
                                        <span class="text-xs">{{ date('H:i', strtotime($session->time . ' +1 hour')) }}</span>
                                    </div>
                                    <div class="ml-4 flex-1">
                                        <div class="flex justify-between">
                                            <h3 class="font-medium text-gray-800">{{ $session->training_type ?? 'Personal Training' }}</h3>
                                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Confirmed</span>
                                        </div>
                                        <div class="flex items-center mt-1">
                                            <img src="https://randomuser.me/api/portraits/{{ $loop->odd ? 'women' : 'men' }}/{{ ($loop->index * 12) + 32 }}.jpg" alt="Client" class="w-5 h-5 rounded-full">
                                            <p class="text-sm text-gray-500 ml-2">{{ $session->membre->name }}</p>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="p-4 text-center text-gray-500">No confirmed sessions for today</div>
                                @endforelse
                            </div>
                        </div>
                    </div>

                    <!-- Recent Canceled Sessions -->
                    <div class="bg-white rounded-lg shadow">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-gray-800">Recent Canceled Sessions</h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                @forelse($recentCanceled as $canceled)
                                <div class="flex items-center p-3 bg-gray-50 rounded-lg border-l-4 border-red-500">
                                    <div class="bg-red-100 text-red-800 rounded-lg w-16 h-16 flex flex-col items-center justify-center">
                                        <span class="text-sm">{{ date('M d', strtotime($canceled->date)) }}</span>
                                        <span class="text-xs">{{ date('H:i', strtotime($canceled->time)) }}</span>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="font-medium text-gray-800">{{ $canceled->training_type ?? 'Training Session' }}</h3>
                                        <div class="flex items-center mt-1">
                                            <img src="https://randomuser.me/api/portraits/{{ $loop->odd ? 'men' : 'women' }}/{{ ($loop->index * 12) + 22 }}.jpg" alt="Client" class="w-5 h-5 rounded-full">
                                            <p class="text-sm text-gray-500 ml-2">{{ $canceled->membre->name }}</p>
                                        </div>
                                        <p class="text-xs text-gray-500 mt-1">Reason: {{ $canceled->cancel_reason ?? 'Not specified' }}</p>
                                    </div>
                                    <div class="ml-auto">
                                        <a href="" class="text-sm text-blue-500 hover:text-blue-700">
                                            <i class="fas fa-redo mr-1"></i>Reschedule
                                        </a>
                                    </div>
                                </div>
                                @empty
                                <div class="p-4 text-center text-gray-500">No recently canceled sessions</div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Weekly Calendar View -->
                <div class="bg-white rounded-lg shadow mt-6">
                    <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-gray-800">Weekly Schedule</h2>
                        <div class="flex space-x-2">
                            <a href="{{ route('trainer-dashboard', ['week' => date('Y-m-d', strtotime($weekStart . ' -1 week'))]) }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg text-sm hover:bg-gray-300 transition duration-300">
                                <i class="fas fa-chevron-left mr-2"></i>Previous Week
                            </a>
                            <a href="{{ route('trainer-dashboard', ['week' => date('Y-m-d', strtotime($weekStart . ' +1 week'))]) }}" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg text-sm hover:bg-gray-300 transition duration-300">
                                Next Week<i class="fas fa-chevron-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                    <div class="p-6 overflow-x-auto">
                        <div class="min-w-full">
                            <div class="grid grid-cols-8 gap-2">
                                <!-- Time Column -->
                                <div class="bg-gray-50 p-2 rounded-lg">
                                    <div class="text-center font-medium text-gray-500 mb-4">Time</div>
                                    <div class="space-y-8">
                                        @for ($hour = 7; $hour <= 19; $hour += 2)
                                            <div class="text-sm text-gray-500 h-12 flex items-center justify-center">{{ sprintf('%02d:00', $hour) }}</div>
                                        @endfor
                                    </div>
                                </div>
                                
                                @php
                                    $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
                                    $dayDates = [];
                                    
                                    for ($i = 0; $i < 7; $i++) {
                                        $currentDate = date('Y-m-d', strtotime($weekStart . ' +' . $i . ' days'));
                                        $dayDates[$days[$i]] = $currentDate;
                                    }
                                @endphp
                
                                @foreach($days as $day)
                                <div class="bg-gray-50 p-2 rounded-lg">
                                    <div class="text-center font-medium text-gray-500 mb-4">
                                        {{ $day }}<br>
                                        <span class="text-xs">{{ date('M d', strtotime($dayDates[$day])) }}</span>
                                    </div>
                                    
                                    <div class="relative h-96">
                                        @foreach($weeklySchedule as $schedule)
                                            @if(date('Y-m-d', strtotime($schedule->date)) == $dayDates[$day])
                                                @php
                                                    $startTime = strtotime($schedule->time);
                                                    $startHour = (int)date('H', $startTime);
                                                    $startMinute = (int)date('i', $startTime);
                                                    
                                                    // Calculate position from 7:00 (in pixels)
                                                    $topPosition = (($startHour - 7) * 48) + ($startMinute / 60 * 48);
                                                    
                                                    // Default session length (1 hour)
                                                    $sessionLength = 60; // minutes
                                                    
                                                    // Calculate height based on session length
                                                    $height = ($sessionLength / 60) * 48;
                                                @endphp
                                                
                                                <div class="absolute bg-blue-100 border-l-4 border-blue-500 rounded p-1 text-xs"
                                                     style="top: {{ $topPosition }}px; left: 2px; right: 2px; height: {{ $height }}px; z-index: 10;">
                                                    <div class="font-medium">{{ date('H:i', $startTime) }}</div>
                                                    <div class="truncate">{{ $schedule->membre->name }}</div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>