<!-- main view -->

<?php if (isset($_SESSION['user_logged']) == FALSE) {
  redirect("auth/login", "refresh");
}else {
   ?>
<!-- Cover Header Start -->
<div class="cover--header pt--80 text-center" data-bg-img="<?php echo base_url() ?>img/cover-header-img/bg-01.jpg" data-overlay="0.6" data-overlay-color="white">
    <div class="container">
        <div class="cover--avatar online" data-overlay="0.3" data-overlay-color="primary">
            <img src="<?php echo base_url() ?>img/cover-header-img/avatar-01.jpg" alt="">
        </div>

        <div class="cover--user-name">
            <h2 class="h3 fw--600">Eileen K. Ruiz</h2>
        </div>

        <div class="cover--user-activity">
            <p><i class="fa mr--8 fa-clock-o"></i>Active 1 year 9 monts ago</p>
        </div>

        <div class="cover--user-desc fw--400 fs--18 fstyle--i text-darkest">
            <p>Hello everyone ! There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
        </div>
    </div>
</div>
<!-- Cover Header End -->
<!-- Page Wrapper Start -->
<section class="page--wrapper pt--80 pb--20">
  <div class="container">
    <div class="row">
      <!-- Main Content Start -->
      <div class="main--content col-md-8 pb--60" data-trigger="stickyScroll">
        <div class="main--content-inner drop--shadow">
            <!-- Content Nav Start -->
            <div class="content--nav pb--30">
                <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
                    <li><a href="member-activity-personal.html">Activity</a></li>
                    <li class="active"><a href="member-profile.html">Profile</a></li>
                    <li><a href="member-friends.html">Friends</a></li>
                    <li><a href="member-groups.html">Groups</a></li>
                    <li><a href="member-forum-topics.html">Forum</a></li>
                    <li><a href="member-media-all.html">Media</a></li>
                </ul>
            </div>
            <!-- Content Nav End -->

            <!-- Profile Details Start -->
            <div class="profile--details fs--14">
                <!-- Profile Item Start -->
              <div class="profile--item">
                  <div class="profile--heading">
                      <h3 class="h4 fw--700 col-md-10">
                          <span class="mr--4">About Me</span>
                          <i class="ml--10 text-primary fa fa-caret-right"></i>
                      </h3>
                      <a href="<?php echo base_url() ?>profile_edit/view#bio"><h3 class="h4 fw--700 col-md-2"><i class="fa fa-pencil" aria-hidden="true"></i></h3></a>
                  </div>

                  <div class="profile--info">
                      <table class="table">
                          <tr>
                              <th class="fw--700 text-darkest">Full Name</th>
                              <td><a href="#" class="btn-link">Eileen K. Ruiz</a></td>
                          </tr>
                          <tr>
                              <th class="fw--700 text-darkest">Occupation</th>
                              <td><?php echo $fetch['occupation']; ?></td>
                          </tr>
                          <tr>
                              <th class="fw--700 text-darkest">Skill</th>
                              <td>Graphic Design, Font-End Development, Web Development</td>
                          </tr>
                          <tr>
                              <th class="fw--700 text-darkest">Date of Birth</th>
                              <td>19<sup>th</sup> January 2017</td>
                          </tr>
                      </table>
                  </div>
              </div>
              <!-- Profile Item End -->

              <!-- Profile Item Start -->
              <div class="profile--item">
                  <div class="profile--heading">
                      <h3 class="h4 fw--700">
                          <span class="mr--4">Biography</span>
                          <i class="ml--10 text-primary fa fa-caret-right"></i>
                      </h3>
                  </div>

                  <div class="profile--info">
                      <p>Hello ! I’m <a href="#">Eileen K. Ruiz</a>. Senior web developer of themelooks.com from last 5 years many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing</p>
                  </div>
              </div>
              <!-- Profile Item End -->

              <!-- Profile Item Start -->
              <div class="profile--item">
                  <div class="profile--heading">
                      <h3 class="h4 fw--700 col-md-10">
                          <span class="mr--4">Work Experience</span>
                          <i class="ml--10 text-primary fa fa-caret-right"></i>
                      </h3>
                      <a href="<?php echo base_url() ?>profile_edit/view#xp"><h3 class="h4 fw--700 col-md-2"><i class="fa fa-pencil" aria-hidden="true"></i></h3></a>
                  </div>

                  <div class="profile--info">
                      <dl>
                          <dt>
                              <p class="h6 fw--700 text-darkest">Graphic Designer 2010 - 2012</p>
                              <p><small class="fw--400 fs--12 text-darker">Graphicriver.net at Sydney</small></p>
                          </dt>
                          <dd>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour which don't look even slightly believable.</p>
                          </dd>

                          <dt>
                              <p class="h6 fw--700 text-darkest">Font-End Developer 2012 - 2014</p>
                              <p><small class="fw--400 fs--12 text-darker">Themeforest.net at Australia</small></p>
                          </dt>
                          <dd>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour which don't look even slightly believable.</p>
                          </dd>

                          <dt>
                              <p class="h6 fw--700 text-darkest">Web Developer 2014 - Still Now</p>
                              <p><small class="fw--400 fs--12 text-darker">Codecanyon.net at Sydney</small></p>
                          </dt>
                          <dd>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour which don't look even slightly believable.</p>
                          </dd>
                      </dl>
                  </div>
              </div>
              <!-- Profile Item End -->

              <!-- Profile Item Start -->
              <div class="profile--item">
                  <div class="profile--heading">
                      <h3 class="h4 fw--700">
                          <span class="mr--4">Contact</span>
                          <i class="ml--10 text-primary fa fa-caret-right"></i>
                      </h3>
                  </div>

                  <div class="profile--info">
                      <table class="table">
                          <tr>
                              <th class="fw--700 text-darkest">Phone</th>
                              <td><a href="tel:+16105598246">+1610-559-8246</a></td>
                          </tr>
                          <tr>
                              <th class="fw--700 text-darkest">E-mail</th>
                              <td><a href="mailto:demo@fakemail.com">demo@example.com</a></td>
                          </tr>
                          <tr>
                              <th class="fw--700 text-darkest">Website</th>
                              <td><a href="#">example.com</a></td>
                          </tr>
                          <tr>
                              <th class="fw--700 text-darkest">Address</th>
                              <td>123 Lorem St., California, United States</td>
                          </tr>
                      </table>
                  </div>
              </div>
                <!-- Profile Item End -->
            </div>
              <!-- Profile Details End -->
          </div>
      </div>
      <!-- Main Content End -->
      <!-- Main Sidebar Start -->
      <div class="main--sidebar col-md-4 pb--60" data-trigger="stickyScroll">
        <!-- Widget Start -->
        <div class="widget">
          <div class="panel-heading col-md-12">
    				<span class="glyphicon glyphicon-comment"></span> Chat
    			</div>
          <div class="col-md-12 text-center">
            <div class="form-group">
              <input id="nickname" type="text" class="form-control" placeholder="username..." />
            </div>
          </div>
    			<div class="panel-body">
    				<ul class="chat" id="received">

    				</ul>
    			</div>
    			<div class="panel-footer">
    				<div class="clearfix">
    					<div class="" id="msg_block">
    						<div class="input-group">
    							<input id="message" type="text" class="form-control" placeholder="Type your message here..." />
    							<span class="input-group-btn">
    								<button class="btn btn-primary btn-sm" id="submit">Send</button>
    							</span>
    						</div>
    					</div>
    				</div>
    			</div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
var request_timestamp = 0;

var setCookie = function(key, value) {
	var expires = new Date();
	expires.setTime(expires.getTime() + (5 * 60 * 1000));
	document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
}

var getCookie = function(key) {
	var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
	return keyValue ? keyValue[2] : null;
}

var guid = function() {
	function s4() {
		return Math.floor((1 + Math.random()) * 0x10000).toString(16).substring(1);
	}
	return s4() + s4() + '-' + s4() + '-' + s4() + '-' + s4() + '-' + s4() + s4() + s4();
}

if(getCookie('user_guid') == null || typeof(getCookie('user_guid')) == 'undefined'){
	var user_guid = guid();
	setCookie('user_guid', user_guid);
}


// https://gist.github.com/kmaida/6045266
var parseTimestamp = function(timestamp) {
	var d = new Date( timestamp * 1000 ), // milliseconds
		yyyy = d.getFullYear(),
		mm = ('0' + (d.getMonth() + 1)).slice(-2),	// Months are zero based. Add leading 0.
		dd = ('0' + d.getDate()).slice(-2),			// Add leading 0.
		hh = d.getHours(),
		h = hh,
		min = ('0' + d.getMinutes()).slice(-2),		// Add leading 0.
		ampm = 'AM',
		timeString;

	if (hh > 12) {
		h = hh - 12;
		ampm = 'PM';
	} else if (hh === 12) {
		h = 12;
		ampm = 'PM';
	} else if (hh == 0) {
		h = 12;
	}

	timeString = yyyy + '-' + mm + '-' + dd + ', ' + h + ':' + min + ' ' + ampm;

	return timeString;
}

var sendChat = function (message, callback) {
	$.getJSON('<?php echo base_url(); ?>api/send_message?message=' + message + '&nickname=' + $('#nickname').val() + '&guid=' + getCookie('user_guid'), function (data){
		callback();
	});
}

var append_chat_data = function (chat_data) {
	chat_data.forEach(function (data) {
		var is_me = data.guid == getCookie('user_guid');

		if(is_me){
			var html = '<li class="right clearfix">';
			html += '	<span class="chat-img pull-right">';
			html += '		<img src="http://placehold.it/50/FA6F57/fff&text=' + data.nickname.slice(0,2) + '" alt="User Avatar" class="img-circle" />';
			html += '	</span>';
			html += '	<div class="chat-body clearfix">';
			html += '		<div class="header">';
			html += '			<small class="text-muted"><span class="glyphicon glyphicon-time"></span>' + parseTimestamp(data.timestamp) + '</small>';
			html += '			<strong class="pull-right primary-font">' + data.nickname + '</strong>';
			html += '		</div>';
			html += '		<p>' + data.message + '</p>';
			html += '	</div>';
			html += '</li>';
		}else{

			var html = '<li class="left clearfix">';
			html += '	<span class="chat-img pull-left">';
			html += '		<img src="http://placehold.it/50/55C1E7/fff&text=' + data.nickname.slice(0,2) + '" alt="User Avatar" class="img-circle" />';
			html += '	</span>';
			html += '	<div class="chat-body clearfix">';
			html += '		<div class="header">';
			html += '			<strong class="primary-font">' + data.nickname + '</strong>';
			html += '			<small class="pull-right text-muted"><span class="glyphicon glyphicon-time"></span>' + parseTimestamp(data.timestamp) + '</small>';

			html += '		</div>';
			html += '		<p>' + data.message + '</p>';
			html += '	</div>';
			html += '</li>';
		}
		$("#received").html( $("#received").html() + html);
	});

	$('#received').animate({ scrollTop: $('#received').height()}, 1000);
}

var update_chats = function () {
	if(typeof(request_timestamp) == 'undefined' || request_timestamp == 0){
		var offset = 60*15; // 15min
		request_timestamp = parseInt( Date.now() / 1000 - offset );
	}
	$.getJSON('<?php echo base_url(); ?>api/get_messages?timestamp=' + request_timestamp, function (data){
		append_chat_data(data);

		var newIndex = data.length-1;
		if(typeof(data[newIndex]) != 'undefined'){
			request_timestamp = data[newIndex].timestamp;
		}
	});
}

$('#submit').click(function (e) {
	e.preventDefault();

	var $field = $('#message');
	var data = $field.val();

	$field.addClass('disabled').attr('disabled', 'disabled');
	sendChat(data, function (){
		$field.val('').removeClass('disabled').removeAttr('disabled');
	});
});

$('#message').keyup(function (e) {
	if (e.which == 13) {
		$('#submit').trigger('click');
	}
});

setInterval(function (){
	update_chats();
}, 1500);

</script>
<!-- Page Wrapper End -->
<?php } ?>
