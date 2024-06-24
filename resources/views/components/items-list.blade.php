@php
    $item = (object) $item;
    $item = [
        'svg' => $item->svg,
        'title' => $item->title,
        'text' => $item->text,
        'color' => $item->color,
    ];
@endphp
<div class="w-64">
          <svg class="w-12 h-12 mb-4 {{ $item['color'] }}">
               <use
                   class="transition-all duration-200"
                   href="./assets/icons/icons-sprite.svg#{{ $item['svg'] }}"
               ></use>
          </svg>
          <h3>{{ $item['title'] }}</h3>
          <div>
               {{ $item['text'] }}
          </div>
</div>

