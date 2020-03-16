
<div class="col-md-3 col-sm-4 static">
    <!-- Card profile -->
    <!-- <?php if(!Yii::$app->user->isGuest):?>
        <div class="profile-card">
            <img src="themes/img/user-1.jpg" alt="user" class="profile-photo" />
            <h5><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['user/index']);?>" class="text-white">Sarah Cruiz</a></h5>
            <a href="#" class="text-white"><i class="ion ion-android-person-add"></i> 1,299 followers</a>
        </div>
    <?php endif;?> -->
    <!--profile card ends-->

    <div class="menu-container-mobile">
        <ul class="menu-list-mobile nav-news-feed">
            <?php if(Yii::$app->user->isGuest):?>
            <li><i class="ion ion-ios-home"></i><div><a href="newsfeed.html">Trang chủ</a></div></li>
            <?php else:?>
                <li><i class="ion ion-ios-home"></i><div><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['feeds/index'])?>">Tin của bạn</a></div></li>
            <?php endif?>
            <li><i class="ion ion-android-list"></i><div><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['feeds/index'])?>">Tin mới</a></div></li>
            <li><i class="ion ion-ios-flame-outline"></i><div><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['feeds/index'])?>">Tin hot</a></div></li>
            <li><i class="fa fa-bookmark-o"></i><div><a href="newsfeed-friends.html">Dấu trang</a></div></li>
            <li><i class="ion ion-flag"></i><div><a href="newsfeed-images.html">Trang tin</a></div></li>
            <li><i class="ion ion-image"></i><div><a href="newsfeed-images.html">Ảnh</a></div></li>
            <li><i class="ion ion-ios-gear"></i><div><a href="newsfeed-videos.html">Setting</a></div></li>
        </ul>
    </div>

    <!-- Navigation Right -->
    <!-- <ul class="nav-news-feed hidden-xs">
        <?php if(Yii::$app->user->isGuest):?>
            <li><i class="ion ion-ios-home"></i><div><a href="newsfeed.html">Trang chủ</a></div></li>
            <?php else:?>
                <li><i class="ion ion-ios-home"></i><div><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['feeds/index'])?>">Tin của bạn</a></div></li>
            <?php endif?>
            <li><i class="ion ion-android-list"></i><div><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['feeds/index'])?>">Tin mới</a></div></li>
            <li><i class="ion ion-ios-flame-outline"></i><div><a href="<?= Yii::$app->urlManager->createAbsoluteUrl(['feeds/index'])?>">Tin hot</a></div></li>
            <li><i class="fa fa-bookmark-o"></i><div><a href="newsfeed-friends.html">Dấu trang</a></div></li>
            <li><i class="ion ion-flag"></i><div><a href="newsfeed-images.html">Trang tin</a></div></li>
            <li><i class="ion ion-image"></i><div><a href="newsfeed-images.html">Ảnh</a></div></li>
            <li><i class="ion ion-ios-gear"></i><div><a href="newsfeed-videos.html">Setting</a></div></li>
        </ul> -->
        <!-- End Navigation Right-->

        <!-- Page News -->
        <div id="chat-block" class="hidden-xs">
            <div class="title">Đề xuất</div>
        <!-- <ul class="online-users list-inline">
            <li><a href="newsfeed-messages.html" title="Linda Lohan"><img src="themes/img/user-2.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="Sophia Lee"><img src="themes/img/user-3.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="John Doe"><img src="themes/img/user-4.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="Alexis Clark"><img src="themes/img/user-5.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="James Carter"><img src="themes/img/user-6.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="Robert Cook"><img src="themes/img/user-7.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="Richard Bell"><img src="themes/img/user-8.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="Anna Young"><img src="themes/img/user-9.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
            <li><a href="newsfeed-messages.html" title="Julia Cox"><img src="themes/img/user-10.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
        </ul> -->
        <div class="people-nearby">
            <div class="nearby-user">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <img src="themes/img/user-15.jpg" alt="user" class="profile-photo-sm" />
                    </div>
                    <div class="col-md-5 col-sm-5 domain-name">
                        <h5><a href="#" class="profile-link">Zing</a></h5>
                        <!-- <p>Software Engineer</p> -->
                        <!-- <p class="text-muted">500m away</p> -->
                    </div>
                    <div class="col-md-2 col-sm-2 pull-right follow">
                        <button class="btn btn-primary btn-follow pull-right "><p>Đã theo dõi</p></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page News -->
</div>