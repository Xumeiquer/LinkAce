<div class="card mb-4">

    <div class="card-header">
        <div class="d-flex align-items-center">
            <div class="mr-2">
                {!! $link->getIcon('mr-1') !!}
                <a href="{{ $link->url }}" target="_blank">{{ $link->title }}</a>
                <small>({{ $link->url }})</small>
            </div>
            <div class="ml-auto text-right">
                <button type="button" class="btn btn-xs btn-outline-primary" title="@lang('sharing.share_link')"
                    data-toggle="collapse" data-target="#sharing-{{ $link->id }}"
                    aria-expanded="false" aria-controls="sharing-{{ $link->id }}">
                    <i class="fas fa-share-alt fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="card-body py-2 px-3">

        <div class="row">
            <div class="col-xs-12 col-sm-6 small">

                <div class="mt-2">
                    @if($link->tags->count() > 0)
                        <label>@lang('tag.tags'):</label>
                        @foreach($link->tags as $tag)
                            <a href="{{ route('guest.tags.show', [$tag->id]) }}" class="badge badge-primary badge-pill">
                                {{ $tag->name }}
                            </a>
                        @endforeach
                    @else
                        @lang('tag.no_tags')
                    @endif
                </div>

            </div>
            <div class="col-xs-12 col-sm-6 text-md-right text-muted">

                <div>
                    <small>
                        @lang('linkace.added_at') {!! $link->addedAt() !!}
                    </small>
                </div>

            </div>
        </div>

    </div>

    <div class="collapse" id="sharing-{{ $link->id }}">
        <div class="card-footer">
            <div class="share-links">
                {!! getShareLinks($link) !!}
            </div>
        </div>
    </div>

</div>
