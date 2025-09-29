@props (['column'])

@if (app('request')->input('orderby') === $column)

    @if (app('request')->input('order') === 'desc' || app('request')->input('order') === 'dsc' )
    
    <a class="sortable-active--desc" href="{{ 
                app('url')->query(
                    app('url')->full(),[
                        'orderby' => $column,
                        'order' => 'asc'
                    ]) 
                }}">

    @else

    <a class="sortable-active--asc" href="{{ 
                app('url')->query(
                    app('url')->full(), [
                        'orderby' => $column,
                        'order' => 'desc'
                    ]) 
                }}">

    @endif

@else

    <a class="sortable-inactive" href="{{ 
                app('url')->query(
                    app('url')->full(), [
                        'orderby' => $column,
                        'order' => 'asc'
                    ])
                }}">

@endif

{{ $slot }}
</a>