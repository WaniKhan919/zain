@extends('layouts.front')

@section('content')

<!-- module_row -->
<div data-lazy="1" class="module_row themify_builder_row tb_mgjo446 tf_clearfix">
    <div class="row_inner col_align_top col-count-1 tf_box tf_w tf_rel">
        <div data-lazy="1"
            class="module_column tb-column col-full first tb_0g6v447 tf_box">
            <div class="tb-column-inner tf_box tf_w">
                <!-- module plain text -->
                <div class="module module-plain-text tb_x220830 hm-glry" data-lazy="1">
                    <div class="tb_text_wrap">
                        <div id="tf-tiles-24" class="tf-tiles " data-post_id="24">
                            <div class="tf-tiles-wrap" data-base_size=""
                                data-tiles_per_row="5">
                                @php
                                    $i=0;
                                @endphp
                                @foreach ($services as $list)
                                @if ($list->offerUrl)
                            <a href="#" onclick="servicePage(this)" data-url="{{ $list->offerUrl }}">
                                @else
                                <a href="#">
                                @endif
                                    <div id="tf-tile-24-{{ $i }}"
                                        class="tf-tile size-square-large has-flip tile-type-front-button"
                                        data-auto-flip="3" data-in-effect="flip-horizontal"
                                        data-out-effect=""
                                        >
                                        <div class="tile-flip-box-wrap">
                                            <div class="tile-flip-box">
                                                <style>
                                                    #tf-tile-24-{{ $i }} .tile-front {
                                                        background-image: url("{{ asset('/storage/'. $list->image) }}");
                                                    }

                                                    #tf-tile-24-{{ $i }} .tile-front a {}

                                                </style>
                                                <div
                                                    class="tile-front tile-type-button ui default">
                                                    <div class="tile-inner"> </div>
                                                    <!-- .tile-inner -->
                                                </div>
                                                <!-- .tile-front -->
                                                <style>
                                                    #tf-tile-24-{{ $i }} .tile-back {}

                                                    #tf-tile-24-{{ $i }} .tile-back a {}

                                                </style>
                                                <div
                                                    class="tile-back tile-type-text ui" style="background-color: {{ $list->back_color ?? 'yellow' }};">
                                                    <div class="tile-inner">
                                                        <div class="tile-content">
                                                            @if ($list->offerUrl)
                                                                <a href="{{ $list->offerUrl }}">
                                                                @else
                                                                <a href="#">
                                                                @endif
                                                            <h6 style="text-align: center;color:{{ $list->font_color ?? "black" }};">
                                                                <strong>{{ $list->description ?? ' --- ' }}</strong>
                                                            </h6>
                                                            </a>
                                                        </div>
                                                        <!-- .tile-content -->
                                                    </div>
                                                    <!-- .tile-inner -->
                                                </div>
                                                <!-- .tile-back -->
                                            </div>
                                            <!-- .tile-flip-box -->
                                        </div>
                                        <!-- .tile-flip-box-wrap -->
                                        <div class="tf-tile-data">
                                            <script type="text/json">
                                                {
                                                    "size": "square-large",
                                                    "type_front": "button",
                                                    "color_front": "default",
                                                    "button_link_params_front": "|",
                                                    "icon_type_front": "icon",
                                                    "gallery_autoplay_front": "off",
                                                    "gallery_hide_timer_front": "no",
                                                    "type_map_front": "ROADMAP",
                                                    "zoom_map_front": "7",
                                                    "scrollwheel_map_front": "enable",
                                                    "draggable_map_front": "enable",
                                                    "action_param_front": "|",
                                                    "background_image_front": "{{ asset('/storage/'. $list->image) }}",
                                                    "type_back": "text",
                                                    "color_back": "{{ $list->color ?? 'yellow' }}",
                                                    "text_back": " <
                                                        h6 style = \
                                                        "text-align: center;\"><strong>\u062d\u0628\u0648\u0628\u0629 \u0643\u0644\u0627\u0645\u0647\u0627 \u0634\u0646\u0648\u061f \u0627\u0636\u063a\u0637 <u>\u0647\u0646\u0627<\/u> \u0644\u0644\u0627\u0634\u062a\u0631\u0627\u0643 \u0648\u0644\u0633\u0645\u0627\u0639 \u0627\u0644\u0633\u0645\u062d \u0645\u0646 \u062d\u0643\u0645 \u0648\u0623\u0642\u0648\u0627\u0644 \u062d\u0628\u0648\u0628\u0629<\/strong><\/h6>",
                                                    "button_link_params_back": "|",
                                                    "icon_type_back": "icon",
                                                    "gallery_autoplay_back": "off",
                                                    "gallery_hide_timer_back": "no",
                                                    "type_map_back": "ROADMAP",
                                                    "zoom_map_back": "7",
                                                    "scrollwheel_map_back": "enable",
                                                    "draggable_map_back": "enable",
                                                    "action_param_back": "|",
                                                    "tile_autoflip": "3",
                                                    "flip_effect": "flip-horizontal"
                                                }

                                            </script>
                                        </div>

                                    </div><!-- .tf-tile -->
                                </a>
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach

                            </div>
                        </div>
                        <style>
                            #tf-tiles-24 .tile-flip-box-wrap {
                                padding: 5px;
                            }

                            #tf-tiles-24 .tf-tiles-wrap {
                                width: calc(100% + 10px);
                                margin-left: -5px;
                            }

                        </style>
                    </div>
                </div>
                <!-- /module plain text -->
            </div>
        </div>
    </div>
    <!-- /row_inner -->
</div>
<!-- /module_row -->


<script>
function changeAffect(){
var affects = ['flip-horizontal',
'flip-vertical',
'fadeIn',
'fadeInRight',
'fadeInDown',];

var el = document.querySelectorAll('.tf-tile.size-square-large');

    for(i of el){
        rand = affects[(Math.random() * affects.length) | 0];
        i.classList.add(rand);
        i.setAttribute('data-in-effect', rand);
        i.setAttribute('data-auto-flip', 3 + ((Math.random() * affects.length)%2)) ?? 2;
        console.log("affect :::", rand);

    }
}
changeAffect();

setInterval(()=>{
    changeAffect();
}, 10000);

</script>
<script>
    function servicePage(el){
        let url=$(el).data('url');
        window.location.href = url;
    }
</script>
@endsection