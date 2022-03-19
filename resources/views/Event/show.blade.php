<x-layouts.app>
    <div class="vizew-archive-list-posts-area mb-80 mt-30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="grid-cols-12">
                    <div class="section-heading">
                        <h1 class="text-4xl">{{ $event->name }}</h1>
                        <div class="line"></div>
                    </div>
                    <section class="post-details-area mb-80">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="post-details-thumb mb-50">
                                        <img src="{{ $event->image }}" alt="イベント画像" class="m-auto">
                                        @if ($event->from_url)
                                            <a href="{{ $event->from_url }}" target="_brank" style="font-size: 0.75rem;">引用元：{{ $event->from_url }}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="section-heading">
                                <h4>対戦カード</h4>
                                <div class="line"></div>
                            </div>
                            @foreach ($event->fights as $fight)
                                <div class="single-post-area style-2">
                                    <div class="post-content">
                                        <h4 class="mb-3 font-bold text-2xl">第 {{ $fight->match_order }} 試合</h4>
                                        <a href="{{ route('fight.show', ['fight' => $fight->id]) }}" class="post-title">
                                            <span>
                                                <i class="fa fa-user mr-1" aria-hidden="true" style="vertical-align: text-top; color: red;"></i>
                                                {{ $fight->redFighter->name }}
                                            </span>
                                            <span class="mx-1">vs</span>
                                            <span>
                                                {{ $fight->blueFighter->name }}
                                                <i class="fa fa-user ml-1" aria-hidden="true" style="vertical-align: text-top; color: blue;"></i>
                                            </span>
                                        </a>
                                        <div class="post-meta">
                                            <i class="fa fa-user fa-lg mr-2" aria-hidden="true" style="color: red;"></i>
                                                {{ $predicts->where('fight_id', $fight->id)->where('win_fighter_id', $fight->redFighter->id)->first()->count ?? 0 }}
                                            <i class="fa fa-user fa-lg mx-2" aria-hidden="true" style="color: blue;"></i>
                                                {{ $predicts->where('fight_id', $fight->id)->where('win_fighter_id', $fight->blueFighter->id)->first()->count ?? 0 }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>