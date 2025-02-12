<header class="mb-4">
    <nav class="navbar bg-neutral text-neutral-content">
        {{-- トップページへのリンク --}}
        <div class="flex-1">
            <h1><a class="btn btn-ghost normal-case text-xl" href="/">tasklist</a></h1>
        </div>

        <div class="flex-none">
            <!--<ul tabindex="0" class="menu lg:block lg:menu-horizontal">-->
            <!--    {{-- メッセージ作成ページへのリンク --}}-->
            <!--    <li><a class="link link-hover" href="">新規タスクの保存</a></li>-->
            <!--</ul>-->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <ul tabindex="0" class="menu hidden lg:menu-horizontal">
                    @include('commons.link_items')
                </ul>
                <div class="dropdown dropdown-end">
                    <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52 text-info">
                        @include('commons.link_items')
                    </ul>
                </div>
            </form>
        </div>
    </nav>
</header>
