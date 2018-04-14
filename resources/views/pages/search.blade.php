@forelse ($search as $item)
    <a href="{{$item->getContent('slug')}}" class="d-block">
        <div class="m-b-sm text-ellipsis v-center">

            <h5>
                {{$item->getContent('title')}}
            </h5>
            <span class="small text-muted m-l-xs m-r-xs"> - </span>
            <small class="small text-muted text-ellipsis">
                {{$item->getContent('descriptions')}}
            </small>
        </div>
    </a>
@empty
    <div class="alert alert-warning" role="alert">
        <strong>Ничего не найдено!</strong> Better check yourself, you're not looking too good.
    </div>
@endforelse