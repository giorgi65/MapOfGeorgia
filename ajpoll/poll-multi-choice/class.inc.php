<?php
//==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>
//
// Ajax Poll Script v3.18 [ GPL ]
// Copyright (c) phpkobo.com ( http://www.phpkobo.com/ )
// Email : admin@phpkobo.com
// ID : APSMX-318
// URL : http://www.phpkobo.com/ajax_poll.php
//
//==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<

class CTClass extends CTClassBase
{
	function setupPoll( $poll ) {

		//-- Poll Title
		$poll->attr( "title", "ვის აძლევთ ხმას?" );

		//-- Poll Options
		$poll->addItem( "ოპოზიცია" );
		$poll->addItem( "მთავრობა" );
		//$poll->addItem( "Fish" );
		//$poll->addItem( "Snake" );

		//-- Text used in polls
		$poll->attr( "msg-vote", "ხმის მიცემა" );
		$poll->attr( "msg-select-one", "აირჩიეთ ერთი მაინც!" );
		$poll->attr( "msg-already-voted", "თქვენ უკვე მიეცით ხმა!" );
		$poll->attr( "msg-view-result", "შედეგების ნახვა" );
		$poll->attr( "msg-thank-you", "მადლობა!" );
		$poll->attr( "msg-return", "უკან" );
		$poll->attr( "msg-total", "სულ" );
		$poll->attr( "msg-reset-block", "IP & Cookie ბლოკის გაწმენდა" );
		$poll->attr( "msg-not-started", "ხმის მიცემა ჯერ არ დაწყილა." );
		$poll->attr( "msg-ended", "ხმის მიცემა დასრულებულია, მადლობა!" );

		//-- Display "Reset IP & Cookie Block" button
		//--	Show: true
		//--	Hide: false
		$poll->attr( "b-reset-block", true );

		//-- Single selection or multiple selection
		//--	single selection: "radio"
		//--	multiple selection: "checkbox"
		$poll->attr( "vote-input", "radio" );

		//-- Specify the time delay on tool tips in milliseconds
		$poll->attr( "tip-box-duration", 2000 );

		//-- Prevent users from voting more than once by IP address
		//--	"true" or "false"
		$poll->attr( "enable-ip-block", true );

		//-- Prevent users from voting more than once by Cookie
		//--	"true" or "false"
		$poll->attr( "enable-cookie-block", true );

		//-- Specifiy the cookie's life span in seconds
		//--	(e.g.)　60*60*24 => One Day
		//--	(e.g.)　60*60*24*365 => One Year
		$poll->attr( "cookie-block-period", 60*60*24*365 );

		//-- Specifiy Start and End Date&Time:
		//-- Enter an empty string ("") if you don't need to specify it.
		//--	(e.g.)　"2010-01-02"
		//--	(e.g.)　"2015-03-01 15:20"
		$poll->attr( "dt-start", "" );
		$poll->attr( "dt-end", "" );

		//-- end
		return true;
	}
}

?>