<div class="p-6">
    <div class="bg-white border-2 border-[#CDD1E0] p-6 mt-12 md-12 shadow-sm">
        <h2 class="text-2xl font-semibold mb-4 text-[#444445]">Our Initiatives</h2>

        <!-- Tabs -->
        <div x-data="{ activeTab: 'education' }">
            <div class="flex flex-wrap border-b border-[#CDD1E0]">
                <button 
                    @click="activeTab = 'education'" 
                    :class="activeTab === 'education' ? 'border-b-2 border-blue-500 text-blue-600' : 'text-[#444445] hover:text-blue-500'"
                    class="px-4 py-2 text-sm font-medium focus:outline-none transition-colors duration-200">
                    Child Education Support
                </button>

                <button 
                    @click="activeTab = 'employment'" 
                    :class="activeTab === 'employment' ? 'border-b-2 border-blue-500 text-blue-600' : 'text-[#444445] hover:text-blue-500'"
                    class="px-4 py-2 text-sm font-medium focus:outline-none transition-colors duration-200">
                    Sustainable Employment
                </button>

                <button 
                    @click="activeTab = 'elderly'" 
                    :class="activeTab === 'elderly' ? 'border-b-2 border-blue-500 text-blue-600' : 'text-[#444445] hover:text-blue-500'"
                    class="px-4 py-2 text-sm font-medium focus:outline-none transition-colors duration-200">
                    Elderly Care
                </button>

                <button 
                    @click="activeTab = 'healthcare'" 
                    :class="activeTab === 'healthcare' ? 'border-b-2 border-blue-500 text-blue-600' : 'text-[#444445] hover:text-blue-500'"
                    class="px-4 py-2 text-sm font-medium focus:outline-none transition-colors duration-200">
                    Community-Based Healthcare
                </button>

                <button 
                    @click="activeTab = 'legal'" 
                    :class="activeTab === 'legal' ? 'border-b-2 border-blue-500 text-blue-600' : 'text-[#444445] hover:text-blue-500'"
                    class="px-4 py-2 text-sm font-medium focus:outline-none transition-colors duration-200">
                    Legal Assistance
                </button>
            </div>

            <!-- Tab Content -->
            <div class="mt-6">
                <div x-show="activeTab === 'education'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                    <p class="text-[#444445]">
                        Every Child Deserves a Chance to Succeed" "Every child dreams of a better future, but for many in our community, that dream is out of reach due to financial barriers. Education is the key to breaking the cycle of poverty. With your support, we can provide scholarships, school supplies, tutoring, and essential resources to ensure every child has access to quality education and the opportunity to excel.
                    </p>

                    <p class="mt-4 font-semibold text-[#444445]">Your support will:</p>
                    <ul class="list-disc ml-5 text-[#444445] space-y-2 mt-2">
                        <li>Provide scholarships and school supplies for children</li>
                        <li>Offer tutoring and after-school programs to help them succeed</li>
                        <li>Empower children to break the cycle of poverty and achieve their dreams</li>
                    </ul>

                    <p class="mt-4 font-semibold text-[#444445]">Technical Skill Training for Children:</p>
                    <p class="text-[#444445]">
                        Building Future Leaders with Skills for Tomorrow" "Education alone is no longer enough. In today’s rapidly evolving world, children need practical, technical skills to thrive in the workforce. By offering hands-on technical training in fields like coding, graphic design, carpentry, and digital marketing, we are preparing the next generation for success in high-demand industries.
                    </p>

                    <p class="mt-4 font-semibold text-[#444445]">Your support will:</p>
                    <ul class="list-disc ml-5 text-[#444445] space-y-2 mt-2">
                        <li>Provide technical training in essential fields.</li>
                        <li>Equip children with marketable skills that set them up for career success.</li>
                        <li>Prepare the next generation of leaders, innovators, and problem-solvers.</li>
                    </ul>
                </div>

                <div x-show="activeTab === 'employment'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                    <p class="text-[#444445]">Creating Jobs, Changing Lives" "Many families in our community face financial hardship because of a lack of job opportunities. By establishing mini-industries and small businesses, we aim to create stable, long-term jobs that empower individuals to become self-sufficient and build a better life for their families.</p>
                    <p class="mt-4 font-semibold text-[#444445]">Your support will:</p>
                    <ul class="list-disc ml-5 text-[#444445] space-y-2 mt-2">
                        <li>Provide vocational training programs</li>
                        <li>Connect individuals with job opportunities</li>
                        <li>Promote entrepreneurship and self-sufficiency</li>
                    </ul>
                </div>

                <div x-show="activeTab === 'elderly'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                    <p class="text-[#444445]"><strong class="text-[#444445]">Caring for the Elderly</strong> – Ensuring that our senior citizens live with dignity and receive the support they need.</p>
                    <p class="mt-4 font-semibold text-[#444445]">Your support will:</p>
                    <ul class="list-disc ml-5 text-[#444445] space-y-2 mt-2">
                        <li>Offer assisted living programs</li>
                        <li>Provide medical care and social activities</li>
                        <li>Enhance quality of life for the elderly</li>
                    </ul>
                </div>

                <div x-show="activeTab === 'healthcare'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                    <p class="text-[#444445]"><strong class="text-[#444445]">Accessible Healthcare for All</strong> – Promoting community-based healthcare solutions to improve public health.</p>
                    <p class="mt-4 font-semibold text-[#444445]">Your support will:</p>
                    <ul class="list-disc ml-5 text-[#444445] space-y-2 mt-2">
                        <li>Fund healthcare initiatives and free check-ups</li>
                        <li>Support mental health awareness programs</li>
                        <li>Provide access to essential medical services</li>
                    </ul>
                </div>

                <div x-show="activeTab === 'legal'" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                    <p class="text-[#444445]"><strong class="text-[#444445]">Legal Assistance for the Community</strong> – Providing legal aid to ensure justice and equality for all.</p>
                    <p class="mt-4 font-semibold text-[#444445]">Your support will:</p>
                    <ul class="list-disc ml-5 text-[#444445] space-y-2 mt-2">
                        <li>Offer free legal consultations</li>
                        <li>Advocate for human rights and social justice</li>
                        <li>Educate the community on legal matters</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>