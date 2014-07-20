<!-- Begin Header -->
    <header class="clearfix Head">
        <section class="clearfix headerContainer">
            <div class="widthMasonry">
                <div class="Container">
                    <div class="leftContainer dropdown">
                        
                        <button id="menuTop" data-toggle="dropdown" class="btn btn-profile" type="button" title="Thanh menu nhanh">
                            <span class="glyphicon glyphicon-th-large"></span>
                        </button>
                        
                        <div class="dropdown-menu dropdown-menu-left menuTop" aria-labelledby="menuTop">
                        <span class="arow-tick-left"></span>
                        <!-- Begin Footer -->   
                            <?php $this->load->view("layout/menu"); ?>
                        <!-- End Footer -->
                        </div>

                        <input type="text" class="txtSearch" placeholder="Tìm kiếm">
                        <span class="glyphicon glyphicon-search iconSearch"></span>
                    </div>
                    <div class="centerContainer">
                        <div class="container-fluid">
                            <a class="logo" id="logo" href="" title="Đặt Logo bằng hình ảnh ở đây">Silkforest</a>
                        </div>
                    </div>
                    <div class="rightContainer">
                        
                            <button class="btn btn-profile btnRegister" title="Vào trang đăng ký"><span class="glyphicon glyphicon-plus"></span></button>
                           
                        <div class="btn-group btn-group-xs">
                            <button class="btn btn-profile btnRegister" title="Vào trang đăng ký"><strong> Đăng ký </strong></button>
                            <button class="btn btn-profile btnLogin" title="Bật modal đăng nhập nhanh"><strong> Đăng nhập </strong></button>
                        </div>

                        <div class="btn-group btn-group-xs">
                            <button class="btn btn-profile btnNotification" title="Thông tin từ hệ thống">
                                <span class="badge">14</span>
                            </button>
                            <button class="btn btn-profile dropdown-toggle btnUserProfile" data-toggle="dropdown" title="Tùy chọn cá nhân">
                                <strong> <?php echo (isset($user))?$user:'';?> </strong>
                            </button>

                            <button class="btn btn-avatar" title="Vào trang cá nhân khi click vào avatar">
                                <img class="img-rounded" width="32" height="32"
                            src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSExHKGZaVAlNx6uv2kDKpsVNgp8lntW9_KzfDa1lELNGeAZHvA-w"></button>

                            <ul class="dropdown-menu menuProfile">
                                <li><a href="#">Thông tin</a></li>
                                <li><a href="#">Yêu thích</a></li>
                                <li><a href="#">Bạn bè</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Đăng xuất</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="clearfix headerBanner">
            <div class="widthMasonry">
                <div class="Advertisement">
                        <embed src="http://adi.vcmedia.vn/images/2014/03/17_biasg_980x90_do.swf" height="125" alt="http://adi.vcmedia.vn/images/2014/03/17_biasg_980x90_dobk.jpg" align="middle" width="100%" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" flashvars="alink1=http%3A%2F%2Fc.logging.admicro.vn%2F_adc.html%3Fadm_domain%3Dhttp%253A%2F%2Fdantri.com.vn%2F%26adm_campaign%3D1047064%26adm_aditem%3D265526%26adm_zoneid%3D221%26adm_channelid%3D-1%26adm_rehttp%3Dhttp%253A%2F%2Fwww.sabeco.com.vn%2F%26adm_random%3D0.23880444653332233&amp;atar1=_blank" allowscriptaccess="always" wmode="opaque" quality="high">
                </div>
            </div>
        </section>
    </header>
    <!-- End Header -->
