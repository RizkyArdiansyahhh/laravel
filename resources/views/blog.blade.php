<x-layout>
    <x-slot:title>Blog</x-slot:title>
    <x-slot:header>{{ $title }}</x-slot:header>
    <section>
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-0">
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

                @foreach ($posts as $post)
                    {{-- <article class="max-w-screen-md border-b border-slate-300 my-2">
            <h3 class="text-xl font-bold mb-1">{{ $post['title'] }}</h3>
            <div class="flex gap-2 text-sm  font-medium">
                by
                <a href="/author/{{ $post->author->username }}" class="hover:underline text-slate-600">
                    {{ $post->author->name }}
                </a>
                in
                <a href="/categorie/{{ $post->categorie->slug }}" class="hover:underline text-slate-600">
                    {{ $post->categorie->name }}
                </a>
                <p class="text-sm font-medium text-slate-600">|</p>
                <h4 class="text-sm font-medium text-slate-600">{{ $post->created_at->diffForHumans() }}</h4>
            </div>
            <p class="text-sm font-light text-slate-600 text-justify my-3">
                {{ Str::limit($post['body'], 150) }}
            </p>
            <div class="flex gap-0.5 group mb-3">
                <a class="text-sm font-medium text-teal-500 " href="/blog/{{ $post['slug'] }}">Read More</a>
                <p class="text-sm font-medium text-teal-500 group-hover:ml-4 transition-all duration-200 ease-in-out">
                    &raquo;</p>
            </div>

        </article> --}}

                    <article class="flex flex-col p-6 bg-white rounded-lg border border-gray-200 shadow-md  ">
                        <div class="flex justify-between items-center mb-5 text-gray-500">
                            <a href="/categorie/{{ $post->categorie->slug }}">
                                <span
                                    class="bg-{{ $post->categorie->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded ">
                                    {{ $post->categorie->name }}
                                </span>
                            </a>

                            <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                        </div>
                        <a href="/blog/{{ $post->slug }}" class="hover:underline">
                            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                {{ $post->title }}</h2>
                        </a>
                        <p class="flex-grow mb-5 font-light text-gray-500 text-justify">
                            {{ Str::limit($post->body, 130) }}</p>
                        <div class="flex justify-between items-center">
                            <a href="/author/{{ $post->author->username }}">
                                <div class="flex items-center space-x-4">
                                    <img class="w-7 h-7 rounded-full"
                                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                        alt="Jese Leos avatar" />
                                    <span class="font-medium text-xs ">
                                        {{ $post->author->name }}
                                    </span>
                                </div>
                            </a>
                            <a href="/blog/{{ $post->slug }}"
                                class="inline-flex text-sm items-center font-medium text-primary-600 hover:underline">
                                Read more
                                <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

</x-layout>
