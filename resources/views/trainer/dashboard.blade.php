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
        <aside class="bg-gray-800 text-white w-64 hidden md:flex flex-col">
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
                        <a href="#" class="flex items-center space-x-3 text-gray-300 p-2 rounded-lg hover:bg-gray-700 transition duration-200">
                            <i class="fas fa-tachometer-alt w-5"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
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
                            <i class="fas fa-calendar-alt w-5"></i>
                            <span>Schedule</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 text-gray-300 p-2 rounded-lg hover:bg-gray-700 transition duration-200">
                            <i class="fas fa-chart-line w-5"></i>
                            <span>Client Progress</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 text-gray-300 p-2 rounded-lg hover:bg-gray-700 transition duration-200">
                            <i class="fas fa-comment-dots w-5"></i>
                            <span>Messages</span>
                            <span class="ml-auto bg-red-500 text-white text-xs px-2 py-1 rounded-full">3</span>
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
            <div class="p-4 border-t border-gray-700">
                <div class="flex items-center">
                    <img src="https://randomuser.me/api/portraits/men/42.jpg" alt="Profile" class="w-10 h-10 rounded-full">
                    <div class="ml-3">
                        <p class="text-sm font-medium">Alex Johnson</p>
                        <p class="text-xs text-gray-400">Senior Trainer</p>
                    </div>
                </div>
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
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-1 rounded-full">+3 today</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-3xl font-bold text-gray-800">42</span>
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
                            <span class="text-3xl font-bold text-gray-800">8</span>
                            <div class="w-10 h-10 ml-auto bg-yellow-500 text-white rounded-full flex items-center justify-center">
                                <i class="fas fa-clock"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-gray-500 text-sm font-medium">Confirmed Sessions</h3>
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2 py-1 rounded-full">+2 today</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-3xl font-bold text-gray-800">28</span>
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
                            <span class="text-3xl font-bold text-gray-800">6</span>
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
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <img class="h-8 w-8 rounded-full" src="https://randomuser.me/api/portraits/women/32.jpg" alt="">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Emily Wilson</div>
                                                    <div class="text-sm text-gray-500">emily.wilson@example.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Apr 19, 2025</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">09:00 AM</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <button class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600 mr-2">
                                                <i class="fas fa-check mr-1"></i>Confirm
                                            </button>
                                            <button class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">
                                                <i class="fas fa-times mr-1"></i>Cancel
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <img class="h-8 w-8 rounded-full" src="https://randomuser.me/api/portraits/men/45.jpg" alt="">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Marcus Brown</div>
                                                    <div class="text-sm text-gray-500">marcus.brown@example.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Apr 19, 2025</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">11:30 AM</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <button class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600 mr-2">
                                                <i class="fas fa-check mr-1"></i>Confirm
                                            </button>
                                            <button class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">
                                                <i class="fas fa-times mr-1"></i>Cancel
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <img class="h-8 w-8 rounded-full" src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">Sarah Chen</div>
                                                    <div class="text-sm text-gray-500">sarah.chen@example.com</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Apr 20, 2025</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">02:00 PM</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <button class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600 mr-2">
                                                <i class="fas fa-check mr-1"></i>Confirm
                                            </button>
                                            <button class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600">
                                                <i class="fas fa-times mr-1"></i>Cancel
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Upcoming and Recent Reservations -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Upcoming Confirmed Sessions -->
                    <div class="bg-white rounded-lg shadow">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-gray-800">Today's Confirmed Sessions</h2>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <div class="flex items-center p-3 bg-gray-50 rounded-lg border-l-4 border-green-500">
                                    <div class="bg-green-100 text-green-800 rounded-lg w-16 h-16 flex flex-col items-center justify-center">
                                        <span class="text-sm font-bold">07:30</span>
                                        <span class="text-xs">08:30</span>
                                    </div>
                                    <div class="ml-4 flex-1">
                                        <div class="flex justify-between">
                                            <h3 class="font-medium text-gray-800">Personal Training</h3>
                                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Confirmed</span>
                                        </div>
                                        <div class="flex items-center mt-1">
                                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Client" class="w-5 h-5 rounded-full">
                                            <p class="text-sm text-gray-500 ml-2">Emily Wilson</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center p-3 bg-gray-50 rounded-lg border-l-4 border-green-500">
                                    <div class="bg-green-100 text-green-800 rounded-lg w-16 h-16 flex flex-col items-center justify-center">
                                        <span class="text-sm font-bold">09:00</span>
                                        <span class="text-xs">10:00</span>
                                    </div>
                                    <div class="ml-4 flex-1">
                                        <div class="flex justify-between">
                                            <h3 class="font-medium text-gray-800">HIIT Training</h3>
                                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Confirmed</span>
                                        </div>
                                        <div class="flex items-center mt-1">
                                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Client" class="w-5 h-5 rounded-full">
                                            <p class="text-sm text-gray-500 ml-2">Marcus Brown</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center p-3 bg-gray-50 rounded-lg border-l-4 border-green-500">
                                    <div class="bg-green-100 text-green-800 rounded-lg w-16 h-16 flex flex-col items-center justify-center">
                                        <span class="text-sm font-bold">15:00</span>
                                        <span class="text-xs">16:00</span>
                                    </div>
                                    <div class="ml-4 flex-1">
                                        <div class="flex justify-between">
                                            <h3 class="font-medium text-gray-800">Strength Training</h3>
                                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Confirmed</span>
                                        </div>
                                        <div class="flex items-center mt-1">
                                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Client" class="w-5 h-5 rounded-full">
                                            <p class="text-sm text-gray-500 ml-2">Sarah Chen</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center p-3 bg-gray-50 rounded-lg border-l-4 border-green-500">
                                    <div class="bg-green-100 text-green-800 rounded-lg w-16 h-16 flex flex-col items-center justify-center">
                                        <span class="text-sm font-bold">17:30</span>
                                        <span class="text-xs">18:30</span>
                                    </div>
                                    <div class="ml-4 flex-1">
                                        <div class="flex justify-between">
                                            <h3 class="font-medium text-gray-800">Yoga Session</h3>
                                            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Confirmed</span>
                                        </div>
                                        <div class="flex items-center mt-1">
                                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Client" class="w-5 h-5 rounded-full">
                                            <p class="text-sm text-gray-500 ml-2">Emma Davis</p>
                                        </div>
                                    </div>
                                </div>
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
                                <div class="flex items-center p-3 bg-gray-50 rounded-lg border-l-4 border-red-500">
                                    <div class="bg-red-100 text-red-800 rounded-lg w-16 h-16 flex flex-col items-center justify-center">
                                        <span class="text-sm">Apr 17</span>
                                        <span class="text-xs">10:00</span>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="font-medium text-gray-800">Cardio Training</h3>
                                        <div class="flex items-center mt-1">
                                            <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Client" class="w-5 h-5 rounded-full">
                                            <p class="text-sm text-gray-500 ml-2">Ryan Thompson</p>
                                        </div>
                                        <p class="text-xs text-gray-500 mt-1">Reason: Client illness</p>
                                    </div>
                                    <div class="ml-auto">
                                        <button class="text-sm text-blue-500 hover:text-blue-700">
                                            <i class="fas fa-redo mr-1"></i>Reschedule
                                        </button>
                                    </div>
                                </div>

                                <div class="flex items-center p-3 bg-gray-50 rounded-lg border-l-4 border-red-500">
                                    <div class="bg-red-100 text-red-800 rounded-lg w-16 h-16 flex flex-col items-center justify-center">
                                        <span class="text-sm">Apr 16</span>
                                        <span class="text-xs">14:30</span>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="font-medium text-gray-800">Weight Training</h3>
                                        <div class="flex items-center mt-1">
                                            <img src="https://randomuser.me/api/portraits/women/56.jpg" alt="Client" class="w-5 h-5 rounded-full">
                                            <p class="text-sm text-gray-500 ml-2">Lisa Morgan</p>
                                        </div>
                                        <p class="text-xs text-gray-500 mt-1">Reason: Schedule conflict</p>
                                    </div>
                                    <div class="ml-auto">
                                        <button class="text-sm text-blue-500 hover:text-blue-700">
                                            <i class="fas fa-redo mr-1"></i>Reschedule
                                        </button>
                                    </div>
                                </div>

                                <div class="flex items-center p-3 bg-gray-50 rounded-lg border-l-4 border-red-500">
                                    <div class="bg-red-100 text-red-800 rounded-lg w-16 h-16 flex flex-col items-center justify-center">
                                        <span class="text-sm">Apr 15</span>
                                        <span class="text-xs">16:00</span>
                                    </div>
                                    <div class="ml-4">
                                        <h3 class="font-medium text-gray-800">Mobility Session</h3>
                                        <div class="flex items-center mt-1">
                                            <img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Client" class="w-5 h-5 rounded-full">
                                            <p class="text-sm text-gray-500 ml-2">David Jones</p>
                                        </div>
                                        <p class="text-xs text-gray-500 mt-1">Reason: Trainer unavailable</p>
                                    </div>
                                    <div class="ml-auto">
                                        <button class="text-sm text-blue-500 hover:text-blue-700">
                                            <i class="fas fa-redo mr-1"></i>Reschedule
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Weekly Calendar View -->
                <div class="bg-white rounded-lg shadow mt-6">
                    <div class="p-6 border-b border-gray-200 flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-gray-800">Weekly Schedule</h2>
                        <div class="flex space-x-2">
                            <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg text-sm hover:bg-gray-300 transition duration-300">
                                <i class="fas fa-chevron-left mr-2"></i>Previous Week
                            </button>
                            <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg text-sm hover:bg-gray-300 transition duration-300">
                                Next Week<i class="fas fa-chevron-right ml-2"></i>
                            </button>
                        </div>
                    </div>
                    <div class="p-6 overflow-x-auto">
                        <div class="min-w-full">
                            <div class="grid grid-cols-8 gap-2">
                                <!-- Time Column -->
                                <div class="bg-gray-50 p-2 rounded-lg">
                                    <div class="text-center font-medium text-gray-500 mb-4">Time</div>
                                    <div class="space-y-8">
                                        <div class="text-sm text-gray-500 h-12 flex items-center justify-center">07:00</div>
                                        <div class="text-sm text-gray-500 h-12 flex items-center justify-center">09:00</div>
                                        <div class="text-sm text-gray-500 h-12 flex items-center justify-center">11:00</div>
                                        <div class="text-sm text-gray-500 h-12 flex items-center justify-center">13:00</div>
                                        <div class="text-sm text-gray-500 h-12 flex items-center justify-center">15:00</div>
                                        <div class="text-sm text-gray-500 h-12 flex items-center justify-center">17:00</div>
                                        <div class="text-sm text-gray-500 h-12 flex items-center justify-center">19:00</div>
                                    </div>
                                </div>
                                
                                <!-- Monday -->
                                <div class="bg-gray-50 p-2 rounded-lg">
                                    <div class="text-center font