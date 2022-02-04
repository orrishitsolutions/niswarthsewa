<?php include('include/header.php'); ?>

<main id="content" role="main" class="checkout-page">
	<div id="banner-tops" class="bg-gray-13 bg-md-transparent"
		 style="background-image: url(<?= base_url("assets/frontend/upload/images/bannertop.jpg"); ?>);">
		<div class="container">
			<div class="my-md-0 breadcrumb20">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
						<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="<?= base_url(); ?>">Home</a>
						</li>
						<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a
									href="<?= base_url("profile"); ?>">Profile</a>
						</li>
						<li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Chat
						</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	<div class="reservation000225">
		<section class="luxry pt-5 pb-5" style="padding-top:0px !important">

			<div class="container min-container">

				<div class="row">
					<div class="col-md-12 col-sm-12 col-12">

						<div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
							<h3 class="section-title section-title__full mb-0 pb-2 font-size-22">
								Hello <?= $controller->profile['first_name'] . ' ' . $controller->profile['middle_name'] . ' ' . $controller->profile['last_name']; ?></h3>
							<span><a style="color: #0a1122;" href="<?= base_url("profile"); ?>">Back</a></span>
						</div>
					</div>
				</div>

			</div>
		</section>
		<section class="pb-5">
			<div class="container min-container">

				<div class="divaridkldf">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-12">
							<h3>
								Inbox
							</h3>
						</div>
					</div>
					<div class="row">

						<?php
						if (!empty($chatUsers)) {
						?>
						<div class="people-list" id="people-list">
							<!-- <div class="search">
							   <input type="text" placeholder="search" />
							   <i class="fa fa-search"></i>
							 </div>-->
							<ul class="list">
								<?php
								foreach ($chatUsers as $user) {
									$chatUrl = ($login['user_type'] == 2) ? 'profile/chat/' . bin2hex(base64_encode($user->from_users_id)) . '/' . bin2hex(base64_encode($user->product_id)) : 'profile/chat/' . bin2hex(base64_encode($user->to_users_id)) . '/' . bin2hex(base64_encode($user->product_id));
									?>
									<li class="clearfix" id="<?= $user->id; ?>" style="cursor: pointer;"
										onclick="window.location='<?= base_url($chatUrl); ?>'">
										<img class="imagkids" src="<?= base_url("assets/frontend/img/cloth1.png"); ?>"
											 alt=" "/>
										<div class="about">
											<div class="name"><?= ($login['user_type'] == 2) ? $user->from_name : $user->name; ?></div>
											<div class="status">
												<?= $user->title; ?>
											</div>
										</div>
									</li>
									<?php
								}
								?>

							</ul>
						</div>
						<div class="chat">
							<?php
							if (!empty($messages)) {
								?>
								<div class="chat-header clearfix">
									<img class="imagkids" src="<?= base_url("assets/frontend/img/cloth1.png"); ?>"
										 alt=" "/>

									<div class="chat-about">
										<div class="chat-with"><?= $messages[0]->from_name; ?></div>
										<div class="chat-num-messages"><?= $messages[0]->title; ?></div>
									</div>

								</div>

								<div class="chat-history">
									<ul>
										<?php
										foreach ($messages as $chat) {
											if ($chat->from_users_id === $login['id']) {
												?>
												<li class="clearfix">
													<div class="message-data align-right">
														<span class="message-data-time"><?= $controller->time_elapsed_string($chat->created_at); ?></span>
														&nbsp; &nbsp;
														<span class="message-data-name"><?= $chat->from_name; ?></span> <i
																class="fa fa-circle me"></i>

													</div>
													<div class="message other-message float-right">
														<?= $chat->message; ?>
													</div>
												</li>
												<?php
											} else {
												?>
												<li>
													<div class="message-data">
														<span class="message-data-name"><i
																	class="fa fa-circle online"></i> <?= $chat->from_name; ?></span>
														<span class="message-data-time"><?= $controller->time_elapsed_string($chat->created_at); ?></span>
													</div>
													<div class="message my-message">
														<?= $chat->message; ?>
													</div>
												</li>
												<?php
											}
										}
										?>


									</ul>

								</div>

								<div class="chat-message clearfix">
									<form method="post" action="">
										<input type="hidden"
											   name="<?php echo $this->security->get_csrf_token_name(); ?>"
											   value="<?php echo $this->security->get_csrf_hash(); ?>">
										<textarea name="message" id="message"
												  placeholder="Type your message" rows="3"></textarea>
										<i class="fa fa-file-o"></i><i class="fa fa-file-image-o"></i>
										<input class="button" type="submit" name="submit" value="Send">
									</form>
								</div>
								<?php
							} else {
								?>
								<div style="padding: 30px;">Select a chat to view conversation</div>
								<?php
							}
							?>

						</div>
						<?php
						} else {
							?>
							<div style="padding: 20px;">No messages, yet?</div>
							<?php
						}
						?>

					</div>
				</div>

			</div>
		</section>

	</div>
</main>


<style>


	.people-list {
		width: 30%;
		float: left;
		background: #333;
	}

	.people-list .search {
		padding: 20px;
	}

	.people-list input {
		border-radius: 3px;
		border: none;
		padding: 14px;
		color: white;
		background: #ffffff;
		width: 90%;
		font-size: 14px;
	}

	.people-list .fa-search {
		position: relative;
		left: -25px;
	}

	.people-list ul {
		padding: 20px;
		height: 770px;
	}

	.people-list ul li {
		padding-bottom: 20px;
		list-style: none;
	}

	.people-list img {
		float: left;
	}

	.people-list .about {
		float: left;
		margin-top: 8px;
	}

	.people-list .about {
		padding-left: 8px;
	}

	.people-list .status {
		color: #92959e;
	}

	.chat {
		width: 70%;
		float: left;
		background: #ffbc9f;
		border-top-right-radius: 5px;
		border-bottom-right-radius: 5px;
		color: #434651;
	}

	.chat .chat-header {
		padding: 20px;
		border-bottom: 2px solid white;
	}

	.chat .chat-header img {
		float: left;
	}

	.chat .chat-header .chat-about {
		float: left;
		padding-left: 10px;
		margin-top: 6px;
	}

	.chat .chat-header .chat-with {
		font-weight: bold;
		font-size: 16px;
	}

	.chat .chat-header .chat-num-messages {
		color: #333333;
		font-size: 13px;
		letter-spacing: 0.5px;
	}

	.chat .chat-header .fa-star {
		float: right;
		color: #d8dadf;
		font-size: 20px;
		margin-top: 12px;
	}

	.chat .chat-history {
		padding: 30px 30px 20px;
		border-bottom: 2px solid white;
		overflow-y: scroll;
		height: 488px;
	}

	.chat .chat-history .message-data {
		margin-bottom: 15px;
	}

	.chat .chat-history .message-data-time {
		color: #0090db;
		padding-left: 6px;
		font-size: 14px;
		letter-spacing: 0.5px;
	}

	.chat .chat-history .message {
		color: white;
		padding: 18px 20px;
		line-height: 26px;
		font-size: 16px;
		border-radius: 7px;
		margin-bottom: 30px;
		width: 90%;
		position: relative;
	}

	.chat .chat-history .message:after {
		bottom: 100%;
		left: 7%;
		border: solid transparent;
		content: " ";
		height: 0;
		width: 0;
		position: absolute;
		pointer-events: none;
		border-bottom-color: #00d1a1;
		border-width: 10px;
		margin-left: -10px;
	}

	.chat .chat-history .my-message {
		background: #00d1a1;
	}

	.chat .chat-history .other-message {
		background: #76d0ff;
	}

	.chat .chat-history .other-message:after {
		border-bottom-color: #76d0ff;
		left: 93%;
	}

	.chat .chat-message {
		padding: 30px;
	}

	.chat .chat-message textarea {
		width: 100%;
		border: none;
		padding: 10px 20px;
		font: 14px/22px "Lato", Arial, sans-serif;
		margin-bottom: 10px;
		border-radius: 5px;
		resize: none;
	}

	.chat .chat-message .fa-file-o,
	.chat .chat-message .fa-file-image-o {
		font-size: 16px;
		color: gray;
		cursor: pointer;
	}

	.chat .chat-message .button {
		float: right;
		color: #ffffff;
		font-size: 13px;
		text-transform: capitalize;
		border: none;
		cursor: pointer;
		font-weight: 500;
		background: #f95b07;
		width: 100px;
		border-radius: 50px;
		height: 35px;
	}

	.chat .chat-message .button:hover {
		color: #75b1e8;
	}

	.online,
	.offline,
	.me {
		margin-right: 3px;
		font-size: 10px;
	}

	.online {
		color: #00d1a1;
	}

	.offline {
		color: #e38968;
	}

	.me {
		color: #76d0ff;
	}

	.align-left {
		text-align: left;
	}

	.align-right {
		text-align: right;
	}

	.float-right {
		float: right;
	}

	.clearfix:after {
		visibility: hidden;
		display: block;
		font-size: 0;
		content: " ";
		clear: both;
		height: 0;
	}

	.chat .chat-history li {
		list-style: none;
	}

	.imagkids {
		width: 50px;
		height: 50px;
		border-radius: 50px;
		margin-top: 10px;
		margin-right: 10px;
	}

	.people-list .about .name {
		color: #fff;
	}

	.background_cpskd {
		padding: 60px 0px;
		width: 100%;
	}
</style>


<?php include('include/footer.php'); ?>
