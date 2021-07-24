<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      @foreach (sidebar() as $row)
          @if(!$row['type'])
            <li class="nav-item">
              <a class="nav-link" href="{{ $row['url'] }}">
                <i class="{{ $row['icon'] }}"></i>
                <span class="menu-title">{{ $row['name'] }}</span>
              </a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="{{ $row['icon'] }}"></i>
                <span class="menu-title">{{ $row['name'] }}</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  @foreach (sidebar($row['name']) as $sub)
                  <li class="nav-item"> <a class="nav-link" href="{{ $sub['url'] }}">{{ $sub['name'] }}</a></li>
                   @endforeach
                </ul>
              </div>
            </li>
          @endif
      @endforeach
    </ul>
</nav>