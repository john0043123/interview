<li class="dropdown notifications-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-globe"></i>
    </a>
    <ul class="dropdown-menu">
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
                @foreach(config('portfolio.supportedLanguage') as $k => $name)
                    <li>
                        <a href="#" data-locale="{{ $k }}">
                            {{ $name }} @if(app()->getLocale() == $k)<i class="fa fa-check"></i>@endif
                        </a>
                    </li>
                @endforeach

            </ul>
        </li>
    </ul>
</li>

<script>
    // li.dropdown.notifications-menu > ul > li > div > ul > li:nth-child(1) > a
    $('li.dropdown.notifications-menu ul a').on('click', function () {
        $.ajax({
            method: 'get',
            url: '/set-locale/' + $(this).data('locale'),
            success: function () {
                // $.pjax.reload('#pjax-container');
                toastr.success('操作成功');
                location.reload();
            }
        });
    });

</script>
