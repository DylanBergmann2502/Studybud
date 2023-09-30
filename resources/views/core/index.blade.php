<x-layout>
    <main class="layout layout--3">
        <div class="container">
            <!-- Topics Start -->
            <x-topics-component :topics="$topics" />
            <!-- Topics End -->

            <!-- Room List Start -->
            <div class="roomList">
                <div class="mobile-menu">
                    <form class="header__search">
                        <label>
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <title>search</title>
                            <path
                            d="M32 30.586l-10.845-10.845c1.771-2.092 2.845-4.791 2.845-7.741 0-6.617-5.383-12-12-12s-12 5.383-12 12c0 6.617 5.383 12 12 12 2.949 0 5.649-1.074 7.741-2.845l10.845 10.845 1.414-1.414zM12 22c-5.514 0-10-4.486-10-10s4.486-10 10-10c5.514 0 10 4.486 10 10s-4.486 10-10 10z"
                            ></path>
                        </svg>
                        <input placeholder="Search for posts" />
                        </label>
                    </form>
                    <div class="mobile-menuItems">
                        <a class="btn btn--main btn--pill" href="{{ route('topic.index') }}">Browse Topics</a>
                        <a class="btn btn--main btn--pill" href="#">Recent Activities</a>
                    </div>
                </div>
                <div class="roomList__header">
                    <div>
                        <h2>Study Room</h2>
                        <p>{{ $rooms->count() }} Rooms available</p>
                    </div>
                    <a class="btn btn--main" href="create-room.html">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <title>add</title>
                        <path
                            d="M16.943 0.943h-1.885v14.115h-14.115v1.885h14.115v14.115h1.885v-14.115h14.115v-1.885h-14.115v-14.115z"
                        ></path>
                        </svg>
                        Create Room
                    </a>
                </div>

                <x-feed-component :rooms="$rooms" />
            </div>
            <!-- Room List End -->

            <!-- Activities Start -->
            <div class="activities">
                <div class="activities__header">
                <h2>Recent Activities</h2>
                </div>
                <div class="activities__box">
                <div class="activities__boxHeader roomListRoom__header">
                    <a href="profile.html" class="roomListRoom__author">
                    <div class="avatar avatar--small">
                        <img src="https://randomuser.me/api/portraits/women/11.jpg" />
                    </div>
                    <p>
                        @sulamita_ivy
                        <span>5 days ago</span>
                    </p>
                    </a>
                    <div class="roomListRoom__actions">
                    <a href="#">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <title>remove</title>
                        <path
                            d="M27.314 6.019l-1.333-1.333-9.98 9.981-9.981-9.981-1.333 1.333 9.981 9.981-9.981 9.98 1.333 1.333 9.981-9.98 9.98 9.98 1.333-1.333-9.98-9.98 9.98-9.981z"
                        ></path>
                        </svg>
                    </a>
                    </div>
                </div>
                <div class="activities__boxContent">
                    <p>replied to post “<a href="room.html">100 Days of code challenge!</a>”</p>
                    <div class="activities__boxRoomContent">
                    I’ll have to try this sometime. Really like this idea. Wanna talk about it? I ‘m....
                    </div>
                </div>
                </div>

                <div class="activities__box">
                <div class="activities__boxHeader roomListRoom__header">
                    <a href="profile.html" class="roomListRoom__author">
                    <div class="avatar avatar--small active">
                        <img src="https://randomuser.me/api/portraits/men/13.jpg" />
                    </div>
                    <p>
                        @mr_spshuvo
                        <span>5 days ago</span>
                    </p>
                    </a>
                    <div class="roomListRoom__actions">
                    <a href="#">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                        <title>remove</title>
                        <path
                            d="M27.314 6.019l-1.333-1.333-9.98 9.981-9.981-9.981-1.333 1.333 9.981 9.981-9.981 9.98 1.333 1.333 9.981-9.98 9.98 9.98 1.333-1.333-9.98-9.98 9.98-9.981z"
                        ></path>
                        </svg>
                    </a>
                    </div>
                </div>
                <div class="activities__boxContent">
                    <p>replied to post “<a href="room.html">100 Days of code challenge!</a>”</p>
                    <div class="activities__boxRoomContent">
                    I’ll have to try this sometime. Really like this idea. Wanna talk about it? I ‘m....
                    </div>
                </div>
                </div>
            </div>
            <!-- Activities End -->
        </div>
    </main>
</x-layout>

