<x-layout>
    <x-slot:title>Blog</x-slot:title>
    <x-slot:header>{{ $title }}</x-slot:header>


    <!--
Install the "flowbite-typography" NPM package to apply styles and format the article content:

URL: https://flowbite.com/docs/components/typography/
-->

    <main class="pt-4 pb-16 lg:pt-4 lg:pb-24 bg-white  antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue ">
                <a href="/blog" class="mb-5 text-sm font-medium text-primary-600 flex items-center hover:underline">
                    <svg class="w-6 h-6 text-primary-600" fill="none" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14M5 12l4-4m-4 4 4 4" />
                    </svg>

                    Back to blogs</a>
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 ">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">
                            <div>
                                <a href="#" rel="author"
                                    class="text-xl font-bold text-gray-900 ">{{ $post->author->name }}</a>
                                <p class="text-base text-gray-500 mb-1">{{ $post->created_at->format('d F o') }}</p>
                                <a href="/categorie/{{ $post->categorie->slug }}">
                                    <span
                                        class="bg-{{ $post->categorie->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded ">
                                        {{ $post->categorie->name }}
                                    </span>
                                </a>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl ">
                        {{ $post->title }}</h1>
                </header>
                <p class="text-justify">{{ $post->body }}</p>
            </article>
        </div>
    </main>

</x-layout>
