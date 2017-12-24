<div class="dropdown-menu pull-right dropdown-menu-scale">
    <a class="dropdown-item" href="/home">
        <span>داشبورد</span>
    </a>
    <a class="dropdown-item" href="/profile">
        <span>پروفایل</span>
    </a>
    <a class="dropdown-item" href="/profile/edit">
        <span>ویرایش پروفایل</span>
        <span class="label primary m-l-xs">3/9</span>
    </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" ui-sref="app.docs">راهنما</a>

    <a class="dropdown-item" href="{{ url('/logout') }}"
       onclick="event.preventDefault();
       document.getElementById('logout-form').submit();">خروج</a>
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</div>