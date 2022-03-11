<div class="topbar stick">
    <div class="logo">
        <a title="" href="newsfeed.html"><img src="{{ asset("assets/images/logo.png") }}" alt=""></a>
    </div>

    <div class="top-area">
        <div class="top-search">
            <form method="post" class="">
                <input type="text" placeholder="Search Friend">
                <button data-ripple><i class="ti-search"></i></button>
            </form>
        </div>
        <ul class="setting-area">
            <li><a href="newsfeed.html" title="Home" data-ripple=""><i class="ti-home"></i></a></li>
            <li>
                <a href="#" title="Notification" data-ripple="">
                    <i class="ti-bell"></i><span>20</span>
                </a>
                <div class="dropdowns">
                    <span>4 New Notifications</span>
                    <ul class="drops-menu">
                        <li>
                            <a href="notifications.html" title="">
                                <img src="{{ asset('assets/images/resources/thumb-1.jpg') }}" alt="">
                                <div class="mesg-meta">
                                    <h6>sarah Loren</h6>
                                    <span>Hi, how r u dear ...?</span>
                                    <i>2 min ago</i>
                                </div>
                            </a>
                            <span class="tag green">New</span>
                        </li>
                        <li>
                            <a href="notifications.html" title="">
                                <img src="{{ asset("assets/images/resources/thumb-2.jpg")}}" alt="">
                                <div class="mesg-meta">
                                    <h6>Jhon doe</h6>
                                    <span>Hi, how r u dear ...?</span>
                                    <i>2 min ago</i>
                                </div>
                            </a>
                            <span class="tag red">Reply</span>
                        </li>
                        <li>
                            <a href="notifications.html" title="">
                                <img src="{{ asset("assets/images/resources/thumb-3.jpg")}}" alt="">
                                <div class="mesg-meta">
                                    <h6>Andrew</h6>
                                    <span>Hi, how r u dear ...?</span>
                                    <i>2 min ago</i>
                                </div>
                            </a>
                            <span class="tag blue">Unseen</span>
                        </li>
                        <li>
                            <a href="notifications.html" title="">
                                <img src="{{ asset("assets/images/resources/thumb-4.jpg")}}" alt="">
                                <div class="mesg-meta">
                                    <h6>Tom cruse</h6>
                                    <span>Hi, how r u dear ...?</span>
                                    <i>2 min ago</i>
                                </div>
                            </a>
                            <span class="tag">New</span>
                        </li>
                        <li>
                            <a href="notifications.html" title="">
                                <img src="{{ asset("assets/images/resources/thumb-5.jpg")}}" alt="">
                                <div class="mesg-meta">
                                    <h6>Amy</h6>
                                    <span>Hi, how r u dear ...?</span>
                                    <i>2 min ago</i>
                                </div>
                            </a>
                            <span class="tag">New</span>
                        </li>
                    </ul>
                    <a href="notifications.html" title="" class="more-mesg">view more</a>
                </div>
            </li>
            <li>
                <a href="#" title="Messages" data-ripple=""><i class="ti-comment"></i><span>12</span></a>
                <div class="dropdowns">
                    <span>5 New Messages</span>
                    <ul class="drops-menu">
                        <li>
                            <a href="notifications.html" title="">
                                <img src="{{ asset("assets/images/resources/thumb-1.jpg")}}" alt="">
                                <div class="mesg-meta">
                                    <h6>sarah Loren</h6>
                                    <span>Hi, how r u dear ...?</span>
                                    <i>2 min ago</i>
                                </div>
                            </a>
                            <span class="tag green">New</span>
                        </li>
                        <li>
                            <a href="notifications.html" title="">
                                <img src="{{ asset("assets/images/resources/thumb-2.jpg")}}" alt="">
                                <div class="mesg-meta">
                                    <h6>Jhon doe</h6>
                                    <span>Hi, how r u dear ...?</span>
                                    <i>2 min ago</i>
                                </div>
                            </a>
                            <span class="tag red">Reply</span>
                        </li>
                        <li>
                            <a href="notifications.html" title="">
                                <img src="assets/images/resources/thumb-3.jpg" alt="">
                                <div class="mesg-meta">
                                    <h6>Andrew</h6>
                                    <span>Hi, how r u dear ...?</span>
                                    <i>2 min ago</i>
                                </div>
                            </a>
                            <span class="tag blue">Unseen</span>
                        </li>
                        <li>
                            <a href="notifications.html" title="">
                                <img src="{{ asset("assets/images/resources/thumb-4.jpg")}}" alt="">
                                <div class="mesg-meta">
                                    <h6>Tom cruse</h6>
                                    <span>Hi, how r u dear ...?</span>
                                    <i>2 min ago</i>
                                </div>
                            </a>
                            <span class="tag">New</span>
                        </li>
                        <li>
                            <a href="notifications.html" title="">
                                <img src="{{ asset("assets/images/resources/thumb-5.jpg")}}" alt="">
                                <div class="mesg-meta">
                                    <h6>Amy</h6>
                                    <span>Hi, how r u dear ...?</span>
                                    <i>2 min ago</i>
                                </div>
                            </a>
                            <span class="tag">New</span>
                        </li>
                    </ul>
                    <a href="messages.html" title="" class="more-mesg">view more</a>
                </div>
            </li>
            <li><a href="#" title="Languages" data-ripple=""><i class="fa fa-globe"></i></a>
                <div class="dropdowns languages">
                    <a href="#" title=""><i class="ti-check"></i>English</a>
                    <a href="#" title="">Arabic</a>
                    <a href="#" title="">Dutch</a>
                    <a href="#" title="">French</a>
                </div>
            </li>
        </ul>
        <div class="user-img">
            <img src="{{ asset("assets/images/resources/admin.jpg")}}" alt="">
            <span class="status f-online"></span>
            <div class="user-setting">
                <form action="{{route('logout')}}" method="POST" style="display: none" id="logout-form">
                    @csrf
                </form>
                {{-- <a href="#" title=""><span class="status f-online"></span>online</a>
                <a href="#" title=""><span class="status f-away"></span>away</a>
                <a href="#" title=""><span class="status f-off"></span>offline</a> --}}
                <a href="{{route('myprofile', [auth()->user()])}}" title=""><i class="ti-user"></i>{{ __("view profile") }}</a>
                <a href="#" title=""><i class="ti-pencil-alt"></i>edit profile</a>
                <a href="#" title=""><i class="ti-target"></i>activity log</a>
                <a href="#" title=""><i class="ti-settings"></i>account setting</a>
                <a href="#" title="" onclick="event.preventDefault(); if(confirm('Are you sure?')) { document.getElementById('logout-form').submit() }"><i class="ti-power-off"></i>{{ _("log out") }}</a>
            </div>
        </div>

    </div>
</div><!-- topbar -->
