<div class=" w-full bg-[#F2F3F7] py-12">
    <div class="flex flex-col md:flex-row items-center justify-center">
        <!-- left side -->
        <div class="w-full md:w-1/2 p-6">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 bg-blue-100 px-8 py-3 rounded-full text-center inline-block mx-auto">
                Volunteer With Us
            </h2>
            <p class="mt-4 text-gray-600 text-lg">Your Time, Skills, and Compassion Can Transform Lives</p>

            <ul class="mt-6 space-y-4">
                <li class="flex items-start space-x-4">
                    <span class="text-2xl mt-1 text-[#B1C1FF]">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </span>
                    <div>
                        <p class="font-semibold text-gray-800">Teach & Mentor</p>
                        <p class="text-gray-600">Support and tutor children, provide career guidance.</p>
                    </div>
                </li>
                <li class="flex items-start space-x-4">
                    <span class="text-2xl mt-1 text-[#B1C1FF]">
                        <i class="fas fa-laptop-code"></i>
                    </span>
                    <div>
                        <p class="font-semibold text-gray-800">Skill Training</p>
                        <p class="text-gray-600">Share expertise in digital marketing, coding, design, etc.</p>
                    </div>
                </li>
                <li class="flex items-start space-x-4">
                    <span class="text-2xl mt-1 text-[#B1C1FF]">
                        <i class="fas fa-hands-helping"></i>
                    </span>
                    <div>
                        <p class="font-semibold text-gray-800">Elderly Care</p>
                        <p class="text-gray-600">Offer companionship and support seniors' well-being.</p>
                    </div>
                </li>
                <li class="flex items-start space-x-4">
                    <span class="text-2xl mt-1 text-[#B1C1FF]">
                        <i class="fas fa-gavel"></i>
                    </span>
                    <div>
                        <p class="font-semibold text-gray-800">Legal Support</p>
                        <p class="text-gray-600">Provide legal aid and educate on rights.</p>
                    </div>
                </li>
                <li class="flex items-start space-x-4">
                    <span class="text-2xl mt-1 text-[#B1C1FF]">
                        <i class="fas fa-users"></i>
                    </span>
                    <div>
                        <p class="font-semibold text-gray-800">Community Outreach</p>
                        <p class="text-gray-600">Organize events, awareness drives, and fundraising.</p>
                    </div>
                </li>
            </ul>

            <a href="/volunteer-form">
                <button class="mt-8 bg-red-500 hover:bg-red-600 transition-colors duration-300 text-white px-8 py-3 rounded-md font-medium text-lg shadow-md hover:shadow-lg">
                    Become a Volunteer
                </button>
            </a>
        </div>

        <!-- Right Side: Donation Selection - Compact Version -->
        <div class="w-full max-w-md p-6 bg-white rounded-xl shadow-lg">
            <h3 class="text-lg font-semibold text-center text-gray-800 mb-4">Choose Amount</h3>

            <!-- Toggle for Donation Type -->
            <div class="flex justify-between mb-5 bg-gray-100 p-1 rounded-lg">
                <button onclick="selectType('One-time')" class="tab-button w-full py-2 px-2 rounded-md text-sm font-medium transition-all duration-200 bg-green-500 text-white">
                    One-time
                </button>
                <button onclick="selectType('Monthly')" class="tab-button w-full py-2 px-2 rounded-md text-sm font-medium transition-all duration-200 text-gray-600 hover:bg-gray-200">
                    Monthly
                </button>
                <button onclick="selectType('Quarterly')" class="tab-button w-full py-2 px-2 rounded-md text-sm font-medium transition-all duration-200 text-gray-600 hover:bg-gray-200">
                    Quarterly
                </button>
                <button onclick="selectType('Yearly')" class="tab-button w-full py-2 px-2 rounded-md text-sm font-medium transition-all duration-200 text-gray-600 hover:bg-gray-200">
                    Yearly
                </button>
            </div>

            <!-- Donation Amount Options -->
            <div class="grid grid-cols-3 gap-2 mb-4">
                <button onclick="selectAmount(1000)" class="amount-button bg-white px-3 py-2 rounded-lg text-gray-700 border border-gray-200 hover:border-green-400 hover:bg-green-50 text-sm font-medium transition-all duration-200">
                    ₹ 1,000
                </button>
                <button onclick="selectAmount(10000)" class="amount-button bg-white px-3 py-2 rounded-lg text-gray-700 border border-gray-200 hover:border-green-400 hover:bg-green-50 text-sm font-medium transition-all duration-200">
                    ₹ 10,000
                </button>
                <button onclick="selectAmount(20000)" class="amount-button bg-white px-3 py-2 rounded-lg text-gray-700 border border-gray-200 hover:border-green-400 hover:bg-green-50 text-sm font-medium transition-all duration-200">
                    ₹ 20,000
                </button>
                <button onclick="selectAmount(25000)" class="amount-button bg-white px-3 py-2 rounded-lg text-gray-700 border border-gray-200 hover:border-green-400 hover:bg-green-50 text-sm font-medium transition-all duration-200">
                    ₹ 25,000
                </button>
                <button onclick="selectAmount(35000)" class="amount-button bg-white px-3 py-2 rounded-lg text-gray-700 border border-gray-200 hover:border-green-400 hover:bg-green-50 text-sm font-medium transition-all duration-200">
                    ₹ 35,000
                </button>
                <button onclick="selectAmount(50000)" class="amount-button bg-white px-3 py-2 rounded-lg text-gray-700 border border-gray-200 hover:border-green-400 hover:bg-green-50 text-sm font-medium transition-all duration-200">
                    ₹ 50,000
                </button>
            </div>

            <!-- Custom Amount Input -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-1">Custom Amount</label>
                <div class="flex items-center border border-gray-300 rounded-lg overflow-hidden focus-within:ring-1 focus-within:ring-green-500 focus-within:border-green-500 transition-all duration-200">
                    <span class="px-3 text-gray-500 bg-gray-100 h-full py-2 text-sm">₹</span>
                    <input id="customAmount" type="number" placeholder="Enter amount" class="w-full py-2 px-3 outline-none text-sm">
                    <span class="px-3 text-gray-500 bg-gray-100 h-full py-2 text-sm">INR</span>
                </div>
            </div>

            <!-- Add Note -->
            <div class="flex items-center mb-5">
                <input type="checkbox" id="addNote" class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded">
                <label for="addNote" class="ml-2 block text-sm text-gray-700">Add note/comment</label>
            </div>

            <!-- Continue Button -->
            <button class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-1 focus:ring-green-500 focus:ring-offset-1 text-sm font-medium shadow transition-all duration-200">
                Continue to Payment
            </button>
        </div>
    </div>
</div>

<script>
    function selectType(type) {
        // Remove active class from all buttons
        document.querySelectorAll('.tab-button').forEach(btn => {
            btn.classList.remove('bg-green-500', 'text-white');
            btn.classList.add('text-gray-600', 'hover:bg-gray-200');
        });

        // Add active class to selected button
        const target = event.currentTarget;
        target.classList.add('bg-green-500', 'text-white');
        target.classList.remove('text-gray-600', 'hover:bg-gray-200');
        
        // You can store the selected type if needed
        // document.getElementById('donationType').value = type;
    }

    function selectAmount(amount) {
        // Remove active class from all buttons
        document.querySelectorAll('.amount-button').forEach(btn => {
            btn.classList.remove('bg-green-100', 'border-green-400', 'text-green-700');
            btn.classList.add('bg-white', 'border-gray-200', 'text-gray-700');
        });

        // Add active class to selected button
        const target = event.currentTarget;
        target.classList.add('bg-green-100', 'border-green-400', 'text-green-700');
        target.classList.remove('bg-white', 'border-gray-200', 'text-gray-700');

        // Clear custom input field when selecting a predefined amount
        document.getElementById('customAmount').value = "";
        
        // You can store the selected amount if needed
        // document.getElementById('donationAmount').value = amount;
    }

    // If user types custom amount, deselect all buttons
    document.getElementById('customAmount').addEventListener('input', function() {
        document.querySelectorAll('.amount-button').forEach(btn => {
            btn.classList.remove('bg-green-100', 'border-green-400', 'text-green-700');
            btn.classList.add('bg-white', 'border-gray-200', 'text-gray-700');
        });
    });
</script>
