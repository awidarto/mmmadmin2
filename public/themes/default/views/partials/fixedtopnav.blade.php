    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand {{ sa('dashboard') }} " href="{{ URL::to('/') }}">{{ Config::get('site.name')}}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown  class="{{ sa('asset') }}"">
                <a href="" data-toggle="dropdown" class="dropdown-toggle" role="button" aria-expanded="false"><i class="fa fa-cubes"></i> Media <span class="caret"></span></a>
                <ul class="dropdown-menu pull-left">
                    <li class="{{ sa('submission') }}">
                        <a class="{{ sa('submission') }}" href="{{ URL::to('submission') }}"  ><i class="fa fa-th-list"></i> Submission</a>
                    </li>
                    <li class="{{ sa('medialib') }}">
                        <a class="{{ sa('medialib') }}" href="{{ URL::to('medialib') }}"  ><i class="fa fa-th-list"></i> Media Library</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="" data-toggle="dropdown" class="dropdown-toggle" role="button" aria-expanded="false">
                    <i class="fa fa-check-square-o"></i> Marketplace <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ sa('transaction') }}" >
                        <a href="{{ URL::to('transaction') }}" class="{{ sa('transaction') }}" ><i class="fa fa-clock-o"></i> Credit Transaction</a>
                    </li>
                    <li class="{{ sa('topuptrx') }}" >
                        <a href="{{ URL::to('topuptrx') }}" class="{{ sa('topuptrx') }}" ><i class="fa fa-clock-o"></i> Top Up Transaction</a>
                    </li>
                    <li class="{{ sa('sales') }}" >
                        <a href="{{ URL::to('sales') }}" class="{{ sa('sales') }}" ><i class="fa fa-check-circle-o"></i> Sales</a>
                    </li>
                    <li class="{{ sa('voucher') }}" >
                        <a href="{{ URL::to('voucher') }}" class="{{ sa('voucher') }}" ><i class="fa fa-check-circle-o"></i> Voucher Manager</a>
                    </li>
                    {{--
                    <li class="{{ sa('access') }}">
                        <a href="{{ URL::to('access') }}" class="{{ sa('access') }}" ><i class="fa fa-edit"></i> To Be Revised</a>
                    </li>
                    <li class="{{ sa('apiaccess') }}">
                        <a href="{{ URL::to('apiaccess') }}" class="{{ sa('apiaccess') }}" ><i class="fa fa-times-circle-o"></i> Rejected</a>
                    </li>
                    --}}
                </ul>
            </li>
            <li class="dropdown">
                <a href="" data-toggle="dropdown" class="dropdown-toggle" role="button" aria-expanded="false">
                    <i class="fa fa-list"></i> Logs <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ sa('activity') }}" >
                        <a href="{{ URL::to('activity') }}" class="{{ sa('activity') }}" ><i class="fa fa-refresh"></i> Site Activity</a>
                    </li>
                    <li class="{{ sa('access') }}">
                        <a href="{{ URL::to('access') }}" class="{{ sa('access') }}" ><i class="fa fa-globe"></i> Site Access</a>
                    </li>
                    <li class="{{ sa('apiaccess') }}">
                        <a href="{{ URL::to('apiaccess') }}" class="{{ sa('apiaccess') }}" ><i class="fa fa-plug"></i> API Access</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="" data-toggle="dropdown" class="dropdown-toggle" role="button" aria-expanded="false">
                    <i class="fa fa-bar-chart-o"></i> Reports <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ sa('activity') }}" >
                        <a href="{{ URL::to('activity') }}" class="{{ sa('activity') }}" ><i class="fa fa-refresh"></i> Audit Trails</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle" role="button" aria-expanded="false">
                    <i class="fa fa-cogs"></i> System <span class="caret"></span>
                  </a>
                <ul class="dropdown-menu">
                    <li class="{{ sa('user') }}" >
                      <a href="{{ URL::to('user') }}" class="{{ sa('user') }}" ><i class="fa fa-group"></i> Admins</a>
                    </li>
                    <li class="{{ sa('usergroup') }}">
                      <a href="{{ URL::to('usergroup') }}" class="{{ sa('usergroup') }}" ><i class="fa fa-group"></i> Group</a>
                    </li>
                    <li class="{{ sa('option') }}">
                      <a href="{{ URL::to('option') }}" class="{{ sa('option') }}" ><i class="fa fa-wrench"></i> Options</a>
                    </li>
                </ul>
            </li>
          </ul>

          @include('partials.identity')

        </div><!--/.nav-collapse -->
      </div>
    </nav>
