<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    @include('components.navbar')
    
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-white text-gray-800 p-8 rounded-lg shadow-md w-full max-w-2xl">
            <h2 class="text-2xl font-bold mb-6 text-center text-blue-700">Volunteer Application</h2>
            
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('volunteer.submit') }}" method="POST" class="space-y-6">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-gray-700 mb-1">First Name*</label>
                        <input type="text" id="first_name" name="first_name" placeholder="John" required 
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="middle_name" class="block text-sm font-medium text-gray-700 mb-1">Middle Name</label>
                        <input type="text" id="middle_name" name="middle_name" placeholder="(Optional)" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-700 mb-1">Last Name*</label>
                        <input type="text" id="last_name" name="last_name" placeholder="Doe" required 
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email*</label>
                    <input type="email" id="email" name="email" placeholder="your.email@example.com" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number*</label>
                    <input type="text" id="phone" name="phone" placeholder="+1 (123) 456-7890" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Areas You Wish to Volunteer In*</label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        @foreach(['Teaching', 'Skill Development', 'Elderly Care', 'Legal Support', 'Community Outreach'] as $area)
                            <label class="flex items-center space-x-3 bg-gray-50 p-3 rounded-lg hover:bg-gray-100">
                                <input type="checkbox" name="volunteer_area[]" value="{{ $area }}" 
                                    class="h-5 w-5 text-blue-600 rounded focus:ring-blue-500">
                                <span class="text-gray-700">{{ $area }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                <div class="pt-2">
                    <button type="submit" 
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-md transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Submit Application
                    </button>
                </div>
            </form>
        </div>
    </div>

    @include('components.footer')
</body>
</html>