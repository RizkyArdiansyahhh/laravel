<x-layout>
    <x-slot:title>Blog</x-slot:title>
    <x-slot:header>{{ $title }}</x-slot:header>


    @foreach ($posts as $post)
        <article class="max-w-screen-md border-b border-slate-300 my-2">
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

        </article>
    @endforeach

</x-layout>
