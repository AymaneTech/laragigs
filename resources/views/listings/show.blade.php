<x-layout>
    <a href="/" class="inline-block text-black ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class="p-24">
            <div
                class="flex flex-col items-center justify-center text-center"
            >
                <img
                    class="w-48 mr-6 mb-6"
                    src="{{asset("images/no-image.png")}}"
                    alt=""
                />

                <h3 class="text-2xl mb-2">{{$listing[0]->title}}</h3>
                <div class="text-xl font-bold mb-4">{{$listing[0]->company}}</div>

                <x-listing-tags :tagsCsv="$listing[0]->tags"/>

                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{$listing[0]->location}}
                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Job Description
                    </h3>
                    <div class="text-lg space-y-6">
                        <p>
                            {{$listing[0]->description}}
                        </p>

                        <a
                            href="mailto:{{$listing[0]->email}}"
                            class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-envelope"></i>
                            Contact Employer</a
                        >

                        <a
                            href="{{$listing[0]->website}}"
                            target="_blank"
                            class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-globe"></i> Visit
                            Website</a
                        >
                    </div>
                </div>
            </div>
        </x-card>
    </div>
</x-layout>

