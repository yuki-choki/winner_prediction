<x-layouts.app>
    @if ($attentionEvent)
        <section class="hero--area section-padding-80-0">
            <div class="container m-auto">
                <div class="row">
                    <div class="col-12 single-blog-post style-3">
                        <div class="section-heading">
                            <h4>注目イベント</h4>
                            <div class="line"></div>
                        </div>
                        <div class="post-content">
                            <a href="{{ route('group.show', ['group' => $attentionEvent->group->id]) }}" class="post-cata cata-sm cata-success">{{ $attentionEvent->group->name }}</a>
                            <a href="{{ route('event.show', ['event' => $attentionEvent->id]) }}" class="post-title" style="margin-bottom: 0.25rem">
                                <div>{{ $attentionEvent->name }}</div>
                                <img src="{{ $attentionEvent->image }}" alt="" width="100%">
                            </a>
                            @if ($attentionEvent->from_url)
                                <a href="{{ $attentionEvent->from_url }}" target="_brank">引用元：{{ $attentionEvent->from_url }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="trending-posts-area section-padding-80-0">
        <!-- 注目カードエリア -->
        <div class="container m-auto">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="section-heading">
                        <h4>注目カード</h4>
                        <div class="line"></div>
                    </div>
                    @foreach ($attentionFights as $fight)
                        <div class="single-post-area mb-30">
                            <div class="post-content">
                                <a href="{{ route('group.show', ['group' => $fight->event->group->id]) }}" class="post-cata cata-sm cata-{{ \App\Enums\GroupColor::getDescription($fight->event->group->id) }}">
                                    {{ $fight->event->group->name }}
                                </a>
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
            </div>
        </div>
    </section>
</x-layouts.app>
