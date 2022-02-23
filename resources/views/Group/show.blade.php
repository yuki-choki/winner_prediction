<x-layouts.app>
    <div class="vizew-archive-list-posts-area mb-80 mt-30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="grid-cols-12 col-lg-8">
                    <div class="section-heading">
                        <h1 class="text-4xl">{{ $group->name }}</h1>
                        <div class="line"></div>
                    </div>
                    @if ($group->events->count() > 0)
                        @foreach ($group->events as $event)
                            <div class="single-post-area style-2 flex justify-content-center">
                                <div class="row align-items-center grid-cols-1 md:grid-cols-2 inline-flex flex-col md:flex-row">
                                    <div class="mb-3">
                                        <img src="{{ $event->image }}" alt="イベント画像" class="max-h-80">
                                        @if ($event->from_url)
                                            <a href="{{ $event->from_url }}" target="_brank" style="font-size: 0.75rem;">引用元：{{ $event->from_url }}</a>
                                        @endif
                                    </div>
                                    <div class="md:ml-5">
                                        <div class="post-content" style="margin-top: 0;">
                                            <a href="{{ route('event.show', ['event' => $event->id]) }}" class="post-title mb-2">{{ $event->name }}</a>
                                            <div class="mb-2">
                                                <div>開催日</div>
                                                <p class="ml-3">{{ $event->formatDate('Y年m月d日') }}</p>
                                            </div>
                                            <div>対戦カード</div>
                                            <div class="ml-3">
                                                {{ implode('、', $event->fights->pluck('displayMatchMake')->toArray()) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="single-post-area style-2 text-center text-xl">
                            現在 {{ $group->name }} のイベント情報はありません
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>