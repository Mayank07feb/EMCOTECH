@extends('components.main')
@section('content')
<!-- Team Section -->
<section class="relative bg-black text-white py-12">
    <div class="absolute inset-0 opacity-45">
        <img src="{{ asset('asset/images/main.avif') }}" alt="Background image" class="w-full h-full object-cover">
    </div>
    <div class="container mx-auto relative z-10">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold">Our Team</h2>

            <ul class="flex gap-2 justify-center">
                <li> <a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                <li> <a href="{{ route('team') }}" class="hover:underline">/Team</a></li>
            </ul>
        </div>
    </div>
</section>
<!-- OUR EXEPERT TEAM -->
    <!-- Our Team Section -->
    <section class=" py-12">
      <div class="container mx-auto">
          <h2 class="text-3xl font-bold mb-6 text-center text-red-500">Our Team</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

              <!-- Team Member 1 -->
              <div class="team-card bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                  {{-- <div class="team-photo mb-4">
                      <img src="{{ asset('asset/images/team1-min.jpg') }}" alt="Photo of John Doe"
                          class="w-full rounded-md">
                  </div> --}}
                  <h3 class="text-xl font-bold mb-2">John Doe</h3>
                  <p class="text-gray-700 mb-2">Lead Technician</p>
                  <p class="text-gray-600">John has over 10 years of experience in machinery maintenance and spare parts
                      management.</p>
                  <a href="{{ route('readmore') }}" class="text-red-500 hover:underline">Read More</a>
              </div>

              <!-- Team Member 2 -->
              <div class="team-card bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                  {{-- <div class="team-photo mb-4">
                      <img src="{{ asset('asset/images/team2-min.jpg') }}" alt="Photo of Jane Smith"
                          class="w-full rounded-md">
                  </div> --}}
                  <h3 class="text-xl font-bold mb-2">Jane Smith</h3>
                  <p class="text-gray-700 mb-2">Spare Parts Specialist</p>
                  <p class="text-gray-600">Jane is an expert in sourcing and managing a wide range of spare parts for PP
                      Woven
                      Sack production.</p>
                  <a href="{{ route('readmore') }}" class="text-red-500 hover:underline">Read More</a>
              </div>

              <!-- Team Member 3 -->
              <div class="team-card bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300">
                  {{-- <div class="team-photo mb-4">
                      <img src="{{ asset('asset/images/team3-min.jpg') }}" alt="Photo of Mosh Jith"
                          class="w-full rounded-md">
                  </div> --}}
                  <h3 class="text-xl font-bold mb-2">Mosh Jith</h3>
                  <p class="text-gray-700 mb-2">Spare Parts Specialist</p>
                  <p class="text-gray-600">Mosh is proficient in sourcing and managing a wide range of spare parts for PP
                      Woven
                      Sack production.</p>
                  <a href="{{ route('readmore') }}" class="text-red-500 hover:underline">Read More</a>
              </div>

          </div>
      </div>
  </section>
<!-- faq -->
<section class="faq bg-gray-400 w-full py-16">
    <div class="container mx-auto px-4 md:px-8 lg:px-20">
        <h2 class="text-center text-2xl font-bold mb-8 text-red-500">Frequently Asked Questions</h2>
        <div id="accordionExample">
            <dl class="question mb-4 bg-gray-200 rounded-t-lg px-4 py-2">
                <dt class="text-xl font-bold cursor-pointer flex justify-between items-center collapsed"
                    data-target="#collapseOne">
                    <span>What types of spare parts do you offer?</span>
                    <i class="fas fa-chevron-down"></i>
                </dt>
                <dd id="collapseOne" class="hidden">
                    <div class="answer px-4 pt-2 pb-4 border border-gray-300 rounded-b-lg">
                        <p class="text-gray-700 leading-relaxed">We offer a wide range of spare parts for various
                            machinery used in PP Woven Sack production. This includes parts for Heddle belts, Grommet
                            bands, Looms, Circular looms, Printing machines, Lamination machines, Sewing machines, and
                            more.</p>
                    </div>
                </dd>
            </dl>
            <dl class="question mb-4 bg-gray-200 rounded-t-lg px-4 py-2">
                <dt class="text-xl font-bold cursor-pointer flex justify-between items-center collapsed"
                    data-target="#collapseTwo">
                    <span>Do you ship internationally?</span>
                    <i class="fas fa-chevron-down"></i>
                </dt>
                <dd id="collapseTwo" class="hidden">
                    <div class="answer px-4 pt-2 pb-4 border border-gray-300 rounded-b-lg">
                        <p class="text-gray-700 leading-relaxed">Yes, we ship internationally to over 92 countries! We
                            can help ensure you receive the parts you need quickly and efficiently.</p>
                    </div>
                </dd>
            </dl>
            <!-- Add more questions as needed -->
        </div>
    </div>
</section>
@endsection
