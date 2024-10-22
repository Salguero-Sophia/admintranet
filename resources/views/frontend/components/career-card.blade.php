
<div data-aos="fade-up" data-aos-duration="1000" class="w-full md:w-1/3 px-4 mb-8">
    <div class="card relative overflow-hidden border rounded-lg shadow-lg flex flex-col">
        
        <img src="{{ asset( $career['image'] ) }}" alt="career-image" class="card-img">
        
        <div
            class="card-info absolute bottom-0 left-0 w-full bg-black bg-opacity-70 text-white p-4 transition-all duration-500 ease-in-out flex flex-col items-start">
            <h3 class="text-2xl font-bold mb-1">{{ $career['title'] }}</h3>
            <a href="{{ route('careersList', $career['id']) }}" 
                class="rounded-md sm-bk-blue px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                > More info
            </a>
        </div>
    </div>
</div>